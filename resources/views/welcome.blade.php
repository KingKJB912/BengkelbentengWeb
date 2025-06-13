@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?auto=format&fit=crop&w=1200&q=80');">
    <div class="absolute inset-0 bg-gradient-to-r from-red-800 via-black/70 to-blue-900 opacity-80"></div>
    <div class="relative z-10 container mx-auto px-4 flex flex-col items-start justify-center min-h-[60vh]">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg">Servis & Cuci Mobil<br><span class="text-yellow-400">Terpercaya di Jakarta</span></h1>
        <p class="mb-8 text-lg md:text-2xl text-gray-200 max-w-xl drop-shadow">Solusi perawatan mobil profesional dengan teknisi berpengalaman dan peralatan modern.</p>
        <div class="flex gap-4">
            <a href="#layanan" class="px-6 py-3 border-2 border-yellow-400 text-white rounded-lg font-semibold hover:bg-yellow-400 hover:text-red-800 transition">Lihat Layanan</a>
            <a href="{{ route('booking') }}" class="px-6 py-3 bg-red-500 text-white rounded-lg font-semibold hover:bg-yellow-400 hover:text-red-800 transition">Booking Sekarang</a>
        </div>
    </div>
</section>

<!-- Tentang Kami -->
<section class="py-16 bg-gradient-to-br from-white via-blue-50 to-yellow-50" id="tentang">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4 text-blue-900">Tentang Kami</h2>
        <p class="text-gray-700 max-w-2xl mx-auto mb-4">
            Bengkel Mobil Beteng Betawi telah melayani pelanggan sejak 2010. Teknisi bersertifikat, peralatan modern, dan layanan ramah adalah keunggulan kami.
        </p>
        <div class="flex flex-wrap justify-center gap-8 mt-8">
            <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-yellow-400">
                <span class="text-3xl font-bold text-blue-700">10+</span>
                <div class="text-gray-600">Tahun Pengalaman</div>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-red-500">
                <span class="text-3xl font-bold text-blue-700">1000+</span>
                <div class="text-gray-600">Mobil Diservis</div>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-blue-500">
                <span class="text-3xl font-bold text-blue-700">SNI</span>
                <div class="text-gray-600">Teknisi Bersertifikat</div>
            </div>
        </div>
    </div>
</section>

<!-- Layanan Kami -->
<section class="py-16 bg-gradient-to-br from-yellow-50 via-white to-blue-50" id="layanan">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4 text-red-700">Layanan Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Kami menawarkan berbagai layanan perbaikan dan perawatan mobil.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="bg-white p-6 rounded-2xl shadow-xl border-2 border-yellow-200 hover:scale-105 hover:shadow-2xl transition-all duration-300 flex flex-col items-center text-center">
                    <div class="mb-4">
                        <img src="https://images.pexels.com/photos/3807349/pexels-photo-3807349.jpeg?auto=compress&cs=tinysrgb&w=600" alt="icon" class="w-20 h-20 rounded-full border-4 border-red-400 shadow-lg object-cover">
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-red-700">{{ $service->name }}</h3>
                    <p class="text-gray-600 text-sm mb-2">{{ $service->description }}</p>
                    @if($service->price_range)
                        <span class="text-blue-700 font-bold">{{ $service->price_range }}</span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Promo / Paket Servis -->
<section class="py-12 bg-gradient-to-r from-yellow-400 via-red-200 to-blue-200">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-4 text-yellow-900">Promo Bulan Ini!</h2>
        <p class="mb-4 text-gray-700">Diskon <span class="text-red-600 font-bold">10%</span> untuk cuci mobil & ganti oli. Booking sekarang!</p>
        <a href="{{ route('booking') }}" class="bg-red-500 text-white px-8 py-3 rounded-lg font-bold shadow hover:bg-yellow-400 hover:text-red-800 transition">Ambil Promo</a>
    </div>
</section>

<!-- Galeri Bengkel -->
<section class="py-16 bg-gradient-to-br from-blue-50 via-white to-yellow-50" id="galeri">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-blue-900 text-center">Galeri Bengkel</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-xl p-4 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                <img src="https://images.pexels.com/photos/4489794/pexels-photo-4489794.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Galeri Bengkel" class="rounded-xl mb-4 w-full h-48 object-cover border-4 border-yellow-400">
                <h3 class="text-lg font-semibold text-red-700">Bengkel Modern</h3>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-4 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                <img src="https://images.pexels.com/photos/3807495/pexels-photo-3807495.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Galeri Bengkel" class="rounded-xl mb-4 w-full h-48 object-cover border-4 border-blue-400">
                <h3 class="text-lg font-semibold text-blue-700">Mekanik Profesional</h3>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-4 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                <img src="https://images.pexels.com/photos/3807811/pexels-photo-3807811.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Galeri Bengkel" class="rounded-xl mb-4 w-full h-48 object-cover border-4 border-red-400">
                <h3 class="text-lg font-semibold text-yellow-700">Mobil Mewah</h3>
            </div>
        </div>
        <div class="text-center mt-6">
            <a href="{{ route('gallery') }}" class="text-blue-700 hover:underline font-bold">Lihat Semua Galeri</a>
        </div>
    </div>
</section>

<!-- Testimoni Pelanggan -->
<section class="py-16 bg-gradient-to-br from-yellow-50 via-blue-50 to-white" id="testimoni">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-blue-900 text-center">Testimoni Pelanggan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials->take(3) as $testimonial)
                <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col items-center text-center border-t-4 border-yellow-400 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <img src="{{ $testimonial->image ? asset('storage/'.$testimonial->image) : 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=200&q=80' }}" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-blue-400 shadow-lg" alt="{{ $testimonial->name }}">
                    <h3 class="text-lg font-bold mb-1 text-red-700">{{ $testimonial->name }}</h3>
                    <span class="text-sm text-blue-700 mb-2">{{ $testimonial->position }}</span>
                    <div class="flex mb-2">
                        @for($i=0; $i<($testimonial->rating ?? 5); $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                        @endfor
                    </div>
                    <p class="text-gray-600 italic">"{{ $testimonial->content }}"</p>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-6">
            <a href="{{ route('testimonials') }}" class="text-blue-700 hover:underline font-bold">Lihat Semua Testimoni</a>
        </div>
    </div>
</section>
@endsection