<x-sidebar.layout :title="$title" :active="$active">
    <h1 class="text-lg font-semibold text-gray-900 dark:text-white">Dashboard User</h1>
    <div class="flex flex-col w-full">
        <main class="w-full bg-white dark:bg-zinc-900">
            <div class="mx-auto py-6 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Catatan</h2>
                    <span
                        class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-demamuda/20 text-demamuda dark:bg-demamuda/30 dark:text-demamuda">Admin
                        Panel</span>
                </div>

                <div class="shadow-sm rounded-lg overflow-hidden mb-6 border dark:border-zinc-600">
                    <div class="px-4 py-5 sm:p-6">
                        <ul class="space-y-3" id="recommended-actions">
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-demamuda" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-3 text-sm text-gray-700 dark:text-gray-300">Jika ada bug (error) pada
                                    website ini, atau jika anda memiliki saran, masukkan ataupun kritik. <br> Silahkan
                                    Hubungi +62-812-2059-4202 (Developer).
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Data-Data</h2>
                <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-demamuda rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-demamuda dark:text-gray-400 truncate">
                                            Berita
                                        </dt>
                                        <dd id="points" class="text-lg font-semibold text-gray-900 dark:text-white">
                                            3
                                            Berita
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-200 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <a href="{{ route('post.manage') }}"
                                    class="font-medium text-dematua hover:text-demamuda">Lihat
                                    detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-demamuda rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-demamuda dark:text-gray-400 truncate">
                                            UKM</dt>
                                        <dd id="moisture" class="text-lg font-semibold text-gray-900 dark:text-white">
                                            2
                                            UKM</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-200 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <a href="{{ route('ukm.manage') }}"
                                    class="font-medium text-dematua hover:text-demamuda">Lihat
                                    detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-demamuda rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-demamuda dark:text-gray-400 truncate">
                                            Divisi</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">3 Divisi</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-200 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <a href="{{ route('divisi.index') }}"
                                    class="font-medium text-dematua hover:text-demamuda">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-demamuda rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-demamuda dark:text-gray-400 truncate">
                                            Departement</dt>
                                        {{-- Menampilkan jumlah quiz yang sudah dikerjakan --}}
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">
                                            3 Departement
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-200 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                {{-- Link ke bagian riwayat quiz di halaman yang sama --}}
                                <a href="{{ route('departement.list') }}"
                                    class="font-medium text-dematua hover:text-demamuda">Lihat
                                    detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-demamuda rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-demamuda dark:text-gray-400 truncate">
                                            Anggota Departement</dt>
                                        {{-- Menampilkan jumlah quiz yang sudah dikerjakan --}}
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">
                                            3 Anggota
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-200 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                {{-- Link ke bagian riwayat quiz di halaman yang sama --}}
                                <a href="{{ route('anggota_departement.index') }}"
                                    class="font-medium text-dematua hover:text-demamuda">Lihat
                                    detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-demamuda rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-demamuda dark:text-gray-400 truncate">
                                            Periode</dt>
                                        {{-- Menampilkan jumlah quiz yang sudah dikerjakan --}}
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">
                                            2024-2025
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-200 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                {{-- Link ke bagian riwayat quiz di halaman yang sama --}}
                                <a href="" class="font-medium text-dematua hover:text-demamuda">Lihat
                                    detail</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <x-mitra />
    </div>

</x-sidebar.layout>