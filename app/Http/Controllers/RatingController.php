<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\User;
use App\Notifications\RatingSubmitted;
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
        // dd($request->all());
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:1000',
        ]);

        $rating = Rating::create([
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        $admins = User::role('admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new RatingSubmitted($rating));
        }

        return redirect()->route('kasau-thanks');
    }

        public function delete($rating_id)
    {
        $rating = Rating::find($rating_id);
        return view('pages.rating.index', compact('rating'));
    }

    public function destroy(Rating $rating)
    {
        $rating->delete();

        return redirect()->route('rating')->with('success', 'Data berhasil dihapus');
    }
}