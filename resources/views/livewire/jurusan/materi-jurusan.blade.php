<div class="max-w-5xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-blue-900 mb-6">Materi Jurusan: {{ $jurusan->title }}</h1>

    <h2 class="text-xl font-semibold text-gray-700 mb-4">Daftar Materi / Buku:</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($jurusan->materi as $item)
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 p-5 border border-gray-200">
                <div class="flex items-center space-x-4 mb-4">
                    <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 2h9l5 5v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zM15 7V3.5L19.5 8H16a1 1 0 0 1-1-1z"/>
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-800">{{ $item->buku_title }}</h3>
                </div>
                <a href="{{ asset('storage/' . $item->buku_pdf) }}" target="_blank" 
                   class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
                    Download PDF
                </a>
            </div>
        @endforeach
    </div>
</div>
