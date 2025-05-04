<div class="font-sans text-gray-800">
    {{-- Hero Section --}}
    <section class="relative min-h-screen bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('{{ asset('images/d.jpg') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center max-w-2xl px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 drop-shadow-lg animate-fade-in-up">Tentang Kami</h1>
            <p class="text-lg md:text-xl font-light animate-fade-in-up delay-150">
                Materi Pengayaan Digital untuk Mahasiswa Universitas Terbuka.
            </p>
        </div>
    </section>
    <section class="max-w-6xl mx-auto py-20 px-6 md:px-12 space-y-24">

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-blue-700 mb-4">📘 Siapa Kami?</h2>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Kami adalah platform digital yang menyediakan materi pengayaan bagi mahasiswa Universitas Terbuka,
                    disusun berdasarkan fakultas dan jurusan untuk menunjang proses pembelajaran mandiri.
                </p>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/b.jpg') }}" alt="Siapa Kami" class="w-[320px] h-auto shadow-lg object-contain">
            </div>
        </div>
        {{-- Visi dan Misi --}}
        <div class="bg-white border-l-4 border-green-600 p-10 shadow-md">
            <h2 class="text-3xl font-bold text-green-700 mb-6">🎯 Visi & Misi</h2>
            <div class="space-y-4 text-lg text-gray-700">
                <p><strong>Visi:</strong> Menjadi sumber pembelajaran digital terpercaya dan mudah diakses untuk seluruh mahasiswa UT.</p>
                <p class="mt-4 font-semibold">Misi:</p>
                <ul class="list-disc list-inside space-y-2">
                    <li>Membuka akses belajar berkualitas tanpa batas lokasi.</li>
                    <li>Mendukung pembelajaran fleksibel, mandiri, dan berkelanjutan.</li>
                    <li>Mempermudah pencarian materi berdasarkan fakultas dan jurusan.</li>
                </ul>
            </div>
        </div>
        {{-- Hubungi Kami --}}
        <div class="text-center space-y-4">
            <h2 class="text-3xl font-bold text-yellow-600">📞 Hubungi Kami</h2>
            <p class="text-lg text-gray-700">Kami siap membantu Anda jika ada pertanyaan atau saran.</p>
            <div class="space-y-2 text-gray-800 text-lg">
                <p>✉️ Email: <a href="mailto:support@ut.ac.id" class="text-blue-600 hover:underline">support@ut.ac.id</a></p>
                <p>📞 Telepon: (021) 1234-5678</p>
            </div>
        </div>
    </section>
</div>
