<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $fillable = ['namaMitra', 'lokasiMitra', 'kategoriMitra', /* other fields */];    
    protected $table = 'mitras';
    protected $guarded = [];
    public $timestamps = false;
}


