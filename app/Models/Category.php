<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $fillable = [
        'category', 'status_id', 'created_at', 'updated_at',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
