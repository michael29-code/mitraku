<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengajuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'kategori',
        'contact_number',
        'mitra_details',
        'start_time',
        'duration',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'id');
    }
}
