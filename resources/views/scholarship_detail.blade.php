@extends('layouts.app')

@section('title', $scholarship->title . ' - Detail Beasiswa')
@section('nav_scholarship', 'font-semibold text-gray-900')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">
        <a href="{{ route('scholarship.index') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 mb-6">
            <i class="fas fa-arrow-left mr-2"></i> Kembali ke Daftar Beasiswa
        </a>

        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            @if(isset($scholarship->image_url) && !empty($scholarship->image_url))
                <img src="{{ $scholarship->image_url }}" alt="{{ $scholarship->title }}" class="w-full h-64 object-cover">
            @else
                <div class="w-full h-64 bg-gray-200 flex items-center justify-center text-gray-500 text-lg">
                    Tidak ada gambar
                </div>
            @endif

            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-3">{{ $scholarship->title }}</h1>
                <p class="text-xl text-gray-700 mb-4">Negara: <span class="font-semibold">{{ $scholarship->country }}</span></p>

                <div class="flex flex-wrap gap-2 mb-6">
                    @if(isset($scholarship->degrees) && is_array($scholarship->degrees))
                        @foreach($scholarship->degrees as $degreeTag)
                            <span class="text-sm px-4 py-1 bg-purple-100 text-purple-700 rounded-full font-medium">{{ $degreeTag }}</span>
                        @endforeach
                    @endif
                </div>

                <h2 class="text-xl font-semibold text-gray-800 mb-2">Deskripsi:</h2>
                <p class="text-gray-700 leading-relaxed mb-6">{{ $scholarship->description }}</p>

                <hr class="my-6">
                <div class="text-gray-600 text-sm">
                    <p>Diterbitkan: {{ $scholarship->created_at->format('d M Y') }}</p>
                    <p>Terakhir diperbarui: {{ $scholarship->updated_at->format('d M Y') }}</p>
                </div>

                <div class="mt-8 text-center">
                @if(isset($scholarship->official_website_url) && !empty($scholarship->official_website_url))
                    <a href="{{ $scholarship->official_website_url }}" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                        Kunjungi Situs Resmi <i class="fas fa-external-link-alt ml-3"></i>
                    </a>
                @else
                    <p class="text-gray-600 italic">Informasi situs resmi tidak tersedia.</p>
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection