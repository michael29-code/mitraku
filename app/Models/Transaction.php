<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'advertise_id',
        'gross_amount',
        'snap_token',
        'starts_at',
        'ends_at',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function advertise()
    {
        return $this->belongsTo(Advertisement::class, 'advertise_id');
    }
    public function isExpired()
    {
        return Carbon::now()->greaterThan($this->ends_at);
    }
}
