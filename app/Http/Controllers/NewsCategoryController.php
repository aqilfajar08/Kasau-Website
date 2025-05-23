<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index() {
        $categories = NewsCategory::latest()->get();

        return view('pages.news-category.index', compact('categories'));
    }

    public function create() {
        return view('pages.news-category.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        NewsCategory::create($request->all());

        return redirect()->route('admin.news-category.index');
    }

    public function edit($category_id) {
        $category = NewsCategory::find($category_id);

        return view('pages.news-category.edit', compact('category'));
    }

    public function update(Request $request, $category_id) {
        $request->validate([
            'name' => 'required',
        ]);

        $category = NewsCategory::find($category_id);

        $category->update($request->all());

        return redirect()->route('admin.news-category.index');
    }

    public function destroy($category_id) {
        $category = NewsCategory::find($category_id);

        $category->delete();

        return redirect()->route('admin.news-category.index');
    }
}
