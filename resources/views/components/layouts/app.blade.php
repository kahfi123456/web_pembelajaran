<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ session('title', 'Page Title') }}</title>
    
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body>
    @livewireScripts()
    @if (!request()->routeIs('filament.admin.auth.login')&& !request()->routeIs('mahasiswalogin') && !request()->routeIs('mahasiswaregister') && !request()->routeIs('forgotpassword') && !request()->routeIs('reset.password'))
        @livewire('navbar')
    @endif

    <main>
        {{ $slot }}
    </main>

    @if (!request()->routeIs('filament.admin.auth.login')&& !request()->routeIs('mahasiswalogin') && !request()->routeIs('mahasiswaregister')&& !request()->routeIs('forgotpassword') && !request()->routeIs('reset.password'))
        @livewire('footer')
    @endif
    
    @livewireStyles
</body>
</html>
