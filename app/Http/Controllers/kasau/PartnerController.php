<?php

namespace App\Http\Controllers\kasau;

use App\Http\Controllers\Controller;
use App\Models\CompanyPartner;

class PartnerController extends Controller
{
    public function partner()
    {
        $companies = CompanyPartner::orderBy('id', 'desc')->get();
        return view('pages.frontend.route.partner', compact('companies'));
    }
}
