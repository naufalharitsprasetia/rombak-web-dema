@extends('layout.main')

@section('content')
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Edit Anggota Departements</h1>

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
        <form action="/anggota_departement-edit/{{ $anggotaDepartement->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-4">
                <label for="nim" class="block text-gray-700 font-bold mb-2">NIM :</label>
                <input type="text" id="nim" name="nim" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" value="{{ old('nim', $anggotaDepartement->nim) }}" required>
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-bold mb-2">Nama Lengkap :</label>
                <input type="text" id="nama" name="nama" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" value="{{ old('nama', $anggotaDepartement->nama) }}" required>
            </div>
            <div class="mb-4">
                <label for="departement_id" class="block text-gray-700 font-bold mb-2">Departement :</label>
                <select id="departement_id" name="departement_id" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Pilih Departement</option>
                    @foreach ($departements as $departement)
                    <option value="{{ $departement->id }}" @if ($anggotaDepartement->departement_id == $departement->id) selected @endif>
                        {{ $departement->nama }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="urutan" class="block text-gray-700 font-bold mb-2">Urutan :</label>
                <input type="number" id="urutan" name="urutan" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" value="{{ old('urutan', $anggotaDepartement->urutan) }}" required>
            </div>

            <div class="mb-4">
                <label for="prodi" class="block text-gray-700 font-bold mb-2">Program Studi :</label>
                <input type="text" id="prodi" name="prodi" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" value="{{ old('prodi', $anggotaDepartement->prodi) }}">
            </div>

            <div class="mb-4">
                <label for="asal" class="block text-gray-700 font-bold mb-2">Asal Daerah (optional) :</label>
                <input type="text" id="asal" name="asal" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500" value="{{ old('asal', $anggotaDepartement->asal) }}">
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-bold mb-2">Photo Potrait (Max:5MB):</label>
                <input type="file" id="image" name="logo" class="w-full px-3 py-2 border rounded-lg focus:outline-hidden focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-600 focus:outline-hidden focus:ring-2 focus:ring-blue-500">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
