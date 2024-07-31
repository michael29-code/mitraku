<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mitra extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = true; 

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
        'image_map',
        'address',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getImageCover()
    {
        if ($this->image_cover) {
            return url('storage/mitra-images/' . $this->image_cover);
        }
        return "/images/default_mitra_image.png";
    }

    public function getImageMap()
    {
        if ($this->image_map) {
            return url('storage/mitra-images/' . $this->image_map);
        }
        return "/images/mapLocation.png";
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'advertise_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}


