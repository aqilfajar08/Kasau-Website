<?php

namespace App\Http\Controllers\kasau;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCompController extends Controller
{
    public function SubCompany() {
        return view('pages.frontend.subCompany.firstSubComp');
    }

    public function SecondSubCompany() {
        return view('pages.frontend.subCompany.secondSubComp');
    }

    public function ThirdSubCompany() {
        return view('pages.frontend.subCompany.thirdSubComp');
    }
}
