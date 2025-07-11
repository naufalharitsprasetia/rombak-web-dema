<x-layout :title="$title" :active="$active">
    {{-- ukm --}}
    <x-efek.glowatas />
    <x-efek.glowbawah />
    <div class="ukm-section min-h-screen overflow-hidden text-primary relative isolate z-10">
        <a href="{{ route('ukm.index') }}" class="text-demamuda"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        <br><br>
        <div class="px-10 max-w-screen-md mb-6 mx-auto">
            <h2 class="mx-auto mb-2 text-center text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                {{ $ukm->nama }}</h2>
        </div>
        <div
            class="mx-auto relative flex flex-col bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 ring-1 ring-gray-900/5 overflow-hidden max-w-xs">
            <img src="{{ asset('storage/' . $ukm->logo) }}" class="w-full" alt="{{$ukm->nama}}">
        </div>
        <div class="mt-6 mx-auto text-center text-gray-600 dark:text-gray-300 text-lg">
            Deskripsi : {!! $ukm->deskripsi !!}</div>
    </div>
</x-layout>