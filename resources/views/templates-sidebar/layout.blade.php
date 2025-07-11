<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DEMA UNIDA GONTOR | {{ $title }}</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- link --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="/img/logoweb.png">
    <link rel="stylesheet" href="/css/frontend.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="canonical" href="{{ url()->current() }}">
    {{-- script --}}
    <script src="https://kit.fontawesome.com/5d8dfb0173.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- Meta tag --}}
    <meta name="keywords" content="organisasi, dewan mahasiswa, unida gontor, kampus, unggul">
    <meta name="author" content="Dewan Mahasiswa Unida Gontor">
    <meta name="robots" content="index, follow">
    <meta name="description"
        content="DEMA Unida Gontor adalah sebuah organisasi mahasiswa di universitas darussalam gontor" />
    <meta property="og:title" content="DEMA UNIDA GONTOR">
    <meta property="og:description"
        content="DEMA Unida Gontor adalah sebuah organisasi mahasiswa di universitas darussalam gontor">
    <meta property="og:image" content="{{ asset('img/logoweb.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
</head>

<body class="antialiased bg-white dark:bg-zinc-900">
    {{-- Loading animation --}}
    <div id="loader-overlay">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>

    {{-- Sidebar --}}
    <x-sidebar />
    {{-- isi konten --}}
    <div class="p-4 sm:ml-64 bg-white dark:bg-zinc-900 min-h-screen">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            {{ $slot }}
        </div>
    </div>
    {{-- Sidebar --}}
    @include('sweetalert2::index')
    @vite('resources/js/sweetalert.js')

    {{-- <script src="{{ asset('js/scrollnavbar.js') }}"></script> --}}
    <script src="{{ asset('js/preload.js') }}"></script>
    <script src="{{ asset('js/themelogic.js') }}"></script>
</body>

</html>