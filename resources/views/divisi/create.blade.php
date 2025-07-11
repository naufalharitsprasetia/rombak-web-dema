<x-sidebar.layout :title="$title" :active="$active">
    @if (session()->has('success'))
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="alert alert-success col-lg-12 mt-4" role="alert">
            {{ session('success') }}
        </div>
    </div>
    @endif
    @if ($errors->any())
    <div class="mx-auto max-w-7xl">
        <div class="alert alert-error col-lg-12 mt-4" role="alert">
            @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
        </div>
    </div>
    @endif
    <!-- Konten Utama -->
    <div class="flex flex-col w-full">
        <main class="w-full">
            <div class="mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Isi Halaman -->
                <a href="{{ route('divisi.index') }}" class="mb-4 p-2 text-sm text-dematua hover:text-demamuda">
                    <- Kembali</a>
                        <h2 class="text-2xl font-semibold text-zinc-900 dark:text-white">Create Divisi</h2>
                        <br>
                        {{-- Form Create --}}
                        <section class="bg-white dark:bg-gray-900">
                            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a Divisi</h2>
                                {{-- form --}}
                                <form method="post" enctype="multipart/form-data" id="formPost">
                                    @csrf
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="nama"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                Divisi*</label>
                                            <input type="text" name="nama" id="nama"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nama Divisi.." value="{{ old('nama') }}" required>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="urutan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Urutan*
                                            </label>
                                            <input type="number" name="urutan" id="urutan"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="urutan Divisi.." value="{{ old('urutan') }}" required>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="singkatan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Singkatan</label>
                                            <input type="text" name="singkatan" id="singkatan"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Singkatan..." value="{{ old('singkatan') }}">
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="deskripsi"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                                            </label>
                                            <input type="text" name="deskripsi" id="deskripsi"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Deskripsi..." value="{{ old('deskripsi') }}">
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="cursor-pointer inline-block items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                        Add Division
                                    </button>
                                </form>
                            </div>
                        </section>
            </div>
        </main>
    </div>
</x-sidebar.layout>
