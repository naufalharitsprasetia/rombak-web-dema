<x-layout :title="$title" :active="$active">
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16 pb-12">
        <!-- Page Header -->
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
        <div class="text-center mb-8 sm:mb-12">
            <h2
                class="mx-auto mb-4 max-w-2xl text-center text-4xl font-bold text-balance text-hijautua dark:text-hijaumuda sm:text-5xl">
                Green Events
            </h2>
            <p class="text-base sm:text-lg text-gray-600 dark:text-gray-400 max-w-3xl mx-auto leading-relaxed">
                Jangan ketinggalan event-event yang akan datang.
            </p>
            <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 max-w-3xl mx-auto leading-relaxed">
                <a href="#ajukanEvents" class="text-hijautua hover:text-hijaumuda">Ajukan</a> event Anda dan dapatkan
                green points!
            </p>
        </div>

        <!-- Event Card -->
        <div class="max-w-2xl mx-auto">
            <a href="{{ route('event.show', $eventUtama->id) }}"
                class="block hover:-translate-y-2 cursor-pointer transform bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-200 dark:border-gray-700">

                <!-- Event Image/Header -->
                <div class="relative bg-gradient-to-br from-green-400 to-lime-600 p-6 sm:p-8">
                    <div
                        class="w-full h-60 sm:h-72 lg:h-80 bg-gradient-to-br from-green-100 to-blue-100 dark:from-green-900 dark:to-blue-900 rounded-2xl flex items-center justify-center overflow-hidden">
                        @if($eventUtama->is_demo == true)
                        <img src="{{ asset('img/events/') }}/{{ $eventUtama->image }}" alt=""
                            class="w-full h-full object-cover rounded-2xl">
                        @else
                        <img src="{{ asset('storage/' . $eventUtama->image) }}" alt=""
                            class="w-full h-full object-cover rounded-2xl">
                        @endif
                    </div>
                </div>

                <!-- Event Details -->
                <div class="p-6 sm:p-8">
                    <!-- Event Type Badge -->
                    <div class="mb-4">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300 border border-green-200 dark:border-green-800">
                            {{ $eventUtama->category }}
                        </span>
                    </div>

                    <!-- Event Title -->
                    <h3 class="text-xl sm:text-2xl font-bold text-hijautua dark:text-hijaumuda mb-2 leading-tight">
                        {{ $eventUtama->title }}
                    </h3>

                    <!-- Organizer -->
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                        oleh: <span class="font-medium">{{ $eventUtama->penyelenggara }}</span>
                    </p>

                    <!-- Event Description -->
                    <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                        {{ $eventUtama->description }}
                    </p>

                    <!-- Event Stats -->
                    <div
                        class="flex flex-col sm:flex-row sm:justify-between sm:items-center space-y-2 sm:space-y-0 text-sm">
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center space-x-1 text-gray-600 dark:text-gray-400">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Lokasi: <span class="font-semibold text-gray-900 dark:text-white">{{
                                        $eventUtama->location }}</span></span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-1 text-orange-600 dark:text-orange-400 font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ \Carbon\Carbon::parse($eventUtama->date_time)->locale('id')->diffForHumans()
                                }}</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Additional Events Section (Optional) -->
        <div class="mt-16 sm:mt-20">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white text-center mb-8 sm:mb-12">
                Event Lainnya
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach($events as $event)
                <a href="{{ route('event.show', $event->id) }}"
                    class="bg-white dark:bg-gray-800 hover:-translate-y-2 cursor-pointer transform rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border border-gray-200 dark:border-gray-700">
                    <div class="bg-gradient-to-br from-green-400 to-lime-600 h-60 sm:h-72">
                        @if($eventUtama->is_demo == true)
                        <img src="{{ asset('img/events/') }}/{{ $event->image }}" alt=""
                            class="w-full h-full object-cover rounded-2xl">
                        @else
                        <img src="{{ asset('storage/' . $event->image) }}" alt=""
                            class="w-full h-full object-cover rounded-2xl">
                        @endif
                    </div>
                    <div class="p-4 sm:p-6">
                        <span
                            class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300 mb-3">
                            {{ $event->category }}
                        </span>
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2 text-sm sm:text-base">
                            {{ $event->title }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-xs sm:text-sm mb-4">
                            {{ Str::limit($event->description, 100) }}
                        </p>
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-gray-500 dark:text-gray-400">{{
                                \Carbon\Carbon::parse($event->date_time)->locale('id')->diffForHumans()
                                }}</span>
                            <span class="text-green-600 dark:text-green-400 font-medium">{{ $event->location }}</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="my-14 text-center" id="ajukanEvents">
                <div class="mx-auto p-4">
                    <p class="text-zinc-900 dark:text-white font-medium text-lg">Ingin Mengajukan Event anda sendiri ?
                    </p>
                    <a href="{{ route('event.ajukan') }}"
                        class="font-semibold text-xl text-hijautua hover:text-hijaumuda">Ajukan Sekarang!</a>
                </div>
            </div>
    </section>

</x-layout>