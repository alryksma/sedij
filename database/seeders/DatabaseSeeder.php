<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\SubjekBuku as ControllersSubjekBuku;
use App\Models\Book;
use App\Models\Buku;
use App\Models\Category;
use App\Models\kategori;
use App\Models\subjekBuku;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            Book::factory(20)->create();
            Category::create([
                'nama' => 'ipa',
                'slug' => 'IPA',
                'deskripsi' => 'buku buku maper ilmu pengetahuan alam'
            ]);

            Category::create([
                'nama' => 'ips',
                'slug' => 'IPS',
                'deskripsi' => 'buku buku maper ilmu pengetahuan sosial'
            ]);

            Category::create([
                'nama' => 'mtk',
                'slug' => 'MTK',
                'deskripsi' => 'buku buku maper ilmu pengetahuan matematika'
            ]);

            Category::create([
                'nama' => 'bahasa',
                'slug' => 'BAHASA',
                'deskripsi' => 'buku buku maper ilmu pengetahuan bahasa'
            ]);

            User::create([
                'nama' => 'alfito jaunda',
                'username' => '5220411231',
                'password' => 'password'
            ]);

            User::create([
                'nama' => 'akbar sahar pardomuan',
                'username' => '5220411232',
                'password' => 'password'
            ]);

            User::create([
                'nama' => 'ali ramadhan',
                'username' => '5220411233',
                'password' => 'password'
            ]);

    }

}
