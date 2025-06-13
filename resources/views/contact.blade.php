@extends('layouts.app')

@section('title', 'Hubungi Kami - Bengkel Mobil Beteng Betawi')

@section('content')
<!-- Header Section -->
<section class="py-16 bg-gradient-to-r from-blue-900 via-red-700 to-yellow-400 text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4 font-poppins drop-shadow-lg">Hubungi Kami</h1>
        <p class="text-yellow-100">Kami siap membantu Anda kapan saja.</p>
        <div class="flex justify-center mt-8">
            <img src="https://images.pexels.com/photos/4489794/pexels-photo-4489794.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Bengkel" class="rounded-2xl shadow-2xl w-full max-w-2xl object-cover border-4 border-yellow-400">
        </div>
    </div>
</section>

<!-- Konten -->
<section class="py-16 bg-gradient-to-br from-yellow-50 via-white to-blue-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Info Kontak -->
            <div class="lg:w-1/3 space-y-8">
                <h2 class="text-3xl font-bold text-red-700 font-poppins mb-6">Informasi Kontak</h2>
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 text-yellow-500 mt-1">
                        <i class="fas fa-phone-alt text-2xl"></i>
                    </div>
                    <div>
                        <p class="font-medium">Nomor Telepon</p>
                        <p class="text-gray-600">+62 21-2345-6789</p>
                        <p class="text-gray-600">+62 812-3456-7890 (Darurat)</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 text-blue-500 mt-1">
                        <i class="fas fa-envelope text-2xl"></i>
                    </div>
                    <div>
                        <p class="font-medium">Email</p>
                        <p class="text-gray-600">info@bengkelbetengbetawi.com</p>
                        <p class="text-gray-600">layanan@bengkelbetengbetawi.com</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 text-red-500 mt-1">
                        <i class="fas fa-map-marker-alt text-2xl"></i>
                    </div>
                    <div>
                        <p class="font-medium">Alamat</p>
                        <p class="text-gray-600">Jl. Kemang Raya No. 123<br>Kemang, Jakarta Selatan 12730<br>Indonesia</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 text-yellow-500 mt-1">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <div>
                        <p class="font-medium">Jam Operasional</p>
                        <p class="text-gray-600">Senin - Sabtu: 08.00 - 17.00</p>
                        <p class="text-gray-600">Minggu & Libur: Tutup</p>
                    </div>
                </div>
            </div>
            <!-- Google Map & Form Kontak -->
            <div class="lg:w-2/3 flex flex-col gap-8">
                <div class="bg-white rounded-2xl shadow-xl p-4 flex items-center justify-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.306234567890!2d106.8271533153707!3d-6.200000000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f157b1b1b1b1%3A0x1234567890abcdef!2sSouth%20Jakarta!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" width="100%" height="250" style="border:0; border-radius:1rem; min-width:300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-8 border-t-4 border-yellow-400">
                    <h2 class="text-2xl font-bold mb-6 text-blue-900">Kirim Pesan</h2>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block mb-1 font-semibold">Nama</label>
                                <input type="text" class="w-full border rounded px-3 py-2" required>
                            </div>
                            <div>
                                <label class="block mb-1 font-semibold">Email</label>
                                <input type="email" class="w-full border rounded px-3 py-2" required>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block mb-1 font-semibold">Pesan</label>
                            <textarea class="w-full border rounded px-3 py-2" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="inline-flex items-center px-6 py-3 bg-red-500 text-white font-semibold rounded-md hover:bg-yellow-400 hover:text-red-800 transition duration-300">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
