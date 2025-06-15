@extends('layouts.app')

@section('title', 'Info Beasiswa Terbaru')
@section('nav_scholarship', 'font-semibold text-gray-900')

@section('styles')
<style>
    /* Anda bisa meninjau kembali CSS ini.
       Jika sudah tidak digunakan atau bisa diganti dengan Tailwind, lebih baik dihapus.
       Misalnya, .card dan .card-content sudah ditangani dengan Tailwind di HTML. */
    .hero-scholar {
        background: #6a6a78;
        padding: 60px 0 40px 0;
        text-align: center;
        color: white;
    }
    .hero-title {
        font-size: 2.5rem;
        font-weight: bold;
        background: linear-gradient(90deg, #6a11cb, #e91e63);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        margin-bottom: 24px;
    }
    .hero-img {
        margin: 0 auto 24px auto;
        width: 100px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .search-bar {
        max-width: 700px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        background: white;
        border-radius: 16px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        padding: 8px 16px;
    }
    .search-bar input {
        border: none;
        outline: none;
        flex: 1;
        padding: 16px 8px;
        font-size: 1rem;
        border-radius: 8px;
    }
    .search-bar .search-btn {
        background: none;
        border: none;
        font-size: 1.5rem;
        color: #6a11cb;
        margin-left: 8px;
        cursor: pointer;
    }
    .search-bar .filter-btn {
        background: linear-gradient(90deg, #00d2ff, #3a7bd5);
        border: none;
        color: white;
        border-radius: 8px;
        padding: 8px 12px;
        margin-left: 8px;
        cursor: pointer;
        font-size: 1.2rem;
    }
    .section-title {
        margin: 40px 0 24px 0;
        font-size: 2rem;
        font-weight: bold;
        background: linear-gradient(90deg, #6a11cb, #e91e63);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }
    .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 24px;
        padding-bottom: 40px;
    }
    /* .card styling sudah dipindahkan ke kelas Tailwind di HTML */
    /* .card-img styling sudah dipindahkan ke kelas Tailwind di HTML */
    /* .card-content styling sudah dipindahkan ke kelas Tailwind di HTML */
    .card .title {
        font-weight: bold;
        font-size: 1.1rem;
        margin-bottom: 2px;
    }
    .card .subtitle {
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 8px;
    }
    .card .desc {
        font-size: 0.95rem;
        color: #444;
        margin-bottom: 10px;
    }
    .tags {
        margin: 8px 0 12px 0;
    }
    .tag {
        display: inline-block;
        background: #eee;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        margin: 2px 2px 2px 0;
    }
    /* Kelas .button sudah tidak dipakai */
</style>
@endsection

@section('content')
    {{-- Hero Section --}}
    <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 py-16 rounded-2xl shadow-lg mb-12">
        <div class="max-w-3xl mx-auto text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 animate-fade-in-down">
                Temukan <span class="text-yellow-300">Beasiswa Impianmu</span> di Sini!
            </h1>
            <p class="text-lg mb-8 opacity-90">Akses ratusan peluang beasiswa dari seluruh dunia, gratis dan mudah!</p>
            <form class="flex justify-center max-w-xl mx-auto" method="GET" action="{{ route('scholarship.index') }}">
                <input
                    type="text"
                    name="q"
                    value="{{ request('q') }}"
                    placeholder="Cari beasiswa..."
                    class="flex-1 px-6 py-3 rounded-l-full focus:outline-none focus:ring-2 focus:ring-yellow-300 text-gray-700"
                />
                <select
                    name="degree"
                    class="bg-white border-l border-gray-300 px-4 py-3 text-gray-700"
                >
                    <option value="">Semua Jenjang</option>
                    <option value="S1" {{ request('degree') === 'S1' ? 'selected' : '' }}>S1</option>
                    <option value="S2" {{ request('degree') === 'S2' ? 'selected' : '' }}>S2</option>
                    <option value="S3" {{ request('degree') === 'S3' ? 'selected' : '' }}>S3</option>
                </select>
                <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 px-6 py-3 rounded-r-full text-white font-bold transition">
                    <i class="fas fa-search"></i>
                </button>
            </form>

        </div>
    </div>


    {{-- Scholarship Cards --}}

    <div class="max-w-7xl mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold mb-6 text-left">
            <span class="text-pink-600">Info</span> <span class="text-indigo-600">Beasiswa Terbaru</span>
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @forelse($scholarships as $scholarship)
            {{-- AWAL: BUNGKUS SELURUH KONTEN CARD DENGAN TAG A --}}
            <a href="{{ route('scholarship.show', $scholarship->id) }}"
               class="bg-white rounded-2xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300 border border-transparent hover:border-yellow-400 group relative
                      flex flex-col cursor-pointer" {{-- Tambahkan kelas flex-col dan cursor-pointer --}}
            >
                {{-- Badge Baru: Gunakan ->id karena ini objek model --}}
                @if(isset($scholarship->id) && $scholarship->id <= 5)
                    <span class="absolute top-4 right-4 bg-yellow-400 text-white text-xs font-bold px-3 py-1 rounded-full shadow z-10">Baru</span>
                @endif

                {{-- Bagian Gambar --}}
                <div class="bg-gradient-to-b from-cyan-100 to-white h-32 flex items-center justify-center rounded-t-2xl overflow-hidden">
                    @if(isset($scholarship->image_url) && !empty($scholarship->image_url))
                        <img src="{{ $scholarship->image_url }}" alt="{{ $scholarship->title ?? 'Gambar Beasiswa' }}" class="w-full h-full object-cover">
                    @else
                        {{-- Fallback jika tidak ada gambar atau gambar kosong --}}
                        <svg width="48" height="48" fill="none" stroke="#bdbdbd" stroke-width="2"><circle cx="24" cy="24" r="22"/></svg>
                    @endif
                </div>

                {{-- Bagian Konten (Teks) --}}
                <div class="p-5 flex flex-col h-full flex-grow"> {{-- Tambahkan flex-grow --}}
                    <h3 class="text-lg font-bold mb-1 group-hover:text-indigo-600 transition">{{ $scholarship->title ?? 'Judul Tidak Tersedia' }}</h3>
                    <p class="text-sm text-gray-500 mb-1">Negara {{ $scholarship->country ?? 'Tidak Tersedia' }}</p>
                    <p class="text-sm text-gray-700 mb-3">{{ $scholarship->description ?? 'Deskripsi tidak tersedia.' }}</p>
                    <div class="flex flex-wrap gap-2 mb-4 mt-auto"> {{-- Tambahkan mt-auto untuk dorong ke bawah --}}
                        @if(isset($scholarship->degrees) && is_array($scholarship->degrees))
                            @foreach($scholarship->degrees as $degreeTag)
                                <span class="text-xs px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full">{{ $degreeTag }}</span>
                            @endforeach
                        @endif
                    </div>
                    {{-- HAPUS TOMBOL "LIHAT" DI SINI --}}
                    {{-- <a href="{{ route('scholarship.show', $scholarship->id) }}" class="mt-auto inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-full font-semibold shadow transition">
                        <i class="fas fa-arrow-right"></i> Lihat
                    </a> --}}
                </div>
            </a> {{-- AKHIR: Tutup tag A pembungkus card --}}
        @empty
            <p class="col-span-full text-center text-gray-600 text-lg">Tidak ada beasiswa yang ditemukan untuk kriteria pencarian Anda.</p>
        @endforelse
        </div>
    </div>
@endsection