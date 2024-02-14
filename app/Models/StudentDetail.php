<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;
    protected $table = 'student_details';

    protected $fillable = [
        'student_id', 'fullname', 'email', 'phone', 'profession', 'address', 'website', 'github', 'twitter', 'facebook', 'profile',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
