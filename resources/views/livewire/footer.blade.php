<footer class="bg-[#005BAC] text-white py-10 mt-16">
    <div class="max-w-7xl mx-auto px-6 md:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            {{-- Logo & Info --}}
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('images/z.png') }}" alt="Logo UT" class="h-10 w-10 object-contain">
                    <div>
                        <h2 class="text-lg font-bold">Universitas Terbuka</h2>
                        <p class="text-sm text-gray-200">Materi Pengayaan</p>
                    </div>
                </div>
                <p class="text-sm text-gray-300 leading-relaxed">
                    Website penyedia materi pembelajaran tambahan untuk mahasiswa Universitas Terbuka.
                </p>
            </div>

            {{-- Navigasi --}}
            <div>
                <h3 class="text-lg font-semibold mb-4">Navigasi</h3>
                <ul class="space-y-2 text-sm text-gray-200">
                    <li><a href="{{ url('/') }}" class="hover:text-yellow-300 transition">Beranda</a></li>
                    <li><a href="{{ url('/fakultas') }}" class="hover:text-yellow-300 transition">Fakultas</a></li>
                    <li><a href="{{ url('/kontak') }}" class="hover:text-yellow-300 transition">Kontak</a></li>
                </ul>
            </div>

            {{-- Kontak --}}
            <div>
                <h3 class="text-lg font-semibold mb-4">Kontak Kami</h3>
                <ul class="text-sm text-gray-200 space-y-2">
                    <li>Jl. Cabe Raya, Pondok Cabe, Tangerang Selatan</li>
                    <li>Email: <a href="mailto:info@ut.ac.id" class="hover:underline">info@ut.ac.id</a></li>
                    <li>Telepon: (021) 1234 5678</li>
                </ul>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="mt-10 border-t border-white/20 pt-4 text-center text-sm text-gray-300">
            &copy; {{ date('Y') }} Universitas Terbuka. Semua hak dilindungi.
        </div>
    </div>
</footer>
