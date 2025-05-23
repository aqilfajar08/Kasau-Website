<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('category')
                   ->orderBy('created_at', 'desc')
                   ->paginate(10);
        
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        $categories = NewsCategory::all();
        return view('admin.news.create', compact('categories'));
    }    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'news_category_id' => 'required|exists:news_categories,id',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $data['image'] = $request->file('image')->storeAs('news', $fileName, 'public');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('news', $filename, 'public');
            $data['image'] = $path;
        }

        News::create($data);

        return redirect()->route('admin.news.index')
            ->with('success', 'News created successfully');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = NewsCategory::all();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        
        $request->validate([
            'title' => 'required|max:255',
            'news_category_id' => 'required|exists:news_categories,id',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }

            // Store new image
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $data['image'] = $request->file('image')->storeAs('news', $fileName, 'public');
        }

        $news->update($data);

        return redirect()->route('admin.news.index')
                        ->with('success', 'News updated successfully');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Delete associated image
        if ($news->image && Storage::disk('public')->exists($news->image)) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('admin.news.index')
                        ->with('success', 'News deleted successfully');
    }
}
