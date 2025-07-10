<x-layout :title="$title" :active="$active">
    <div class="min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16 pb-12">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                        Hubungi Kami
                    </h2>
                    <p class="mt-3 text-lg text-gray-500 dark:text-gray-300">
                        Kami senang mendengar dari Anda! Silakan isi formulir di bawah ini atau hubungi kami langsung
                        melalui WhatsApp.
                    </p>
                    <dl class="mt-8 text-base text-gray-500 dark:text-gray-300">
                        <div class="mt-6">
                            <dt class="sr-only"> Nomor Telepon</dt>
                            <dd class="flex">
                                <svg class="flex-shrink-0 h-6 w-6 text-dematua" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="ml-3">+62 812 2059 4202</span>
                            </dd>
                        </div>
                        <div class="mt-3">
                            <dt class="sr-only">Email</dt>
                            <dd class="flex">
                                <svg class="flex-shrink-0 h-6 w-6 text-dematua" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">demasiman@unida.gontor.ac.id</span>
                            </dd>
                        </div>
                        <div class="mt-3">
                            <dt class="sr-only">Instagram</dt>
                            <dd class="flex">
                                <svg class="flex-shrink-0 h-6 w-6 text-dematua" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512" fill="#13a1ae">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                                <span class="ml-3">@sc_unidagontor</span>
                            </dd>
                        </div>
                    </dl>
                </div>
                <div class="mt-8 lg:mt-0">
                    <div class="border dark:border-zinc-600 rounded-lg shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100">Kirim Pesan
                                kepada Kami
                            </h3>
                            <div class="mt-5">
                                <form action="{{ route('home.kontak') }}" method="POST" id="contact-form">
                                    @csrf
                                    <div>
                                        <label for="name"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
                                        <div class="mt-2">
                                            <input type="text" name="name" id="name"
                                                class="shadow-sm bg-transparent border dark:border-zinc-600 text-gray-900 dark:text-white py-2 px-1 focus:ring-dematua focus:border-dematua block w-full sm:text-sm border-gray-300 rounded-md"
                                                required>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                        <div class="mt-2">
                                            <input type="email" name="email" id="email"
                                                class="shadow-sm bg-transparent border dark:border-zinc-600 text-gray-900 dark:text-white py-2 px-1 focus:ring-dematua focus:border-dematua block w-full sm:text-sm border-gray-300 rounded-md"
                                                required>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="message"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pesan</label>
                                        <div class="mt-2">
                                            <textarea id="message" name="message" rows="4"
                                                class="shadow-sm bg-transparent border dark:border-zinc-600 text-gray-900 dark:text-white py-2 px-1 focus:ring-dematua focus:border-dematua block w-full sm:text-sm border-gray-300 rounded-md"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit"
                                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-dematua hover:bg-dematua focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-dematua">
                                            Kirim Pesan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Construct the WhatsApp message
            const whatsappMessage =
                `Halo LangkahHijau, Nama Saya: ${name}%0AEmail: ${email}%0A, Pesan: ${message}`;

            // Replace 'YOUR_PHONE_NUMBER' with your actual WhatsApp business number
            const whatsappUrl = `https://api.whatsapp.com/send?phone=6281220594202&text=${whatsappMessage}`;

            // Open WhatsApp in a new tab
            window.open(whatsappUrl, '_blank');

            // You can also submit the form to your backend here if needed
            // this.submit();
        });
    </script>
</x-layout>