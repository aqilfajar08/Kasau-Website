<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($category_id)
    {
        $category = NewsCategory::find($category_id);

        if (!$category) {
            return redirect()->route('admin.news-category.index') // atur sesuai route kategori kamu
                ->with('error', 'Kategori tidak ditemukan.');
        }

        $news = $category->news; // jika relasi ada
        return view('pages.news-category.news.index', compact('category', 'news'));
    }

    public function create($category_id)
    {
        $category = NewsCategory::find($category_id);

        return view('pages.news-category.news.create', compact('category'));
    }

    public function store(Request $request, $category_id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $category = NewsCategory::find($category_id);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('news', $fileName, 'public');
            $data['image'] = $fileName;
        }

        $data['news_category_id'] = $category->id;

        News::create($data);

        return redirect()->route('admin.new.index', $category_id);
    }

    public function edit($category_id, $news_id)
    {
        $category = NewsCategory::find($category_id);
        $news = News::find($news_id);

        return view('pages.news-category.news.edit', compact('category', 'news'));
    }

    public function update(Request $request, $category_id, $news_id)
    {   
        $category = NewsCategory::find($category_id);

        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required',
        ]);

        $category = NewsCategory::find($category_id);
        $news = News::find($news_id);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $path = public_path('storage/news/' . $news->image);
            unlink($path);
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('news', $fileName, 'public');
            $data['image'] = $fileName;
        }

        $data['news_category_id'] = $category->id;

        $news->update($data);

        return redirect()->route('admin.new.index', $category_id);
    }

    public function destroy($category_id, $news_id)
    {
        $news = News::find($news_id);
        $category = NewsCategory::find($category_id);

        // dd($category_id);

        // Jika news tidak ditemukan
        if (!$news) {
            return redirect()->route('admin.new.index', $category_id)
                ->with('error', 'Berita tidak ditemukan.');
        }

        // Cek apakah news memiliki gambar
        if ($news->image) {
            $path = public_path('storage/news/' . $news->image);

            // Cek apakah file gambar ada sebelum dihapus
            if (file_exists($path)) {
                unlink($path);
            }
        }

        // Hapus data dari database
        $news->delete();

        return redirect()->route('admin.new.index', $category_id)
            ->with('success', 'Berita berhasil dihapus.');
    }
}
