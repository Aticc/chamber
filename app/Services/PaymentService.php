<?php
// app/Services/PaymentService.php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PaymentService
{
    // Stripe Configuration
    protected $stripeSecretKey;
    protected $stripePublicKey;

    // Paystack Configuration
    protected $paystackSecretKey;
    protected $paystackPublicKey;

    // Flutterwave Configuration
    protected $flutterwaveSecretKey;
    protected $flutterwavePublicKey;

    // PalmPay Configuration
    protected $palmpayApiKey;
    protected $palmpayApiSecret;

    public function __construct()
    {
        $this->stripeSecretKey = config('services.stripe.secret');
        $this->stripePublicKey = config('services.stripe.key');
        
        $this->paystackSecretKey = config('services.paystack.secret');
        $this->paystackPublicKey = config('services.paystack.key');
        
        $this->flutterwaveSecretKey = config('services.flutterwave.secret');
        $this->flutterwavePublicKey = config('services.flutterwave.key');
        
        $this->palmpayApiKey = config('services.palmpay.api_key');
        $this->palmpayApiSecret = config('services.palmpay.api_secret');
    }

    /**
     * STRIPE PAYMENT
     */
    public function initiateStripePayment($transaction, $member)
    {
        \Stripe\Stripe::setApiKey($this->stripeSecretKey);

        try {
            $checkoutSession = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => strtolower($transaction->currency),
                        'product_data' => [
                            'name' => 'ATICC Membership - ' . ucfirst(str_replace('_', ' ', $member->selected_tier)),
                            'description' => 'Annual membership fee',
                        ],
                        'unit_amount' => $transaction->total_amount * 100, // Stripe uses cents
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('membership.payment.callback', ['reference' => $transaction->transaction_ref]),
                'cancel_url' => route('membership.apply'),
                'metadata' => [
                    'transaction_ref' => $transaction->transaction_ref,
                    'member_id' => $member->id,
                ],
            ]);

            return [
                'status' => 'success',
                'redirect_url' => $checkoutSession->url,
                'session_id' => $checkoutSession->id,
            ];
        } catch (\Exception $e) {
            Log::error('Stripe payment initiation failed: ' . $e->getMessage());
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    /**
     * PAYSTACK PAYMENT
     */
    public function initiatePaystackPayment($transaction, $member)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->paystackSecretKey,
                'Content-Type' => 'application/json',
            ])->post('https://api.paystack.co/transaction/initialize', [
                'email' => $member->email,
                'amount' => $transaction->total_amount * 100, // Paystack uses kobo
                'reference' => $transaction->transaction_ref,
                'callback_url' => route('membership.payment.callback'),
                'metadata' => [
                    'transaction_ref' => $transaction->transaction_ref,
                    'member_id' => $member->id,
                    'member_name' => $member->first_name . ' ' . $member->last_name,
                ],
            ]);

            if ($response->successful() && $response->json()['status']) {
                return [
                    'status' => 'success',
                    'redirect_url' => $response->json()['data']['authorization_url'],
                    'reference' => $response->json()['data']['reference'],
                ];
            }

            return ['status' => 'error', 'message' => 'Paystack initialization failed'];
        } catch (\Exception $e) {
            Log::error('Paystack payment initiation failed: ' . $e->getMessage());
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    public function verifyPaystackPayment($reference)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->paystackSecretKey,
            ])->get('https://api.paystack.co/transaction/verify/' . $reference);

            if ($response->successful() && $response->json()['status']) {
                $data = $response->json()['data'];
                return [
                    'status' => 'success',
                    'amount' => $data['amount'] / 100,
                    'currency' => $data['currency'],
                    'reference' => $data['reference'],
                ];
            }

            return ['status' => 'error'];
        } catch (\Exception $e) {
            Log::error('Paystack verification failed: ' . $e->getMessage());
            return ['status' => 'error'];
        }
    }

    /**
     * FLUTTERWAVE PAYMENT
     */
    public function initiateFlutterwavePayment($transaction, $member)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->flutterwaveSecretKey,
                'Content-Type' => 'application/json',
            ])->post('https://api.flutterwave.com/v3/payments', [
                'tx_ref' => $transaction->transaction_ref,
                'amount' => $transaction->total_amount,
                'currency' => $transaction->currency,
                'redirect_url' => route('membership.payment.callback'),
                'customer' => [
                    'email' => $member->email,
                    'name' => $member->first_name . ' ' . $member->last_name,
                ],
                'customizations' => [
                    'title' => 'ATICC Membership',
                    'description' => 'Annual membership fee - ' . ucfirst(str_replace('_', ' ', $member->selected_tier)),
                ],
            ]);

            if ($response->successful() && $response->json()['status'] === 'success') {
                return [
                    'status' => 'success',
                    'redirect_url' => $response->json()['data']['link'],
                    'reference' => $response->json()['data']['tx_ref'],
                ];
            }

            return ['status' => 'error', 'message' => 'Flutterwave initialization failed'];
        } catch (\Exception $e) {
            Log::error('Flutterwave payment initiation failed: ' . $e->getMessage());
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    public function verifyFlutterwavePayment($reference)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->flutterwaveSecretKey,
            ])->get('https://api.flutterwave.com/v3/transactions/' . $reference . '/verify');

            if ($response->successful() && $response->json()['status'] === 'success') {
                $data = $response->json()['data'];
                return [
                    'status' => 'success',
                    'amount' => $data['amount'],
                    'currency' => $data['currency'],
                    'reference' => $data['tx_ref'],
                ];
            }

            return ['status' => 'error'];
        } catch (\Exception $e) {
            Log::error('Flutterwave verification failed: ' . $e->getMessage());
            return ['status' => 'error'];
        }
    }

    /**
     * PALMPAY PAYMENT
     */
    public function initiatePalmPayPayment($transaction, $member)
    {
        try {
            // PalmPay API integration
            $response = Http::withHeaders([
                'X-Api-Key' => $this->palmpayApiKey,
                'X-Api-Secret' => $this->palmpayApiSecret,
                'Content-Type' => 'application/json',
            ])->post('https://api.palmpay.com/v1/checkout/create', [
                'merchant_reference' => $transaction->transaction_ref,
                'amount' => $transaction->total_amount,
                'currency' => $transaction->currency,
                'customer_email' => $member->email,
                'customer_name' => $member->first_name . ' ' . $member->last_name,
                'customer_phone' => $member->phone,
                'redirect_url' => route('membership.payment.callback'),
                'webhook_url' => route('membership.payment.webhook'),
            ]);

            if ($response->successful() && $response->json()['code'] === 'SUCCESS') {
                return [
                    'status' => 'success',
                    'redirect_url' => $response->json()['data']['checkout_url'],
                    'reference' => $response->json()['data']['reference'],
                ];
            }

            return ['status' => 'error', 'message' => 'PalmPay initialization failed'];
        } catch (\Exception $e) {
            Log::error('PalmPay payment initiation failed: ' . $e->getMessage());
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    /**
     * VERIFY PAYMENT (Generic)
     */
    public function verifyPayment($method, $reference)
    {
        switch ($method) {
            case 'paystack':
                return $this->verifyPaystackPayment($reference);
            case 'flutterwave':
                return $this->verifyFlutterwavePayment($reference);
            case 'stripe':
            case 'palmpay':
                // Stripe and PalmPay verification handled via webhook
                return ['status' => 'pending'];
            default:
                return ['status' => 'error'];
        }
    }

    /**
     * VERIFY WEBHOOK SIGNATURE
     */
    public function verifyWebhookSignature($payload, $signature)
    {
        // Implement signature verification based on provider
        // This is a placeholder - implement based on your payment provider
        return true;
    }
}