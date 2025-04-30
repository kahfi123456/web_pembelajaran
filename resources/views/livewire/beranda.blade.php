<div class="space-y-6">
    {{-- Marquee --}}
    <div class="py-2 px-4">
        <marquee class="text-yellow-400 text-sm sm:text-base md:text-lg font-medium italic drop-shadow-lg">
            @foreach ($texts as $text)
                <span class="mx-4 sm:mx-6">{{ $text->text }}</span>
            @endforeach
        </marquee>
    </div>

    {{-- Hero Section --}}
    <div class="relative text-white text-center rounded-lg shadow-md overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center"
             style="background-image: url('{{ asset('images/a.png') }}');">
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Content -->
        <div class="relative z-10 px-4 sm:px-8 py-20 md:py-28 max-w-4xl mx-auto">
            <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold font-[poppins] mb-4 leading-tight">
                Selamat Datang di Materi Pengayaan
            </h1>
            <p class="text-base sm:text-lg md:text-xl font-light mb-6 leading-relaxed">
                Temukan materi tambahan berdasarkan fakultas dan jurusan Anda.
            </p>
            {{-- @auth --}}
                {{-- @role('mahasiswa') --}}
                    <a href="{{ url('/fakultas') }}"
                        class="inline-block bg-yellow-400 text-black px-6 py-3 rounded-md font-semibold shadow-lg hover:bg-yellow-500 transition">
                        Lihat Fakultas
                    </a>
                {{-- @endrole --}}
                
            {{-- @endauth --}}
        </div>
    </div>

    {{-- Materi Terbaru --}}
    <div class="px-4 sm:px-8 py-12 bg-gray-50">
        <h2 class="text-2xl sm:text-3xl font-bold text-center mb-8">🔥 Materi Terbaru</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            {{-- @foreach ($latestMaterials as $material) --}}
                {{-- <div class="bg-white rounded-lg shadow-md p-6 flex flex-col justify-between">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">{{ $material->title }}</h4>
                        <p class="text-sm text-gray-600">{{ $material->faculty->name }}</p>
                    </div>
                    <a href="{{ asset('storage/' . $material->file_path) }}" 
                    download
                    class="mt-4 inline-block bg-yellow-400 text-black px-4 py-2 rounded-md font-semibold shadow hover:bg-yellow-500 transition text-center">
                        Download
                    </a>
                </div> --}}
            {{-- @endforeach --}}
        </div>
    </div>

    {{-- Daftar Fakultas --}}
    <div class="px-4 sm:px-8 py-12">
        <h2 class="text-2xl sm:text-3xl font-bold text-center mb-8">📚 Jelajahi Fakultas / Jurusan</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($fakultas as $fakultasItem)
                <a href="{{ url('/fakultas/' . $fakultasItem->id) }}"
                   class="block bg-white rounded-lg shadow-md p-6 text-center hover:bg-yellow-100 transition">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $fakultasItem->name }}</h3>
                    <p class="text-sm text-gray-600 mt-2">Lihat materi dari jurusan ini</p>
                </a>
            @endforeach
        </div>
    </div>
</div>
