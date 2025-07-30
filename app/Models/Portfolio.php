<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'title',
        'description',
        'short_title',
        'h1',
        'thumbnail',
        'img_big',
        'content',
        'category_id',
        'author_id',
        'indexed',
        'published'
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
