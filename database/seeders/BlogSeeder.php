<?php

namespace Database\Seeders;
use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        Blog::create([
            'title' => 'Manajemen Restoran Efektif: Strategi untuk Meningkatkan Operasional dan Layanan',
            'slug' => 'Mengulas strategi manajemen, mulai dari pengelolaan staf, efisiensi operasional, hingga peningkatan layanan pelanggan, yang dapat membantu restoran berjalan lebih lancar dan menguntungkan.',
            'writerId' => '1',
            'kategoriId' => '2',
            'image' => 'blog-images/default.png',
            'body' => 'Mengelola restoran dengan efektif memerlukan keseimbangan antara operasional yang efisien dan pelayanan yang berkualitas. Salah satu kunci sukses dalam manajemen restoran adalah pengelolaan staf yang tepat, yang mencakup pelatihan berkala, penjadwalan yang fleksibel, dan penciptaan budaya kerja yang mendukung. Dengan memanfaatkan teknologi seperti sistem POS (Point of Sale), pemilik restoran dapat melacak penjualan, mengelola inventaris, dan memproses pesanan dengan lebih cepat dan akurat. Selain itu, fokus pada pengalaman pelanggan sangat penting; memastikan setiap pelanggan merasa dihargai melalui layanan yang baik dan konsisten akan membantu membangun loyalitas jangka panjang. Umpan balik pelanggan juga harus diambil dengan serius sebagai bahan untuk perbaikan terus-menerus. Dengan strategi manajemen yang baik, restoran dapat meningkatkan efisiensi operasional sekaligus menjaga kualitas pelayanan.',
        ]);

        Blog::create([
            'title' => 'Inovasi di Industri Restoran: Bagaimana Teknologi Meningkatkan Pengalaman Pelanggan',
            'slug' => 'Mengeksplorasi penggunaan aplikasi mobile, otomatisasi dapur, dan sistem pemesanan digital untuk memberikan pengalaman yang lebih cepat, nyaman, dan personal bagi pelanggan restoran.',
            'writerId' => '1',
            'kategoriId' => '2',
            'image' => 'blog-images/default2.png',
            'body' => 'Industri restoran telah mengalami perubahan signifikan dengan penerapan teknologi yang dirancang untuk meningkatkan pengalaman pelanggan. Aplikasi pemesanan mobile memungkinkan pelanggan untuk memesan dengan cepat dari ponsel mereka, mengurangi waktu tunggu dan memberikan kenyamanan lebih. Di dapur, otomatisasi semakin banyak digunakan, dengan robot yang membantu mempersiapkan hidangan secara efisien dan konsisten, sehingga memastikan kualitas makanan tetap terjaga. Selain itu, teknologi kecerdasan buatan (AI) digunakan untuk menganalisis preferensi pelanggan dan memberikan rekomendasi menu yang dipersonalisasi, menciptakan pengalaman makan yang lebih relevan dan menarik. Dengan teknologi ini, restoran dapat meningkatkan pelayanan sekaligus meningkatkan loyalitas pelanggan.',
        ]);

        Blog::create([
            'title' => 'Teknologi Terkini yang Mengubah Desain Bangunan Modern',
            'slug' => 'membahas inovasi teknologi seperti BIM (Building Information Modeling), pencetakan 3D, dan penggunaan AI yang mengubah cara arsitek dan insinyur merancang bangunan modern secara efisien dan kreatif.',
            'writerId' => '1',
            'kategoriId' => '2',
            'image' => 'blog-images/default3.png',
            'body' => 'Teknologi telah merevolusi cara kita merancang dan membangun struktur bangunan. Dengan adanya BIM (Building Information Modeling), arsitek dan insinyur dapat bekerja lebih efisien dalam satu platform digital yang memungkinkan kolaborasi, perencanaan, dan visualisasi secara real-time. Pencetakan 3D juga telah mempercepat proses pembuatan model fisik dari desain digital, yang memungkinkan para profesional untuk menguji dan mengembangkan ide dengan lebih cepat dan hemat biaya. Selain itu, teknologi AI semakin banyak digunakan dalam arsitektur untuk membantu mengoptimalkan desain, memperkirakan penggunaan material yang lebih efisien, dan bahkan menganalisis ketahanan struktur di masa depan. Semua inovasi ini menunjukkan bagaimana teknologi terus mendefinisikan ulang standar dalam dunia desain bangunan modern.',
        ]);

        Blog::create([
            'title' => 'Membangun Masa Depan: Tren Arsitektur Berkelanjutan di Era Digital',
            'slug' => 'Membahas tren bangunan ramah lingkungan seperti penggunaan material daur ulang, desain hemat energi, dan teknologi cerdas yang mengedepankan keberlanjutan dalam konstruksi masa depan.',
            'writerId' => '1',
            'kategoriId' => '2',
            'image' => 'blog-images/default4.png',
            'body' => 'Arsitektur berkelanjutan semakin menjadi fokus utama dalam industri konstruksi global, didorong oleh meningkatnya kesadaran terhadap perubahan iklim dan pentingnya keberlanjutan lingkungan. Bangunan masa kini dirancang dengan memprioritaskan penggunaan material ramah lingkungan seperti beton daur ulang, kayu yang bersumber secara bertanggung jawab, dan material komposit yang memiliki jejak karbon rendah. Selain itu, konsep desain hemat energi semakin berkembang, dengan memanfaatkan sumber energi terbarukan seperti panel surya dan sistem ventilasi alami untuk mengurangi ketergantungan pada energi konvensional. Di samping itu, bangunan cerdas yang dilengkapi dengan teknologi otomatisasi juga mampu mengoptimalkan penggunaan energi dan air, sehingga operasional bangunan menjadi lebih efisien. Dengan memadukan inovasi digital dan prinsip keberlanjutan, arsitektur modern berupaya untuk membangun masa depan yang lebih hijau dan lebih efisien.',
        ]);

        Blog::create([
            'title' => 'Teknologi Manajemen Proyek: Solusi Cerdas untuk Efisiensi di Industri Konstruksi',
            'slug' => 'Menjelaskan berbagai alat dan software manajemen proyek yang dirancang untuk memantau waktu, anggaran, dan sumber daya secara lebih efektif dalam proyek konstruksi, meningkatkan efisiensi dan akurasi.',
            'writerId' => '1',
            'kategoriId' => '2',
            'image' => 'blog-images/default5.png',
            'body' => 'Manajemen proyek dalam industri konstruksi semakin terfasilitasi oleh teknologi modern yang dirancang untuk meningkatkan efisiensi dan akurasi. Alat manajemen proyek berbasis software kini menjadi solusi penting untuk mengelola anggaran, sumber daya, dan waktu proyek dengan lebih baik. Dengan menggunakan teknologi ini, tim konstruksi dapat memantau kemajuan proyek secara real-time, berkomunikasi lebih baik antar departemen, dan mengidentifikasi potensi masalah sebelum mereka berkembang menjadi hambatan serius. Selain itu, teknologi seperti drone dan sensor IoT (Internet of Things) membantu dalam pemantauan lokasi konstruksi secara otomatis, sehingga memungkinkan para manajer proyek untuk mendapatkan data yang lebih akurat terkait perkembangan pekerjaan. Melalui adopsi teknologi ini, proyek konstruksi dapat diselesaikan dengan lebih cepat, lebih murah, dan dengan risiko yang lebih rendah, memastikan hasil yang lebih memuaskan bagi semua pihak yang terlibat.',
        ]);
    }
}