<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Home')
@section('nav_home', 'font-semibold text-gray-900') {{-- Ini kunci agar navbar ABOUT aktif --}}

@section('content')
<div class="flex flex-col-reverse md:flex-row items-center justify-between min-h-[70vh]">
    <!-- Left: Text & Search -->
    <div class="w-full md:w-1/2 flex flex-col items-start justify-center px-4 md:px-0">
        <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-4">
            Jelajahi <span class="text-indigo-600">Peluang</span>,<br>
            Raih <span class="text-pink-500">Masa Depan!</span>
        </h1>
        <p class="text-gray-600 text-lg mb-6">
            Your Gateway to Global Scholarships<br>
            <span class="text-sm text-gray-400">Find Opportunities, Build Your Future</span>
        </p>
        

        <form class="flex w-full max-w-md mb-4" method="GET" action="{{ route('scholarship.index') }}">
            <input
                type="text"
                name="q" {{-- <<< TAMBAHKAN name="q" INI --}}
                value="{{ request('q') }}" {{-- <<< Opsional: Menjaga nilai pencarian setelah redirect --}}
                placeholder="Search scholarship..."
                class="flex-1 px-4 py-3 rounded-l-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-300"
            >
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-r-full text-lg font-bold">
                <i class="fas fa-search"></i>
            </button>
        </form>


        <a href="{{ url('/scholarships') }}" class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-bold px-6 py-3 rounded-full shadow transition">
            Let's get started!
        </a>
    </div>
    <!-- Right: Illustration -->
    <div class="w-full md:w-1/2 flex justify-center mb-8 md:mb-0">
        <div class="max-w-lg w-full">
            <img src="https://storage.googleapis.com/a1aa/image/1f5c056d-c3da-4651-78b5-61855e945762.jpg" alt="Students" class="w-full h-auto rounded-xl shadow-lg">
        </div>
    </div>
</div>
@endsection
