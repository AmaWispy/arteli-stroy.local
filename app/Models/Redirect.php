<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\RedirectService;

class Redirect extends Model
{
  use HasFactory;

  protected $fillable = [
    'from',
    'to'
  ];

  protected static function booted()
  {
    static::saved(fn() => RedirectService::clearCache());
    static::deleted(fn() => RedirectService::clearCache());
  }
}
