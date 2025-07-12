<x-layout :title="$title" :active="$active">
    <style>
        .hero-image {
            --offset: 2px;
            /* Adjusted for larger border */
            background: rgb(71: 71, 71);
            border-radius: 16px;
            /* You can adjust the radius as per your design */
            position: relative;
            overflow: hidden;
        }

        /* Conic gradient for rotating border */
        .hero-image::before {
            content: '';
            background: conic-gradient(transparent 270deg, #16aebc, transparent);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            aspect-ratio: 1;
            width: 200%;
            /* Increased size for larger element */
            animation: rotate 3s linear infinite;
            /* Adjust animation speed */
            z-index: 1;
            /* To keep it behind the image */
        }

        /* Overlay */
        .hero-image::after {
            content: '';
            background: inherit;
            border-radius: inherit;
            position: absolute;
            inset: var(--offset);
            z-index: 5;
        }
    </style>
    {{-- Hero Section --}}
    <div class="hero relative isolate z-10">
        <x-efek.glowatas />
        {{-- header --}}
        <div class="mx-auto max-w-2xl pb-12 sm:pb-32 lg:pb-36">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 dark:text-gray-300 ring-1 ring-gray-900/10 hover:ring-gray-900/20 dark:ring-gray-100/10 dark:hover:ring-gray-100/20">
                    Punya Kritik, Saran atau Masukkan ? <a href="{{ route('aspirasi.index') }}"
                        class="font-semibold text-dematua dark:text-demamuda hover:opacity-85"><span
                            class="absolute inset-0" aria-hidden="true"></span> Sampaikan Aspirasimu <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1
                    class="text-3xl font-semibold tracking-tight text-balance text-gray-900 dark:text-gray-100 sm:text-5xl md:text-6xl lg:text-7xl">
                    <span class="text-dematua dark:text-demamuda">Dewan </span>
                    Mahasiswa <br> <span class="text-dematua dark:text-demamuda">Unida</span> Gontor.
                </h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-500 dark:text-gray-300 sm:text-xl/8">Melangkah
                    dan berinovasi, ciptakan generasi muda yang unggul!
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{route('auth.signup')}}"
                        class="rounded-md bg-dematua px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-demamuda focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dematua">Dukung
                        Kami</a>
                    <a href="#explore" class="text-sm/6 font-semibold text-gray-900 dark:text-gray-200">Jelajahi <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        {{-- snap screenshoot --}}
        <div class="hero-image-wrapper w-full flex justify-center md:-mt-18 mb-20 ">
            <div
                class="hero-image fancy aspect-video rounded-md overflow-hidden max-w-5xl mx-auto relative p-[1.2px] bg-zinc-900">
                <img class="w-full h-full object-cover rounded-2xl block relative z-10"
                    src="{{ asset('img/dashboard-dema.jpg') }}" draggable="false" alt="LangkahHijau" loading="lazy">
                {{-- <img class="w-full h-full object-cover rounded-2xl block dark:hidden relative z-10"
                    src="{{ asset('img/langkahhijau/dashboard.png') }}" draggable="false" alt="LangkahHijau"
                    loading="lazy"> --}}
            </div>
        </div>
        {{-- glow tengah bawah --}}
        <div class="absolute inset-x-0 top-[calc(100%-40rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-78rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#16aebc] to-[#128893] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
    {{-- sec2 --}}
    <div class="sec2 relative isolate" id="explore">
        <x-efek.glowatas />
        {{-- Fokus Utama--}}
        <div class="py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-3xl lg:text-center" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="text-base/7 font-semibold text-dematua dark:text-demamuda">Visi & Misi</h2>
                    <p
                        class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 dark:text-gray-100 sm:text-5xl lg:text-balance">
                        Visi & Misi Dewan Mahasiswa UNIDA Gontor</p>
                    <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-400">Dewan Mahasiswa berfungsi sebagai wadah
                        yang dinamis untuk pengembangan, kepemimpinan, dan kolaborasi mahasiswa, yang berakar pada
                        nilai-nilai Islam. </p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl" data-aos="zoom-in-up"
                    data-aos-duration="1000">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                        <div class="relative pl-16">
                            <dt class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">
                                <div
                                    class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-dematua">
                                    <i class="fa-solid fa-book" style="color:#fff"></i>
                                </div>
                                Visi
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400 ">
                                Menjadikan Dewan Mahasiswa UNIDA Gontor sebagai wadah yang inklusif dan inovatif dalam
                                mengembangkan kepemimpinan, integritas, dan kontribusi mahasiswa yang dipandu oleh
                                prinsip-prinsip Islam.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">
                                <div
                                    class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-dematua">
                                    <i class="fa-solid fa-book" style="color:#fff"></i>
                                </div>
                                Misi 1
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400 ">
                                Mendorong perubahan kecil namun berdampak besar-seperti mengurangi penggunaan plastik,
                                menghemat energi, dan memilih transportasi yang ramah lingkungan-sekaligus menciptakan
                                lingkungan yang mendukung para siswa untuk berkembang secara intelektual, spiritual, dan
                                sosial.
                            </dd>
                        </div>
                        <div class="relative pl-16 lg:col-start-2">
                            <dt class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">
                                <div
                                    class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-dematua">
                                    <i class="fa-solid fa-book" style="color:#fff"></i>
                                </div>
                                Misi 2
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400 ">
                                Memberdayakan mahasiswa melalui jaringan nasional dan internasional, mendukung tujuan
                                universitas untuk menjadi institusi kelas dunia dan meningkatkan keterlibatan mahasiswa
                                secara global.
                            </dd>
                        </div>

                    </dl>
                </div>
            </div>
        </div>
        {{-- surat Fusilat , ayat 53 --}}
        <div class="mx-auto text-center py-14 md:px-8 max-w-4xl mb-6" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="1500">
            <p class="text-zinc-900  dark:text-gray-100 font-arabic font-semibold text-2xl/[3.5rem] md:text-3xl/[3.5rem] lg:text-4xl/[4rem]"
                dir="rtl">وَلْتَكُنْ مِنْكُمْ أُمَّةٌ يَدْعُونَ إِلَى الْخَيْرِ وَيَأْمُرُونَ بِالْمَعْرُوفِ
                وَيَنْهَوْنَ عَنِ الْمُنْكَرِ وَأُولَئِكَ هُمُ الْمُفْلِحُونَ</p>
            <p class="terjemahannya text-dematua dark:text-demamuda text-sm md:text-lg mt-6">“Dan hendaklah ada di
                antara kamu
                segolongan umat yang menyeru kepada kebajikan, menyuruh kepada yang makruf dan mencegah dari yang
                munkar; merekalah orang-orang yang beruntung.” (Q.S. Ali - Imron : 104)</p>
        </div>
        {{-- Mitra --}}
        <div class="py-6 sm:py-10 mb-20" id="mitra">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-center text-lg/8 md:text-2xl/8 font-semibold text-zinc-900 dark:text-gray-100">Supported
                    By :
                </h2>
                <br>
                <x-home.mitra />
            </div>
        </div>
    </div>
    {{-- --}}
    <div class="animasi flex items-center justify-center max-w-7xl mx-auto">
        <canvas id="dotLottie-canvas" class="mx-auto w-80 h-80 md:w-96 md:h-96">
        </canvas>
    </div>
    {{-- sec blog --}}
    <x-post.article :active="$active" class="mt-20" :postUtama="$postUtama" :postsPutri="$postsPutri"
        :postsPutra="$postsPutra" />
    {{-- Count Section --}}
    <div class="count-section text-zinc-900 dark:text-gray-100 mt-16">
        <div
            class="count flex flex-wrap md:flex-nowrap gap-12 max-w-5xl px-12 py-8 mx-auto justify-center md:justify-between items-center">
            <div class="count-card text-center">
                <h2 id="jumlahPengurus" class="font-bold text-5xl"></h2>
                <span class="font-bold text-xl">Pengurus</span>
            </div>
            <div class="count-card text-center">
                <h2 id="jumlahDepartemen" class="font-bold text-5xl"></h2>
                <span class="font-bold text-xl">Departemen</span>
            </div>
            <div class="count-card text-center">
                <h2 id="jumlahUKM" class="font-bold text-5xl"></h2>
                <span class="font-bold text-xl">UKM</span>
            </div>
            <div class="count-card text-center">
                <h2 id="jumlahMahasiswa" class="font-bold text-5xl"></h2>
                <span class="font-bold text-xl">Mahasiswa</span>
            </div>
        </div>
    </div>
    {{-- sec.3 --}}
    <div class="sec3 relative isolate">
        <x-efek.glowatas />
        {{-- BENTO GRID --}}
        <div class="pb-20 sm:py-32">
            <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                <p data-aos="fade-up" data-aos-duration="2000"
                    class="mx-auto mt-2 mb-8 max-w-2xl text-center text-4xl font-semibold text-balance text-dematua dark:text-demamuda sm:text-5xl">
                    <span class="text-zinc-900 dark:text-gray-100 ">Bersama Dewan Mahasiswa</span><br>
                    <span class="text-3xl"> Melangkah maju membangun peradaban!</span>
                </p>
                {{-- Video Profil Section --}}
                <div class="flex justify-center items-center mx-auto pt-8">
                    <iframe width="840" height="460" src="https://www.youtube.com/embed/LkM0EQjiVyM?si=Evdj5ncBUN6EhFIG"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <x-efek.glowbawah />
    </div>
    {{-- sec faq --}}
    <section class="faq-container relative z-50 isolate px-4 sm:px-6 lg:px-16 overflow-visible">
        <x-efek.glowatas />
        <div class="max-w-4xl mx-auto relative pb-32">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="text-base text-dematua dark:text-demamuda font-semibold tracking-wide uppercase">FAQ</h2>
                <p class="mt-2 text-3xl sm:text-4xl leading-8 font-bold tracking-tight text-gray-900 dark:text-white">
                    Pertanyaan yang Sering Diajukan
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 mx-auto">
                    Temukan jawaban untuk pertanyaan umum tentang LangkahHijau dan fitur kami
                </p>
            </div>
            <x-home.faq />
        </div>
        <x-efek.glowbawah />
    </section>
    {{-- sec last --}}
    <section class="cta-container relative isolate pb-36 px-4 sm:px-6 lg:px-16 z-[100]">
        <div class="max-w-4xl mx-auto flex items-center justify-between" data-aos="fade-up" data-aos-duration="2000">
            <div class="flex-1 dark:text-white">
                <h2 class="text-md md:text-4xl font-bold mb-4">Punya Gagasan untuk Kampus yang Lebih Baik?</h2>
                <p class="mb-6">Dewan Mahasiswa siap jadi wadah aspirasimu.</p>
            </div>
            <div class="flex-1 text-right">
                <a href="{{ route('aspirasi.index') }}"
                    class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-lg bg-dematua text-white hover:bg-demamuda cursor-pointer">
                    Salurkan Aspirasimu!
                    <svg class="ml-2 -mr-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    @vite('resources/js/home.js')
    @vite('resources/js/countUp.js')
</x-layout>