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
            'mitraName' => 'PT Teknologi Maju Jaya',
            'mitraOverview' => 'PT Teknologi Maju Jaya adalah perusahaan teknologi yang fokus pada pengembangan solusi perangkat lunak untuk bisnis.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.teknologimajujaya.co.id',
            'mitraCategory' => 'Bangunan',
            'image_cover' => null,
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0123456789',
            'mitra_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.',
            'image_map' => '',
            'address' => 'Jl. Teknologi No. 1, Jakarta, Indonesia',
            'isBlocked' => 0,
        ]);

        Mitra::create([
            'user_id' => '3',
            'mitraName' => 'PT Doremi Mundur Jaya',
            'mitraOverview' => 'PT Doremi Mundur Jaya adalah perusahaan teknologi yang fokus pada pengembangan solusi perangkat lunak untuk bisnis.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.teknologimajujaya.co.id',
            'mitraCategory' => 'Teknologi',
            'image_cover' => null,
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0123456789',
            'mitra_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.',
            'image_map' => '',
            'address' => 'Jl. Teknologi No. 1, Jakarta, Indonesia',
            'isBlocked' => 0,

        ]);

        Mitra::create([
            'user_id' => '4',
            'mitraName' => 'PT Remifa Maju Jaya',
            'mitraOverview' => 'PT Teknologi Maju Jaya adalah perusahaan teknologi yang fokus pada pengembangan solusi perangkat lunak untuk bisnis.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.teknologimajujaya.co.id',
            'mitraCategory' => 'Restoran',
            'image_cover' => null,
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0123456789',
            'mitra_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.',
            'image_map' => '',
            'address' => 'Jl. Teknologi No. 1, Jakarta, Indonesia',
            'isBlocked' => 0,

        ]);

        Mitra::create([
            'user_id' => '5',
            'mitraName' => 'PT Fasola Maju Jaya',
            'mitraOverview' => 'PT Teknologi Maju Jaya adalah perusahaan teknologi yang fokus pada pengembangan solusi perangkat lunak untuk bisnis.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.teknologimajujaya.co.id',
            'mitraCategory' => 'Bangunan',
            'image_cover' => null,
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0123456789',
            'mitra_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.',
            'image_map' => '',
            'address' => 'Jl. Teknologi No. 1, Jakarta, Indonesia',
            'isBlocked' => 0,
        ]);

        Mitra::create([
            'user_id' => '6',
            'mitraName' => 'PT Mamimu Maju Jaya',
            'mitraOverview' => 'PT Teknologi Maju Jaya adalah perusahaan teknologi yang fokus pada pengembangan solusi perangkat lunak untuk bisnis.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.teknologimajujaya.co.id',
            'mitraCategory' => 'Teknologi',
            'image_cover' => null,
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0123456789',
            'mitra_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.',
            'image_map' => '',
            'address' => 'Jl. Teknologi No. 1, Jakarta, Indonesia',
            'isBlocked' => 0,
        ]);
        
    }
}
