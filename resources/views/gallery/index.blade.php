@extends('layouts.app')
@section('content')
<div class="container mx-auto py-12">
    <h2 class="text-3xl font-bold mb-8 text-center text-red-700">Galeri Bengkel</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
            <img src="https://images.pexels.com/photos/3807349/pexels-photo-3807349.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Servis Mesin" class="rounded mb-4 w-full h-48 object-cover border-4 border-red-500">
            <h3 class="text-lg font-semibold text-red-800">Servis Mesin</h3>
        </div>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
            <img src="https://images.pexels.com/photos/3807213/pexels-photo-3807213.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Cuci Mobil" class="rounded mb-4 w-full h-48 object-cover border-4 border-red-500">
            <h3 class="text-lg font-semibold text-red-800">Cuci Mobil</h3>
        </div>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
            <img src="https://images.pexels.com/photos/4489734/pexels-photo-4489734.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Ganti Oli" class="rounded mb-4 w-full h-48 object-cover border-4 border-red-500">
            <h3 class="text-lg font-semibold text-red-800">Ganti Oli</h3>
        </div>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
            <img src="https://images.pexels.com/photos/2244746/pexels-photo-2244746.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Tune-Up" class="rounded mb-4 w-full h-48 object-cover border-4 border-red-500">
            <h3 class="text-lg font-semibold text-red-800">Tune-Up</h3>
        </div>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
            <img src="https://images.pexels.com/photos/4489742/pexels-photo-4489742.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Spooring & Balancing" class="rounded mb-4 w-full h-48 object-cover border-4 border-red-500">
            <h3 class="text-lg font-semibold text-red-800">Spooring & Balancing</h3>
        </div>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
            <img src="https://images.pexels.com/photos/3807811/pexels-photo-3807811.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Layanan Lainnya" class="rounded mb-4 w-full h-48 object-cover border-4 border-red-500">
            <h3 class="text-lg font-semibold text-red-800">Layanan Lainnya</h3>
        </div>
    </div>
    <div class="mt-8 flex justify-center">{{ $galleries->links() }}</div>
</div>
@endsection