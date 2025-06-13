@extends('layouts.app')
@section('title', 'Booking Berhasil - Bengkel Mobil Beteng Betawi')
@section('content')
<section class="min-h-screen bg-gradient-to-br from-blue-900 via-blue-400 to-white flex flex-col justify-center items-center py-16">
    <div class="container mx-auto px-4 flex flex-col items-center">
        <div class="bg-white rounded-2xl shadow-2xl border-t-4 border-blue-700 max-w-xl w-full p-8 text-blue-900">
            <div class="flex flex-col items-center mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m5 2a9 9 0 11-18 0a9 9 0 0118 0z" /></svg>
                <h1 class="text-3xl font-bold mb-2">Booking Berhasil!</h1>
                <p class="text-blue-700 text-center">Terima kasih, booking Anda sudah kami terima.<br>Kami akan segera menghubungi Anda untuk konfirmasi.</p>
            </div>
            <div class="mb-6">
                <h2 class="text-xl font-bold mb-2">Detail Booking Anda</h2>
                <div class="space-y-1 text-base">
                    <div><span class="font-semibold">Nama:</span> {{ $booking['full_name'] }}</div>
                    <div><span class="font-semibold">No. Telepon:</span> {{ $booking['phone_number'] }}</div>
                    <div><span class="font-semibold">Tipe Mobil:</span> {{ $booking['car_type'] }}</div>
                    <div><span class="font-semibold">Layanan:</span> {{ $booking['service'] }}</div>
                    <div><span class="font-semibold">Tanggal Booking:</span> {{ $booking['date'] }}</div>
                    <div><span class="font-semibold">Jam Booking:</span> {{ $booking['time'] }}</div>
                    @if(!empty($booking['notes']))
                    <div><span class="font-semibold">Catatan:</span> {{ $booking['notes'] }}</div>
                    @endif
                </div>
            </div>
            @php
                $waText = urlencode("Halo, saya ingin konfirmasi booking servis di Bengkel Beteng Betawi.\n\nNama: {$booking['full_name']}\nNo. Telepon: {$booking['phone_number']}\nTipe Mobil: {$booking['car_type']}\nLayanan: {$booking['service']}\nTanggal: {$booking['date']}\nJam: {$booking['time']}\nCatatan: " . ($booking['notes'] ?? '-'));
            @endphp
            <a href="https://wa.me/6281234567890?text={{ $waText }}" target="_blank" class="block w-full text-center px-8 py-3 bg-green-500 text-white rounded-lg font-bold shadow hover:bg-green-600 transition text-lg mb-4">Kirim ke WhatsApp</a>
            <a href="/" class="block w-full text-center text-blue-700 underline hover:text-blue-900">Kembali ke Beranda</a>
        </div>
    </div>
</section>
@endsection
