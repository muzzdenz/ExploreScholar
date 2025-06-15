<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Scholarship;

class ScholarshipFactory extends Factory
{
    protected $model = Scholarship::class;

    public function definition(): array
    {
        $countries = ['Indonesia', 'USA', 'UK', 'Australia', 'Canada', 'Germany', 'Japan', 'South Korea', 'China', 'France'];
        $allDegrees = ['S1', 'S2', 'S3', 'D3', 'SMA'];

        $randomDegrees = $this->faker->randomElements($allDegrees, $this->faker->numberBetween(1, count($allDegrees)));

        return [
            'title' => 'Beasiswa ' . $this->faker->unique()->sentence(rand(3, 6), true),
            'country' => $this->faker->randomElement($countries),
            'description' => $this->faker->paragraph(rand(3, 7)),
            'image_url' => 'https://picsum.photos/seed/' . $this->faker->unique()->word() . '/400/200',
            'degrees' => $randomDegrees,
            'official_website_url' => $this->faker->url(), // <<< Tambahkan ini: Menghasilkan URL dummy
        ];
    }
}