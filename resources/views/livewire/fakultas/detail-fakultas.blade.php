<div>
    <div class="p-6">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6 border-b pb-2">
            {{ $fakultas->title }}
        </h1>
    
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($fakultas->jurusans as $item)
                <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition-all duration-300">
                    <h2 class="text-xl font-bold text-gray-800">{{ $item->title }}</h2>
                </div>
            @endforeach
        </div>
    </div>
    
</div>
