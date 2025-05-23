<?php

namespace App\Http\Controllers;

use App\Models\CompanyPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyPartnerController extends Controller
{
    public function index(Request $request)
    {
        $companies = CompanyPartner::query()
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);;
        return view('pages.company-partner.index', compact('companies'));
    }

    public function create()
    {
        return view('pages.company-partner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('companies', $fileName, 'public');
            $data['image'] = $fileName;
        }


        CompanyPartner::create($data);

        return redirect()->route('admin.company_partner.index');
    }

    public function edit($id)
    {
        $company = CompanyPartner::find($id);
        return view('pages.company-partner.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $company = CompanyPartner::find($id);


        if ($request->hasFile('image')) {
            $path = public_path('storage/companies/' . $company->image);
            unlink($path);
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('companies', $fileName, 'public');
            $company->image = $fileName;
        }

        $company->name = $request->name;
        $company->save();

        return redirect()->route('admin.company_partner.index');
    }

    public function destroy($id) {
        $company = CompanyPartner::find($id);
        $path = public_path('storage/companies/' . $company->image);
        unlink($path);
        $company->delete();
        return redirect()->route('admin.company_partner.index');
    }
}
