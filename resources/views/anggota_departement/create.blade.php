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
                        <h2 class="text-2xl font-semibold text-zinc-900 dark:text-white">Create Anggota Departement</h2>
                        <br>
                        {{-- Form Create --}}
                        <section class="bg-white dark:bg-gray-900">
                            <div class="py-6 px-4 mx-auto max-w-2xl">
                                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Anggota
                                    Departement
                                </h2>
                                {{-- form --}}
                                <form method="post" enctype="multipart/form-data" id="formPost">
                                    @csrf
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="nim"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM*</label>
                                            <input type="text" name="nim" id="nim"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nomor Induk Mahasiswa..." value="{{ old('nim') }}"
                                                required>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="nama"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama*</label>
                                            <input type="text" name="nama" id="nama"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nama.." value="{{ old('nama') }}" required>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="departement_id"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departements*</label>
                                            <select id="departement_id" name="departement_id" required
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected disabled>Pilih departemen..</option>
                                                @foreach ($departements as $departement)
                                                <option value="{{ $departement->id }}">{{ $departement->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="image">Upload foto (max.5mb) (opsional)</label>
                                            <input
                                                class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                id="image" name="image" type="file">
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="urutan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Urutan*</label>
                                            <input type="number" name="urutan" id="urutan"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Urutan..." value="{{ old('urutan') }}" required>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="prodi"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prodi*</label>
                                            <input type="text" name="prodi" id="prodi"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Program Studi..." value="{{ old('prodi') }}" required>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="asal"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal
                                            </label>
                                            <input type="text" name="asal" id="asal"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Kota asal..." value="{{ old('asal') }}">
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="cursor-pointer inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                        Add Anggota Departement
                                    </button>
                                </form>
                            </div>
                        </section>
            </div>
        </main>
    </div>
</x-sidebar.layout>