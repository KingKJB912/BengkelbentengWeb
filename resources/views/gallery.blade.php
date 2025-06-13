@extends('layouts.app')

@section('title', 'Galeri - Bengkel Mobil Beteng Betawi')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('content')
<!-- Gallery Header -->
<section class="pt-32 pb-16 bg-gradient-to-r from-blue-900 via-red-700 to-yellow-400 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl">
            <h1 class="text-5xl font-bold mb-4 font-poppins drop-shadow-lg">Galeri</h1>
            <p class="text-xl md:text-2xl font-open-sans text-yellow-100">Lihat hasil kerja kami dan fasilitas bengkel modern yang kami miliki.</p>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-16 bg-gradient-to-br from-yellow-50 via-white to-blue-50">
    <div class="container mx-auto px-4">
        <div class="mb-12">
            <h2 class="text-3xl font-bold mb-8 text-center text-blue-900">Hasil Pekerjaan Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="overflow-hidden rounded-2xl shadow-xl border-4 border-yellow-400 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <img src="https://images.pexels.com/photos/3807349/pexels-photo-3807349.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Perbaikan Mesin" class="w-full h-64 object-cover object-center">
                    <div class="p-4 bg-white">
                        <p class="font-medium text-red-700">Perbaikan Mesin</p>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl shadow-xl border-4 border-blue-400 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <img src="https://images.pexels.com/photos/3807495/pexels-photo-3807495.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Sistem Pengereman" class="w-full h-64 object-cover object-center">
                    <div class="p-4 bg-white">
                        <p class="font-medium text-blue-700">Sistem Pengereman</p>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl shadow-xl border-4 border-yellow-400 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <img src="https://images.pexels.com/photos/4489734/pexels-photo-4489734.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Spooring & Balancing" class="w-full h-64 object-cover object-center">
                    <div class="p-4 bg-white">
                        <p class="font-medium text-yellow-700">Spooring & Balancing</p>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl shadow-xl border-4 border-blue-400 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <img src="https://images.pexels.com/photos/3807811/pexels-photo-3807811.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Area Servis" class="w-full h-64 object-cover object-center">
                    <div class="p-4 bg-white">
                        <p class="font-medium text-blue-700">Area Servis</p>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl shadow-xl border-4 border-yellow-400 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <img src="https://images.pexels.com/photos/4489794/pexels-photo-4489794.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Bengkel Modern" class="w-full h-64 object-cover object-center">
                    <div class="p-4 bg-white">
                        <p class="font-medium text-yellow-700">Bengkel Modern</p>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl shadow-xl border-4 border-blue-400 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <img src="https://images.pexels.com/photos/97075/pexels-photo-97075.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Ruang Tunggu" class="w-full h-64 object-cover object-center">
                    <div class="p-4 bg-white">
                        <p class="font-medium text-blue-700">Ruang Tunggu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni Pelanggan -->
<section class="py-16 bg-gradient-to-br from-yellow-50 via-blue-50 to-white" id="testimoni">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-blue-900 text-center">Testimoni Pelanggan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col items-center text-center border-t-4 border-yellow-400 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=200&q=80" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-blue-400 shadow-lg" alt="Budi Santoso">
                <h3 class="text-lg font-bold mb-1 text-red-700">Budi Santoso</h3>
                <span class="text-sm text-blue-700 mb-2">Toyota Avanza - Servis Mesin</span>
                <div class="flex mb-2">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                </div>
                <p class="text-gray-600 italic">"Pelayanan sangat profesional. Teknisi menjelaskan masalah dengan detail dan solusinya. Harga juga transparan sesuai kualitas layanan yang diberikan."</p>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col items-center text-center border-t-4 border-yellow-400 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                <img src="https://images.pexels.com/photos/3807495/pexels-photo-3807495.jpeg?auto=compress&cs=tinysrgb&w=200" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-yellow-400 shadow-lg" alt="Dewi Pratiwi">
                <h3 class="text-lg font-bold mb-1 text-red-700">Dewi Pratiwi</h3>
                <span class="text-sm text-blue-700 mb-2">Honda HR-V - Cuci Mobil & Detailing</span>
                <div class="flex mb-2">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                </div>
                <p class="text-gray-600 italic">"Saya sangat puas dengan hasil servis dan cuci mobil di Beteng Betawi. Mobil saya menjadi lebih responsif dan bersih seperti baru. Akan kembali lagi!"</p>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col items-center text-center border-t-4 border-yellow-400 hover:scale-105 hover:shadow-2xl transition-all duration-300">
                <img src="https://images.pexels.com/photos/4489794/pexels-photo-4489794.jpeg?auto=compress&cs=tinysrgb&w=200" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-blue-400 shadow-lg" alt="Rudi Ardiansyah">
                <h3 class="text-lg font-bold mb-1 text-red-700">Rudi Ardiansyah</h3>
                <span class="text-sm text-blue-700 mb-2">Mitsubishi Xpander - AC Service</span>
                <div class="flex mb-2">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                </div>
                <p class="text-gray-600 italic">"Proses booking online sangat mudah dan cepat. Staf ramah dan bengkel bersih. AC mobil saya kembali dingin setelah servis di sini. Rekomendasi!"</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
{{-- GLightbox JS --}}
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
 // Initialize GLightbox
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
</script>
{{-- AOS JS for initialization --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script> AOS.init(); </script>
@endsection