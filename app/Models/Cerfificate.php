<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Certificate.php

class Certificate extends Model
{
    protected $fillable = [
        'mitra_id', 'pemberiRating', 'tanggalRating', 'rating'
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class);
    }
}

