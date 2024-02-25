<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\kategori;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function index( kategori $kategori)
    {
        return view('home', [
            'title' => 'Perpustakaan XXX',
            'active' => 'home',
            'buku' => Buku::latest()
                ->filter(request(['search', 'subjek', 'kategori'])),
            'kategori' => $kategori,
        ]);


    }

    public function show(Buku $buku,)
    {
        return view('home', [
            'title' => 'Perpustakaan XXX',
            'active' => 'home',
            'buku' => $buku,


        ]);

    }
}

