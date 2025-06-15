<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>@yield('title', 'Explore Scholar')</title> {{-- Ubah default title --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"/>
    {{-- Tambahkan link untuk font 'Dancing Script' jika memang digunakan pada logo --}}
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Jika 'Dancing Script' digunakan, pastikan body juga mengizinkan fallback font */
        .dancing-script-font { /* Kelas baru untuk styling logo */
            font-family: 'Dancing Script', cursive, 'Inter', sans-serif !important;
        }
    </style>
    @yield('styles')
</head>
<body class="bg-white transition-colors duration-300 flex flex-col min-h-screen"> {{-- <<< TAMBAHKAN INI <<< --}}

    <header class="w-full sticky top-0 z-50">
        <nav class="w-full bg-indigo-500 shadow-lg rounded-b-2xl flex items-center justify-between h-20 px-8 sm:px-12 lg:px-24 transition-all duration-300">
            <div class="flex items-center space-x-4">
                <img src="https://storage.googleapis.com/a1aa/image/b3383030-50f4-4d99-6d70-d14da44efcd6.jpg" alt="Logo" class="w-10 h-10" />
                <span class="text-2xl font-bold text-white tracking-tight dancing-script-font"> {{-- <<< Tambahkan kelas custom font --}}
                    Explore Scholar
                </span>
            </div>
            <ul class="hidden md:flex space-x-12 text-lg font-semibold text-white">
                <li>
                    <a href="{{ url('/') }}" class="hover:text-indigo-200 transition-colors duration-200 @yield('nav_home', '')">Home</a>
                </li>
                <li>
                    <a href="{{ url('/about') }}" class="hover:text-indigo-200 transition-colors duration-200 @yield('nav_about', '')">About</a>
                </li>
                <li>
                    <a href="{{ url('/scholarships') }}" class="hover:text-indigo-200 transition-colors duration-200 @yield('nav_scholarship', '')">Scholarships</a>
                </li>
                <li>
                    <a href="{{ url('/discussion') }}" class="hover:text-indigo-200 transition-colors duration-200 @yield('nav_discussion', '')">Discussion</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 mt-20 text-gray-900 transition-colors duration-300 flex-grow"> {{-- <<< TAMBAHKAN INI <<< --}}
        @yield('content')
    </main>

    {{-- <<< SERTKAN FOOTER DI SINI, HANYA SEKALI SAJA >>> --}}
    @include('partials.footer')

    {{-- Script JavaScript lainnya jika ada --}}
    @yield('scripts')
</body>
</html>