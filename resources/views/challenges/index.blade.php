<x-layout :title="$title" :active="$active">

    <div class="container mx-auto p-4">
        <p class="text-center mb-2 text-green-600 dark:text-green-400 font-semibold">LangkahHijau</p>
        <h1 class="text-3xl font-bold mb-6 pb-5 text-center text-gray-900 dark:text-white">Challenge</h1>

        @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p>{{ session('success') }}</p>
        </div>
        @endif
        @if (session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
            <p>{{ session('error') }}</p>
        </div>
        @endif

        @if (isset($challenges) && $challenges->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 pt-5">
            @foreach ($challenges as $challenge)
            {{-- Struktur SATU CARD yang sudah diisi konten seperti di atas --}}
            <div
                class="bg-white dark:bg-zinc-900 border border-gray-300 dark:border-zinc-700 rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="flex-shrink-0">
                    <img class="w-full h-72 object-cover" src="{{ asset('img/challenges') }}/{{ $challenge->image }}"
                        alt="{{ $challenge->title }}">
                </div>
                <div class="p-4 md:p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-center text-sm text-gray-600 mb-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="font-medium text-green-600 dark:text-green-400">{{ $challenge->duration_days ??
                                'N/A' }} Hari</span>
                        </span>
                        <span>
                            <span class="font-medium text-green-600 dark:text-green-400"><i
                                    class="fa-solid fa-star me-1"></i> {{ $challenge->green_points }}
                                Green Points</span>
                        </span>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900 dark:text-white mb-2">
                        {{ $challenge->badge_icon }} {{ $challenge->title }}
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm flex-grow mb-3">
                        {{ Str::limit($challenge->description, 150) }}
                    </p>
                    <div class="mt-auto pt-3 border-t border-gray-200">
                        <a href="{{ route('challenges.show', $challenge->id) }}"
                            class="block w-full py-2 group text-center">
                            {{-- group kita letakkan di <a> agar bisa mentarget child (span dan svg) saat hover --}}
                                <span
                                    class="inline-flex items-center  text-green-600 dark:text-green-400 group-hover:text-green-500 font-semibold transition-all duration-200 ease-in-out">
                                    {{-- Warna dasar text-green-600, saat hover di group (<a>) menjadi text-green-500
                                        --}}
                                        <span>Detail</span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 ml-1.5 transform transition-transform duration-200 ease-in-out group-hover:translate-x-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                        {{-- SVG panah, ml-1.5 untuk sedikit jarak, group-hover:translate-x-1 untuk
                                        animasi panah bergerak ke kanan saat hover --}}
                                </span>
                            </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-center text-gray-600">Belum ada tantangan tersedia saat ini.</p>
        @endif
    </div>
</x-layout>