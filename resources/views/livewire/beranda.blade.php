<div class="font-[Poppins]">
    {{-- Marquee --}}
    <div class="bg-white py-2 px-4 border-b border-gray-200">
        <marquee class="text-yellow-500 text-sm sm:text-base font-medium italic">
            @foreach ($texts as $text)
                <span class="mx-6">{{ $text->text }}</span>
            @endforeach
        </marquee>
    </div>
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center"
             style="background-image: url('{{ asset('images/g.jpg') }}'); filter: brightness(0.6);">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>

        <div class="relative z-10 text-center text-white px-6 max-w-3xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold drop-shadow-lg mb-4">
                Selamat Datang di <span class="text-yellow-400">Materi Pengayaan UT</span>
            </h1>
            <p class="text-lg sm:text-xl font-light mb-6">
                Akses materi tambahan berdasarkan fakultas dan jurusan Anda dengan mudah dan cepat.
            </p>
            <a href="{{ url('/fakultas') }}"
               class="inline-block bg-yellow-400 text-black font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-yellow-500 hover:scale-105 transition-transform duration-300">
                🎓 Jelajahi Fakultas
            </a>
        </div>
    </section>
    <section class="bg-white py-16 px-6 sm:px-12">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">📖 Apa Itu Materi Pengayaan?</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Materi Pengayaan UT adalah kumpulan sumber belajar tambahan yang dirancang untuk membantu mahasiswa memahami mata kuliah secara lebih mendalam. 
                Anda dapat menjelajahi materi berdasarkan fakultas dan jurusan untuk menemukan file yang relevan.
            </p>
        </div>
    </section>
    <section class="bg-gray-100 py-16 px-6 sm:px-12">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">🧭 Cara Akses Materi</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6 bg-white rounded-xl shadow hover:shadow-md transition">
                    <h3 class="text-xl font-semibold mb-2 text-yellow-500">1. Pilih Fakultas</h3>
                    <p class="text-gray-600">Klik tombol <strong>“Jelajahi Fakultas”</strong> untuk melihat daftar fakultas yang tersedia.</p>
                </div>
                <div class="p-6 bg-white rounded-xl shadow hover:shadow-md transition">
                    <h3 class="text-xl font-semibold mb-2 text-yellow-500">2. Temukan Materi</h3>
                    <p class="text-gray-600">Masuk ke jurusan yang sesuai dan telusuri daftar materi yang tersedia.</p>
                </div>
                <div class="p-6 bg-white rounded-xl shadow hover:shadow-md transition">
                    <h3 class="text-xl font-semibold mb-2 text-yellow-500">3. Unduh & Pelajari</h3>
                    <p class="text-gray-600">Download materi yang Anda butuhkan dan pelajari kapan pun Anda mau.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-16 px-6 sm:px-12">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-10">🎯 Manfaat Mengakses Materi Pengayaan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <div class="p-6 rounded-xl shadow bg-yellow-50 hover:shadow-md transition">
                    <h3 class="text-xl font-semibold mb-2 text-yellow-600">📘 Tambahan Pemahaman</h3>
                    <p class="text-gray-700">Materi tambahan membantu Anda memahami topik kuliah dengan lebih lengkap dan fleksibel.</p>
                </div>
                <div class="p-6 rounded-xl shadow bg-yellow-50 hover:shadow-md transition">
                    <h3 class="text-xl font-semibold mb-2 text-yellow-600">🧠 Belajar Mandiri</h3>
                    <p class="text-gray-700">Meningkatkan kemampuan belajar mandiri dengan akses bebas ke berbagai sumber belajar.</p>
                </div>
                <div class="p-6 rounded-xl shadow bg-yellow-50 hover:shadow-md transition">
                    <h3 class="text-xl font-semibold mb-2 text-yellow-600">📥 Siap Ujian</h3>
                    <p class="text-gray-700">Materi ini berguna sebagai bahan tambahan menjelang Ujian Akhir Semester (UAS).</p>
                </div>
            </div>
        </div>
    </section>

</div>
