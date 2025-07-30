<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'h1',
        'image',
        'img_big',
        'text',
        'category_id',
        'link',
        'title',
        'description',
        'short_title',
        'content',
        'indexing',
        'publicated'
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(ArticleCategory::class);
    }

    public function author(): BelongsTo {
      return $this->belongsTo(Author::class);
    }

    public function incrementViewsCount() {
        $this->views++;
        return $this->save();
    }
}
