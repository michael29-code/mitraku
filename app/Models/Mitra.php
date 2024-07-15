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

    protected $fillable = [
        'mitraName',
        'mitraOverview',
        'mitraYear',
        'mitraWebsite',
        'mitraCategory',
        'image_cover',
        'contactName',
        'contactEmail',
        'contactPhoneNumber',
        'mitra_details',
        'galeri',
        'latest_rating_and_Certificate',
        'awards',
        'image_map',
        'address',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}


