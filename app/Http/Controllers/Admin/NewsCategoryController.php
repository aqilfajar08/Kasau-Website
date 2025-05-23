<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $categories = NewsCategory::withCount('news')->latest()->paginate(10);
        return view('admin.news-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.news-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:news_categories',
        ]);

        NewsCategory::create($request->all());

        return redirect()->route('admin.news-categories.index')
            ->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $category = NewsCategory::findOrFail($id);
        return view('admin.news-categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = NewsCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:news_categories,name,' . $id,
        ]);

        $category->update($request->all());

        return redirect()->route('admin.news-categories.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = NewsCategory::findOrFail($id);
        
        // Optional: Check if category has news before deleting
        if ($category->news()->count() > 0) {
            return redirect()->route('admin.news-categories.index')
                ->with('error', 'Cannot delete category with existing news articles');
        }

        $category->delete();

        return redirect()->route('admin.news-categories.index')
            ->with('success', 'Category deleted successfully');
    }
}
