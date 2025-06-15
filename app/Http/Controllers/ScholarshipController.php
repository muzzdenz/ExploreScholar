<?php

namespace App\Http\Controllers;

use App\Models\Scholarship; // <<< PENTING: Pastikan baris ini ada (dan ada titik koma)
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the scholarships with search and filter functionality.
     */
    public function index(Request $request)
    {
        // Ambil parameter pencarian 'q' dan filter 'degree' dari URL
        $query = $request->input('q');
        $degree = $request->input('degree');

        // >>> MULAI QUERY DARI DATABASE MENGGUNAKAN MODEL SCHOLARSHIP <<<
        // Ini akan mengambil data dari tabel 'scholarships' di database Anda
        $scholarships = Scholarship::query();

        // Logika filtering: Hanya diterapkan jika ada input dari user
        if ($query) {
            // Jika ada query pencarian, cari di kolom title, description, atau country
            $scholarships->where(function($q) use ($query) {
                $q->where('title', 'like', '%' . $query . '%')
                  ->orWhere('description', 'like', '%' . $query . '%')
                  ->orWhere('country', 'like', '%' . $query . '%');
            });
        }

        if ($degree) {
            // Jika ada filter jenjang, cari di kolom JSON 'degrees'
            // Pastikan kolom 'degrees' di database Anda bertipe JSON
            $scholarships->whereJsonContains('degrees', $degree);
        }

        // Jalankan query ke database dan ambil hasilnya
        // Mengurutkan beasiswa berdasarkan judul secara ascending (A-Z)
        $scholarships = $scholarships->orderBy('title', 'asc')->get();

        // dd($scholarships); // Anda bisa aktifkan baris ini sementara untuk debugging

        // Kirim data beasiswa hasil query dan parameter filter ke view
        return view('scholarship', [
            'scholarships' => $scholarships,
            'query' => $query,
            'degree' => $degree,
        ]);
    }
    public function show(string $id)
    {
        // Cari beasiswa berdasarkan ID
        // findOrFail akan otomatis menampilkan 404 jika tidak ditemukan
        $scholarship = Scholarship::findOrFail($id);

        // Kirim data beasiswa tunggal ke view detail
        return view('scholarship_detail', [
            'scholarship' => $scholarship,
        ]);
    }
}