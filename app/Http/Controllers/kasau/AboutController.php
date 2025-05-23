<?php

namespace App\Http\Controllers\kasau;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return view('pages.frontend.about.about');
    }
}
