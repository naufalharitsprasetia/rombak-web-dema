<x-layout :title="$title" :active="$active">
    <div class="min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-16 pb-12">
            <h2 class="mb-6 text-center text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Kotak Aspirasi
            </h2>
            <div class="mt-12">
                <div class="border dark:border-zinc-600 rounded-lg shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100">Salurkan Aspirasi
                            anda disini
                        </h3>
                        <div class="mt-5">
                            <form action="{{ route('aspirasi.store') }}" method="POST" id="contact-form">
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
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Aspirasi</label>
                                    <div class="mt-2">
                                        <textarea id="message" name="message" rows="4"
                                            class="shadow-sm bg-transparent border dark:border-zinc-600 text-gray-900 dark:text-white py-2 px-1 focus:ring-dematua focus:border-dematua block w-full sm:text-sm border-gray-300 rounded-md"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <button type="submit"
                                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-dematua hover:bg-dematua focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-dematua">
                                        Kirim
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
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
    </script> --}}
</x-layout>