<x-layout :title="$title" :active="$active">
    <style>
        .perspective {
            perspective: 1000px;
        }

        .card-inner {
            transform-style: preserve-3d;
            transition: transform 0.7s ease-in-out;
        }

        .front-card,
        .back-card {
            backface-visibility: hidden;
        }

        .back-card {
            transform: rotateY(180deg);
        }

        .group:hover .card-inner {
            transform: rotateY(180deg);
        }
    </style>
    {{-- Departement --}}
    <x-efek.glowatas />
    <x-efek.glowbawah />
    <div class="departement-section min-h-screen overflow-hidden relative z-10">
        <div class="departement max-w-7xl mx-auto px-4 md:px-12 text-gray-900 dark:text-white ">
            <h1 class="text-5xl font-bold text-center mb-2">{{ $departement->nama }}</h1>
            @if($departement->singkatan !== "")
            <p class="singkatan-jika-ada text-sm text-center mb-4">({{ $departement->singkatan }})</p>
            @endif
            <br>
            <div class="mx-auto flex justify-center">
                <img src="{{ asset('storage/' . $departement->image) }}" alt="" class="w-96">
            </div>
            <br>

            @if ($departement->deskripsi != "")
            <p class="text-center max-w-2xl mx-auto">{{ $departement->deskripsi}}</p>
            <br>
            @endif

            {{-- MEMBERS --}}
            <h3 class="text-xl font-semibold text-center">Who They Are:</h3>
            <br>
            <div class="members-departement flex flex-wrap justify-center gap-8">
                @foreach ($departement->members as $member)
                <div class="member-card group w-56 h-80 perspective" style="margin-bottom: 10rem">
                    <div
                        class="card-inner relative w-full h-full transition-transform duration-700 transform group-hover:rotate-y-180">
                        {{-- Front Side --}}
                        <div class="front-card absolute w-full h-full backface-hidden">
                            @if ($member->image !== '')
                            <img src="{{ asset('storage/' . $member->image) }}" alt=""
                                class="w-full h-full object-cover">
                            <div class="p-3 text-center">
                                <h4 class="font-bold text-lg text-dematua">{{ $member->nama }}</h4>
                                <p class="text-sm mt-1">{{ $member->prodi }}</p>
                            </div>
                            @else
                            <div
                                class="p-3 text-center dark:bg-gray-100 dark:text-gray-900 h-full flex justify-center items-center flex-col">
                                <h4 class="font-bold text-xl text-dematua">{{ $member->nama }}</h4>
                            </div>
                            @endif
                        </div>
                        {{-- Back Side --}}
                        <div
                            class="back-card absolute w-full h-full bg-demamuda p-3 text-center backface-hidden transform rotate-y-180 flex flex-col items-center justify-center">
                            <h4 class="font-semibold text-sm">{{ $member->nim }}</h4>
                            <h4 class="font-semibold text-lg">{{ $member->nama }}</h4>
                            <p class="text-sm mt-1">{{ $member->prodi }}</p>
                            <p class="text-sm">{{ $member->asal }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <br><br>
    </div>
</x-layout>