@extends('layouts.app')

@section('title', 'Janji Berhasil Dibuat - Bengkel Mobil Beteng Betawi')

@section('content')
    <section class="pt-32 pb-16 bg-blue-800 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-bold mb-4">Janji Berhasil Dibuat</h1>
                <p class="text-xl text-blue-100">
                    Terima kasih telah memilih Bengkel Mobil Beteng Betawi.
                </p>
            </div>
        </div>
    </section>
    
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto bg-gray-50 rounded-lg shadow-md p-8 text-center">
                <div class="w-20 h-20 mx-auto bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Janji Anda Telah Dibuat!</h2>
                
                <p class="text-gray-600 mb-8">
                    Terima kasih telah menjadwalkan janji dengan Bengkel Mobil Beteng Betawi. Kami akan menghubungi Anda segera untuk mengkonfirmasi detail janji Anda.
                </p>
                
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Kembali ke Beranda
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-5 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-colors">
                        Lihat Layanan Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl font-bold text-center mb-8">Apa Yang Perlu Anda Persiapkan</h2>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-800">
                                        <span class="font-medium">Bawa STNK dan dokumen kendaraan</span> - Pastikan Anda membawa STNK dan dokumen kendaraan lainnya yang relevan.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-800">
                                        <span class="font-medium">Datang tepat waktu</span> - Kami menghargai ketepatan waktu agar jadwal perbaikan dapat berjalan sesuai rencana.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-800">
                                        <span class="font-medium">Catat keluhan atau masalah kendaraan</span> - Informasi detail akan membantu kami mendiagnosis masalah dengan lebih efisien.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-800">
                                        <span class="font-medium">Siapkan metode pembayaran</span> - Kami menerima tunai, transfer bank, dan kartu kredit/debit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6 bg-blue-50 border-l-4 border-blue-500 text-blue-700 p-4 rounded">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="8" x2="12" y2="12"></line>
                                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm">
                                        <span class="font-medium">Pemberitahuan:</span> Jika Anda perlu membatalkan atau menjadwalkan ulang janji, harap hubungi kami minimal 24 jam sebelumnya di <a href="tel:+6221234567" class="font-semibold">+62 21-2345-6789</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection