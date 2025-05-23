<?php

namespace App\Http\Controllers\kasau;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
public function index()
{
    // All news (for paginasi)
    $allNews = News::with('category')
        ->orderBy('created_at', 'desc')
        ->paginate(9);

    // Sidebar kategori (jika digunakan)
    $categories = NewsCategory::withCount('news')
        ->orderBy('news_count', 'desc')
        ->get();

    // Breaking news 6 terbaru
    $latestNews = News::latest()->take(6)->get();

    return view('pages.frontend.newsPage.news', compact('allNews', 'categories', 'latestNews'));
}

}
