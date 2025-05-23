<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{   
    // untuk admin dashboard
    public function index()
    {
        $ratings = Rating::with('user')->latest()->paginate(10);
        $averageRating = Rating::avg('rating');

        return view('pages.rating.index', compact('ratings', 'averageRating'));
    }

    // untuk user 
    public function store(Request $request)
    {
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'nullable|string|max:1000',
    ]);

    Rating::create([
        'user_id' => Auth::user()->id,
        'rating' => $request->rating,
        'review' => $request->review,
    ]);

    return redirect()->back()->with('success', 'Terima kasih atas feedback Anda!');
    }
}
