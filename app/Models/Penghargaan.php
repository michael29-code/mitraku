<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    protected $fillable = [
        'mitra_id', 'pemberiAward', 'tahunAward', 'deskripsiAward'
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class);
    }
}
