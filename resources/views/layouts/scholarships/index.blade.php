@extends('layouts.app')

@section('content')
    <div class="bg-gray-700 py-12 text-center text-white">
        <h1 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-pink-500">
            Some promotional message boss.
        </h1>
        <div class="mt-8 flex justify-center">
            <input
                type="text"
                placeholder="Search ..."
                class="w-2/3 md:w-1/2 px-6 py-3 rounded-l-full focus:outline-none"
            >
            <button class="bg-teal-400 px-4 py-3 rounded-r-full text-white font-bold">
                🔍
            </button>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold mb-6 text-left">
            <span class="text-pink-600">Info</span> <span class="text-indigo-600">Beasiswa Terbaru</span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($scholarships as $scholarship)
                <div class="bg-gradient-to-b from-white via-cyan-100 to-cyan-300 rounded-xl overflow-hidden shadow-lg">
                    <div class="bg-gray-300 h-40"></div>
                    <div class="p-4">
                        <h3 class="text-md font-bold">{{ $scholarship['name'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $scholarship['country'] }}</p>
                        <p class="text-sm mt-2 text-gray-800">{{ $scholarship['description'] }}</p>

                        <div class="mt-3">
                            <p class="text-sm font-semibold mb-1">Jenjang:</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($scholarship['levels'] as $level)
                                    <span class="text-sm px-2 py-1 bg-white rounded-full border border-gray-400">
                                        {{ $level }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-4">
                            <button class="text-sm bg-gray-800 text-white px-4 py-1 rounded">Lihat</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
