<x-layout :title="$title" :active="$active">
    <div class="hero z-10 transition-colors duration-300">
        <div class="text-center mb-12 sm:mb-16 md:mb-20 lg:mb-24 px-4 z-[111] relative">
            <h1
                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight text-gray-900 dark:text-gray-100 leading-tight">
                Tentang Dewan<span class="text-dematua dark:text-demamuda">Mahasiswa</span>
            </h1>
        </div>


        <!-- Latar Belakang -->
        <section id="about" class="relative isolate">
            <x-efek.glowatas />
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="animate-fade-in">
                        <span
                            class="inline-block bg-cyan-100 text-cyan-800 dark:bg-cyan-900 dark:text-cyan-200 px-3 py-1 rounded-full text-sm font-medium mb-4 shadow-[0_0_10px_rgba(34,197,94,0.5)]"">
                            Apa itu DEMA ?
                        </span>
                        <h2 class=" text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                            Dewan Mahasiswa
                            <br>
                            <span class="text-cyan-600">UNIDA Gontor</span>
                            </h2>
                            <p class="text-gray-600 dark:text-gray-300 text-lg mb-8 leading-relaxed">
                                Dewan Mahasiswa (DEMA) adalah sebuah organisasi dari, oleh, dan untuk mahasiswa. dewan
                                mahasiswa juga merupakan organisasi tertinggi di universitas darussalam gontor yang
                                membantu rektor menaungi seluruh aspek kehidupan mahasiswa.


                                Dewan Mahasiswa bertanggung jawab atas keseluruhan dinamika yang ada, dan perannya dalam
                                khidmahnya kepada nusa, bangsa dan agama dengan cara belajar, berkarya, dan berjuang
                                berdasarkan olah dzikir, olah pikir, olah rasa dan olah raga. Tujuan dari dewan
                                mahasiswa adalah ikut serta dalam pembinaan di Universitas Darussalam Gontor dalam
                                rangka membentuk mahasiswa mu'min, muslim yang berbudi tinggi, berbadan sehat,
                                berpengetahuan luas, dan berpikiran bebeas serta taat menjalankan dan menegakkan
                                syari'at islam, berkhidmah kepada bangsa dan negara
                            </p>

                    </div>

                    <div class="relative animate-fade-in">
                        <div class="relative z-10">
                            <img src="{{ asset('img/logoweb.png') }}" alt="Digital Marketing Professional"
                                class="rounded-2xl shadow-2xl w-full h-auto">
                        </div>
                        <div class="absolute -top-4 -right-4 w-full h-full rounded-2xl -z-10">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Masalah yang diangkat -->
        <section id="services" class="py-16 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 animate-fade-in">
                    <span
                        class="inline-block bg-cyan-100 text-cyan-800 dark:bg-cyan-900 dark:text-cyan-200 px-3 py-1 rounded-full text-sm font-medium mb-4 shadow-[0_0_10px_rgba(34,197,94,0.5)]"">
                        VISI & MISI
                    </span>
                    <h2 class=" text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white">
                        Visi Misi DEMA UNIDA GONTOR
                        </h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        class="card-hover bg-gradient-to-br from-purple-50 to-blue-50 dark:from-purple-900/20 dark:to-blue-900/20 rounded-xl p-8 text-center border border-gray-100 dark:border-gray-700">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyan-500 via-cyan-500 to-cyan-300 ring-cyan-400/30 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6">
                            Visi
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Wadah Aspirasi</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Menjadikan Dewan Mahasiswa UNIDA
                            Gontor sebagai wadah yang inklusif dan inovatif dalam
                            mengembangkan kepemimpinan, integritas, dan kontribusi mahasiswa yang dipandu oleh
                            prinsip-prinsip Islam.
                        </p>
                    </div>

                    <div
                        class="card-hover bg-gradient-to-br from-purple-50 to-blue-50 dark:from-purple-900/20 dark:to-blue-900/20 rounded-xl p-8 text-center border border-gray-100 dark:border-gray-700">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyan-500 via-cyan-500 to-cyan-300 ring-cyan-400/30 rounded-full flex items-center justify-center text-white text-lg font-bold mx-auto mb-6">
                            Misi 1
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Agen Perubahan</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Mendorong perubahan kecil namun berdampak besar-seperti mengurangi penggunaan plastik,
                            menghemat energi, dan memilih transportasi yang ramah lingkungan-sekaligus menciptakan
                            lingkungan yang mendukung para siswa untuk berkembang secara intelektual, spiritual, dan
                            sosial.
                        </p>
                    </div>

                    <div
                        class="card-hover bg-gradient-to-br from-purple-50 to-blue-50 dark:from-purple-900/20 dark:to-blue-900/20 rounded-xl p-8 text-center border border-gray-100 dark:border-gray-700">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyan-500 via-cyan-500 to-cyan-300 ring-cyan-400/30 rounded-full flex items-center justify-center text-white text-lg font-bold mx-auto mb-6">
                            Misi 2
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Pemberdayaan Mahasiswa
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Memberdayakan mahasiswa melalui jaringan nasional dan internasional, mendukung tujuan
                            universitas untuk menjadi institusi kelas dunia dan meningkatkan keterlibatan mahasiswa
                            secara global.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- tujuan dan fungsi -->
        <section class="py-16 lg:py-24 duration-300 relative isolate z-[111]">
            <x-efek.glowatas />
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="relative animate-fade-in">
                        <img src="{{ asset('img/strukturdema.png') }}" alt="Struktur DEMA"
                            class="rounded-2xl shadow-2xl w-full h-auto">
                    </div>

                    <div class="animate-fade-in">
                        <span
                            class="inline-block bg-cyan-100 text-cyan-800 dark:bg-cyan-900 dark:text-cyan-200 px-3 py-1 rounded-full text-sm font-medium mb-4 shadow-[0_0_10px_rgba(34,197,94,0.5)]">
                            Struktur
                        </span>

                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8 text-black dark:text-white">Struktur
                            Organisasi</h2>
                        <p class="text-black dark:text-gray-300 text-lg mb-8 leading-relaxed">
                            Struktur organisasi Dewan Mahasiswa UNIDA Gontor disusun secara hierarkis dan kolegial untuk
                            mengoptimalkan fungsi koordinasi dan pelaksanaan program kerja. Di dalamnya terdapat ketua,
                            wakil ketua, sekretaris, bendahara, serta berbagai departemen yang membidangi urusan
                            kemahasiswaan, seperti pengembangan minat dan bakat, keilmuan dan keorganisasian, komunikasi
                            dan informasi, serta hubungan eksternal. Setiap bagian memiliki peran strategis dalam
                            menjembatani aspirasi mahasiswa dengan pihak universitas, serta menggerakkan kegiatan yang
                            mencerminkan nilai-nilai keislaman, kepemimpinan, dan pengabdian kepada masyarakat.
                            Kolaborasi antar departemen menjadi kunci utama dalam menciptakan lingkungan kampus yang
                            aktif, dinamis, dan progresif.
                        </p>

                    </div>
                </div>
            </div>
        </section>


        <!-- fitur unggulan -->
        <section class="py-16 lg:py-24 relative isolate">
            <x-efek.glowatas />
            <x-efek.glowbawah />
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 animate-fade-in">
                    <span
                        class="inline-block bg-cyan-100 text-cyan-800 dark:bg-cyan-900 dark:text-cyan-200 px-3 py-1 rounded-full text-sm font-medium mb-4 shadow-[0_0_10px_rgba(34,197,94,0.5)]">
                        SERVICES
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white">
                        Layanan Kami
                    </h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Tantangan Hijau -->
                    <a href="">
                        <div
                            class="bg-white dark:bg-gray-700 rounded-xl p-8 shadow-xl text-center transition-transform transform hover:scale-105 duration-300">
                            <div class="text-cyan-500 text-4xl mb-4">
                                <i class="fa-solid fa-newspaper"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Berita Terkini</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Dapatkan informasi terkini seputar kegiatan Dewan Mahasiswa, agenda kampus, serta
                                perkembangan organisasi mahasiswa lainnya. Rubrik ini dirancang untuk menjadi sumber
                                utama berita dan dokumentasi kegiatan mahasiswa UNIDA Gontor.
                            </p>
                        </div>
                    </a>

                    <!-- Eco-Quiz -->
                    <a href="">
                        <div
                            class="bg-white dark:bg-gray-700 rounded-xl p-8 shadow-xl text-center transition-transform transform hover:scale-105 duration-300">
                            <div class="text-cyan-500 text-4xl mb-4">
                                <i class="fa-solid fa-people-roof"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Salurkan Aspirasi</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Sampaikan ide, kritik, dan saranmu langsung kepada DEMA melalui platform aspirasi
                                digital. Kami percaya bahwa perubahan besar dimulai dari suara mahasiswa yang didengar
                                dan ditindaklanjuti secara terbuka dan bertanggung jawab.
                            </p>
                        </div>
                    </a>

                    <!-- UKM -->
                    <a href="">
                        <div
                            class="bg-white dark:bg-gray-700 rounded-xl p-8 shadow-xl text-center transition-transform transform hover:scale-105 duration-300">
                            <div class="text-cyan-500 text-4xl mb-4">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Unit Kegiatan Mahasiswa
                                (UKM)
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Temukan berbagai UKM yang tersedia di kampus, dari seni, olahraga, hingga sains dan
                                teknologi. DEMA berperan aktif dalam mendukung dan memfasilitasi kegiatan UKM sebagai
                                wadah pengembangan potensi dan soft skill mahasiswa.
                            </p>
                        </div>
                    </a>

                    <!--  -->
                    <a href="{{ route('post.index') }}">
                        <div
                            class="bg-white dark:bg-gray-700 rounded-xl p-8 shadow-xl text-center transition-transform transform hover:scale-105 duration-300">
                            <div class="text-cyan-500 text-4xl mb-4">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Surat Delegasi</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Ajukan surat tugas atau permohonan dukungan kegiatan eksternal dengan mudah. DEMA
                                menyediakan layanan administrasi surat menyurat bagi mahasiswa yang mewakili kampus di
                                ajang nasional maupun internasional.
                            </p>
                        </div>
                    </a>

                    <!--  -->
                    <a href="">
                        <div
                            class="bg-white dark:bg-gray-700 rounded-xl p-8 shadow-xl text-center transition-transform transform hover:scale-105 duration-300">
                            <div class="text-cyan-500 text-4xl mb-4">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Kunjungan Organisasi
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Fasilitasi kunjungan atau studi banding antarorganisasi kemahasiswaan, baik internal
                                maupun eksternal. Kami membuka ruang kolaborasi antar kampus dan organisasi untuk
                                memperkaya pengalaman kepemimpinan mahasiswa.
                            </p>
                        </div>
                    </a>

                    <!--  -->
                    <a href="">
                        <div
                            class="bg-white dark:bg-gray-700 rounded-xl p-8 shadow-xl text-center transition-transform transform hover:scale-105 duration-300">
                            <div class="text-cyan-500 text-4xl mb-4">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Kemitraan & Kolaborasi
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Bangun kerjasama strategis dengan lembaga, komunitas, maupun instansi luar kampus
                                melalui program-program kolaboratif. DEMA berkomitmen membuka peluang sinergi demi
                                penguatan peran mahasiswa di tingkat lokal maupun global.
                            </p>
                        </div>
                    </a>

                </div>
            </div>
        </section>

    </div>

    {{-- hilangkan batas di body hanya untuk id="tentang-kami" --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tentangKami = document.querySelector('#tentang-kami');
            if (tentangKami) {
                const layoutDiv = document.querySelector('main > div');
                if (layoutDiv) {
                    layoutDiv.removeAttribute('class');
                }
            }
        });
    </script>
</x-layout>