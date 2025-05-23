<?php

namespace App\Http\Controllers\kasau;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = \App\Models\News::latest()->take(3)->get();
        return view('pages.frontend.index', compact('latestNews'));
    }
}
