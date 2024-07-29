<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    protected $table = 'advertise';
    protected $guarded = [];
    public $timestamps = false;

    protected $fillable = [
        'title',
        'price',
        // 'subscriptionDate',
        'period',
        'description',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
