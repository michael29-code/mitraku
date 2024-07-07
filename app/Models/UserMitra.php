<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMitra extends Model
{
    use HasFactory;
    protected $table = 'user_mitras';
    protected $guarded = [];
    public $timestamps = true;  // Enable timestamps

    protected $casts = [
        'galeri' => 'array',
        'latest_rating_and_certificate' => 'array',
        'awards' => 'array',
    ];
}
