<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->sentence(mt_rand(2,8)),
            'penulis' => $this->faker->name(),
            'deskripsis' => $this->faker->paragraph(mt_rand(1,2)),
            'deskripsip' => $this->faker->paragraph(mt_rand(2, 4)),
            'tahun_rilis' => $this->faker->year(),
            'image' => $this->faker->imageUrl(360, 360, 'library', true, 'book', true, 'jpg'),
            'category_id' =>mt_rand(1,4)
        ];
    }
}
