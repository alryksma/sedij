<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'perpustakaan',
            'judul_kategori' => 'kategori',
            'category' => Category::all(),
            'siswa' => User::all(),
            'buku' => Book::all(),
            'imgcat' => Category::all()->firstOrFail()->latest()->take(4)->get(),
            'active' => 'home',
        ]);
    }

    public function show(Category $category)
    {
        return view('home', [
            'title' => 'perpustakaan',
            'judul_kategori' => 'kategori',
            'category' => $category
        ]);
    }
}

// @if ($post->image)
// <div style="max-height: 400px; overflow:hidden">
//     <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
// </div>
// @else
// <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
//     alt="{{ $post->category->name }}" class="img-fluid">
// @endif
