<div class="space-y-20 font-sans text-gray-800">

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center text-white text-center"
             style="background-image: url('{{ asset('images/c.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 px-6 sm:px-10 max-w-3xl animate-fade-in-up">
            <h1 class="text-5xl md:text-6xl font-extrabold drop-shadow-md mb-4">Hubungi Kami</h1>
            <p class="text-lg md:text-xl font-light text-gray-200">Kami siap mendengar Anda — saran, kritik, maupun pertanyaan.</p>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="px-6 sm:px-10 max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-start">

        {{-- Contact Info --}}
        <div class="space-y-8">
            <h2 class="text-3xl font-bold text-gray-800">📍 Informasi Kontak</h2>
            <div class="space-y-6 text-lg">
                <div class="flex items-start gap-4">
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" stroke-width="1.5"
                             viewBox="0 0 24 24">
                            <path d="M12 2C8 2 4 5.2 4 10c0 5 8 12 8 12s8-7 8-12c0-4.8-4-8-8-8z"/>
                        </svg>
                    </div>
                    <p>Jl. Cabe Raya, Pondok Cabe, Tangerang Selatan, Banten</p>
                </div>
                <div class="flex items-start gap-4">
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" stroke-width="1.5"
                             viewBox="0 0 24 24">
                            <path d="M3 5h18M3 12h18M3 19h18" />
                        </svg>
                    </div>
                    <p>(021) 1234-5678</p>
                </div>
                <div class="flex items-start gap-4">
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" stroke-width="1.5"
                             viewBox="0 0 24 24">
                            <path d="M16 12H8m8 0a4 4 0 01-8 0 4 4 0 018 0zM2 12a10 10 0 1120 0 10 10 0 01-20 0z"/>
                        </svg>
                    </div>
                    <a href="mailto:support@ut.ac.id" class="text-blue-600 hover:underline">support@ut.ac.id</a>
                </div>
            </div>
        </div>

        {{-- Contact Form --}}
        <div class="bg-white border border-gray-200 shadow-xl rounded-2xl p-8 sm:p-10 animate-fade-in-up w-full">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">📝 Kirim Pesan</h2>
            <form wire:submit.prevent="kirimPesan" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" wire:model.defer="nama" placeholder="Masukkan nama Anda"
                           class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none text-sm shadow-sm">
                    @error('nama') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" wire:model.defer="email" placeholder="nama@email.com"
                           class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none text-sm shadow-sm">
                    @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                    <textarea wire:model.defer="pesan" rows="4" placeholder="Tulis pesan Anda..."
                              class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none text-sm shadow-sm"></textarea>
                    @error('pesan') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="text-center">
                    <button type="submit"
                            class="bg-yellow-500 hover:bg-yellow-600 transition duration-200 text-white font-semibold px-6 py-2 rounded-full shadow-md text-sm">
                        Kirim Sekarang
                    </button>
                </div>
            </form>
            @if (session()->has('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded text-sm mb-4">
                    {{ session('success') }}
                </div>
            @endif
        </div>

    </section>
</div>
