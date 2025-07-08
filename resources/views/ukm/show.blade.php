@extends('layout.main')

@section('content')
{{-- ukm --}}
<div class="ukm-section min-h-screen overflow-hidden text-primary relative isolate z-10">
    <x-efek.glowatas />
    <x-efek.glowbawah />
    <div class="ukm max-w-7xl mx-auto py-16 px-10">
        <h1 class="text-5xl font-bold text-center mb-4">{{ $ukm->nama }}</h1>

        <br>
        <div class="mx-auto flex justify-center">
            <img src="{{ asset('storage/' . $ukm->logo) }}" alt="" class="w-80">
        </div>
        <br>
        @if ($ukm->deskripsi != "")
        <p class="text-center max-w-2xl mx-auto">Deskripsi : {{ $ukm->deskripsi}}</p>
        <br>
        @endif

        {{-- PROKER --}}
        {{-- <br><br>
        <h3 class="text-xl font-semibold text-center">Program Kerja :</h3>
        <br>
        <div class="prokers-departement flex flex-wrap justify-center gap-4">
            <div class="proker-card border-2 border-secondary text-primary rounded-md overflow-hidden">
                <div class="p-2 text-center">
                    <h4 class="font-semibold text-lg">Naufal Harits</h4>
                    <p class="font-normal">Ketua</p>
                    <p class="font-normal text-xs">Teknik Informatika</p>
                    <p class="font-normal text-xs">Subang</p>
                </div>
            </div>

        </div> --}}
        {{-- PROKER --}}

    </div>
</div>
@endsection