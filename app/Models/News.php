<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'news_category_id',
        'title',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'news_category_id');
    }
    
    // Alias for backward compatibility
    public function category_news()
    {
        return $this->category();
    }
}
