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
                            <img src="{{ asset('img/tentang/bumi-2.png') }}" alt="Digital Marketing Professional"
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

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="card-hover bg-gradient-to-br from-purple-50 to-blue-50 dark:from-purple-900/20 dark:to-blue-900/20 rounded-xl p-8 text-center border border-gray-100 dark:border-gray-700">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyan-500 via-cyan-500 to-cyan-300 ring-cyan-400/30 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6">
                            01
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Rendahnya Kesadaran</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Kesadaran akan gaya hidup sehat dan berkelanjutan masih rendah, terutama di kalangan
                            generasi muda yang cenderung mengabaikan dampak jangka panjang terhadap lingkungan dan
                            kesehatan.
                        </p>
                    </div>

                    <div
                        class="card-hover bg-gradient-to-br from-purple-50 to-blue-50 dark:from-purple-900/20 dark:to-blue-900/20 rounded-xl p-8 text-center border border-gray-100 dark:border-gray-700">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyan-500 via-cyan-500 to-cyan-300 ring-cyan-400/30 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6">
                            02
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Edukasi Kurang Efektif</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Program edukasi lingkungan saat ini bersifat satu arah dan kaku, sehingga gagal menciptakan
                            keterlibatan aktif dari masyarakat, khususnya anak muda.
                        </p>
                    </div>

                    <div
                        class="card-hover bg-gradient-to-br from-purple-50 to-blue-50 dark:from-purple-900/20 dark:to-blue-900/20 rounded-xl p-8 text-center border border-gray-100 dark:border-gray-700">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyan-500 via-cyan-500 to-cyan-300 ring-cyan-400/30 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6">
                            03
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Kurangnya Apresiasi Aksi Kecil
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Kebiasaan kecil yang berdampak besar, seperti membawa botol sendiri atau memilah sampah,
                            jarang dihargai atau diapresiasi secara sosial maupun sistematis.
                        </p>
                    </div>

                    <div
                        class="card-hover bg-gradient-to-br from-purple-50 to-blue-50 dark:from-purple-900/20 dark:to-blue-900/20 rounded-xl p-8 text-center border border-gray-100 dark:border-gray-700">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyan-500 via-cyan-500 to-cyan-300 ring-cyan-400/30 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6">
                            04
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Potensi Aksi Kolektif</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Jika dilakukan secara kolektif dan konsisten, aksi-aksi sederhana sehari-hari memiliki
                            potensi besar untuk membawa perubahan positif terhadap lingkungan dan kebiasaan hidup
                            masyarakat.
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
                        <img src="{{ asset('img/tentang/reusable.png') }}" alt="Professional Woman with Laptop"
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
                            LangkahHijau dikembangkan sebagai solusi edukatif dan interaktif untuk mengubah aktivitas
                            harian menjadi aksi positif bagi kesehatan dan lingkungan melalui pendekatan gamifikasi.
                            Aplikasi ini bertujuan untuk:
                        </p>

                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-white/20 dark:bg-white/10 rounded-lg flex items-center justify-center text-cyan-800 dark:text-cyan-300">
                                    <i class="fas fa-users text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2 text-cyan-800 dark:text-cyan-300">
                                        Meningkatkan Literasi Lingkungan dan Kesehatan</h3>
                                    <p class="text-black dark:text-gray-300">Membangun kesadaran masyarakat tentang
                                        pentingnya hidup sehat dan ramah lingkungan melalui pendekatan edukatif yang
                                        relevan dan mudah dipahami.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-white/20 dark:bg-white/10 rounded-lg flex items-center justify-center text-cyan-800 dark:text-cyan-300">
                                    <i class="fas fa-bullseye text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2 text-cyan-800 dark:text-cyan-300">Edukasi
                                        Digital Interaktif</h3>
                                    <p class="text-black dark:text-gray-300">Menyediakan platform pembelajaran berbasis
                                        digital yang menyenangkan dan dapat diakses kapan saja, di mana saja oleh semua
                                        kalangan.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-white/20 dark:bg-white/10 rounded-lg flex items-center justify-center text-cyan-800 dark:text-cyan-300">
                                    <i class="fas fa-chart-line text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2 text-cyan-800 dark:text-cyan-300">Dorongan
                                        Aksi Berkelanjutan</h3>
                                    <p class="text-black dark:text-gray-300">Mengajak pengguna terlibat dalam tantangan,
                                        kuis, dan sistem penghargaan sebagai pemicu aksi nyata yang berdampak positif
                                        terhadap lingkungan.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-white/20 dark:bg-white/10 rounded-lg flex items-center justify-center text-cyan-800 dark:text-cyan-300">
                                    <i class="fas fa-comments text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2 text-cyan-800 dark:text-cyan-300">Komunitas
                                        Hijau yang Menginspirasi</h3>
                                    <p class="text-black dark:text-gray-300">Membangun ekosistem digital yang mendukung
                                        interaksi dan kolaborasi antar pengguna dalam gerakan gaya hidup hijau dan
                                        sehat.</p>
                                </div>
                            </div>
                        </div>
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
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Berita Terkini</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Misi aksi nyata seperti hemat listrik, zero waste, dan aktivitas fisik yang bisa dicatat
                                dan diukur rutin.
                            </p>
                        </div>
                    </a>

                    <!-- Eco-Quiz -->
                    <a href="">
                        <div
                            class="bg-white dark:bg-gray-700 rounded-xl p-8 shadow-xl text-center transition-transform transform hover:scale-105 duration-300">
                            <div class="text-cyan-500 text-4xl mb-4">
                                <i class="fas fa-question-circle"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Salurkan Aspirasi</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Kuis harian ringan dan informatif untuk menguji pengetahuan seputar lingkungan dan
                                kesehatan.
                            </p>
                        </div>
                    </a>

                    <!-- UKM -->
                    <a href="">
                        <div
                            class="bg-white dark:bg-gray-700 rounded-xl p-8 shadow-xl text-center transition-transform transform hover:scale-105 duration-300">
                            <div class="text-cyan-500 text-4xl mb-4">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">UKM
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Raih poin dan badge eksklusif sebagai apresiasi atas setiap aksi hijau yang kamu
                                lakukan.
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
                                Baca artikel edukatif dan tips mudah tentang gaya hidup sehat dan ramah lingkungan.
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
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Kunjungan</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Temukan dan ikuti acara lingkungan. Tambahkan ke Google Calendar dan ajukan event
                                milikmu sendiri.
                            </p>
                        </div>
                    </a>

                    <!--  -->
                    <a href="">
                        <div
                            class="bg-white dark:bg-gray-700 rounded-xl p-8 shadow-xl text-center transition-transform transform hover:scale-105 duration-300">
                            <div class="text-cyan-500 text-4xl mb-4">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Kerjasama</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Lihat peringkatmu dan tingkatkan tier mingguan berdasarkan akumulasi cyan Points yang
                                dikumpulkan.
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