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
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
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

<body class="antialiased">
    {{-- Cursor Custom -> nb: hilangkan ketika di menu seperti dropdown dll. --}}
    <div id="cursor-example" class="cursor-example z-[99999999999] hidden sm:block"></div>
    {{-- Loading animation --}}
    <div id="loader-overlay">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    {{-- Button Pojok Kanan bawah --}}
    <button onclick="topFunction()" id="myBtnTop" title="Go to top" style="display: block">
        <i class="fa-solid fa-arrow-up fa-flip fa-xl" style="color: white;"></i>
    </button>
    {{-- Body --}}
    <div class="bg-white dark:bg-zinc-900">
        <x-navbar :active="$active" />
        {{-- Main --}}
        <main>
            <div class="relative isolate px-3 sm:px-4 md:px-6 pt-14 lg:px-8 min-h-screen">
                {{ $slot }}
            </div>
        </main>
        {{-- End Main --}}
        <x-footer />
    </div>
    {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
    @include('sweetalert2::index')

    <script src="{{ asset('js/preload.js') }}"></script>
    <script src="{{ asset('js/scrollnavbar.js') }}"></script>
</body>

</html>