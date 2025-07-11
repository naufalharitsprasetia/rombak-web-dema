<x-layout :title="$title" :active="$active">
    {{-- DEPARTEMENT index --}}
    <div class="departement-section min-h-screen overflow-hidden text-primary z-10">
        <div class="departement max-w-7xl mx-auto text-center ">
            <div class="px-4 mx-auto max-w-screen-xl lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our
                        Departements
                    </h2>
                    <p class="font-light text-gray-500 mb-14 sm:text-xl dark:text-gray-400">Explore the whole
                        collection of open-source web components and elements built with the utility classes from
                        Tailwind</p>
                </div>
                <div class="pb-16 mx-auto max-w-7xl text-center">
                    <div class="toogle-ukm flex justify-center items-center mx-auto ">
                        <a href="{{ route('departement.index') }}"
                            class="py-3 px-4 border border-demamuda
                        {{  $departement_active == 'putra' ? 'bg-demamuda text-white' : 'hover:bg-demamuda hover:text-white dark:text-white' }}">
                            PUTRA
                        </a>
                        <a href="{{ route('departement.index-putri') }}"
                            class="py-3 px-4 border border-demamuda
                       {{  $departement_active == 'putri' ? 'bg-demamuda text-white' : 'hover:bg-demamuda hover:text-white dark:text-white' }}">
                            PUTRI
                        </a>
                    </div>
                </div>
                <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                    @foreach ($divisions as $division)
                    @foreach ($division->departements as $departement)
                    <a href="{{route('departement.show', $departement->id)}}"
                        class="relative group cursor-pointer block">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200">
                        </div>
                        <div
                            class="relative leading-none items-center bg-gray-50 rounded-lg shadow md:flex dark:bg-gray-800 dark:border-gray-700 ring-1 ring-gray-900/5">
                            <div class="md:w-[20rem] md:h-[14rem]">
                                <img class="w-full h-full object-cover rounded-lg sm:rounded-none sm:rounded-l-lg"
                                    src="{{ asset('storage/' . $departement->image) }}" alt="">
                            </div>
                            <div class="p-5 mx-auto justify-center items-center">
                                <h3 class="text-xl font-bold tracking-widest text-gray-900 dark:text-white">
                                    {{ $departement->nama }}
                                </h3>
                                <span
                                    class="text-gray-500 dark:text-gray-400 text-sm mt-2">{{$departement->division->nama}}</span>
                                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400 text-xs">{{
                                    $departement->deskripsi }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    @endforeach
                </div>
                <x-efek.glowatas />
                <x-efek.glowbawah />
            </div>

        </div>
    </div>
</x-layout>