<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment1 extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'amount', 'razorpay_payment_id'];
}
