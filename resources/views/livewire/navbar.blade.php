<body class="pt-[72px]">
<div class="static" x-data="{ open: false }">
    {{-- Navbar --}}
    <div class="fixed top-0 z-50 w-full h-[72px] bg-gradient-to-r from-[#b5bda4] to-[#33319d] justify-center shadow-lg flex">
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
                        ['name' => 'Tentang Kami', 'url' => '/tentang-kami'],
                        ['name' => 'Kontak', 'url' => '/kontak'],
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
            {{-- Login Desktop --}}
            <div class="hidden md:flex items-center gap-6">
                <a href="{{ url('mahasiswalogin') }}"
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
         class="md:hidden absolute top-[72px] left-0 w-full bg-[#005BAC] text-white px-6 pb-4 space-y-2 font-[poppins] shadow-md z-40">
        @foreach ($menus as $menu)
            <a href="{{ url($menu['url']) }}"
               class="block uppercase hover:text-yellow-300 transition py-2 border-b border-white">
                {{ $menu['name'] }}
            </a>
        @endforeach
        <a href="{{ url('login') }}"
           class="block uppercase font-[poppins] text-sm font-medium hover:text-yellow-300 transition py-2 border-b border-white">
            Login
        </a>
    </div>
</div>

</body>
