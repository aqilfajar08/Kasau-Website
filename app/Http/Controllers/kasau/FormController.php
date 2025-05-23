<?php

namespace App\Http\Controllers\kasau;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        return view('pages.frontend.formPage.form');
    }
}
