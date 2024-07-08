<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mitra extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = true;  // Enable timestamps

    // protected $casts = [
    //     'galeri' => 'array',
    //     'latest_rating_and_certificate' => 'array',
    //     'awards' => 'array',
    // ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}


