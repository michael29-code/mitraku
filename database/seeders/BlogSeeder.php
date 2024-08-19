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
            'image' => '',
            'body' => 'Mengelola restoran dengan efektif memerlukan keseimbangan antara operasional yang efisien dan pelayanan yang berkualitas. Salah satu kunci sukses dalam manajemen restoran adalah pengelolaan staf yang tepat, yang mencakup pelatihan berkala, penjadwalan yang fleksibel, dan penciptaan budaya kerja yang mendukung. Dengan memanfaatkan teknologi seperti sistem POS (Point of Sale), pemilik restoran dapat melacak penjualan, mengelola inventaris, dan memproses pesanan dengan lebih cepat dan akurat. Selain itu, fokus pada pengalaman pelanggan sangat penting; memastikan setiap pelanggan merasa dihargai melalui layanan yang baik dan konsisten akan membantu membangun loyalitas jangka panjang. Umpan balik pelanggan juga harus diambil dengan serius sebagai bahan untuk perbaikan terus-menerus. Dengan strategi manajemen yang baik, restoran dapat meningkatkan efisiensi operasional sekaligus menjaga kualitas pelayanan.',
        ]);
        Blog::create([
            'title' => 'Inovasi di Industri Restoran: Bagaimana Teknologi Meningkatkan Pengalaman Pelanggan',
            'slug' => 'Mengeksplorasi penggunaan aplikasi mobile, otomatisasi dapur, dan sistem pemesanan digital untuk memberikan pengalaman yang lebih cepat, nyaman, dan personal bagi pelanggan restoran.',
            'writerId' => '1',
            'kategoriId' => '2',
            'image' => '',
            'body' => 'Industri restoran telah mengalami perubahan signifikan dengan penerapan teknologi yang dirancang untuk meningkatkan pengalaman pelanggan. Aplikasi pemesanan mobile memungkinkan pelanggan untuk memesan dengan cepat dari ponsel mereka, mengurangi waktu tunggu dan memberikan kenyamanan lebih. Di dapur, otomatisasi semakin banyak digunakan, dengan robot yang membantu mempersiapkan hidangan secara efisien dan konsisten, sehingga memastikan kualitas makanan tetap terjaga. Selain itu, teknologi kecerdasan buatan (AI) digunakan untuk menganalisis preferensi pelanggan dan memberikan rekomendasi menu yang dipersonalisasi, menciptakan pengalaman makan yang lebih relevan dan menarik. Dengan teknologi ini, restoran dapat meningkatkan pelayanan sekaligus meningkatkan loyalitas pelanggan.',
        ]);
        Blog::create([
            'title' => 'Inovasi di Industri Restoran: Bagaimana Teknologi Meningkatkan Pengalaman Pelanggan',
            'slug' => 'Mengeksplorasi penggunaan aplikasi mobile, otomatisasi dapur, dan sistem pemesanan digital untuk memberikan pengalaman yang lebih cepat, nyaman, dan personal bagi pelanggan restoran.',
            'writerId' => '1',
            'kategoriId' => '2',
            'image' => '',
            'body' => 'Industri restoran telah mengalami perubahan signifikan dengan penerapan teknologi yang dirancang untuk meningkatkan pengalaman pelanggan. Aplikasi pemesanan mobile memungkinkan pelanggan untuk memesan dengan cepat dari ponsel mereka, mengurangi waktu tunggu dan memberikan kenyamanan lebih. Di dapur, otomatisasi semakin banyak digunakan, dengan robot yang membantu mempersiapkan hidangan secara efisien dan konsisten, sehingga memastikan kualitas makanan tetap terjaga. Selain itu, teknologi kecerdasan buatan (AI) digunakan untuk menganalisis preferensi pelanggan dan memberikan rekomendasi menu yang dipersonalisasi, menciptakan pengalaman makan yang lebih relevan dan menarik. Dengan teknologi ini, restoran dapat meningkatkan pelayanan sekaligus meningkatkan loyalitas pelanggan.',
        ]);
        Blog::create([
            'title' => 'Inovasi di Industri Restoran: Bagaimana Teknologi Meningkatkan Pengalaman Pelanggan',
            'slug' => 'Mengeksplorasi penggunaan aplikasi mobile, otomatisasi dapur, dan sistem pemesanan digital untuk memberikan pengalaman yang lebih cepat, nyaman, dan personal bagi pelanggan restoran.',
            'writerId' => '1',
            'kategoriId' => '2',
            'image' => '',
            'body' => 'Industri restoran telah mengalami perubahan signifikan dengan penerapan teknologi yang dirancang untuk meningkatkan pengalaman pelanggan. Aplikasi pemesanan mobile memungkinkan pelanggan untuk memesan dengan cepat dari ponsel mereka, mengurangi waktu tunggu dan memberikan kenyamanan lebih. Di dapur, otomatisasi semakin banyak digunakan, dengan robot yang membantu mempersiapkan hidangan secara efisien dan konsisten, sehingga memastikan kualitas makanan tetap terjaga. Selain itu, teknologi kecerdasan buatan (AI) digunakan untuk menganalisis preferensi pelanggan dan memberikan rekomendasi menu yang dipersonalisasi, menciptakan pengalaman makan yang lebih relevan dan menarik. Dengan teknologi ini, restoran dapat meningkatkan pelayanan sekaligus meningkatkan loyalitas pelanggan.',
        ]);
        Blog::create([
            'title' => 'Inovasi di Industri Restoran: Bagaimana Teknologi Meningkatkan Pengalaman Pelanggan',
            'slug' => 'Mengeksplorasi penggunaan aplikasi mobile, otomatisasi dapur, dan sistem pemesanan digital untuk memberikan pengalaman yang lebih cepat, nyaman, dan personal bagi pelanggan restoran.',
            'writerId' => '1',
            'kategoriId' => '2',
            'image' => '',
            'body' => 'Industri restoran telah mengalami perubahan signifikan dengan penerapan teknologi yang dirancang untuk meningkatkan pengalaman pelanggan. Aplikasi pemesanan mobile memungkinkan pelanggan untuk memesan dengan cepat dari ponsel mereka, mengurangi waktu tunggu dan memberikan kenyamanan lebih. Di dapur, otomatisasi semakin banyak digunakan, dengan robot yang membantu mempersiapkan hidangan secara efisien dan konsisten, sehingga memastikan kualitas makanan tetap terjaga. Selain itu, teknologi kecerdasan buatan (AI) digunakan untuk menganalisis preferensi pelanggan dan memberikan rekomendasi menu yang dipersonalisasi, menciptakan pengalaman makan yang lebih relevan dan menarik. Dengan teknologi ini, restoran dapat meningkatkan pelayanan sekaligus meningkatkan loyalitas pelanggan.',
        ]);
    }
}