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
                    Punya Kritik, Saran atau Masukkan ? <a href="{{ route('quizzes.index') }}"
                        class="font-semibold text-dematua dark:text-demamuda hover:opacity-85"><span
                            class="absolute inset-0" aria-hidden="true"></span> Sampaikan Aspirasimu <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1
                    class="text-3xl font-semibold tracking-tight text-balance text-gray-900 dark:text-gray-100 sm:text-5xl md:text-6xl lg:text-7xl">
                    <span class="text-dematua dark:text-demamuda">Dewan</span>
                    Mahasiswa <span class="text-dematua dark:text-demamuda">Unida</span> Gontor.
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
                    src="{{ asset('img/dashboard-dema.png') }}" draggable="false" alt="LangkahHijau" loading="lazy">
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
                        Visi dan Misi Dewan Mahasiswa Unida Gontor</p>
                    <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-400">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Sit obcaecati cumque molestias delectus Sit obcaecati cumque molestias
                        delectus fugiat. </p>
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
                                Menjadikan Dewan Mahasiswa Universitas Darussalam Gontor sebagai wadah inklusif yang
                                berperan inspiratif, inklusif, dan inovatif dalam membangun karakter, kompetensi, dan
                                kontribusi mahasiswa, guna menciptakan generasi pemimpin yang berintegritas, berwawasan
                                luas, dan berkomitmen pada nilai-nilai Islami.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">
                                <div
                                    class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-dematua">
                                    <i class="fa-solid fa-bolt" style="color:white"></i>
                                </div>
                                Misi 1
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400 ">
                                Mengajak pengguna untuk
                                memulai perubahan dari
                                hal kecil—seperti mengurangi sampah plastik, hemat energi, hingga memilih transportasi
                                ramah lingkungan.Membangun lingkungan yang kondusif bagi seluruh mahasiswa untuk
                                mengembangkan potensi secara optimal, baik dalam aspek intelektual, spiritual, maupun
                                sosial, sehingga dapat menjadi pemimpin yang inspiratif dan membawa perubahan positif
                                bagi lingkungan.
                            </dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">
                                <div
                                    class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-dematua">
                                    <i class="fa-solid fa-hand-holding-heart" style="color:white"></i>
                                </div>
                                Misi 2
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400 ">
                                Membangun mahasiswa Universitas Darussalam Gontor sebagai individu yang unggul dan
                                berdaya saing melalui pengembangan jejaring antar kampus, baik di tingkat nasional
                                maupun internasional, sebagai dukungan terhadap misi internasionalisasi kampus pada
                                tingkat (world-class university) dan memperluas eksistensi mahasiswa di berbagai kancah
                                global.
                            </dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">
                                <div
                                    class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-dematua">
                                    <i class="fa-solid fa-user-group" style="color:white"></i>
                                </div>
                                Misi 3
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">
                                Membangun kesadaran kritis
                                tentang dampak
                                kebiasaan harian terhadap lingkungan dan kesehatan, agar pengguna tidak hanya beraksi,
                                tapi juga lebih reflektif.
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
                dir="rtl">وَلَا تُفْسِدُوْا
                فِى الْاَرْضِ بَعْدَ اِصْلَاحِهَا وَادْعُوْهُ خَوْفًا وَّطَمَعًاۗ اِنَّ رَحْمَتَ اللّٰهِ قَرِيْبٌ مِّنَ
                الْمُحْسِنِيْنَ</p>
            <p class="terjemahannya text-dematua dark:text-demamuda text-sm mt-6">“Janganlah kamu berbuat kerusakan di
                bumi
                setelah diatur dengan baik. Berdoalah
                kepada-Nya dengan rasa takut dan penuh harap. Sesungguhnya rahmat Allah sangat dekat dengan orang-orang
                yang berbuat baik.” (Q.S. Al-A’raf Ayat 56)</p>
        </div>
        {{-- Mitra --}}
        <div class="py-6 sm:py-10 mb-20" id="mitra">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-center text-lg/8 md:text-2xl/8 font-semibold text-zinc-900 dark:text-gray-100">Sponsor
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
    <x-post.article :active="$active" class="mt-20" :postUtama="$postUtama" :posts="$posts" />
    {{-- sec.3 --}}
    <div class="sec3 relative isolate">
        <x-efek.glowatas />
        {{-- BENTO GRID --}}
        <div class="pt-24 pb-20 sm:py-32">
            <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                <p data-aos="fade-up" data-aos-duration="2000"
                    class="mx-auto mt-2 max-w-2xl text-center text-4xl font-semibold text-balance text-dematua dark:text-demamuda sm:text-5xl">
                    <span class="text-zinc-900 dark:text-gray-100">Bagaimana</span><br>
                    LangkahHijau Berdampak ?
                </p>
                <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2" data-aos="fade-up"
                    data-aos-duration="2000">
                    <div class="relative lg:row-span-2">
                        <div
                            class="absolute inset-px rounded-lg bg-white dark:bg-zinc-900 border border-gray-300 dark:border-zinc-700 lg:rounded-l-4xl">
                        </div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                            <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                                <p
                                    class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-gray-50 max-lg:text-center">
                                    Sadar Lingkungan</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-400 max-lg:text-center">
                                    LangkahHijau
                                    menyajikan konten edukatif yang relevan dan mudah diakses untuk mengajak masyarakat
                                    lebih sadar akan pentingnya menjaga bumi melalui gaya hidup berkelanjutan.</p>
                            </div>
                            <div class="@container relative min-h-120 w-full grow max-lg:mx-auto max-lg:max-w-sm">
                                <div
                                    class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] bg-gray-900 shadow-2xl">
                                    <img class="size-full object-cover object-top block dark:hidden"
                                        src="{{ asset('img/mockup-hp.png') }}" alt="">
                                    <img class="size-full object-cover object-top hidden dark:block"
                                        src="{{ asset('img/mockup-hp-dark.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 lg:rounded-l-4xl">
                        </div>
                    </div>
                    <div class="relative max-lg:row-start-1">
                        <div
                            class="absolute inset-px rounded-lg bg-white dark:bg-zinc-900 border border-gray-300 dark:border-zinc-700 max-lg:rounded-t-4xl">
                        </div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                            <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                <p
                                    class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-gray-50 max-lg:text-center">
                                    Aksi Nyata</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-400 max-lg:text-center">
                                    Dengan sistem
                                    tantangan harian dan kuis interaktif, pengguna didorong untuk mengambil tindakan
                                    kecil namun konsisten, yang dapat membentuk kebiasaan ramah lingkungan dalam
                                    kehidupan sehari-hari.</p>
                            </div>
                            <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                                <img class="lg:h-[min(152px,40cqw)] object-cover mx-auto w-[70%] h-auto"
                                    src="{{ asset('img/aksi-nyata.png') }}" alt="">
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 max-lg:rounded-t-4xl">
                        </div>
                    </div>
                    <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                        <div
                            class="absolute inset-px rounded-lg bg-white dark:bg-zinc-900 border border-gray-300 dark:border-zinc-700">
                        </div>
                        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                            <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                <p
                                    class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-gray-50 max-lg:text-center">
                                    Edukasi Bermakna</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-400 max-lg:text-center">
                                    Alih-alih hanya
                                    memberi informasi, LangkahHijau merancang edukasi yang engaging dan kontekstual,
                                    agar setiap individu merasa terlibat dan terdorong untuk bertindak, bukan sekadar
                                    tahu.</p>
                            </div>
                            <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                                <img class="lg:h-[min(152px,40cqw)] object-cover mx-auto w-[70%] h-auto"
                                    src="{{ asset('img/edukasi-image.png') }}" alt="">
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5">
                        </div>
                    </div>
                    <div class="relative lg:row-span-2">
                        <div
                            class="absolute inset-px rounded-lg bg-white dark:bg-zinc-900 border border-gray-300 dark:border-zinc-700 max-lg:rounded-b-4xl lg:rounded-r-4xl">
                        </div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                            <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                                <p
                                    class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-gray-50 max-lg:text-center">
                                    Gerakan Bersama</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-400 max-lg:text-center">
                                    LangkahHijau membuka
                                    ruang bagi kolaborasi dan aksi kolektif, memperkuat semangat gotong royong menuju
                                    masa depan yang lebih hijau dan sehat, dimulai dari aksi individu.</p>
                            </div>
                            <div
                                class="@container relative min-h-120 w-full grow max-lg:mx-auto max-lg:max-w-sm content-center">
                                <img class="p-4 block dark:hidden" src="{{ asset('img/mockup-laptop.png') }}" alt="">
                                <img class="p-4 hidden dark:block" src="{{ asset('img/mockup-laptop-dark.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 max-lg:rounded-b-4xl lg:rounded-r-4xl">
                        </div>
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
    </section>
    {{-- sec last --}}
    <section class="cta-container relative isolate mb-36 px-4 sm:px-6 lg:px-16">
        <div class="max-w-4xl mx-auto flex items-center justify-between" data-aos="fade-up" data-aos-duration="2000">
            <div class="flex-1 dark:text-white">
                <h2 class="text-md md:text-4xl font-bold mb-4">Siap untuk Menghijaukan Dunia?</h2>
                <p class="mb-6">Mulai dari langkah kecil, untuk bumi yang lebih hijau.</p>
            </div>
            <div class="flex-1 text-right">
                <a href="{{ route('auth.signup') }}"
                    class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-lg bg-dematua text-white hover:bg-demamuda cursor-pointer">
                    Daftar Sekarang
                    <svg class="ml-2 -mr-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <x-efek.glowbawah />
    </section>
    @vite('resources/js/home.js')
</x-layout>