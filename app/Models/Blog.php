<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','writerId','categoryiId','image','body'];
    
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Category::class,'categoryId');
    }

    public function writer(): BelongsTo
    {
        return $this->belongsTo(User::class,'writerId');
    }

}
