<div class="font-[Poppins] bg-white text-gray-800">

    {{-- Marquee modern --}}
    <div class="overflow-hidden whitespace-nowrap bg-yellow-50 py-2 px-4 border-b border-yellow-300">
        <div class="inline-block animate-marquee text-yellow-600 text-sm sm:text-base font-medium italic">
            @foreach ($texts as $text)
                <span class="mx-6">{{ $text->text }}</span>
            @endforeach
        </div>
    </div>

    {{-- Hero Section --}}
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center brightness-60"
             style="background-image: url('{{ asset('images/g.jpg') }}');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>

        <div class="relative z-10 text-center text-white px-6 max-w-3xl mx-auto animate-fade-in">
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-4 leading-tight drop-shadow-xl">
                Selamat Datang di <br>Materi <span class="text-yellow-400">Pengayaan Universitas Terbuka</span>
            </h1>
            <p class="text-lg sm:text-xl font-light mb-6">
                Akses materi pembelajaran yang kamu inginkan dengan mudah dan cepat.
            </p>
            <a href="{{ url('/fakultas') }}"
               class="inline-block bg-yellow-400 text-black font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-yellow-500 hover:scale-105 transition duration-300">
                🎓 Jelajahi Fakultas
            </a>
        </div>
    </section>

    {{-- Apa Itu Materi Pengayaan --}}
    <section class="bg-white py-20 px-6 sm:px-12">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6">📖 Apa Itu Materi Pengayaan?</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Materi Pengayaan UT adalah kumpulan sumber belajar tambahan yang dirancang untuk membantu mahasiswa/mahasiswi memahami mata kuliah secara lebih mendalam. 
                Anda dapat menjelajahi materi berdasarkan fakultas dan jurusan untuk menemukan file yang relevan.
            </p>
        </div>
    </section>

    {{-- Cara Akses Materi --}}
    <section class="bg-gray-100 py-20 px-6 sm:px-12">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 mb-12">🧭 Cara Akses Materi</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @php
                    $steps = [
                        ['title' => '1. Pilih Fakultas', 'desc' => 'Klik tombol “Jelajahi Fakultas” untuk melihat daftar fakultas yang tersedia.'],
                        ['title' => '2. Temukan Materi', 'desc' => 'Masuk ke jurusan yang sesuai dan telusuri daftar materi yang tersedia.'],
                        ['title' => '3. Unduh & Pelajari', 'desc' => 'Download materi yang Anda butuhkan dan pelajari kapan pun Anda mau.'],
                    ];
                @endphp

                @foreach ($steps as $step)
                    <div class="p-6 bg-white rounded-2xl shadow hover:shadow-md transition duration-300">
                        <h3 class="text-xl font-semibold mb-3 text-yellow-500">{{ $step['title'] }}</h3>
                        <p class="text-gray-600 text-base">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Manfaat Materi Pengayaan --}}
    <section class="bg-white py-20 px-6 sm:px-12">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 mb-12">🎯 Manfaat Mengakses Materi Pengayaan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @php
                    $benefits = [
                        ['title' => '📘 Tambahan Pemahaman', 'desc' => 'Materi tambahan membantu Anda memahami topik kuliah dengan lebih lengkap dan fleksibel.'],
                        ['title' => '🧠 Belajar Mandiri', 'desc' => 'Meningkatkan kemampuan belajar mandiri dengan akses bebas ke berbagai sumber belajar.'],
                        ['title' => '📥 Siap Ujian', 'desc' => 'Materi ini berguna sebagai bahan tambahan menjelang Ujian Akhir Semester (UAS).'],
                    ];
                @endphp

                @foreach ($benefits as $benefit)
                    <div class="p-6 bg-yellow-50 rounded-2xl shadow hover:shadow-md transition duration-300">
                        <h3 class="text-xl font-semibold mb-3 text-yellow-600">{{ $benefit['title'] }}</h3>
                        <p class="text-gray-700">{{ $benefit['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
