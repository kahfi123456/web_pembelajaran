<div class="max-w-6xl mx-auto px-6 py-10">
    <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center border-b pb-4">
        📚 Materi Jurusan: <span class="text-gray-900">{{ $jurusan->title }}</span>
    </h1>

    <h2 class="text-2xl font-semibold text-gray-700 mb-6">📖 Daftar Materi / Buku</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($jurusan->materi as $item)
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                <div class="p-6 flex flex-col h-full justify-between">
                    <div class="flex items-start space-x-3 mb-4">
                        <svg class="w-10 h-10 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6 2h9l5 5v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zM15 7V3.5L19.5 8H16a1 1 0 0 1-1-1z"/>
                        </svg>
                        <h3 class="text-lg font-semibold text-gray-800 leading-snug">
                            {{ $item->buku_title }}
                        </h3>
                    </div>
                    <a href="{{ asset('storage/' . $item->buku_pdf) }}" target="_blank"
                       class="mt-4 inline-block bg-gradient-to-r from-blue-600 to-blue-700 text-white text-sm font-medium text-center px-5 py-2 rounded-md hover:from-blue-700 hover:to-blue-800 transition">
                        📥 Download PDF
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
