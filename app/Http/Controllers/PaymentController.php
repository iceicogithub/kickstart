<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
   public function index(){
    return view('layouts.payment');
   }

   public function payment(Request $request){
        if(!empty($request->razorpay_payment_id)){
            $api= new Api(env('rzr_key'),env('rzr_secret'));
            try{
                $payment = $api->payment->fetch($request->razorpay_payment_id);
                $response = $payment->capture(['amount' => $payment['amount'] ]);
                dd($response);
            }
            catch(\Exception $ex){
                return $ex->getMessage();
            }
        }
   }

}
