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
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.13/dist/lenis.css">
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
    <section class="login flex flex-col-reverse lg:flex-row h-screen bg-white dark:bg-zinc-900">
        <!-- Left Side: Login Form -->
        <div class="login-left w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12 relative ">
            <div class="max-w-md w-full mx-auto">
                <!-- Logo Section -->
                <div class="mb-6 items-center">
                    <div class="title flex  mb-2 items-center">
                        <a class="flex items-center justify-center w-8 h-8 mr-4 bg-dematua text-white rounded-full"
                            href="{{ route('home.index') }}">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <h1 class="text-xl lg:text-3xl font-semibold pr-3 text-black dark:text-white">Masuk
                        </h1>
                    </div>
                    <p class="text-gray-500">Masuk ke Website kami dan dapatkan fitur-fitur menarik di sini.</p>
                </div>
                @if (session('success'))
                <div id="alert-box"
                    class="alert alert-success flex flex-row bg-[#06C790] text-[#ffffff] rounded-lg my-3">
                    <div class="my-auto text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-check-circle">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg>
                    </div>
                    <div class="font-bold text-lg">
                        {{ session('success') }}
                        <!-- Pastikan menggunakan $message untuk menampilkan pesan -->
                    </div>
                </div>
                @endif
                <form action="/login" method="POST" class="space-y-6">
                    @csrf

                    <!-- Email/Username Input -->
                    <div class="relative">
                        <label for="email"
                            class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Email/Username</label>
                        <input type="text" name="username_or_email" value="{{ old('username_or_email') }}" required
                            placeholder="Masukkan email atau username"
                            class="w-full px-4 py-3 rounded-lg bg-white dark:bg-zinc-900 border dark:border-zinc-600 text-black dark:text-white @error('username_or_email') border-red-500 @enderror focus:border-black focus:outline-none focus:ring-2 focus:ring-dematua transition-all duration-200 ease-in-out">
                        @error('username_or_email')
                        <p class="text-red-500 dark:text-red-400 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="relative">
                        <label for="password"
                            class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Kata
                            Sandi</label>
                        <input type="password" name="password" required placeholder="Masukkan kata sandi"
                            class="w-full px-4 py-3 rounded-lg bg-white border dark:border-zinc-600 dark:bg-zinc-900 text-black dark:text-white @error('password') border-red-500 @enderror focus:border-black focus:outline-none focus:ring-2 focus:ring-dematua transition-all duration-200 ease-in-out">
                        @error('password')
                        <p class="text-red-500 dark:text-red-400 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Show/Hide Password Checkbox -->
                    <div class="flex items-center">
                        <input type="checkbox" id="togglePasswordVisibility" onclick="togglePassword()" class="mr-2">
                        <label for="togglePasswordVisibility"
                            class="text-sm lg:text-base text-gray-700 dark:text-gray-300">Tampilkan kata sandi</label>
                    </div>

                    <div class="text-center mt-6">
                        <span class="text-black dark:text-gray-300">Belum punya akun?</span>
                        <a href="{{ route('auth.signup') }}"
                            class="ml-2 text-black dark:text-white font-bold hover:text-dematua">
                            Daftar
                        </a>
                    </div>

                    <!-- Login Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-dematua text-white py-3 px-4 rounded-lg font-semibold hover:bg-dematua/90 cursor-pointer">
                            Masuk
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <!-- Right Side: Image Section -->
        <div class="login-right w-full lg:w-1/2 h-full bg-cover bg-center lg:pe-4 lg:py-4">
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
        // Password reveal toggle
        const togglePassword = document.querySelector("#togglePassword");
        const passwordInput = document.querySelector("#password");
        togglePassword.addEventListener("click", function () {
            const type =
                passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);
            this.classList.toggle("fa-eye-slash");
        });

        function togglePasswordVisibility(passwordId, toggleIconId) {
            const passwordInput = document.getElementById(passwordId);
            const toggleIcon = document.getElementById(toggleIconId);
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            }
        }
    </script>
    @vite('resources/js/login.js')
</body>

</html>