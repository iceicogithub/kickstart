<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class Student extends AuthenticatableUser implements Authenticatable
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'email', 'phone', 'password' , 'gauth_id' , 'gauth_type'
    ];


    public function studentDetail()
    {
        return $this->hasOne(StudentDetail::class);
    }
}
