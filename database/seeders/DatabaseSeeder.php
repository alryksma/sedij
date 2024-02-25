<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\SubjekBuku as ControllersSubjekBuku;
use App\Models\Buku;
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

        User::factory(3)->create();

        kategori::create([
            'nama' => 'MIPA',
            'slug' => 'MIPA',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Adipisci, repellendus?',

            'keterangan' => 'Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Nemo velit possimus aliquam quae
            praesentium, animi maxime accusamus. Ipsam, corrupti iure
            odio tenetur magni fuga laudantium, labore quo mollitia
            perspiciatis nemo.',
        ]);

        kategori::create([
            'nama' => 'IPS',
            'slug' => 'IPS',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Adipisci, repellendus?',

            'keterangan' => 'Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Nemo velit possimus aliquam quae
            praesentium, animi maxime accusamus. Ipsam, corrupti iure
            odio tenetur magni fuga laudantium, labore quo mollitia
            perspiciatis nemo.',
        ]);
        kategori::create([
            'nama' => 'Novel',
            'slug' => 'novel',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Adipisci, repellendus?',

            'keterangan' => 'Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Nemo velit possimus aliquam quae
            praesentium, animi maxime accusamus. Ipsam, corrupti iure
            odio tenetur magni fuga laudantium, labore quo mollitia
            perspiciatis nemo.',
        ]);

        Buku::factory(20)->create();
    }
}
