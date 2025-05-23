<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){
        $users = User::query()
        ->when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('pages.users.index', compact('users'));
    }
    
    public function create(){
        return view('pages.users.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' =>'required|max:255',
            'position' =>'required',
            'department' =>'required',
            'email' =>'required|email',
            'password' =>'required',
        ]);

        User::create([
            'name' => $request->name,
            'position' => $request->position,
            'department' => $request->department,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([     
            'name' => 'required',
            'position' => 'required',
            'department' => 'required',
            'email' => 'required|email',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $data = $request->except('password');

        $user->update($data);

        return redirect()->route('admin.user.index')->with('success', 'User updated successfully');
    }

    public function delete($id) {
        $user = User::findOrFail($id);
    }    

    public function destroy(User $user) {
        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'User deleted successfully');
    }

    public function show($id) 
    {
        $profile = User::find($id);
        return view('pages.users.profile', compact('profile'));
    }
}
