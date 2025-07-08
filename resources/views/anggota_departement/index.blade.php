@extends('layout.main')

@section('content')
<div class="pt-6 pb-4 px-6 bg-wa4">
    <div class="mx-auto max-w-7xl">
        <h1 class="block text-4xl font-bold font-trajan text-wa1 text-center tracking-widest py-2 px-2">
            List Anggota Departement
        </h1>
    </div>
</div>
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
<div class="mx-6 md:mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="showing-total mb-4">
        <p class="text-base font-semibold">Total Anggota Departement : {{ count($anggota_departements) }}</p>
    </div>
    <!-- Table -->
    <div class="table-anggota overflow-x-auto rounded-md bg-slate-200 px-4 py-3">
        <table class="min-w-full text-sm md:text-base bg-white border border-gray-300">
            <thead>
                <tr class="text-left">
                    <th class="py-2 md:px-4 border-b border-r text-center">No</th>
                    <th class="py-2 px-4 border-b border-r">NIM</th>
                    <th class="py-2 px-4 border-b border-r">Nama Lengkap</th>
                    <th class="py-2 md:px-4 border-b border-r text-center">Departement</th>
                    <th class="py-2 md:px-4 border-b border-r text-center">Urutan</th>
                    <th class="py-2 md:px-4 border-b border-r text-center">Prodi</th>
                    <th class="py-2 md:px-4 border-b border-r text-center">Asal</th>
                    @auth
                    <th class="py-2 px-4 border-b border-r">Action</th>
                    @endauth
                </tr>
            </thead>
            <tbody id="divisi-table-body">
                @foreach ($anggota_departements as $anggota_departement)
                <tr>
                    <td class="py-2 md:px-4 border-b border-r text-center">
                        {{ $loop->iteration }}</td>
                    <td class="py-2 px-4 border-b border-r">
                        {{ $anggota_departement->nim }}
                    </td>
                    <td class="py-2 px-4 border-b border-r">
                        {{ $anggota_departement->nama }}
                    </td>
                    <td class="py-2 px-4 border-b border-r">
                        {{ $anggota_departement->departement->nama }}
                    </td>
                    <td class="py-2 px-4 border-b border-r">
                        {{ $anggota_departement->urutan }}
                    </td>
                    <td class="py-2 px-4 border-b border-r">
                        {{ $anggota_departement->prodi }}
                    </td>
                    <td class="py-2 px-4 border-b border-r">
                        {{ $anggota_departement->asal }}
                    </td>
                    @auth
                    <td class="py-2 px-4 border-b border-r ">
                        <div class="flex">
                            {{-- <a href="/anggota_departement/{{ $anggota_departement->id }}"
                                class="bg-blue-500 text-white px-2 py-1 text-sm rounded-sm mr-2">Detail</a> --}}
                            <a href="/anggota_departement-edit/{{ $anggota_departement->id }}"
                                class="bg-yellow-500 text-white px-2 py-1 text-sm rounded-sm mr-2">Edit</a>
                            <form action="/anggota_departement-delete/{{ $anggota_departement->id }}" method="POST"
                                class="inline-block" id="formDelete-{{ $loop->iteration }}">
                                @method('delete')
                                @csrf
                                <button type="button" onclick="deleteConfirm({{ $loop->iteration }})"
                                    class="bg-red-500 text-white px-2 py-1 rounded-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                    @endauth
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- end Table -->
</div>
@endsection