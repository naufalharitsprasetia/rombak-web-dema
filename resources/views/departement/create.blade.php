@extends('layout.main')

@section('content')
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Create Departements</h1>

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
        <form action="/departement-create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-bold mb-2">Nama Departement :</label>
                <input type="text" id="nama" name="nama" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" value="{{ old('nama') }}" required>
            </div>
            <div class="mb-4">
                <label for="division_id" class="block text-gray-700 font-bold mb-2">Divisi :</label>
                <select id="division_id" name="division_id" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Pilih Divisi</option>
                    @foreach ($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->nama }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="urutan" class="block text-gray-700 font-bold mb-2">Urutan :</label>
                <input type="number" id="urutan" name="urutan" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" value="{{ old('urutan') }}" required>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi Departement :</label>
                <input type="text" id="deskripsi" name="deskripsi" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" value="{{ old('deskripsi') }}">
            </div>

            <div class="mb-4">
                <label for="singkatan" class="block text-gray-700 font-bold mb-2">Singkatan :</label>
                <input type="text" id="singkatan" name="singkatan" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" value="{{ old('singkatan') }}">
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-bold mb-2">Foto (Max:5MB):</label>
                <input type="file" id="image" name="image" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-600 focus:outline-hidden focus:ring-2 focus:ring-blue-500">Tambahkan</button>
            </div>
        </form>
    </div>
</div>
@endsection
