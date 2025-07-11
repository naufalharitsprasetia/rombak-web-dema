<x-layout :title="$title" :active="$active">
    <x-efek.glowatas />
    {{-- ukm --}}
    <div class="ukm-section min-h-screen overflow-hidden z-10 text-gray-900 dark:text-white">
        <section class="ukm max-w-7xl mx-auto px-10">
            <div class="mx-auto max-w-screen-xl">
                <div class="max-w-screen-md mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Unit
                        Kegiatan Mahasiswa (UKM)</h2>
                    <p class="text-gray-500 sm:text-lg dark:text-gray-400">UKM adalah organisasi mahasiswa santri
                        yang dinaungi Dewan Mahasiswa dalam meningkatkan kesamaan minat, kegemaraan, kreativitas dan
                        orientasi aktivitas penyaluran kegiatan ekstrakulikuler didalam kampus. UKM di UNIDA
                        Gontor telah dikelompokkan kedalam 4 bidang :
                    </p>
                </div>
                <div class="space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-cyan-100 lg:h-12 lg:w-12 dark:bg-cyan-900">
                            <svg class="w-5 h-5 text-cyan-600 lg:w-6 lg:h-6 dark:text-cyan-300" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Olah Fikir</h3>
                        <p class="text-gray-500 dark:text-gray-400">Olah fikir merupakan sebuah aktivitas yang
                            membentuk mahasiswa dalam hal kenseptual, persepsi dan informasi, dalam meningkatkan
                            potensi berpendapat, dan menuliskan pikirannya dalam gagasan dan kelimuannya.
                        </p>
                    </div>
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-cyan-100 lg:h-12 lg:w-12 dark:bg-cyan-900">
                            <svg class="w-5 h-5 text-cyan-600 lg:w-6 lg:h-6 dark:text-cyan-300" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Olah Dzikir</h3>
                        <p class="text-gray-500 dark:text-gray-400">Olah Dzikir merupakan unsur yang paling
                            diutamakan dalam kehidupan mahasiswa untuk mengasah jiwa spritual, kegiatan ini bentuk
                            integritas antara kegiatan rohani dan jasmani mahasiswa dengan menjadikan nilai agama
                            sebagai landasan</p>
                    </div>
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-cyan-100 lg:h-12 lg:w-12 dark:bg-cyan-900">
                            <svg class="w-5 h-5 text-cyan-600 lg:w-6 lg:h-6 dark:text-cyan-300" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Olah Rasa</h3>
                        <p class="text-gray-500 dark:text-gray-400">Olah rasa merupakan kegiatan yang melatih
                            kemampuan mahasiswa dalam
                            berkesenian dan berkebudayaan kemudian dimanifestasikan menjadi sebuah mahakarya yang
                            berkualitas. seni yang dilatih pun merupakan seni murni dan seni terapan yang dapat
                            dirasakan dari nilai keindahan</p>
                    </div>
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-cyan-100 lg:h-12 lg:w-12 dark:bg-cyan-900">
                            <svg class="w-5 h-5 text-cyan-600 lg:w-6 lg:h-6 dark:text-cyan-300" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Olah Raga
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400"> merupakan aktivitas jasmani yang dilakukan
                            untuk melatih kegiatan fisik secara terprogram dengan tujuan meningkatkan keterampilan
                            nilai-nilai fungsional yang mencakup aspek kognitif, efektif, dan sosial bagi mahasiswa.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="mt-8 py-16 mx-auto max-w-7xl text-center">
            <div class="toogle-ukm flex justify-center items-center mx-auto ">
                <a href="{{ route('ukm.index') }}" class="py-3 px-4 border border-demamuda
                 {{  $ukm_active == 'putra' ? 'bg-demamuda text-white' : 'hover:bg-demamuda hover:text-white' }}">
                    PUTRA
                </a>
                <a href="{{ route('ukm.index-putri') }}" class="py-3 px-4 border border-demamuda
                {{  $ukm_active == 'putri' ? 'bg-demamuda text-white' : 'hover:bg-demamuda hover:text-white' }}">
                    PUTRI
                </a>
            </div>
        </div>
        @foreach ($ukms as $category => $items)
        <div class="px-10 max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-2 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Divisi {{ $category }}</h2>
        </div>
        <div class="flex flex-wrap ukm-groups gap-8 justify-evenly items-center mb-32">
            @foreach ($items as $ukm)
            <a href="{{ route('ukm.show', $ukm->id) }}" class="relative group cursor-pointer">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-red-600 to-violet-600 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200">
                </div>
                <div
                    class="relative flex flex-col leading-none bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 ring-1 ring-gray-900/5 ukm-card text-gray-900 dark:text-white overflow-hidden max-w-xs">
                    <img src="{{ asset('storage/' . $ukm->logo) }}" class="w-full" alt="">
                    <h3 class="mx-4 mt-2 font-semibold text-lg md:text-xl">{{$ukm->nama}}</h3>
                    <p class="m-4 text-gray-600 dark:text-gray-300 text-sm leading-relaxed line-clamp-3">KSEI adalah
                        singkatan dari Kelompok Studi Ekonomi Islam yang merupakan istilah terhadap komunitas kajian
                        ekonomi Syari'ah yang tergabung dalam FoSSEI (Forum Silaturahmi Ekonomi Islam). KSEI adalah
                        sebuah kesatuan terkecil dari besarnya organisasi kami dalam skala Nasional yaitu FoSSEI
                        atau Forum Silaturrahim Studi Ekonomi Islam. FOSSEI adalah organisasi mahasiswa terbesar
                        sedunia yang berbicara tentang Ekonomi dari berbagai macam sudut pandang dan sudut pikir,
                        mulai dari masalah klasik sampai kontemporer dengan Insight dari seluruh Nusantara</p>
                </div>
            </a>
            @endforeach
        </div>
        @endforeach
    </div>
</x-layout>