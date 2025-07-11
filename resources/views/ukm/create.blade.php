<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
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
                <a href="{{ route('ukm.manage') }}" class="mb-4 p-2 text-sm text-dematua hover:text-demamuda">
                    <- Kembali</a>
                        <h2 class="text-2xl font-semibold text-zinc-900 dark:text-white">Create UKM</h2>
                        <br>
                        {{-- Form Create --}}
                        <section class="bg-white dark:bg-gray-900">
                            <div class="py-6 px-4 mx-auto max-w-2xl">
                                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a UKM</h2>
                                {{-- form --}}
                                <form method="post" enctype="multipart/form-data" id="formPost">
                                    @csrf
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="nama"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                UKM</label>
                                            <input type="text" name="nama" id="nama"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nama UKM.." value="{{ old('nama') }}" required>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="logo">Upload logo UKM (max.5mb)</label>
                                            <input
                                                class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                id="logo" name="logo" type="file" required>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="kategori"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                            <select id="kategori" name="kategori" required
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected disabled>Select category</option>
                                                <option value="Olah Raga">Olah Raga</option>
                                                <option value="Olah Rasa">Olah Rasa</option>
                                                <option value="Olah Pikir">Olah Pikir</option>
                                                <option value="Olah Dzikir">Olah Dzikir</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="sm:col-span-2">
                                        <label for="jumlah_anggota"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                                            Anggota</label>
                                        <input type="text" name="jumlah_anggota" id="jumlah_anggota"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Jumlah Anggota..." value="{{ old('jumlah_anggota') }}">
                                    </div>
                                    <br>
                                    <div class="sm:col-span-2">
                                        <label for="link_sosmed"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link
                                            Sosial Media</label>
                                        <input type="text" name="link_sosmed" id="link_sosmed"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Link Sosial media..." value="{{ old('link_sosmed') }}">
                                    </div>
                                    <br>
                                    <div class="sm:col-span-2">
                                        <label for="editor"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskrispsi
                                            UKM</label>
                                        <div id="editor" style="min-height: 200px;"
                                            class="bg-white dark:bg-gray-700 p-2 text-gray-900 dark:text-white border border-gray-300 rounded">
                                        </div>
                                        <input type="hidden" name="deskripsi" id="deskripsi">
                                    </div>

                                    <button type="submit"
                                        class="cursor-pointer inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                        Add UKM
                                    </button>
                                </form>
                            </div>
                        </section>
            </div>
        </main>
    </div>
</x-sidebar.layout>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const haha = document.querySelector('.ql-toolbar.ql-snow');
        if(haha !== null){
            haha.style.backgroundColor = '#fff';
        }
    });

    const quill = new Quill('#editor', {
        theme: 'snow',
    });

    // Simpan isi Quill ke input hidden sebelum submit
    const form = document.getElementById('formPost');
    form.onsubmit = () => {
        const content = quill.root.innerHTML.trim();
        if (content === '<p><br></p>' || content === null) {
            alert('Isi deskrispi tidak boleh kosong');
            e.preventDefault();
            return false;
        }
        document.querySelector('#deskrispi').value = content;
    };
</script>