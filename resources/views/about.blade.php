@extends('layouts.app')

@section('title', 'Tentang Kami - Bengkel Mobil Beteng Betawi')

@section('content')
<!-- Header Section -->
<section class="pt-32 pb-16 bg-gradient-to-r from-blue-900 via-red-700 to-yellow-400 text-white">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <h1 class="text-5xl font-bold mb-4 drop-shadow-lg">Tentang Kami</h1>
            <p class="text-xl text-yellow-100 max-w-lg drop-shadow">Mengenal lebih dekat Bengkel Mobil Beteng Betawi dan komitmen kami untuk layanan terbaik.</p>
        </div>
        <div class="md:w-1/2 flex justify-center">
            <img src="https://images.pexels.com/photos/4489794/pexels-photo-4489794.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Bengkel Modern" class="rounded-2xl shadow-2xl w-full max-w-md border-4 border-yellow-400">
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-16 bg-gradient-to-br from-white via-blue-50 to-yellow-50">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2">
            <img src="https://images.pexels.com/photos/3807495/pexels-photo-3807495.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Mekanik Profesional" class="rounded-xl shadow-xl w-full object-cover border-4 border-blue-400">
        </div>
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-6 text-red-700">Kisah Kami</h2>
            <p class="text-gray-700 mb-6 leading-relaxed">Bengkel Mobil Beteng Betawi didirikan pada tahun 2010 dengan visi sederhana: menyediakan layanan perbaikan mobil yang jujur, berkualitas, dan terjangkau untuk masyarakat Jakarta dan sekitarnya.</p>
            <p class="text-gray-700 mb-6 leading-relaxed">Berawal dari bengkel kecil di kawasan Beteng Betawi, kami berkembang berkat pelanggan setia dan komitmen pada kualitas. Kini kami memiliki fasilitas modern, peralatan diagnostik terkini, dan tim teknisi terlatih.</p>
            <p class="text-gray-700 leading-relaxed">Nama "Beteng Betawi" diambil dari lokasi kami yang bersejarah di Jakarta, melambangkan kekuatan dan ketahanan budaya Betawi yang menjadi inspirasi nilai-nilai bisnis kami.</p>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-16 bg-gradient-to-br from-yellow-50 via-white to-blue-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2 text-blue-900">Nilai-Nilai Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Prinsip-prinsip yang menjadi panduan kami dalam memberikan layanan terbaik.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-yellow-400 flex flex-col items-center text-center">
                <div class="icon-circle bg-blue-100 mb-4 p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-blue-700">Integritas</h3>
                <p class="text-gray-600">Kami selalu jujur dan transparan dalam setiap aspek bisnis kami.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-red-400 flex flex-col items-center text-center">
                <div class="icon-circle bg-yellow-100 mb-4 p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle></svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-yellow-700">Keunggulan</h3>
                <p class="text-gray-600">Kami berkomitmen memberikan hasil kerja luar biasa dengan standar tinggi.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-blue-400 flex flex-col items-center text-center">
                <div class="icon-circle bg-green-100 mb-4 p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-green-700">Fokus Pelanggan</h3>
                <p class="text-gray-600">Kepuasan pelanggan adalah prioritas utama kami.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Team -->
<section class="py-16 bg-gradient-to-br from-blue-50 via-white to-yellow-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2 text-red-700">Tim Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Kenali para profesional berpengalaman yang siap melayani kebutuhan perbaikan mobil Anda.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col items-center text-center border-t-4 border-yellow-400">
                <img src="https://images.pexels.com/photos/97075/pexels-photo-97075.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Budi Santoso" class="w-24 h-24 rounded-full mb-4 object-cover border-4 border-blue-400 shadow-lg">
                <h3 class="font-bold text-blue-700">Budi Santoso</h3>
                <span class="text-sm text-gray-500 mb-2">Kepala Mekanik</span>
                <p class="text-gray-600 text-sm">Berpengalaman lebih dari 15 tahun menangani berbagai merek mobil Jepang dan Eropa.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col items-center text-center border-t-4 border-red-400">
                <img src="https://images.pexels.com/photos/3807134/pexels-photo-3807134.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Deni Wijaya" class="w-24 h-24 rounded-full mb-4 object-cover border-4 border-yellow-400 shadow-lg">
                <h3 class="font-bold text-yellow-700">Deni Wijaya</h3>
                <span class="text-sm text-gray-500 mb-2">Spesialis Elektrikal</span>
                <p class="text-gray-600 text-sm">Ahli dalam mendiagnosis dan memperbaiki masalah elektrikal dan komputerisasi pada mobil modern.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col items-center text-center border-t-4 border-blue-400">
                <img src="https://images.pexels.com/photos/8989469/pexels-photo-8989469.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Rina Hartono" class="w-24 h-24 rounded-full mb-4 object-cover border-4 border-blue-400 shadow-lg">
                <h3 class="font-bold text-blue-700">Rina Hartono</h3>
                <span class="text-sm text-gray-500 mb-2">Manajer Layanan</span>
                <p class="text-gray-600 text-sm">Mengelola operasional bengkel dan memastikan standar kualitas layanan terpenuhi.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col items-center text-center border-t-4 border-yellow-400">
                <img src="https://images.pexels.com/photos/3806288/pexels-photo-3806288.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Anton Gunawan" class="w-24 h-24 rounded-full mb-4 object-cover border-4 border-yellow-400 shadow-lg">
                <h3 class="font-bold text-yellow-700">Anton Gunawan</h3>
                <span class="text-sm text-gray-500 mb-2">Teknisi Mesin</span>
                <p class="text-gray-600 text-sm">Spesialis dalam perbaikan mesin dan transmisi dengan ketelitian tinggi.</p>
            </div>
        </div>
    </div>
</section>

<!-- Facilities -->
<section class="py-16 bg-gradient-to-br from-yellow-50 via-white to-blue-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2 text-blue-900">Fasilitas Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Bengkel kami dilengkapi dengan peralatan modern dan fasilitas lengkap untuk layanan terbaik.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="overflow-hidden rounded-2xl shadow-xl border-4 border-yellow-400">
                <img src="https://images.pexels.com/photos/3822843/pexels-photo-3822843.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Area Bengkel Modern" class="w-full h-64 object-cover hover:scale-105 transition duration-300">
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-bold text-blue-700 mb-2">Area Bengkel Modern</h3>
                    <p class="text-gray-600">Dilengkapi dengan lift mobil, peralatan diagnostik, dan area kerja luas untuk berbagai jenis perbaikan.</p>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl shadow-xl border-4 border-blue-400">
                <img src="https://images.pexels.com/photos/97075/pexels-photo-97075.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Ruang Tunggu Nyaman" class="w-full h-64 object-cover hover:scale-105 transition duration-300">
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-bold text-yellow-700 mb-2">Ruang Tunggu Nyaman</h3>
                    <p class="text-gray-600">Ruang tunggu pelanggan dengan Wi-Fi gratis, kopi, dan area kerja untuk kenyamanan selama menunggu.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
