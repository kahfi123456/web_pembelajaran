<div class="min-h-screen bg-gradient-to-br from-blue-100 via-white to-blue-50 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Fakultas -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-10">
            <h1 class="text-4xl font-extrabold text-gray-900 border-l-4 border-blue-600 pl-4 tracking-tight">
                {{ $fakultas->title }}
            </h1>
            <a href="{{ url('/fakultas') }}"
               class="mt-4 sm:mt-0 inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 text-white font-medium text-sm rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali ke Fakultas
            </a>
        </div>

        <!-- Deskripsi Fakultas -->
        <div class="mb-10">
            <p class="text-gray-700 text-lg leading-relaxed max-w-3xl">
                Berikut adalah daftar jurusan yang termasuk dalam Fakultas <span class="font-semibold text-blue-700">{{ $fakultas->title }}</span>.
                Silakan klik salah satu jurusan untuk melihat materi pengayaan yang tersedia.
            </p>
        </div>

        <!-- Grid Daftar Jurusan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($fakultas->jurusans as $item)
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 p-6 border border-blue-100 hover:border-blue-500">
                    <h2 class="text-xl font-semibold text-blue-800 mb-2">{{ $item->title }}</h2>
                    <p class="text-gray-600 text-sm">Jurusan ini merupakan bagian dari Fakultas {{ $fakultas->title }}.</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
