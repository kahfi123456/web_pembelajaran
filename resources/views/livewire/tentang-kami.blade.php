<div class="font-sans text-gray-800">

    {{-- Hero Section --}}
    <section class="relative h-[450px] bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('{{ asset('images/d.jpg') }}');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative z-10 text-center max-w-3xl px-4 pt-40">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 drop-shadow-lg">Tentang Kami</h1>
            <p class="text-lg md:text-xl font-light">
                Materi Pengayaan Digital untuk Mahasiswa Universitas Terbuka.
            </p>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="max-w-6xl mx-auto py-16 px-4 md:px-8 space-y-16">

        {{-- Siapa Kami --}}
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-bold text-blue-700 mb-4">📘 Siapa Kami?</h2>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Kami adalah platform digital yang menyediakan materi pengayaan bagi mahasiswa Universitas Terbuka, disusun berdasarkan fakultas dan jurusan untuk menunjang proses pembelajaran mandiri.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/b.jpg') }}" alt="Siapa Kami" class="rounded-xl shadow-md w-full">
            </div>
        </div>

        {{-- Visi dan Misi --}}
        <div class="bg-blue-50 p-8 rounded-xl shadow-lg">
            <h2 class="text-3xl font-bold text-green-700 mb-6">🎯 Visi & Misi</h2>
            <div class="space-y-3 text-lg text-gray-700">
                <p><span class="font-semibold">Visi:</span> Menjadi sumber pembelajaran digital terpercaya dan mudah diakses untuk seluruh mahasiswa UT.</p>
                <ul class="list-disc list-inside space-y-2 mt-4">
                    <li>Membuka akses belajar berkualitas tanpa batas lokasi.</li>
                    <li>Mendukung pembelajaran fleksibel, mandiri, dan berkelanjutan.</li>
                    <li>Mempermudah pencarian materi berdasarkan fakultas dan jurusan.</li>
                </ul>
            </div>
        </div>

        {{-- Hubungi Kami --}}
        <div class="text-center">
            <h2 class="text-3xl font-bold text-yellow-600 mb-4">📞 Hubungi Kami</h2>
            <p class="text-lg text-gray-700">Kami siap membantu Anda jika ada pertanyaan atau saran.</p>
            <div class="mt-6 space-y-2 text-gray-800 text-lg">
                <p>✉️ Email: <a href="mailto:support@ut.ac.id" class="text-blue-600 hover:underline">support@ut.ac.id</a></p>
                <p>📞 Telepon: (021) 1234-5678</p>
            </div>
        </div>

    </section>
</div>
