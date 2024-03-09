<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $table = 'chapter';

    protected $fillable = [
        'chapter', 'status_id', 'category_id', 'created_at', 'updated_at',
    ];

    public function getNameAttribute()
    {
        // Assuming there is a 'name' column in the chapters table
        return $this->chapter;
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
