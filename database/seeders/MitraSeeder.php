<?php

namespace Database\Seeders;

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
        Mitra::create([
            'user_id' => '7',
            'mitraName' => 'PT Teknologi Maju Jaya',
            'mitraOverview' => 'PT Teknologi Maju Jaya adalah perusahaan teknologi yang fokus pada pengembangan solusi perangkat lunak untuk bisnis.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.teknologimajujaya.co.id',
            'mitraCategory' => 'Teknologi',
            'image_cover' => 'images/cover.jpg',
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0123456789',
            'mitra_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.',
            'latest_rating_and_certificate' => json_encode([
                [
                    'nama_pemberi' => 'PEFINDO Credit Rating Agency',
                    'tanggal' => 'December 2021',
                    'rating' => '(id)BBB+/outlook stable'
                ],
                [
                    'nama_pemberi' => 'Fitch Rating',
                    'tanggal' => 'May 2018',
                    'rating' => 'BBB+ (idn)/outlook stable'
                ],
                [
                    'nama_pemberi' => 'Social Performance (Planet Rating 2014)',
                    'tanggal' => '2014',
                    'rating' => '4-'
                ],
                [
                    'nama_pemberi' => 'Client Protection Certificate (Cerise and SPTF Team)',
                    'tanggal' => 'April 2022',
                    'rating' => 'Certification level: Gold'
                ]
            ]),
            'awards' => json_encode([
                [
                    'nama_pemberi' => 'MIX Market Ranking (CGAP / World Bank)',
                    'penghargaan' => [
                        [
                            'tahun' => 2009,
                            'deskripsi' => '#1 out of 1,600 MFIs in the world'
                        ],
                        [
                            'tahun' => 2008,
                            'deskripsi' => '#1 out of 1,300 MFIs in the world'
                        ],
                        [
                            'tahun' => 2007,
                            'deskripsi' => '#25 out of 1,100 MFIs in the world'
                        ],
                    ]
                ],
                [
                    'nama_pemberi' => 'Other',
                    'penghargaan' => [
                        [
                            'tahun' => 2008,
                            'deskripsi' => 'Grameen Foundation Excellence Award'
                        ],
                        [
                            'tahun' => 2008,
                            'deskripsi' => 'Unitus Inc. Achievement Award'
                        ],
                        [
                            'tahun' => 2007,
                            'deskripsi' => 'Ernst & Young Finalist, Social Entrepreneur Indonesia'
                        ],
                    ]
                ]
            ]),
            'image_map' => 'url/to/map/image.png',
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
            'image_cover' => 'images/cover.jpg',
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0123456789',
            'mitra_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.',
            'latest_rating_and_certificate' => json_encode([
                [
                    'nama_pemberi' => 'PEFINDO Credit Rating Agency',
                    'tanggal' => 'December 2021',
                    'rating' => '(id)BBB+/outlook stable'
                ],
                [
                    'nama_pemberi' => 'Fitch Rating',
                    'tanggal' => 'May 2018',
                    'rating' => 'BBB+ (idn)/outlook stable'
                ],
                [
                    'nama_pemberi' => 'Social Performance (Planet Rating 2014)',
                    'tanggal' => '2014',
                    'rating' => '4-'
                ],
                [
                    'nama_pemberi' => 'Client Protection Certificate (Cerise and SPTF Team)',
                    'tanggal' => 'April 2022',
                    'rating' => 'Certification level: Gold'
                ]
            ]),
            'awards' => json_encode([
                [
                    'nama_pemberi' => 'MIX Market Ranking (CGAP / World Bank)',
                    'penghargaan' => [
                        [
                            'tahun' => 2009,
                            'deskripsi' => '#1 out of 1,600 MFIs in the world'
                        ],
                        [
                            'tahun' => 2008,
                            'deskripsi' => '#1 out of 1,300 MFIs in the world'
                        ],
                        [
                            'tahun' => 2007,
                            'deskripsi' => '#25 out of 1,100 MFIs in the world'
                        ],
                    ]
                ],
                [
                    'nama_pemberi' => 'Other',
                    'penghargaan' => [
                        [
                            'tahun' => 2008,
                            'deskripsi' => 'Grameen Foundation Excellence Award'
                        ],
                        [
                            'tahun' => 2008,
                            'deskripsi' => 'Unitus Inc. Achievement Award'
                        ],
                        [
                            'tahun' => 2007,
                            'deskripsi' => 'Ernst & Young Finalist, Social Entrepreneur Indonesia'
                        ],
                    ]
                ]
            ]),
            'image_map' => 'url/to/map/image.png',
            'address' => 'Jl. Teknologi No. 1, Jakarta, Indonesia',
            'isBlocked' => 0,

        ]);

        Mitra::create([
            'user_id' => '4',
            'mitraName' => 'PT Remifa Maju Jaya',
            'mitraOverview' => 'PT Teknologi Maju Jaya adalah perusahaan teknologi yang fokus pada pengembangan solusi perangkat lunak untuk bisnis.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.teknologimajujaya.co.id',
            'mitraCategory' => 'Teknologi',
            'image_cover' => 'images/cover.jpg',
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0123456789',
            'mitra_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.',
            'latest_rating_and_certificate' => json_encode([
                [
                    'nama_pemberi' => 'PEFINDO Credit Rating Agency',
                    'tanggal' => 'December 2021',
                    'rating' => '(id)BBB+/outlook stable'
                ],
                [
                    'nama_pemberi' => 'Fitch Rating',
                    'tanggal' => 'May 2018',
                    'rating' => 'BBB+ (idn)/outlook stable'
                ],
                [
                    'nama_pemberi' => 'Social Performance (Planet Rating 2014)',
                    'tanggal' => '2014',
                    'rating' => '4-'
                ],
                [
                    'nama_pemberi' => 'Client Protection Certificate (Cerise and SPTF Team)',
                    'tanggal' => 'April 2022',
                    'rating' => 'Certification level: Gold'
                ]
            ]),
            'awards' => json_encode([
                [
                    'nama_pemberi' => 'MIX Market Ranking (CGAP / World Bank)',
                    'penghargaan' => [
                        [
                            'tahun' => 2009,
                            'deskripsi' => '#1 out of 1,600 MFIs in the world'
                        ],
                        [
                            'tahun' => 2008,
                            'deskripsi' => '#1 out of 1,300 MFIs in the world'
                        ],
                        [
                            'tahun' => 2007,
                            'deskripsi' => '#25 out of 1,100 MFIs in the world'
                        ],
                    ]
                ],
                [
                    'nama_pemberi' => 'Other',
                    'penghargaan' => [
                        [
                            'tahun' => 2008,
                            'deskripsi' => 'Grameen Foundation Excellence Award'
                        ],
                        [
                            'tahun' => 2008,
                            'deskripsi' => 'Unitus Inc. Achievement Award'
                        ],
                        [
                            'tahun' => 2007,
                            'deskripsi' => 'Ernst & Young Finalist, Social Entrepreneur Indonesia'
                        ],
                    ]
                ]
            ]),
            'image_map' => 'url/to/map/image.png',
            'address' => 'Jl. Teknologi No. 1, Jakarta, Indonesia',
            'isBlocked' => 0,

        ]);

        Mitra::create([
            'user_id' => '5',
            'mitraName' => 'PT Fasola Maju Jaya',
            'mitraOverview' => 'PT Teknologi Maju Jaya adalah perusahaan teknologi yang fokus pada pengembangan solusi perangkat lunak untuk bisnis.',
            'mitraYear' => 2010,
            'mitraWebsite' => 'www.teknologimajujaya.co.id',
            'mitraCategory' => 'Teknologi',
            'image_cover' => 'images/cover.jpg',
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0123456789',
            'mitra_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.',
            'latest_rating_and_certificate' => json_encode([
                [
                    'nama_pemberi' => 'PEFINDO Credit Rating Agency',
                    'tanggal' => 'December 2021',
                    'rating' => '(id)BBB+/outlook stable'
                ],
                [
                    'nama_pemberi' => 'Fitch Rating',
                    'tanggal' => 'May 2018',
                    'rating' => 'BBB+ (idn)/outlook stable'
                ],
                [
                    'nama_pemberi' => 'Social Performance (Planet Rating 2014)',
                    'tanggal' => '2014',
                    'rating' => '4-'
                ],
                [
                    'nama_pemberi' => 'Client Protection Certificate (Cerise and SPTF Team)',
                    'tanggal' => 'April 2022',
                    'rating' => 'Certification level: Gold'
                ]
            ]),
            'awards' => json_encode([
                [
                    'nama_pemberi' => 'MIX Market Ranking (CGAP / World Bank)',
                    'penghargaan' => [
                        [
                            'tahun' => 2009,
                            'deskripsi' => '#1 out of 1,600 MFIs in the world'
                        ],
                        [
                            'tahun' => 2008,
                            'deskripsi' => '#1 out of 1,300 MFIs in the world'
                        ],
                        [
                            'tahun' => 2007,
                            'deskripsi' => '#25 out of 1,100 MFIs in the world'
                        ],
                    ]
                ],
                [
                    'nama_pemberi' => 'Other',
                    'penghargaan' => [
                        [
                            'tahun' => 2008,
                            'deskripsi' => 'Grameen Foundation Excellence Award'
                        ],
                        [
                            'tahun' => 2008,
                            'deskripsi' => 'Unitus Inc. Achievement Award'
                        ],
                        [
                            'tahun' => 2007,
                            'deskripsi' => 'Ernst & Young Finalist, Social Entrepreneur Indonesia'
                        ],
                    ]
                ]
            ]),
            'image_map' => 'url/to/map/image.png',
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
            'image_cover' => 'images/cover.jpg',
            'contactName' => 'David Rodloy',
            'contactEmail' => 'davidrodloy@teknologimajujaya.com',
            'contactPhoneNumber' => '0123456789',
            'mitra_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.',
            'latest_rating_and_certificate' => json_encode([
                [
                    'nama_pemberi' => 'PEFINDO Credit Rating Agency',
                    'tanggal' => 'December 2021',
                    'rating' => '(id)BBB+/outlook stable'
                ],
                [
                    'nama_pemberi' => 'Fitch Rating',
                    'tanggal' => 'May 2018',
                    'rating' => 'BBB+ (idn)/outlook stable'
                ],
                [
                    'nama_pemberi' => 'Social Performance (Planet Rating 2014)',
                    'tanggal' => '2014',
                    'rating' => '4-'
                ],
                [
                    'nama_pemberi' => 'Client Protection Certificate (Cerise and SPTF Team)',
                    'tanggal' => 'April 2022',
                    'rating' => 'Certification level: Gold'
                ]
            ]),
            'awards' => json_encode([
                [
                    'nama_pemberi' => 'MIX Market Ranking (CGAP / World Bank)',
                    'penghargaan' => [
                        [
                            'tahun' => 2009,
                            'deskripsi' => '#1 out of 1,600 MFIs in the world'
                        ],
                        [
                            'tahun' => 2008,
                            'deskripsi' => '#1 out of 1,300 MFIs in the world'
                        ],
                        [
                            'tahun' => 2007,
                            'deskripsi' => '#25 out of 1,100 MFIs in the world'
                        ],
                    ]
                ],
                [
                    'nama_pemberi' => 'Other',
                    'penghargaan' => [
                        [
                            'tahun' => 2008,
                            'deskripsi' => 'Grameen Foundation Excellence Award'
                        ],
                        [
                            'tahun' => 2008,
                            'deskripsi' => 'Unitus Inc. Achievement Award'
                        ],
                        [
                            'tahun' => 2007,
                            'deskripsi' => 'Ernst & Young Finalist, Social Entrepreneur Indonesia'
                        ],
                    ]
                ]
            ]),
            'image_map' => 'url/to/map/image.png',
            'address' => 'Jl. Teknologi No. 1, Jakarta, Indonesia',
            'isBlocked' => 0,
        ]);
        
    }
}
