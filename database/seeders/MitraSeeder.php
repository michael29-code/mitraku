<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Mitra;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        Mitra::create([
            'user_id' => '7',
            'mitraName' => 'Teknologi Maju Jaya',
            'mitraOverview' => 'PT Teknologi Maju Jaya adalah perusahaan teknologi yang fokus pada pengembangan solusi perangkat lunak untuk bisnis.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.teknologimajujaya.co.id',
            'mitraCategory' => '2',
            'image_cover' => null,
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0215551234',
            'mitra_details' => 'Teknologi Maju Jaya adalah perusahaan terkemuka dalam industri teknologi informasi di Indonesia, berdedikasi untuk menyediakan solusi IT yang inovatif dan terintegrasi. Dengan lebih dari 15 tahun pengalaman, kami menawarkan layanan seperti pengembangan perangkat lunak kustom, integrasi sistem, manajemen data, serta dukungan dan pemeliharaan teknologi. Kami bekerja dengan berbagai sektor industri, termasuk perbankan, pendidikan, dan kesehatan, untuk membantu mereka meningkatkan efisiensi operasional dan meraih keunggulan kompetitif melalui teknologi yang disesuaikan dengan kebutuhan spesifik mereka.',
            'image_map' => '',
            'address' => 'Jl. Gatot Subroto No. 23, Setiabudi, Jakarta Selatan, DKI Jakarta 12950, Indonesia',
            'isBlocked' => 0,
        ]);

        Mitra::create([
            'user_id' => '3',
            'mitraName' => 'NeoTech Innovations',
            'mitraOverview' => 'Neotech Innovations adalah perusahaan teknologi global yang berfokus pada riset dan pengembangan produk-produk canggih dalam bidang elektronik dan perangkat pintar.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.neotech.co.id',
            'mitraCategory' => '2',
            'image_cover' => null,
            'contactName' => 'Dimas Pratama',
            'contactEmail' => 'dimas.pratama@neotech.com',
            'contactPhoneNumber' => '08116784321',
            'mitra_details' => ' Neotech Innovations adalah pemimpin global dalam pengembangan teknologi mutakhir, berfokus pada riset dan pengembangan produk elektronik dan perangkat pintar. Didirikan dengan misi untuk menghadirkan inovasi yang mendorong batasan teknologi, Neotech Innovations menawarkan berbagai produk mulai dari gadget konsumen hingga sistem otomatisasi industri. Kami memiliki tim riset dan pengembangan yang terdiri dari para ahli di bidangnya, yang terus menerus mencari cara baru untuk memecahkan masalah kompleks dan menciptakan solusi yang revolusioner.',
            'image_map' => '',
            'address' => 'Jl. Diponegoro No. 11, Tegalsari, Surabaya, Jawa Timur 60263, Indonesia',
            'isBlocked' => 0,

        ]);

        Mitra::create([
            'user_id' => '4',
            'mitraName' => 'Flavorscape',
            'mitraOverview' => 'Flavorscape adalah restoran modern yang menyajikan pengalaman kuliner unik dengan menu yang terinspirasi dari berbagai budaya internasional.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.flavorscape.co.id',
            'mitraCategory' => '1',
            'image_cover' => null,
            'contactName' => 'Nadia Ramadhani',
            'contactEmail' => 'nadia.ramadhani@flavorscape.co.id',
            'contactPhoneNumber' => '0319876543',
            'mitra_details' => 'Flavorscape adalah restoran bergaya kontemporer yang menawarkan pengalaman kuliner yang unik dan menggugah selera. Kami menggabungkan teknik memasak modern dengan bahan-bahan berkualitas tinggi dari seluruh dunia untuk menciptakan menu yang beragam dan inovatif. Dengan suasana yang nyaman dan desain interior yang elegan, Flavorscape bertujuan untuk menjadi destinasi favorit bagi para penggemar kuliner yang mencari cita rasa baru dan pengalaman bersantap yang tak terlupakan. ',
            'image_map' => '',
            'address' => 'Jl. Pahlawan No. 45, Andir, Bandung, Jawa Barat 40181, Indonesia',
            'isBlocked' => 0,

        ]);

        Mitra::create([
            'user_id' => '5',
            'mitraName' => 'StoneForge Construction',
            'mitraOverview' => 'Stoneforge Construction adalah perusahaan konstruksi yang berpengalaman dalam pembangunan dan renovasi bangunan komersial dan residensial.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.stoneforge.co.id',
            'mitraCategory' => '3',
            'image_cover' => null,
            'contactName' => 'Faisal Mahendra',
            'contactEmail' => 'faisal.mahendra@stoneforge.co.id',
            'contactPhoneNumber' => '0224567890',
            'mitra_details' => 'Stoneforge Construction adalah perusahaan konstruksi yang mengkhususkan diri dalam pembangunan dan renovasi proyek-proyek besar dan kompleks. Kami dikenal karena keahlian kami dalam mengelola proyek-proyek komersial dan residensial, dari desain awal hingga penyelesaian akhir. Dengan pengalaman lebih dari dua dekade, kami mengutamakan kualitas, keselamatan, dan efisiensi dalam setiap aspek pekerjaan kami.',
            'image_map' => '',
            'address' => 'Jl. Sudirman Kav. 52-53, SCBD Lot 10, Jakarta Selatan, DKI Jakarta 12190, Indonesia',
            'isBlocked' => 0,
        ]);

        Mitra::create([
            'user_id' => '6',
            'mitraName' => 'Titan Structures',
            'mitraOverview' => 'Titan Structures adalah perusahaan rekayasa dan konstruksi yang mengkhususkan diri dalam proyek-proyek infrastruktur besar dan kompleks. ',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.titanstrcutures.co.id',
            'mitraCategory' => '3',
            'image_cover' => null,
            'contactName' => 'Sinta Wijaya',
            'contactEmail' => 'sinta.wijaya@titanstructures.com',
            'contactPhoneNumber' => '081390901122',
            'mitra_details' => 'Titan Structures adalah perusahaan rekayasa dan konstruksi terkemuka yang berspesialisasi dalam proyek infrastruktur besar dan kompleks. Kami menawarkan layanan lengkap yang mencakup perencanaan, desain, dan konstruksi struktur besar seperti jembatan, gedung pencakar langit, dan fasilitas industri. Dengan pendekatan berbasis data dan teknologi mutakhir, kami memastikan bahwa setiap proyek tidak hanya memenuhi persyaratan teknis tetapi juga memenuhi standar keselamatan dan keberlanjutan. ',
            'image_map' => '',
            'address' => 'Jl. Melati Indah No. 27, Kelapa Gading, Jakarta Utara, DKI Jakarta 14240, Indonesia',
            'isBlocked' => 0,
        ]);
        
    }
}
