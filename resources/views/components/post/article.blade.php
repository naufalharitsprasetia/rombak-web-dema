{{-- artikel --}}
<div class="relative isolate max-w-7xl mx-auto px-4 sm:px-6 lg:px-16 pb-8 z-30">
    <x-efek.glowatas />
    {{-- title --}}
    <div class="mt-4 mb-16 mx-auto text-center" data-aos="fade-up" data-aos-duration="2000">
        <p
            class="mb-3 text-3xl text-center font-bold text-pretty text-gray-900 dark:text-gray-100 sm:text-5xl lg:text-balance">
            Berita Terbaru
        </p>
        <p class="text-dematua dark:text-demamuda text-sm md:text-lg font-normal md:max-w-2xl mx-auto">Temukan berita
            terbaru
            terkait
            kegiatan-kegiatan <br> Dewan Mahasiswa Universitas Darussalam Gontor.</p>
    </div>
    <!-- Featured Article Section -->
    <div data-aos="fade-up" data-aos-duration="2000"
        class="bg-white dark:bg-zinc-900 border border-gray-300 dark:border-zinc-700 rounded-2xl shadow-sm p-4 sm:p-6 lg:p-8 mb-8 sm:mb-12 transition-colors duration-300">
        <div class="flex flex-col xl:flex-row gap-6 lg:gap-8 items-center">
            <!-- Article Image -->
            <div class="w-full xl:w-auto xl:flex-shrink-0">
                <div
                    class="w-full xl:w-80 h-48 sm:h-56 lg:h-64 bg-gradient-to-br from-green-100 to-blue-100 dark:from-green-900 dark:to-blue-900 rounded-2xl flex items-center justify-center overflow-hidden">
                    @if($postUtama->is_demo == true)
                    <img src="{{ asset('img/posts/') }}/{{ $postUtama->image }}" alt=""
                        class="w-full h-full object-cover rounded-2xl">
                    @else
                    <img src="{{ asset('storage/' . $postUtama->image) }}" alt=""
                        class="w-full h-full object-cover rounded-2xl">
                    @endif
                </div>
            </div>

            <!-- Article Content -->
            <div class="flex-1 w-full">
                <!-- Category and Date -->
                <div class="flex flex-col xs:flex-row xs:items-center gap-2 xs:gap-3 mb-4">
                    <span
                        class="bg-demamuda dark:bg-dematua text-white px-3 py-1 rounded-full text-sm font-medium w-fit">{{
                        $postUtama->category }}</span>
                    <span class="text-gray-500 dark:text-gray-400 text-sm">{{ $postUtama->created_at->diffForHumans()
                        }}</span>
                </div>

                <!-- Title -->
                <h2
                    class="text-xl sm:text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900 dark:text-white mb-3 sm:mb-4 leading-tight">
                    {{ $postUtama->title }}
                </h2>

                <!-- Description -->
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4 sm:mb-6 text-sm sm:text-base">
                    {!!Str::limit(strip_tags($postUtama->body), 200) !!}
                </p>

                <!-- Read More Link -->
                <a href="/blog/{{ $postUtama->id }}"
                    class="inline-flex items-center text-demamuda dark:text-demamuda font-medium hover:text-dematua dark:hover:text-green-300 transition-colors text-sm sm:text-base">
                    Read More
                    <i class="fas fa-arrow-right ml-2 text-sm"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Tips Lainnya Section -->
    <section data-aos="fade-up" data-aos-duration="2000">
        <!-- Section Header -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end gap-4 sm:gap-0 mb-6 sm:mb-8">
            <div>
                <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-2">Berita
                    Lainnya</h3>
                <p class="text-gray-600 dark:text-gray-300 text-sm sm:text-base">Dapatkan informasi terkini seputar
                    kegiatan Dewan Mahasiswa, agenda kampus, serta perkembangan organisasi mahasiswa lainnya.</p>
            </div>
        </div>

        <!-- Articles Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-8">
            @if(isset($posts))
            @foreach ($posts as $post)
            <x-post.articlecard :post="$post" />
            @endforeach
            @endif
            @if(isset($postsPutra))
            @foreach ($postsPutra as $post)
            <x-post.articlecard :post="$post" />
            @endforeach
            @endif
            @if(isset($postsPutri))
            @foreach ($postsPutri as $post)
            <x-post.articlecard :post="$post" />
            @endforeach
            @endif
        </div>

        @if($active == "beranda")
        <!-- View More Button -->
        <div class="text-center">
            <a href="/blog"
                class="inline-flex items-center bg-demamuda dark:bg-dematua text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full font-medium hover:bg-dematua dark:hover:bg-green-700 transition-colors text-sm sm:text-base">
                Lihat Artikel Lainnya
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
        @endif
    </section>
</div>