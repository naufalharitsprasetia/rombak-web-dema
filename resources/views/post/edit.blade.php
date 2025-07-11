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
                <a href="{{ route('post.manage') }}" class="mb-4 p-2 text-sm text-dematua hover:text-demamuda">
                    <- Kembali</a>
                        <h2 class="text-2xl font-semibold text-zinc-900 dark:text-white">Edit Post</h2>
                        <br>
                        {{-- Form Create --}}
                        <section class="bg-white dark:bg-gray-900">
                            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Post</h2>
                                {{-- edit --}}
                                <form action="{{ route('post.update', $post->id) }}" method="POST"
                                    enctype="multipart/form-data" id="formPost">
                                    @csrf
                                    @method('put')
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="title"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title*
                                                (max.200 character)</label>
                                            <input type="text" name="title" id="title" maxlength="200"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Write Post title..."
                                                value="{{ old('title', $post->title) }}" required>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="image">Upload image (max.5mb)</label>
                                            <input
                                                class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                id="image" name="image" type="file">
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="category"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                            <select id="category" name="category" required
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="DEMA" {{ $post->category == 'DEMA' ?
                                                    'selected' : '' }}>DEMA</option>
                                                <option value="UNIDA GONTOR" {{ $post->category == 'UNIDA GONTOR' ?
                                                    'selected' : '' }}>UNIDA GONTOR</option>
                                            </select>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="sm:col-span-2">
                                        <label for="link_dokumentasi"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link
                                            Dokumentasi</label>
                                        <input type="text" name="link_dokumentasi" id="link_dokumentasi"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Put Link Here..."
                                            value="{{ old('link_dokumentasi', $post->link_dokumentasi) }}">
                                    </div>
                                    <br>
                                    <div class="sm:col-span-2">
                                        <label for="editor"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                                        <div id="editor" style="min-height: 200px;"
                                            class="bg-white dark:bg-gray-700 text-gray-900 dark:text-white p-2 border border-gray-300 rounded">
                                            {!!
                                            $post->body !!}</div>
                                        <input type="hidden" name="body" id="body">
                                    </div>
                                    <button type="submit"
                                        class="cursor-pointer inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                        Update Post
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
        theme: 'snow'
    });
    // Simpan isi Quill ke input hidden sebelum submit
    const form = document.getElementById('formPost');
    form.onsubmit = () => {
        const content = quill.root.innerHTML.trim();
        if (content === '<p><br></p>' || content === null) {
            alert('Isi body tidak boleh kosong');
            e.preventDefault();
            return false;
        }
        document.querySelector('#body').value = content;
    };
</script>