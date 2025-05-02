<div class="font-[Poppins]">

    {{-- Marquee --}}
    <div class="bg-white py-2 px-4 border-b border-gray-200">
        <marquee class="text-yellow-500 text-sm sm:text-base font-medium italic">
            @foreach ($texts as $text)
                <span class="mx-6">{{ $text->text }}</span>
            @endforeach
        </marquee>
    </div>

    {{-- Hero Section --}}
    <section class="relative h-[100vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center"
             style="background-image: url('{{ asset('images/g.jpg') }}'); filter: brightness(0.6);">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>

        <div class="relative z-10 text-center text-white px-6 max-w-3xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold leading-tight drop-shadow-lg mb-4">
                Selamat Datang di Materi Pengayaan UT
            </h1>
            <p class="text-lg sm:text-xl font-light mb-6">
                Akses materi tambahan berdasarkan fakultas dan jurusan Anda dengan mudah dan cepat.
            </p>
            <a href="{{ url('/fakultas') }}"
               class="inline-block bg-yellow-400 text-black font-semibold px-6 py-3 rounded-full shadow-md hover:bg-yellow-500 hover:scale-105 transition duration-300">
                🎓 Jelajahi Fakultas
            </a>
        </div>
    </section>

   {{-- Materi Terbaru --}}
<section class="bg-gray-50 py-14 px-6 sm:px-12">
    <h2 class="text-3xl font-bold text-center mb-10">🔥 Materi Terbaru</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        {{-- @foreach ($latestMaterials as $material) --}}
        {{-- <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform duration-300 transform hover:scale-105 p-6 flex flex-col justify-between">
            <div>
                <h4 class="text-lg font-semibold text-gray-800 mb-2">{{ $material->title }}</h4>
                <p class="text-sm text-gray-500 mb-4">{{ $material->faculty->name }}</p>
            </div>
            <a href="{{ asset('storage/' . $material->file_path) }}"
               download
               class="mt-4 inline-block bg-yellow-400 hover:bg-yellow-500 text-black text-sm font-semibold px-4 py-2 rounded-md text-center transition">
                ⬇️ Download Materi
            </a>
        </div> --}}
        {{-- @endforeach --}}
    </div>
</section>

{{-- Daftar Fakultas --}}
<section class="bg-white py-14 px-6 sm:px-12">
    <h2 class="text-3xl font-bold text-center mb-10">📚 Daftar Fakultas / Jurusan</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($fakultas as $fakultasItem)
            <a href="{{ url('/fakultas/' . $fakultasItem->id) }}"
               class="block bg-white border border-gray-200 rounded-xl shadow-lg hover:shadow-2xl hover:bg-yellow-100 transition-transform duration-300 transform hover:scale-105 p-6 text-center">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $fakultasItem->name }}</h3>
                <p class="text-sm text-gray-600 mt-2">Lihat materi dari jurusan ini</p>
            </a>
        @endforeach
    </div>
</section>
