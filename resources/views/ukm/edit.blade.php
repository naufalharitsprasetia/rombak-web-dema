@extends('layout.main')

@section('content')
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Edit UKM</h1>

    <div class="mx-4 md:mx-6 lg:mx-16 bg-slate-200 p-4 md:p-8  rounded-lg shadow-lg">
        @if ($errors->any())
        <div class="mx-auto max-w-7xl">
            <div class="alert alert-error col-lg-12 mt-4" role="alert">
                @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
        </div>
        @endif
        <form action="/ukm-edit/{{ $uKM->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-bold mb-2">Nama UKM :</label>
                <input type="text" id="nama" name="nama"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500"
                    value="{{ old('nama', $uKM->nama) }}" required>
            </div>
            <div class="mb-4">
                <label for="kategori" class="block text-gray-700 font-bold mb-2">Kategori Olah :</label>
                <select id="kategori" name="kategori"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500"
                    required>
                    <option value="">Pilih Kategori Olah:</option>
                    <option value="Olah Rasa" {{ $uKM->kategori == 'Olah Rasa' ? 'selected' : '' }}>Olah Rasa</option>
                    <option value="Olah Pikir" {{ $uKM->kategori == 'Olah Pikir' ? 'selected' : '' }}>Olah Pikir
                    </option>
                    <option value="Olah Dzikir" {{ $uKM->kategori == 'Olah Dzikir' ? 'selected' : '' }}>Olah Dzikir
                    </option>
                    <option value="Olah Raga" {{ $uKM->kategori == 'Olah Raga' ? 'selected' : '' }}>Olah Raga</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi UKM :</label>
                <input type="text" id="deskripsi" name="deskripsi"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500"
                    value="{{ old('deskripsi', $uKM->deskripsi) }}">
            </div>

            <div class="mb-4">
                <label for="logo" class="block text-gray-700 font-bold mb-2">Logo UKM (Max:5MB):</label>
                <input type="file" id="logo" name="logo"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="jumlah_anggota" class="block text-gray-700 font-bold mb-2">Jumlah Anggota UKM :</label>
                <input type="text" id="jumlah_anggota" name="jumlah_anggota"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500"
                    value="{{ old('jumlah_anggota', $uKM->jumlah_anggota) }}">
            </div>

            <div class="mb-4">
                <label for="link_sosmed" class="block text-gray-700 font-bold mb-2">Link Sosial Media :</label>
                <input type="text" id="link_sosmed" name="link_sosmed"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500"
                    value="{{ old('link_sosmed', $uKM->link_sosmed) }}">
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-600 focus:outline-hidden focus:ring-2 focus:ring-blue-500">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
