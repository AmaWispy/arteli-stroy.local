<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'h1',
        'image',
        'image_preview',
        'category_id',
        'slug',
        'title',
        'description',
        'short_title',
        'text_title',
        'text',
        'text_preview',
        'is_indexed',
        'is_published',
        'tiles',
        'prices',
        'price_table',
        'faq',
        'author_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function incrementViewsCount()
    {
        $this->views++;
        return $this->save();
    }
}
