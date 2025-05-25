<?php

namespace App\Http\Controllers\Kasau;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function index() {
        return view('pages.frontend.thanksPage');
    }

    public function formThanks() {
        return view('pages.frontend.fromThaks');
    }
}
