{{-- resources/views/partials/footer.blade.php --}}

<footer class="bg-gray-800 text-white py-10 mt-16"> {{-- mt-16 untuk jarak dari konten utama --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Bagian 1: Informasi Tentang Kami --}}
            <div>
                <h3 class="text-xl font-bold mb-4">Explore Scholar</h3>
                <p class="text-gray-400 text-sm">Platform informasi beasiswa terpercaya untuk membantu Anda meraih impian pendidikan global.</p>
            </div>

            {{-- Bagian 2: Navigasi --}}
            <div>
                <h3 class="text-xl font-bold mb-4">Navigasi</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition-colors duration-200">Home</a></li>
                    <li><a href="{{ route('scholarship.index') }}" class="text-gray-400 hover:text-white transition-colors duration-200">Beasiswa</a></li>
                    <li><a href="{{ route('about.index') }}" class="text-gray-400 hover:text-white transition-colors duration-200">Tentang Kami</a></li>
                    <li><a href="{{ route('discussion.index') }}" class="text-gray-400 hover:text-white transition-colors duration-200">Diskusi</a></li>
                </ul>
            </div>

            {{-- Bagian 3: Kontak & Sosial Media --}}
            <div>
                <h3 class="text-xl font-bold mb-4">Kontak Kami</h3>
                <ul class="space-y-2 text-sm">
                    <li class="text-gray-400">Email: info@explorescholar.com</li>
                    <li class="text-gray-400">Telepon: +62 812-3456-7890</li>
                </ul>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-10 pt-6 text-center text-gray-500 text-xs">
            &copy; {{ date('Y') }} Explore Scholar. All rights reserved.
        </div>
    </div>
</footer>