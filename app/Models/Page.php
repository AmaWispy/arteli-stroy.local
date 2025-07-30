<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'h1',
        'image',
        'indexing'
    ];

    public function incrementViewsCount() {
        $this->views++;
        return $this->save();
    }
}
