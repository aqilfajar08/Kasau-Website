<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\form;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::latest()->get();

        return view('pages.form.index', compact('forms'));
    }

    public function show($form_id) 
    {
        $form = Form::find($form_id);
        return view('pages.form.show', compact('form'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Form::create([
            'user_id' => Auth::user()->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Formulir berhasil dikirim!');
    }
}
