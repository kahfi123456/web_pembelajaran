<div class="px-4 sm:px-8 py-12 bg-gradient-to-b from-blue-50 to-white min-h-screen">
    <div class="text-center mb-10">
        <h1 class="text-3xl font-bold text-blue-800">🎓 Halaman Fakultas</h1>
        <p class="text-gray-700 mt-4 text-lg bg-blue-100 inline-block px-4 py-2 rounded-lg shadow-sm border-l-4 border-blue-500">
            📌 Silakan pilih fakultas untuk melihat jurusan dan materi pengayaan.
        </p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
       @foreach ($fakultas as $item)
        <a href="{{ route('jurusan', ['slug' => $item->slug]) }}" class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border border-gray-100 hover:border-blue-400 hover:bg-blue-50 flex flex-col items-center justify-center">
            <div class="text-center mb-4">
            <span class="text-4xl mb-2">🛠️</span>
            <h4 class="text-xl font-semibold text-gray-800">{{ $item->title }}</h4>
            </div>
            <p class="text-sm text-gray-500">Klik untuk melihat daftar jurusan</p>
        </a>
       @endforeach
    </div>
</div>
