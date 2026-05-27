<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\MemberAuthMiddleware;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'member.auth' => MemberAuthMiddleware::class,
            'admin' => AdminMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Handle 404 Not Found
        $exceptions->render(function (Throwable $e, Request $request) {
            if ($e instanceof NotFoundHttpException || $e instanceof ModelNotFoundException) {
                return response()->view('errors.error', [
                    'code' => 404,
                    'title' => 'Page Not Found',
                    'message' => 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.'
                ], 404);
            }
            
            // Handle 403 Forbidden
            if ($e instanceof AccessDeniedHttpException || 
                $e instanceof AuthorizationException || 
                ($e instanceof HttpException && $e->getStatusCode() === 403)) {
                return response()->view('errors.error', [
                    'code' => 403,
                    'title' => 'Access Forbidden',
                    'message' => 'You do not have permission to access this page. Please contact your administrator if you believe this is an error.'
                ], 403);
            }
            
            // Handle 401 Unauthorized
            if ($e instanceof AuthenticationException) {
                return response()->view('errors.error', [
                    'code' => 401,
                    'title' => 'Unauthorized Access',
                    'message' => 'You need to be logged in to access this page. Please log in and try again.'
                ], 401);
            }
            
            // Handle 419 Page Expired
            if ($e instanceof TokenMismatchException) {
                return response()->view('errors.error', [
                    'code' => 419,
                    'title' => 'Page Expired',
                    'message' => 'Your session has expired. Please refresh the page and try again.'
                ], 419);
            }
            
            // Handle 429 Too Many Requests
            if ($e instanceof HttpException && $e->getStatusCode() === 429) {
                return response()->view('errors.error', [
                    'code' => 429,
                    'title' => 'Too Many Requests',
                    'message' => 'You have made too many requests. Please wait a moment before trying again.'
                ], 429);
            }
            
            // Handle 500 Internal Server Error
            if ($e instanceof HttpException && $e->getStatusCode() === 500) {
                return response()->view('errors.error', [
                    'code' => 500,
                    'title' => 'Server Error',
                    'message' => 'Something went wrong on our end. Please try again later or contact support if the issue persists.'
                ], 500);
            }
            
            // Handle 503 Service Unavailable
            if ($e instanceof HttpException && $e->getStatusCode() === 503) {
                return response()->view('errors.error', [
                    'code' => 503,
                    'title' => 'Service Unavailable',
                    'message' => 'Our server is temporarily unable to handle your request. Please try again later.'
                ], 503);
            }
            
            // Handle 400 Bad Request
            if ($e instanceof HttpException && $e->getStatusCode() === 400) {
                return response()->view('errors.error', [
                    'code' => 400,
                    'title' => 'Bad Request',
                    'message' => 'The server could not understand the request due to invalid syntax.'
                ], 400);
            }
            
            // Handle 405 Method Not Allowed
            if ($e instanceof HttpException && $e->getStatusCode() === 405) {
                return response()->view('errors.error', [
                    'code' => 405,
                    'title' => 'Method Not Allowed',
                    'message' => 'The HTTP method used is not supported for this endpoint.'
                ], 405);
            }
            
            // Generic fallback for production
            if (!config('app.debug')) {
                return response()->view('errors.error', [
                    'code' => 500,
                    'title' => 'Server Error',
                    'message' => 'Something went wrong. Please try again later.'
                ], 500);
            }
            
            return null;
        });
    })->create();