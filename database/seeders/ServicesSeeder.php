<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Perawatan Rutin',
                'slug' => 'perawatan-rutin',
                'description' => 'Perawatan berkala termasuk penggantian oli, filter, dan pemeriksaan menyeluruh pada kendaraan Anda.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
                'price_range' => 'Rp 300.000 - Rp 1.000.000',
                'is_featured' => true,
            ],
            [
                'name' => 'Perbaikan Mesin',
                'slug' => 'servis-mesin',
                'description' => 'Diagnosa dan perbaikan mesin untuk semua jenis masalah, dari overheating hingga masalah performa.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg>',
                'price_range' => 'Rp 500.000 - Rp 5.000.000',
                'is_featured' => true,
            ],
            [
                'name' => 'Sistem Pengereman',
                'slug' => 'sistem-pengereman',
                'description' => 'Inspeksi dan perbaikan sistem rem, termasuk penggantian kampas rem, cakram, dan komponen sistem rem lainnya.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>',
                'price_range' => 'Rp 400.000 - Rp 1.500.000',
                'is_featured' => true,
            ],
            [
                'name' => 'Transmisi & Kopling',
                'slug' => 'transmisi-kopling',
                'description' => 'Diagnosa dan perbaikan masalah pada transmisi otomatis, manual, dan sistem kopling.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>',
                'price_range' => 'Rp 800.000 - Rp 6.000.000',
                'is_featured' => true,
            ],
            [
                'name' => 'Sistem AC',
                'slug' => 'sistem-ac',
                'description' => 'Perbaikan dan isi ulang sistem AC, termasuk penggantian komponen yang rusak untuk kenyamanan berkendara Anda.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18"></path><circle cx="12" cy="12" r="10"></circle></svg>',
                'price_range' => 'Rp 300.000 - Rp 2.500.000',
                'is_featured' => true,
            ],
            [
                'name' => 'Sistem Elektrikal',
                'slug' => 'sistem-elektrikal',
                'description' => 'Diagnosa dan perbaikan masalah elektrikal pada kendaraan, termasuk alternator, starter, dan sistem baterai.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 16.08a9 9 0 0 0-18 0"></path><path d="M6 16l3 3 6-6"></path></svg>',
                'price_range' => 'Rp 300.000 - Rp 2.000.000',
                'is_featured' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}