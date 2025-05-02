<div class="space-y-20 font-sans text-gray-800">

    {{-- Hero Section --}}
    <section class="relative text-white text-center min-h-screen flex items-center justify-center"
             style="background-image: url('{{ asset('images/c.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 px-6 sm:px-10 text-center max-w-4xl animate-fade-in-up">
            <div class="text-center text-white space-y-4">
                <h1 class="text-5xl md:text-6xl font-extrabold drop-shadow-lg">
                    Hubungi Kami
                </h1>
                <p class="text-lg md:text-xl font-light text-gray-200 max-w-2xl mx-auto">
                    Kami siap membantu menjawab pertanyaan, kritik, atau saran Anda.
                </p>
            </div>
        </div>
    </section>

    <section class="px-6 sm:px-10 max-w-6xl mx-auto grid lg:grid-cols-2 gap-14 items-start">
        <div class="space-y-8">
            <h2 class="text-3xl font-bold text-gray-800">Informasi Kontak</h2>
            <div class="flex items-start space-x-4">
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="M12 2C8 2 4 5.2 4 10c0 5 8 12 8 12s8-7 8-12c0-4.8-4-8-8-8z" />
                </svg>
                <p class="text-gray-700">Jl. Cabe Raya, Pondok Cabe, Tangerang Selatan, Banten</p>
            </div>
            <div class="flex items-start space-x-4">
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="M3 5h18M3 12h18M3 19h18" />
                </svg>
                <p class="text-gray-700">(021) 1234-5678</p>
            </div>
            <div class="flex items-start space-x-4">
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="M16 12H8m8 0a4 4 0 01-8 0 4 4 0 018 0zM2 12a10 10 0 1120 0 10 10 0 01-20 0z" />
                </svg>
                <a href="mailto:support@ut.ac.id" class="text-blue-600 hover:underline">support@ut.ac.id</a>
            </div>
        </div>
        
        <div class="bg-white shadow-lg px-6 py-8 animate-fade-in-up border border-gray-200 rounded-lg w-full max-w-md mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Form Kontak</h2>
            <form wire:submit.prevent="kirimPesan" class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" wire:model.defer="nama" placeholder="Masukkan nama Anda"
                           class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring-yellow-400 focus:border-yellow-400 focus:outline-none text-sm">
                    @error('nama') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" wire:model.defer="email" placeholder="nama@email.com"
                           class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring-yellow-400 focus:border-yellow-400 focus:outline-none text-sm">
                    @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                    <textarea wire:model.defer="pesan" rows="4" placeholder="Tulis pesan Anda..."
                              class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring-yellow-400 focus:border-yellow-400 focus:outline-none text-sm"></textarea>
                    @error('pesan') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="text-center pt-2">
                    <button type="submit"
                            class="bg-blue-400 hover:bg-yellow-500 transition-colors duration-200 text-black font-semibold px-6 py-2 rounded-full shadow text-sm">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </section>

</div>
