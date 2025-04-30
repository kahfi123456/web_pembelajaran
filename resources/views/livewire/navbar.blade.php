<div class="static" x-data="{ open: false }">
    {{-- Navbar --}}
    <div class="flex w-full h-[72px] bg-[#005BAC] justify-center shadow-lg">
        <div class="flex justify-between items-center w-[90%] h-full text-white">
            {{-- Logo --}}
            <div class="flex items-center gap-4 z-10">
                <img src="{{ asset('images/z.png') }}" alt="Logo UT" class="h-12">
                <div>
                    <p class="font-[poppins] font-semibold text-xl leading-tight">Universitas Terbuka</p>
                    <p class="font-[poppins] font-light text-sm tracking-wide">Materi Pengayaan</p>
                </div>
            </div>

            {{-- Hamburger button (mobile only) --}}
            <div class="md:hidden z-20">
                <button @click="open = !open" class="focus:outline-none">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            {{-- Menu Desktop --}}
            <nav class="hidden md:flex gap-8 text-sm font-[poppins]">
                @php
                    $menus = [
                        ['name' => 'Beranda', 'url' => '/'],
                        ['name' => 'Fakultas', 'url' => '/fakultas'],
                        ['name' => 'tentang kami', 'url' => '/tentang kami'],
                         ['name' => 'kontak', 'url' => '/kontak'],
                    ];
                @endphp

                @foreach ($menus as $menu)
                    <a href="{{ url($menu['url']) }}"
                       class="uppercase hover:text-yellow-400 hover:underline transition-all duration-300 ease-in-out py-2 px-4 rounded-lg 
                       {{ request()->is(trim($menu['url'], '/')) ? 'bg-yellow-300 text-black' : '' }}">
                        {{ $menu['name'] }}
                    </a>
                @endforeach
            </nav>

            {{-- Kontak & Search Desktop --}}
            <div class="hidden md:flex items-center gap-6">
                <a href="{{ url('login') }}"
                   class="uppercase font-[poppins] text-sm font-medium hover:text-yellow-300 transition-all duration-300 ease-in-out">
                    Login
                </a>
             
            </div>
        </div>
    </div>

    {{-- Mobile Menu (dropdown) --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         class="md:hidden bg-[#005BAC] text-white px-6 pb-4 space-y-2 font-[poppins] shadow-md">
        @foreach ($menus as $menu)
            <a href="{{ url($menu['url']) }}"
               class="block uppercase hover:text-yellow-300 transition py-2 border-b border-white">
                {{ $menu['name'] }}
            </a>
        @endforeach
        <a href="{{ url('/kontak') }}" class="block uppercase hover:text-yellow-300 py-2 border-b border-white">Kontak</a>
    </div>
</div>
