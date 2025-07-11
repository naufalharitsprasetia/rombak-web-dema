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
                <h2 class="text-2xl font-semibold text-zinc-900 dark:text-white">List Anggota Departement</h2>
                <p class="text-sm text-zinc-900 dark:text-white">Total Anggota Departements : {{
                    count($anggota_departements) }}</p>
                <a href="{{ route('anggota_departement.create') }}"
                    class="cursor-pointer inline-block text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg my-4 text-xs px-4 py-2 text-center me-2">Create
                    New Anggota Departement</a>
                <br>

                {{-- flow bite table --}}
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nim
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Departement
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Urutan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Prodi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Asal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anggota_departements as $anggota_departement)
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $anggota_departement->nim }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $anggota_departement->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $anggota_departement->departement->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $anggota_departement->urutan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $anggota_departement->prodi }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $anggota_departement->asal }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex">
                                        <a href="{{ route('departement.show', $anggota_departement->departement->id) }}"
                                            class="inline-block p-2 m-2 font-medium text-dematua dark:text-demamuda hover:underline">Detail</a>

                                        <a href="{{ route('anggota_departement.edit', $anggota_departement->id) }}"
                                            class="inline-block p-2 m-2 font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit</a>
                                        <form
                                            action="{{ route('anggota_departement.destroy', $anggota_departement->id) }}"
                                            method="POST" class="inline-block deleteForm"
                                            id="formDelete-{{ $loop->iteration }}">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="deleteButton cursor-pointer"
                                                data-form-id="{{ $loop->iteration }}">
                                                <span
                                                    class="inline-block p-2 m-2 font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</x-sidebar.layout>