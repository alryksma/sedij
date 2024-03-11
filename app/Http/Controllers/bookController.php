<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bookController extends Controller
{
    public function index()
    {
        $bookcari = Book::latest();

        if(request('search')){
            $bookcari->where('judul', 'like', '%' . request('search') . '%');
        }


            return view('buku', [
                'title' => 'perpustakaan',
            'judul_kategori' => 'kategori',
            'category' => Category::all(),
            'siswa' => User::all(),
            'book' => $bookcari->get(),
            // 'bookcari' => $bookcari->get(),
            'active' => 'book',
            // 'imgcat' => Category::all()->firstOrFail()->latest()->take(4)->get(),
        ]);
    }
}
