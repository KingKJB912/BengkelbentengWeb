<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Andi Pratomo',
                'position' => 'Pengusaha',
                'content' => 'Sangat puas dengan pelayanan di AutoServiWash. Servis mesin cepat dan hasil cuci mobil bersih mengilap. Suka banget sama hasilnya. Total ramah, rekomendasi ke semua rekan kerja. Sudah hampir 2 tahun menjadi pelanggan setia.',
                'rating' => 5,
                'image' => null,
                'is_featured' => true,
                'created_at' => '2025-03-20',
            ],
            [
                'name' => 'Siti Nurhayati',
                'position' => 'Dokter',
                'content' => 'Cuci mobilnya sangat detail, sampai ke celah-celah kecil sekalipun. Harga terjangkau dengan kualitas premium. AC mobil juga jadi adem dan nyaman, recommended banget buat di sini.',
                'rating' => 5,
                'image' => null,
                'is_featured' => true,
                'created_at' => '2025-03-15',
            ],
            [
                'name' => 'Budi Santoso',
                'position' => 'Karyawan Swasta',
                'content' => 'Terima kasih untuk tune-up yang membuat mobil saya berasa seperti baru lagi. Konsultasi BBM jadi irit dan tim ahli di sini ramah. Saya akan kembali lagi untuk servis berikutnya.',
                'rating' => 5,
                'image' => null,
                'is_featured' => true,
                'created_at' => '2025-03-14',
            ],
            [
                'name' => 'Dewi Lestari',
                'position' => 'Ibu Rumah Tangga',
                'content' => 'Pelayanan ramah dan cepat. Saya suka dengan ruang tunggu yang nyaman dan dingin, anak-anak betah di sini. Akan kembali lagi untuk servis rutin.',
                'rating' => 5,
                'image' => null,
                'is_featured' => true,
                'created_at' => '2025-03-25',
            ],
            [
                'name' => 'Ahmad Fauzi',
                'position' => 'Guru',
                'content' => 'Bengkel yang sangat profesional. Meski mobil saya tidak mendapat masalah berat, diagnosa teknisi sangat jelas dan hasil perbaikan selalu tepat waktu sesuai janji.',
                'rating' => 4,
                'image' => null,
                'is_featured' => true,
                'created_at' => '2025-04-18',
            ],
            [
                'name' => 'Maya Rahma',
                'position' => 'Desainer',
                'content' => 'Saya sangat merekomendasikan layanan di sini, hasilnya selalu baik di segala jenis servis, mulai dari ganti oli, spooring, balancing, dan garansi pengerjaan. Teknisinya kompeten dan berpengalaman.',
                'rating' => 5,
                'image' => null,
                'is_featured' => true,
                'created_at' => '2025-03-28',
            ],
            [
                'name' => 'Fitri Hidayat',
                'position' => 'Mahasiswa',
                'content' => 'Harga layanan di sini sangat transparan dan terjangkau untuk kualitas yang diberikan. Tidak ada biaya tambahan yang mendadak muncul. Servis mesin dan ganti oli berjalan lancar.',
                'rating' => 5,
                'image' => null,
                'is_featured' => true,
                'created_at' => '2025-04-02',
            ],
            [
                'name' => 'Winda Putri',
                'position' => 'Wiraswasta',
                'content' => 'Proses booking online sangat mudah dan praktis. Saya tidak perlu menunggu antrian terlalu lama, jadwalnya juga responsif ketika dihubungi. Servis mobil cepat & mudah mengubah jadwal.',
                'rating' => 5,
                'image' => null,
                'is_featured' => true,
                'created_at' => '2025-03-27',
            ],
            [
                'name' => 'Rudi Hartono',
                'position' => 'Marketing',
                'content' => 'Servis AC mobil saya sangat memuaskan. Sekarang AC kembali dingin dan tidak berisik. Teknisinya ahli dalam perawatan setiap AC tiap merek. Terima kasih AutoServiWash!',
                'rating' => 5,
                'image' => null,
                'is_featured' => true,
                'created_at' => '2025-03-15',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}