<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->string('image');

            'judul_buku' => $this->faker->sentence(mt_rand(2, 8)),
            'penulis' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'no_buku' => $this->faker->numberBetween(10000, 99999),
            'excerpt' => $this->faker->paragraph(),
            'sinopsis_buku' => $this->faker->paragraph(mt_rand(5, 10)),
            'image' => $this->faker->imageUrl(640, 480, 'unsplash'),
            'kategori_buku_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 2),
        ];
    }
}
