<?php

namespace App\Http\Controllers;

use App\Models\Scholarship; // <<< TAMBAHKAN TITIK KOMA DI SINI
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        $degree = $request->input('degree');

        // Ini sudah benar: memulai query database
        $scholarships = Scholarship::query();

        // >>> PERBAIKI BAGIAN FILTERING INI <<<
        // Gunakan metode 'where()' dari Eloquent untuk memfilter data dari database
        if ($query) {
            $scholarships->where(function($q) use ($query) {
                $q->where('title', 'like', '%' . $query . '%')
                  ->orWhere('description', 'like', '%' . $query . '%')
                  ->orWhere('country', 'like', '%' . $query . '%');
            });
        }

        if ($degree) {
            // Gunakan whereJsonContains untuk kolom JSON
            $scholarships->whereJsonContains('degrees', $degree);
        }

        // >>> TAMBAHKAN .get() SEBELUM dd() atau return view() <<<
        // Ini akan menjalankan query ke database dan mengambil hasilnya
        $scholarships = $scholarships->orderBy('title', 'asc')->get(); // Urutkan dan ambil semua hasil

        // dd($scholarships); // Sekarang dd() akan menampilkan hasil dari database (50 data)

        return view('scholarship', [
            'scholarships' => $scholarships,
            'query' => $query,
            'degree' => $degree,
        ]);
    }
}