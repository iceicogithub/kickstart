<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Payment1;

class PaymentController extends Controller
{
    public function initiatePayment(Request $request)
    {   
        
        // Validate form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        // Initialize Razorpay API
        $keyId = 'rzp_test_ci8sxj5IUpXRv1';
        $keySecret = 'LWdNlyPjctgEHhDrUDnVy7cD';
        $api = new Api($keyId, $keySecret);

        // Create order
        $order = $api->order->create([
            'amount' => $request->amount * 100, // Amount in paise
            'currency' => 'INR',
            'payment_capture' => 1,
        ]);

        // Store payment details in database
        Payment1::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'amount' => $request->amount,
            'razorpay_payment_id' => $order->id,
        ]);

        return response()->json($order);
    }
}

