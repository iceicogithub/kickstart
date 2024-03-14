<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;
    protected $table = 'student_details';

    protected $fillable = [
        'student_id', 'fullname','gender','email', 'phone','address', 'country' , 'state', 'city' , 'pincode' ,'college_name','year','branch','area_of_interest','cgpa','profession','website', 'github', 'twitter', 'facebook', 'profile',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
