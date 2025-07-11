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
                <a href="{{ route('departement.manage') }}" class="mb-4 p-2 text-sm text-dematua hover:text-demamuda">
                    <- Kembali</a>
                        <h2 class="text-2xl font-semibold text-zinc-900 dark:text-white">Edit Departement</h2>
                        <br>
                        {{-- Form Create --}}
                        <section class="bg-white dark:bg-gray-900">
                            <div class="py-6 px-4 mx-auto max-w-2xl">
                                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update a Departement
                                </h2>
                                {{-- form --}}
                                <form action="{{ route('departement.update', $departement->id) }}" method="post"
                                    enctype="multipart/form-data" id="formPost">
                                    @method('put')
                                    @csrf
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="nama"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                Departement*</label>
                                            <input type="text" name="nama" id="nama"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nama Departement.."
                                                value="{{ old('nama', $departement->nama) }}" required>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="division_id"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Divisi*</label>
                                            <select id="division_id" name="division_id" required
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected disabled>Pilih divisi..</option>
                                                @foreach ($divisions as $divisi)
                                                <option value="{{ $divisi->id }}" {{ $departement->division->id ==
                                                    $divisi->id ? 'selected' : '' }}>{{ $divisi->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="image">Upload foto bersama/departement (max.5mb)</label>
                                            <input
                                                class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                id="image" name="image" type="file">
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="urutan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Urutan*</label>
                                            <input type="number" name="urutan" id="urutan"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Urutan..."
                                                value="{{ old('urutan', $departement->urutan) }}" required>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="singkatan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Singkatan</label>
                                            <input type="text" name="singkatan" id="singkatan"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Singkatan..."
                                                value="{{ old('singkatan', $departement->singkatan) }}">
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="deskripsi"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                                            </label>
                                            <input type="text" name="deskripsi" id="deskripsi"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Deskripsi..."
                                                value="{{ old('deskripsi', $departement->deskripsi) }}">
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="cursor-pointer inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                        Update Departement
                                    </button>
                                </form>
                            </div>
                        </section>
            </div>
        </main>
    </div>
</x-sidebar.layout>