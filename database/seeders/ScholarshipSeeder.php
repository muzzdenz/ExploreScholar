<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scholarship; // Penting: Impor model Scholarship Anda

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat 50 data beasiswa menggunakan ScholarshipFactory
        Scholarship::factory()->count(50)->create();

        // Anda juga bisa menambahkan data spesifik jika perlu:
        // Scholarship::create([
        //     'title' => 'Beasiswa Spesial Untuk Anda',
        //     'country' => 'Indonesia',
        //     'description' => 'Ini adalah beasiswa dengan kriteria unik.',
        //     'degrees' => ['S2'],
        // ]);
    }
}