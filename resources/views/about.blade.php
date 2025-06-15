@extends('layouts.app')

@section('title', 'About - Explore Scholar')
@section('nav_about', 'font-semibold text-gray-900') {{-- Ini kunci agar navbar ABOUT aktif --}}

@section('content')
<main class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 mt-16">
    <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <div class="w-14 border-b-2 border-[#8B2F7D] mb-4"></div>
            <h2 class="text-2xl sm:text-3xl font-semibold text-gray-900 leading-snug">
                Tentukan Jalanmu, <strong>Temukan Beasiswa Terpercaya di Sini!</strong>
            </h2>
            <p class="mt-4 text-gray-500 text-sm sm:text-base max-w-xl leading-relaxed">
                Kami menyediakan panduan lengkap untuk daftar beasiswa dari berbagai institusi pendidikan di seluruh dunia. Dengan informasi yang akurat dan terkini, kami membantu pelajar dan profesional menemukan peluang pendidikan terbaik sesuai dengan kebutuhan mereka.
            </p>
            <a class="mt-6 inline-flex items-center text-[#8B2F7D] text-xs font-semibold tracking-wide hover:underline" href="#">
                See more Informations
                <i class="fas fa-arrow-right ml-2 text-xs"></i>
            </a>
        </div>
        <div>
            <img src="https://storage.googleapis.com/a1aa/image/92615cf5-385e-40a8-f638-53c9c628faca.jpg" alt="Three students sitting outdoors on steps, looking at a laptop together, smiling and discussing"
                class="rounded-xl w-full object-cover" height="400" width="600" />
        </div>
    </section>

    <section class="mt-20 max-w-4xl">
        <div class="w-20 border-b-4 border-[#8B2F7D] mb-4"></div>
        <h3 class="text-xl sm:text-2xl font-normal text-gray-900">Meet the Institutions</h3>
        <h4 class="text-xl sm:text-2xl font-extrabold text-gray-900 -mt-1">Trusted Universities Supporting Your Education</h4>
    </section>

    <section class="mt-12 max-w-7xl flex justify-end space-x-4 pr-6">
        <button aria-label="Previous"
            class="w-10 h-10 rounded-full border border-[#8B2F7D] text-[#8B2F7D] flex items-center justify-center hover:bg-[#8B2F7D] hover:text-white transition">
            <i class="fas fa-arrow-left"></i>
        </button>
        <button aria-label="Next"
            class="w-10 h-10 rounded-full bg-[#4B0055] text-white flex items-center justify-center hover:bg-[#6a0d7a] transition">
            <i class="fas fa-arrow-right"></i>
        </button>
    </section>
</main>
@endsection
