<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        Post::create([
            'id' => Str::uuid(),
            'title' => 'FEMGET SELURUH UKM UNIDA',
            'category' => 'DEMA A',
            'body' => '
                <p class="text-lg font-medium indent-8 mt-5"></p><p><strong>Family Gathering UKM UNIDA : Merawat Semangat, Mengokohkan Tujuan</strong><br><br><strong>Siman, 27 Juni 2025</strong> – Malam Jumat yang penuh kekeluargaan dan makna tersaji dalam kegiatan bertajuk <strong>"Family Gathering Unit Kegiatan Mahasiswa (UKM) Universitas Darussalam Gontor"</strong>, yang diselenggarakan oleh <strong>Dewan Mahasiswa (DEMA)</strong> bekerjasama dengan <strong>Direktorat Kepesantrenan</strong>. Kegiatan ini dilaksanakan di <strong>Lobby Gedung Terpadu</strong> pada <strong>Jumat malam (27/6)</strong> pukul <strong>20.00–22.00 WIB</strong>, dihadiri oleh para pengurus dan anggota UKM aktif, serta dosen-dosen pembimbing UKM.<br><br>Family Gathering ini menjadi momentum penting dalam merawat semangat kebersamaan antar UKM dan mengevaluasi langkah gerakan mahasiswa selama satu tahun terakhir. Dengan mengusung tujuan <i>meluruskan niat kembali agar aktif kembali di kegiatan UKM</i>, acara ini tidak hanya menghadirkan suasana hangat dan penuh apresiasi, tetapi juga menjadi panggung penting peneguhan identitas pergerakan mahasiswa UNIDA.<br><br>Acara dibuka dengan <strong>tilawah Al-Qur’an</strong>, dilanjutkan sambutan dari <strong>Ketua DEMA Fajar Satriyawan</strong>, yang menyampaikan refleksi mendalam atas capaian dan tantangan UKM sepanjang tahun ini. Dalam pidatonya, Fajar menyebut bahwa UKM adalah wadah strategis untuk menumbuhkan nilai-nilai integritas, kolaborasi, dan ekspresi kreatif mahasiswa.<br><br>"<i>Seorang pemimpin harus menghadirkan nilai-nilai integritas, di mana apa yang diucapkan selaras dengan apa yang dilakukan,”</i> tegasnya.<br>Ia juga menyampaikan bahwa meskipun 19 UKM saat ini aktif, masih banyak potensi mahasiswa yang belum tergali secara optimal—terutama dari data partisipasi dan jumlah mahasiswa yang belum tergabung dalam UKM.<br><br>Materi utama malam itu disampaikan oleh <strong>Ustadz Khasib Amrullah, M.Ud</strong>, selaku Kepala Direktorat Kepesantrenan. Beliau menekankan bahwa UKM adalah media transformasi keilmuan, keimanan, dan pengamalan bagi mahasiswa UNIDA, sesuai dengan tiga pilar pendidikan pondok: <i>ilmu, iman, dan amal.</i><br><br><i>“Universitas ini bukan hanya tempat kuliah, tapi tempat kalian menemukan jati diri. Kalau satu UKM tidak cocok, pindahlah ke yang lain sampai kalian menemukan tempat yang membuat kalian menjadi tokoh di bidang itu,”</i> ujarnya menyemangati para hadirin.<br><br>Sesi ditutup dengan <strong>pesan arah strategis dari Wakil Rektor, Al-Ustadz Assoc. Prof. Dr. Khoirul Umam, M.Ec.</strong>, yang memberikan semangat dan visi besar untuk gerakan mahasiswa UNIDA ke depan. Ia menyoroti pentingnya <strong>membangun ketokohan melalui keberanian melangkah, meski belum ada jaminan finansial atau dukungan penuh.</strong><br><br><i>“Tokoh itu bukan dilahirkan karena kemudahan, tapi karena keberanian melangkah. Di Gontor, kita tidak mencetak tokoh karena warisan, tapi karena perjuangan,”</i> tegas beliau.<br><br>Beliau juga mengingatkan agar mahasiswa jangan terkekang dengan alasan “<strong>tidak ada dana</strong>” sebelum berjuang. “<strong>Langit itu dekat di UNIDA. Tugas antum adalah bergerak, tugas kami adalah mendukung</strong>,” tambahnya.<br><br>Acara kemudian ditutup dengan pembagian <strong>penghargaan kepada UKM dan individu berprestasi</strong>, doa bersama, dan dokumentasi. Malam itu bukan hanya tentang apresiasi, tetapi menjadi penyalaan kembali bara semangat perjuangan di jalan keilmuan, kreativitas, dan pengabdian.<br><br>Kegiatan ini diharapkan menjadi awal baru bagi setiap UKM untuk lebih aktif, inovatif, dan menyatu dalam cita besar kampus: <strong>melahirkan tokoh peradaban Islam dunia</strong>.</p><p></p>
                <br>
                <p class="text-sm">Dema Kampus Siman</p>
                <hr class="border my-1 border-primary">
                <p class="text-sm">Link Dokumentasi : <a href="https://drive.google.com/drive/folders/1lodL5S0YXqoYZp5EpnDnz-OnMJojg8x7?usp=sharing" target="_blank" class="underline">Klik Disini</a></p>
            ',
            'image' => 'femgetukm.jpg',
            'created_at' => now(),
            'is_demo' => true
        ]);
        // 2
        Post::create([
            'id' => Str::uuid(),
            'title' => 'Peringatan 1 Muharram',
            'category' => 'DEMA A',
            'body' => '
                <p class="text-lg font-medium indent-8 mt-5"></p><p><strong>Refleksi Awal Tahun Hijriyah: Ribuan Mahasiswa UNIDA Hadiri Peringatan 1 Muharram 1447 H</strong><br><br><strong>Siman, 26 Juni 2025</strong> – Malam penuh makna menyelimuti Masjid Universitas Darussalam Gontor (UNIDA) pada Kamis (26/6), dalam rangka memperingati <strong>1 Muharram 1447 H</strong> sekaligus menyambut <strong>Tahun Baru Hijriyah</strong>. Kegiatan yang diinisiasi oleh <strong>Direktorat Kepesantrenan UNIDA</strong> ini dihadiri oleh lebih dari <strong>1.800 mahasiswa</strong>, menjadikannya salah satu agenda sangat penting dalam kalender akademik kampus.<br>&nbsp;</p><p>Dengan mengangkat tema <i>“Tahun Baru Hijriyah, Momen untuk Memperbarui Niat”</i>, acara ini menjadi momentum refleksi spiritual bersama bagi seluruh sivitas akademika, khususnya mahasiswa, untuk menapaki lembaran baru kehidupan dengan tekad dan semangat hijrah yang lebih baik.<br>&nbsp;</p><p>Kegiatan dimulai selepas shalat Isya, tepat pukul <strong>19.45 WIB</strong>, dengan susunan acara: <strong>pembukaan, pembacaan ayat suci Al-Qur’an, sambutan, ceramah, doa penutup</strong>, dan ditutup pada pukul <strong>21.30 WIB</strong>. Sambutan pembuka disampaikan langsung oleh <strong>Ustadz Khasib Amrullah, M.Ud</strong>, selaku <strong>Kepala Direktorat Kepesantrenan</strong>, yang menekankan pentingnya menjaga semangat keislaman dan nilai perjuangan Rasulullah dalam setiap langkah kehidupan mahasiswa.<br>&nbsp;</p><p>Puncak acara diisi oleh <strong>Ustadz Dr. H. Jarman Arroisi, M.A.</strong>, yang menyampaikan ceramah penuh hikmah mengenai sejarah penetapan awal tahun Hijriyah. Dalam pemaparannya, beliau menjelaskan bahwa keputusan para sahabat menjadikan peristiwa <strong>Hijrah Nabi Muhammad SAW ke Madinah</strong> sebagai awal penanggalan Islam bukanlah hal yang sembarangan.<br><br><i>“Ketika para sahabat menentukan tahun Hijriyah dimulai dari peristiwa hijrah Rasulullah, itu bukan hanya keputusan administratif, tetapi penuh makna strategis dan spiritual. Hijrah adalah titik balik perjuangan umat Islam dari tekanan menuju kejayaan,”</i> ungkap beliau.<br><br>Beliau juga mengajak para mahasiswa untuk meneladani semangat hijrah Rasulullah, yang rela meninggalkan harta, keluarga, dan tanah kelahiran demi tegaknya dakwah Islam. Kini, kata beliau, tantangannya bukan lagi meninggalkan kota, tetapi <strong>berani meninggalkan kebiasaan buruk menuju pribadi yang lebih baik.</strong><br><br>Acara ini ditutup dengan doa bersama yang dipimpin oleh beliau, seraya memohon keberkahan dan kekuatan untuk mengawali tahun baru dengan niat yang bersih dan semangat yang baru.<br><br>Melalui kegiatan ini, mahasiswa UNIDA diharapkan tidak hanya menjadi insan akademik, tetapi juga insan spiritual yang memiliki kesadaran sejarah, nilai perjuangan, dan semangat perubahan diri yang berkesinambungan. Peringatan 1 Muharram di UNIDA tahun ini bukan hanya acara seremonial, tetapi juga menjadi wahana penyadaran dan penguatan identitas mahasiswa sebagai pejuang peradaban Islam.</p><p></p>
                <br>
                <p class="text-sm">Dema Kampus Siman</p>
                <hr class="border my-1 border-primary">
                <p class="text-sm">Link Dokumentasi : <a href="https://drive.google.com/drive/folders/1XECpjooKlFrhiTVV4o9LrBTBHIuW7opY?usp=sharing" target="_blank" class="underline">Klik Disini</a></p>
            ',
            'image' => 'malammuharram.jpg',
            'created_at' => now(),
            'is_demo' => true
        ]);
        // 3
        Post::create([
            'id' => Str::uuid(),
            'title' => 'Pembukaan Muharram Cup',
            'category' => 'UNIDA GONTOR',
            'body' => '
                <p class="text-lg font-medium indent-8 mt-5"></p><p><strong>Semangat Muharram Cup 2025 Dimulai : Brilla con fuerza, levántate con propósito</strong><br><br><strong>Siman, 27 Juni 2025</strong> – Suasana pagi di Lapangan Universitas Darussalam Gontor terasa berbeda dari biasanya. Ratusan mahasiswa berkumpul untuk mengikuti <strong>Upacara Pembukaan Muharram Cup 2025</strong>, sebuah rangkaian kegiatan kompetisi olahraga dan seni antar mahasiswa UNIDA yang digelar dalam rangka menyambut Tahun Baru Islam 1447 Hijriyah.<br>&nbsp;</p><p>Kegiatan yang dilaksanakan pada <strong>Jum’at, 27 Juni 2025</strong> ini dimulai sejak pukul <strong>06.00 WIB</strong> dengan diawali oleh kegiatan <strong>senam pagi bersama</strong>, dilanjutkan dengan <strong>upacara seremonial pembukaan</strong>, <strong>pengibaran bendera Muharram Cup</strong>, serta sambutan dan doa pembuka sebagai simbol dimulainya kompetisi resmi. Acara ini diselenggarakan oleh <strong>Panitia Mahasiswa Semester 3</strong> dan diikuti oleh seluruh mahasiswa UNIDA Siman sebagai peserta dan penonton aktif.<br>&nbsp;</p><p>Dengan mengusung tema : <strong>"Brilla con fuerza, levántate con propósito" </strong>(<i>Bersinarlah dengan kekuatan, bangkitlah dengan tujuan</i>) acara pembukaan ini bukan hanya menjadi seremoni simbolis, tetapi juga penyemangat untuk mengawali seluruh rangkaian pertandingan dengan sportivitas dan semangat ukhuwah Islamiyah.<br>&nbsp;</p><p>Dalam sambutannya, <strong>Al-Ustadz Assoc. Prof. Dr. Khoirul Umam, M.Ec.</strong>, menyampaikan pesan penuh makna yang tidak hanya memotivasi peserta, tetapi juga menggambarkan visi besar UNIDA dalam mencetak para tokoh masa depan. Beliau menekankan bahwa <strong>ketokohan di Gontor bukanlah sesuatu yang diwariskan, tetapi dibentuk melalui proses, pengorbanan, dan keikhlasan.&nbsp;</strong><br><br><i>“Tokoh sejati adalah orang yang selalu memberi manfaat, meski tak dikenal orang banyak. Di Gontor, kita mencetak pemimpin bukan karena keturunan, tapi karena proses yang ditempuh dengan sungguh-sungguh,”</i> ujar beliau.<br><br>Beliau juga menyoroti bahwa Muharram Cup bukan hanya ajang lomba, tetapi <strong>media pendidikan kepemimpinan</strong>:&nbsp;<br><br><i>“Menjadi anggota yang baik hari ini adalah fondasi untuk menjadi pemimpin yang bijak di masa depan. Jangan hanya ingin jadi ketua, tapi belajarlah memimpin dengan memberi, bukan mengambil.”</i><br><br>Lebih lanjut, beliau mengajak seluruh peserta untuk mengambil hikmah dari penetapan hijrah Nabi sebagai awal kalender Islam:<br><br><i>“Sahabat tidak memilih kelahiran Nabi atau masa kenabian, tapi memilih hijrah. Karena hijrah adalah titik perubahan, titik perjuangan. Maka jadikanlah kesempatan ini sebagai hijrah menuju diri yang lebih kuat dan bermanfaat.”</i><br><br>Acara pembukaan juga dimeriahkan dengan <strong>penampilan mahasiswa</strong>, menambah semarak dan kekhidmatan momen pagi hari tersebut. Para peserta tampak antusias menyambut dimulainya ajang tahunan ini, yang tidak hanya mempererat kebersamaan, tetapi juga menjadi wadah menyalurkan bakat, minat, dan potensi mahasiswa UNIDA.<br><br>Kegiatan ditutup dengan doa bersama agar seluruh pertandingan selama Muharram Cup berjalan lancar, penuh keberkahan, dan menjunjung nilai-nilai Islami. Pembukaan ini sekaligus menandai awal semangat hijrah yang tidak hanya spiritual, tetapi juga dalam pengembangan diri dan potensi keolahragaan serta kebudayaan mahasiswa.</p><p>Dengan dimulainya Muharram Cup 2025, UNIDA Gontor kembali menegaskan komitmennya dalam mencetak generasi sehat, cerdas, dan berakhlak, sesuai nilai-nilai pesantren dan semangat kebersamaan yang telah lama ditanamkan dalam jiwa mahasiswa.</p><p></p>
                <br>
                <p class="text-sm">Dema Kampus Siman</p>
                <hr class="border my-1 border-primary">
                <p class="text-sm">Link Dokumentasi : <a href="https://drive.google.com/drive/folders/1BNZkzZjii9QvCa3X5nk_JOC_Ehxysh9y" target="_blank" class="underline">Klik Disini</a></p>
            ',
            'image' => 'muharramcup.jpg',
            'created_at' => now(),
            'is_demo' => true
        ]);
        // 4
        Post::create([
            'id' => Str::uuid(),
            'title' => 'Lari Pagi Bersama',
            'category' => 'UNIDA GONTOR',
            'body' => '
                <p class="text-lg font-medium indent-8 mt-5"></p><p><strong>Lari Pagi Bersama: Mahasiswa UNIDA Siman Wujudkan Gaya Hidup Sehat dan Kompak</strong></p><p><br><strong>Siman, Jumat 23 Mei 2025</strong><span style="color:rgb(4,54,74);"> — </span>Dalam rangka mendorong gaya hidup sehat dan mempererat kebersamaan antar mahasiswa, <strong>Dewan Mahasiswa Universitas Darussalam (UNIDA) Siman</strong> menggelar kegiatan <strong>Lari Pagi Bersama</strong> pada Jumat pagi, 23 Mei 2025. Acara yang dimulai pada pukul <strong>06.00 WIB</strong> ini diikuti oleh ratusan mahasiswa dari seluruh fakultas dan program studi yang ada di UNIDA. Tidak hanya diikuti oleh mahasiswa aktif, beberapa dosen dan staf juga turut hadir meramaikan kegiatan ini.</p><p>&nbsp;</p><p>Rute lari pagi yang ditempuh berjarak sekitar <strong>tiga kilometer</strong>, melintasi jalanan di sekitar kawasan kampus dan lingkungan Desa Brahu. Dengan suasana pagi yang sejuk dan penuh semangat, para peserta tampak antusias mengikuti kegiatan ini hingga selesai pada pukul <strong>07.30 WIB</strong>. Acara ini juga mendapat <strong>dukungan penuh dari pihak kepolisian</strong>, yang turut hadir membantu mengatur lalu lintas dan memastikan keselamatan para peserta saat menyebrangi jalan. Kehadiran petugas kepolisian sangat membantu kelancaran jalannya kegiatan, khususnya di area-area rawan kendaraan.</p><p>&nbsp;</p><p>Ketua DEMA, <strong>Fajar Satriyawan</strong>, menyampaikan apresiasi atas antusiasme peserta dan seluruh pihak yang terlibat dalam kesuksesan kegiatan ini. “Antusiasme peserta sangat luar biasa. Ini menjadi bukti bahwa mahasiswa UNIDA peduli terhadap kesehatan dan kekompakan. Sesuai dengan pepatah Latin <i>mens sana in corpore sano</i>, dalam tubuh yang sehat terdapat jiwa yang kuat. Kami berharap semangat ini terus hidup di kalangan mahasiswa,” ujarnya.</p><p>&nbsp;</p><p>Kegiatan lari pagi ini tidak hanya berfokus pada aspek fisik, tetapi juga menjadi ajang mempererat tali persaudaraan antar mahasiswa lintas jurusan. Banyak peserta yang saling berkenalan dan bercengkerama sepanjang rute, menjadikan kegiatan ini sebagai momentum membangun ikatan sosial yang positif.&nbsp;</p><p>&nbsp;</p><p>Dengan terselenggaranya kegiatan ini, Dewan Mahasiswa berharap dapat menumbuhkan kesadaran akan pentingnya menjaga kesehatan jasmani di tengah padatnya aktivitas akademik. Rencananya, kegiatan serupa akan diagendakan secara rutin agar menjadi budaya baru yang positif di lingkungan UNIDA Siman.</p><p></p>
                <br>
                <p class="text-sm">Dema Kampus Siman</p>
                <hr class="border my-1 border-primary">
                <p class="text-sm">Link Dokumentasi : <a href="https://drive.google.com/drive/folders/1OV4AsnU3cyndGDemXzuAbGCJbTJbu9hC?usp=sharing" target="_blank" class="underline">Klik Disini</a></p>
            ',
            'image' => 'laripagi.jpg',
            'created_at' => now(),
            'is_demo' => true
        ]);
    }
}