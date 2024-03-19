<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment_table';

    protected $fillable = [
        'payment_id', 'payment_name','quantity' , 'amount' , 'currency' , 'customer_name' , 'customer_email' , 'payment_status' , 'payment_method'
    ];
}
