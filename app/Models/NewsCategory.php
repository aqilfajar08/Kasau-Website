<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable = [
        'name',
    ];

    public function news() {
        return $this->hasMany(News::class, 'news_category_id');
    }
}
