<div class="font-sans text-gray-800">
    {{-- Hero Section --}}
    <section class="relative min-h-screen bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('{{ asset('images/d.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent"></div>
        <div class="relative z-10 text-center max-w-2xl px-6 animate-fade-in-up">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight">Tentang Kami</h1>
            <p class="text-lg md:text-xl font-light">Materi Pengayaan Digital untuk Mahasiswa Universitas Terbuka</p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto py-20 px-6 sm:px-12 space-y-24">
        {{-- Siapa Kami --}}
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 animate-fade-in-left">
                <h2 class="text-3xl font-bold text-blue-700 mb-4">📘 Siapa Kami?</h2>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Kami adalah platform digital yang menyediakan materi pengayaan khusus bagi mahasiswa Universitas Terbuka.
                    Materi disusun berdasarkan fakultas dan jurusan untuk mempermudah proses pembelajaran mandiri secara fleksibel.
                </p>
            </div>
            <div class="order-1 md:order-2 flex justify-center animate-fade-in-right">
                <img src="{{ asset('images/b.jpg') }}" alt="Siapa Kami" class="rounded-xl shadow-xl w-[350px] h-auto object-cover">
            </div>
        </div>

        {{-- Visi dan Misi --}}
        <div class="bg-gradient-to-r from-green-50 to-white border-l-4 border-green-600 p-10 shadow-md rounded-lg animate-fade-in-up">
            <h2 class="text-3xl font-bold text-green-700 mb-6">🎯 Visi & Misi</h2>
            <div class="space-y-4 text-lg text-gray-700">
                <p><strong>Visi:</strong> Menjadi sumber pembelajaran digital terpercaya yang dapat diakses oleh seluruh mahasiswa UT di mana pun berada.</p>
                <p class="mt-4 font-semibold">Misi:</p>
                <ul class="list-disc list-inside space-y-2">
                    <li>Membuka akses belajar berkualitas tanpa batasan lokasi.</li>
                    <li>Mendukung gaya belajar fleksibel dan mandiri.</li>
                    <li>Menyediakan materi sesuai fakultas dan jurusan secara cepat dan praktis.</li>
                </ul>
            </div>
        </div>

        {{-- Hubungi Kami --}}
        <div class="text-center space-y-6 animate-fade-in-up">
            <h2 class="text-3xl font-bold text-yellow-600">📞 Hubungi Kami</h2>
            <p class="text-lg text-gray-700">Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami.</p>
            <div class="inline-block p-6 bg-yellow-50 rounded-xl shadow-md text-left space-y-2 text-gray-800 text-lg">
                <p>✉️ Email: <a href="mailto:support@ut.ac.id" class="text-blue-600 hover:underline">support@ut.ac.id</a></p>
                <p>📞 Telepon: (021) 1234-5678</p>
            </div>
        </div>
    </section>
</div>
