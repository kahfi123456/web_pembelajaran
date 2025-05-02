<div class="space-y-20">

    {{-- Hero Section --}}
    <section class="relative text-white text-center rounded-xl shadow-lg overflow-hidden min-h-screen">
        <div class="absolute inset-0 bg-cover bg-center"
             style="background-image: url('{{ asset('images/a.png') }}'); background-size: cover; background-position: center;">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/60"></div>

        <div class="relative z-10 px-6 sm:px-10 py-28 max-w-4xl mx-auto animate-fade-in-up">
            <h1 class="text-5xl font-bold font-[Poppins] mb-5">Hubungi Kami</h1>
            <p class="text-xl font-light leading-relaxed text-gray-200">
                Kami siap membantu menjawab pertanyaan, kritik, atau saran Anda.
            </p>
        </div>
    </section>

    {{-- Info & Form --}}
    <section class="px-6 sm:px-10 max-w-6xl mx-auto grid lg:grid-cols-2 gap-14 items-start">

        {{-- Informasi Kontak --}}
        <div class="space-y-8">
            <h2 class="text-3xl font-bold text-gray-800">Informasi Kontak</h2>

            <div class="flex items-start space-x-4">
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24">
                    <path d="M12 2C8 2 4 5.2 4 10c0 5 8 12 8 12s8-7 8-12c0-4.8-4-8-8-8z" />
                </svg>
                <p class="text-gray-700">Jl. Cabe Raya, Pondok Cabe, Tangerang Selatan, Banten</p>
            </div>

            <div class="flex items-start space-x-4">
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24">
                    <path d="M3 5h18M3 12h18M3 19h18" />
                </svg>
                <p class="text-gray-700">(021) 1234-5678</p>
            </div>

            <div class="flex items-start space-x-4">
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24">
                    <path d="M16 12H8m8 0a4 4 0 01-8 0 4 4 0 018 0zM2 12a10 10 0 1120 0 10 10 0 01-20 0z" />
                </svg>
                <a href="mailto:support@ut.ac.id" class="text-blue-600 hover:underline">support@ut.ac.id</a>
            </div>
        </div>

        {{-- Form Kontak --}}
        <div class="bg-white rounded-2xl shadow-xl p-10 animate-fade-in-up">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Form Kontak</h2>

            <form wire:submit.prevent="kirimPesan" class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" wire:model.defer="nama" placeholder="Masukkan nama Anda"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-yellow-400 focus:border-yellow-400 focus:outline-none">
                    @error('nama') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input type="email" wire:model.defer="email" placeholder="nama@email.com"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-yellow-400 focus:border-yellow-400 focus:outline-none">
                    @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Pesan</label>
                    <textarea wire:model.defer="pesan" rows="5" placeholder="Tulis pesan Anda..."
                              class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-yellow-400 focus:border-yellow-400 focus:outline-none"></textarea>
                    @error('pesan') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="text-center pt-2">
                    <button type="submit"
                            class="bg-yellow-400 hover:bg-yellow-500 transition-colors duration-200 text-black font-semibold px-8 py-3 rounded-full shadow-md">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </section>

</div>
