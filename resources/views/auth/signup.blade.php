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
    <div class="cursor-example z-[99999999999] hidden sm:block"></div>
    <section class="signup flex flex-col lg:flex-row h-screen bg-white dark:bg-zinc-900">
        <!-- Left Side: Registration Form -->
        <div class="signup-left w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12 relative">
            <div class="max-w-md w-full mx-auto">
                <!-- Logo Section -->
                <div class="mb-6 items-center">
                    <div class="title flex  mb-2 items-center">
                        <a class="flex items-center justify-center w-8 h-8 mr-4 bg-dematua text-white rounded-full"
                            href="{{ route('home.index') }}">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <h1 class="text-xl lg:text-3xl font-semibold pr-3 text-black dark:text-white">Daftar ke
                            Dewan<span class="text-dematua dark:text-demamuda">Mahasiswa</span>
                        </h1>
                    </div>
                    <p class="text-gray-500">Masuk ke Website kami dan dapatkan fitur-fitur menarik di sini.</p>
                </div>

                <form action="/sign-up" method="POST" class="space-y-6">
                    @csrf

                    <!-- Grid for Input Fields -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Full Name -->
                        <div class="relative">
                            <label for="name"
                                class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Nama
                                Lengkap</label>
                            <input type="text" name="name" value="{{ old('name') }}" required
                                placeholder="Masukkan nama lengkap"
                                class="w-full px-4 py-3 rounded-lg bg-white dark:bg-zinc-900 border dark:border-zinc-600 dark:text-white @error('name') bg-red-600 text-white @enderror focus:border-black focus:outline-none focus:ring-2 focus:ring-dematua transition-all duration-200 ease-in-out">
                            @error('name')
                            <p class="texdematua dark:text-red-400 text-sm mt-2">Nama lengkap tidak valid.</p>
                            @enderror
                        </div>

                        <!-- Username -->
                        <div class="relative">
                            <label for="username"
                                class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Username</label>
                            <input type="text" name="username" value="{{ old('username') }}" required
                                placeholder="Masukkan nama pengguna"
                                class="w-full px-4 py-3 rounded-lg bg-white dark:bg-zinc-900 border dark:border-zinc-600 dark:text-white @error('username') text-white bg-red-600 @enderror focus:border-black focus:outline-none focus:ring-2 focus:ring-dematua transition-all duration-200 ease-in-out">
                            @error('username')
                            <p class="texdematua dark:text-red-400 text-sm mt-2">error : {{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Email: full width input -->
                    <div class="relative">
                        <label for="email"
                            class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            placeholder="Masukkan email"
                            class="w-full px-4 py-3 rounded-lg bg-white dark:bg-zinc-900 border dark:border-zinc-600 dark:text-white @error('email') text-white bg-red-600 @enderror focus:border-black focus:outline-none focus:ring-2 focus:ring-dematua transition-all duration-200 ease-in-out">
                        @error('email')
                        <p class="texdematua dark:text-red-400 text-sm mt-2">error : {{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Grid for Password Fields -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Password -->
                        <div class="relative">
                            <label for="password"
                                class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Kata
                                Sandi</label>
                            <input type="password" id="password" name="password" required
                                placeholder="Masukkan kata sandi"
                                class="w-full px-4 py-3 rounded-lg bg-white dark:bg-zinc-900 border dark:border-zinc-600 dark:text-white @error('password')  input-wrong @enderror focus:border-black focus:outline-none focus:ring-2 focus:ring-dematua transition-all duration-200 ease-in-out">
                            @error('password')
                            <p class="texdematua dark:text-red-400 text-sm mt-2">error : {{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="relative">
                            <label for="password_confirmation"
                                class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Konfirmasi
                                Kata Sandi</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                placeholder="Konfirmasi kata sandi"
                                class="w-full px-4 py-3 rounded-lg bg-white dark:bg-zinc-900 border dark:border-zinc-600 dark:text-white @error('password_confirmation')  input-wrong @enderror focus:border-black focus:outline-none focus:ring-2 focus:ring-dematua transition-all duration-200 ease-in-out">
                            @error('password_confirmation')
                            <p class="texdematua dark:text-red-400 text-sm mt-2">error : {{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Show/Hide Password Checkbox -->
                    <div class="flex items-center">
                        <input type="checkbox" id="togglePasswordVisibility" onclick="togglePasswordFields()"
                            class="mr-2">
                        <label for="togglePasswordVisibility"
                            class="text-sm lg:text-base text-gray-700 dark:text-gray-300">Tampilkan kata sandi</label>
                    </div>

                    <!-- Already have an account -->
                    <div class="text-center mt-6">
                        <span class="text-black dark:text-gray-300">Sudah punya akun?</span>
                        <a href="/login" class="ml-2 text-black dark:text-white font-bold hover:text-dematua">
                            Masuk
                        </a>
                    </div>

                    <!-- Register Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-dematua text-white py-3 px-4 rounded-lg font-semibold hover:bg-dematua/90 cursor-pointer">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Side: Image Section -->
        <div class="signup-right w-full lg:w-1/2 h-full bg-cover bg-center lg:pe-4 lg:py-4">
            <img src="{{ asset('img/auth/auth-bg.png') }}" class="w-full h-full object-cover rounded-xl" alt="Gambar">
        </div>
    </section>

    <script>
        function togglePassword() {
            const passwordField = document.querySelector('input[name="password"]');
            const checkbox = document.getElementById('togglePasswordVisibility');
            passwordField.type = checkbox.checked ? 'text' : 'password';
        }
    </script>
    <script>
        // Set timeout to hide the alert after 5 seconds (5000 milliseconds)
setTimeout(function() {
    var alertBox = document.getElementById('alert-box');
    if (alertBox) {
        alertBox.style.display = 'none';
    }
}, 15000); // 15000 ms = 15 detik
    </script>
    <script src="{{ asset('js/scrollnavbar.js') }}"></script>
    <script src="{{ asset('js/preload.js') }}"></script>
    <script src="{{ asset('js/themelogic.js') }}"></script>
    <script>
        function togglePasswordFields() {
            const passwordField = document.getElementById('password');
            const confirmPasswordField = document.getElementById('password_confirmation');
            const checkbox = document.getElementById('togglePasswordVisibility');

            // Toggle between password and text input type
            if (checkbox.checked) {
                passwordField.type = 'text';
                confirmPasswordField.type = 'text';
            } else {
                passwordField.type = 'password';
                confirmPasswordField.type = 'password';
            }
        }
    </script>
    @vite('resources/js/signup.js')
</body>

</html>