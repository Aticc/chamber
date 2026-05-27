<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\MembershipController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemberAuthController;


// Contact Routes
Route::post('/contact/send', [ContactController::class, 'sendContact'])->name('contact.send');
Route::post('/contact/opportunity', [ContactController::class, 'sendOpportunity'])->name('contact.opportunity');

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Login Routes (only for admin and existing users)
// Route::middleware('guest')->group(function () {
//     Route::get('/member/login', [LoginController::class, 'showLoginForm'])->name('login');
//     Route::post('/login', [LoginController::class, 'login']);
// });

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Regular User Dashboard (after login - for approved members)
Route::get('/dashboard', function () {
    return view('users.dashboard');
})->middleware('auth')->name('dashboard');

// Access Plans Page
Route::get('/access-plans', [MembershipController::class, 'plans'])->name('access.plans');

// Membership Continue Page - redirect to apply with tier params
Route::get('/membership/continue', [MembershipController::class, 'apply'])->name('membership.continue');

// Membership Application Routes
Route::prefix('membership')->name('membership.')->group(function () {
    Route::get('/apply', [MembershipController::class, 'apply'])->name('apply');
    Route::post('/submit', [MembershipController::class, 'submit'])->name('submit');
    Route::get('/thankyou/{id}', [MembershipController::class, 'thankyou'])->name('thankyou');
});

// Temporary debug route - remove after testing
Route::get('/debug-routes', function() {
    $routes = [];
    foreach (Route::getRoutes() as $route) {
        if (str_contains($route->uri(), 'membership')) {
            $routes[] = $route->uri() . ' - ' . $route->methods()[0];
        }
    }
    return $routes;
});

// Contact and other static pages
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/leadership', function () {
    return view('leadership');
})->name('leadership');

Route::get('/verification', function () {
    return view('verification');
})->name('verification');

Route::get('/events', [App\Http\Controllers\EventController::class, 'publicEvents'])->name('event');


Route::get('/membership', function () {
    return view('access');
})->name('access');

Route::get('/about-us', function () {
    return view('about');
})->name('about');


// Member Portal Routes
Route::prefix('member')->name('member.')->group(function () {
    Route::get('/login', [MemberAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [MemberAuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [MemberAuthController::class, 'logout'])->name('logout');
    
    // Protected Member Routes
    Route::middleware(['member.auth'])->group(function () {
        Route::get('/dashboard', [MemberAuthController::class, 'dashboard'])->name('dashboard');
        
        // Events page
        Route::get('/events', [MemberAuthController::class, 'events'])->name('events');

        // Tier-specific dashboards
        Route::get('/tier1', [MemberAuthController::class, 'tier1Dashboard'])->name('tier1');
        Route::get('/tier2', [MemberAuthController::class, 'tier2Dashboard'])->name('tier2');
        Route::get('/tier3', [MemberAuthController::class, 'tier3Dashboard'])->name('tier3');
        
        Route::get('/profile', [MemberAuthController::class, 'profile'])->name('profile');
        Route::put('/profile', [MemberAuthController::class, 'updateProfile'])->name('profile.update');
    });
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Protected Admin Routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/login-as-member/{id}', [DashboardController::class, 'loginAsMember'])->name('members.login-as');
        Route::get('/dashboard/stop-impersonating', [DashboardController::class, 'stopImpersonating'])->name('stop-impersonating');
        
            // Event Management
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::get('/events/{id}/registrations', [EventController::class, 'registrations'])->name('events.registrations');
    Route::put('/events/registrations/{id}/status', [EventController::class, 'updateRegistrationStatus'])->name('events.registration-status');
    Route::get('/events/{id}/download-agenda', [EventController::class, 'downloadAgenda'])->name('events.download-agenda');

        // Member management
        Route::get('/members', [MemberController::class, 'index'])->name('members.index');
        Route::get('/members/{member}', [MemberController::class, 'show'])->name('members.show');
        Route::put('/members/{member}/status', [MemberController::class, 'updateStatus'])->name('members.status');
        Route::delete('/members/{member}', [MemberController::class, 'destroy'])->name('members.destroy');
        Route::get('/members/{id}/download/{type}', [MemberController::class, 'download'])->name('members.download');
        
        // Membership Application Management
        Route::get('/membership-applications', [MembershipController::class, 'adminIndex'])->name('membership.applications');
        Route::get('/membership-application/{id}', [MembershipController::class, 'adminShow'])->name('membership.show');
        Route::post('/membership-application/{id}/status', [MembershipController::class, 'adminUpdateStatus'])->name('membership.update-status');
        Route::get('/membership-application/{id}/download/{field}', [MembershipController::class, 'adminDownloadFile'])->name('membership.download');
    });
});