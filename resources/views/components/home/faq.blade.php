@php
$faqs = [
[
'id-toggle' => 'toggle-1',
'question' =>
'Apa itu Dewan Mahasiswa (Dema) UNIDA Gontor?',
'answer' =>
'Dema UNIDA adalah organisasi kemahasiswaan tertinggi di tingkat universitas yang berfungsi sebagai wadah koordinasi,
pengembangan, serta representasi mahasiswa. Dema menjadi penghubung antara mahasiswa, lembaga, dan masyarakat luas dalam
berbagai bidang.',
],
[
'id-toggle' => 'toggle-2',
'question' =>
'Apa bedanya Dema dengan Senat Mahasiswa atau Himpunan Mahasiswa Jurusan?',
'answer' =>
'Dema bergerak di level universitas dan fokus pada pengembangan kepemimpinan, advokasi, serta sinergi antarorganisasi
mahasiswa. Sementara Senat dan Himpunan berfokus pada program kerja di lingkup fakultas atau jurusan tertentu.',
],
[
'id-toggle' => 'toggle-3',
'question' => 'Bagaimana peran Dema dalam mendukung karier dan masa depan mahasiswa?',
'answer' =>
'Melalui jaringan, pelatihan, serta kerja sama eksternal, Dema membantu mahasiswa memperluas wawasan, membangun
portofolio kontribusi, dan menyiapkan diri menjadi pemimpin umat di masa depan.',
],
[
'id-toggle' => 'toggle-4',
'question' => 'Apa saja program unggulan Dema UNIDA?',
'answer' =>
'Program unggulan mencakup pelatihan kepemimpinan Islami, kajian ilmiah dan strategis, kegiatan sosial dan pengabdian
masyarakat, kolaborasi nasional-internasional, serta event-event mahasiswa berbasis pesantren.',
],
[
'id-toggle' => 'toggle-5',
'question' => 'Bagaimana cara menyampaikan aspirasi atau kritik terhadap kebijakan kampus?',
'answer' =>
'Mahasiswa dapat menyampaikan aspirasi melalui kotak aspirasi digital, forum dialog yang difasilitasi Dema, atau
langsung kepada pengurus Dema untuk diteruskan secara resmi ke pihak kampus.',
],
[
'id-toggle' => 'toggle-6',
'question' => 'Apakah Dema hanya fokus pada kegiatan organisasi dan politik kampus?',
'answer' =>
'Tidak. Dema juga membina aspek spiritual, sosial, intelektual, dan kewirausahaan mahasiswa dengan pendekatan yang
seimbang antara nilai-nilai pesantren dan tantangan dunia modern.',
],
];
@endphp

<div x-data="{
    activeAccordion: '',
    setActiveAccordion(id) {
        this.activeAccordion = (this.activeAccordion == id) ? '' : id
    }
}" data-aos="fade-up" data-aos-duration="2000"
    class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white/60 dark:bg-zinc-900/85 backdrop-blur-lg dark:text-white border border-gray-300 dark:border-zinc-700 divide-y dark:divide-zinc-700 rounded-md">

    @foreach ($faqs as $faq)
    <div x-data="{ active: false }" class="group border-gray-300 dark:border-zinc-700 cursor-pointer">
        <button @click="active = !active"
            class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline cursor-pointer">
            <span>{{ $faq['question'] }}</span>
            <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': active }" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </button>
        <div x-show="active" x-collapse x-cloak class="border-gray-300 dark:border-zinc-700">
            <div class="p-4 pt-0 opacity-70 border-gray-300 dark:border-zinc-700">
                {{ $faq['answer'] }}
            </div>
        </div>
    </div>
    @endforeach


</div>