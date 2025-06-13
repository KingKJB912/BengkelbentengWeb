@extends('layouts.app')
@section('content')
@php
    // Gambar header dinamis per layanan (slug) - semua gambar berbeda
    $images = [
        'servis-mesin' => 'https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?auto=compress&w=600&q=80',
        'cuci-mobil' => 'https://images.unsplash.com/photo-1511918984145-48de785d4c4e?auto=compress&w=600&q=80',
        'ganti-oli' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=compress&w=600&q=80',
        'tune-up' => 'https://images.unsplash.com/photo-1519608487953-e999c86e7455?auto=compress&w=600&q=80',
        'spooring-balancing' => 'https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=compress&w=600&q=80',
        'lainnya' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=compress&w=600&q=80',
    ];
    $img = $images[$service->slug] ?? $images['lainnya'];
    $waText = urlencode('Halo, saya ingin booking layanan ' . $service->name . ' di Bengkel Beteng Betawi');
@endphp
<div class="w-full bg-gradient-to-r from-blue-900 via-blue-700 to-blue-400 py-10 mb-8 relative">
    <div class="container mx-auto flex flex-col md:flex-row items-center gap-8 px-4">
        <div class="flex-1">
            <h1 class="text-4xl font-bold text-white mb-2">{{ $service->name }}</h1>
            <p class="text-blue-100 max-w-xl">{{ $service->description ?? 'Layanan profesional untuk kendaraan Anda.' }}</p>
        </div>
        <div class="flex-shrink-0">
            <img src="{{ $img }}" alt="{{ $service->name }}" class="rounded-xl shadow-lg w-64 h-36 object-cover border-4 border-white">
        </div>
    </div>
</div>
<div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
    <div class="md:col-span-2">
        <div class="bg-white rounded-xl shadow p-6 mb-6">
            <h2 class="text-xl font-bold mb-2 text-blue-900">Tentang Layanan</h2>
            <div class="text-gray-700 mb-4">{{ $service->description }}</div>
            <h3 class="font-bold text-blue-800 mb-2">Proses Layanan</h3>
            <ul class="mb-4 space-y-2">
                <li class="flex items-start gap-2"><span class="text-blue-600 mt-1">&#9679;</span> Pemeriksaan Awal: Diagnosa awal untuk mengidentifikasi masalah utama.</li>
                <li class="flex items-start gap-2"><span class="text-blue-600 mt-1">&#9679;</span> Diagnostik Komprehensif: Menggunakan alat modern untuk analisa detail.</li>
                <li class="flex items-start gap-2"><span class="text-blue-600 mt-1">&#9679;</span> Perbaikan/Penggantian: Komponen rusak diganti dengan yang berkualitas.</li>
                <li class="flex items-start gap-2"><span class="text-blue-600 mt-1">&#9679;</span> Pengujian Kinerja: Pastikan hasil optimal sebelum diserahkan ke pelanggan.</li>
            </ul>
            <h3 class="font-bold text-blue-800 mb-2">Manfaat</h3>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-1 text-gray-700 text-sm mb-4">
                <li>✅ Meningkatkan performa & efisiensi</li>
                <li>✅ Memperpanjang umur kendaraan</li>
                <li>✅ Mengurangi risiko kerusakan mahal</li>
                <li>✅ Meningkatkan kenyamanan & keamanan</li>
            </ul>
            <div class="bg-blue-50 rounded-lg p-4 mt-6 flex flex-col md:flex-row items-center justify-between gap-2">
                <div class="font-semibold text-blue-900 mb-2 md:mb-0">Siap untuk Booking {{ $service->name }}?</div>
                <a href="/booking" class="px-6 py-2 bg-blue-700 text-white rounded-lg font-bold shadow hover:bg-yellow-400 hover:text-blue-900 transition">Booking Online</a>
                <a href="https://wa.me/6281234567890?text={{ $waText }}" target="_blank" class="px-6 py-2 bg-green-500 text-white rounded-lg font-bold shadow hover:bg-green-600 transition flex items-center gap-2"><svg xmlns='http://www.w3.org/2000/svg' class='inline w-5 h-5' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M16.72 11.06a6.5 6.5 0 10-6.44 6.44l2.3-.23a1 1 0 01.9.27l1.65 1.65a1 1 0 001.41 0l2.12-2.12a1 1 0 000-1.41l-1.65-1.65a1 1 0 01-.27-.9l.23-2.3z' /></svg> WhatsApp</a>
            </div>
        </div>
    </div>
    <div class="space-y-6">
        <div class="bg-white rounded-xl shadow p-4">
            <h4 class="font-bold text-blue-900 mb-2">Informasi Layanan</h4>
            <div class="mb-1"><span class="font-semibold">Estimasi Harga:</span> <span class="text-blue-700">{{ $service->price_range }}</span></div>
            <div class="mb-1"><span class="font-semibold">Durasi Layanan:</span> 2 - 4 jam</div>
            <div class="mb-2"><span class="font-semibold">Booking:</span> Booking online atau hubungi WhatsApp untuk info lebih lanjut.</div>
            <a href="/booking" class="block w-full text-center bg-blue-700 text-white rounded-lg py-2 font-semibold mt-2 hover:bg-yellow-400 hover:text-blue-900 transition">Booking Sekarang</a>
            <a href="https://wa.me/6281234567890?text={{ $waText }}" target="_blank" class="block w-full text-center bg-green-500 text-white rounded-lg py-2 font-semibold mt-2 hover:bg-green-600 transition">Booking via WhatsApp</a>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
            <h4 class="font-bold text-blue-900 mb-2">Kontak Langsung</h4>
            <div class="mb-1">📱 0812-3456-7890</div>
            <div class="mb-1"><a href="https://wa.me/6281234567890?text={{ $waText }}" class="text-green-600 hover:underline">Chat WhatsApp</a></div>
            <div class="mb-1"><a href="mailto:info@bengkelbeteng.com" class="text-blue-700 hover:underline">info@bengkelbeteng.com</a></div>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
            <h4 class="font-bold text-blue-900 mb-2">Layanan Terkait</h4>
            <ul class="space-y-1">
                <li><a href="/services/cuci-mobil" class="text-blue-700 hover:underline">Cuci Mobil</a></li>
                <li><a href="/services/ganti-oli" class="text-blue-700 hover:underline">Ganti Oli</a></li>
                <li><a href="/services/tune-up" class="text-blue-700 hover:underline">Tune-Up</a></li>
                <li><a href="/services/spooring-balancing" class="text-blue-700 hover:underline">Spooring & Balancing</a></li>
                <li><a href="/services/lainnya" class="text-blue-700 hover:underline">Lainnya</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection