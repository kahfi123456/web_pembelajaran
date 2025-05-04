<div class="min-h-screen px-4 sm:px-8 py-14 bg-gradient-to-b from-blue-100 via-white to-blue-50">
    <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-blue-900 tracking-tight">Halaman Fakultas</h1>
            <p class="mt-4 text-lg text-gray-700 max-w-2xl mx-auto">
                Pilih salah satu fakultas di bawah ini untuk melihat daftar jurusan dan materi pengayaan yang tersedia.
            </p>
        </div>

        <!-- Grid Fakultas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($fakultas as $item)
                <a href="{{ route('jurusan', ['slug' => $item->slug]) }}"
                   class="bg-white border border-gray-200 rounded-2xl p-6 shadow hover:shadow-lg hover:border-blue-500 hover:bg-blue-50 transition-all duration-300 flex flex-col items-start justify-between">
                    <div class="mb-3">
                        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 14l6.16-3.422A12.083 12.083 0 0118 20.944M12 14l-6.16-3.422A12.083 12.083 0 006 20.944M12 14v7.944" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-800">{{ $item->title }}</h4>
                    </div>
                    <p class="text-sm text-gray-600 mt-auto">Klik untuk melihat daftar jurusan</p>
                </a>
            @endforeach
        </div>
    </div>
</div>
