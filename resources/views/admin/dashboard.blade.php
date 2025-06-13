@extends('layouts.app')
@section('title', 'Admin Dashboard')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-yellow-50 py-12">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <h1 class="text-3xl font-bold text-blue-900 mb-2">Admin Dashboard</h1>
            <p class="text-gray-600 mb-6">Selamat datang di panel admin Bengkel Beteng Betawi.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('admin.bookings.index') }}" class="bg-blue-100 hover:bg-blue-200 rounded-xl p-6 flex flex-col items-center shadow transition">
                    <span class="text-4xl text-blue-700 mb-2"><i class="fas fa-calendar-check"></i></span>
                    <span class="font-bold text-lg">Booking</span>
                </a>
                <a href="#" class="bg-yellow-100 hover:bg-yellow-200 rounded-xl p-6 flex flex-col items-center shadow transition opacity-50 cursor-not-allowed">
                    <span class="text-4xl text-yellow-700 mb-2"><i class="fas fa-cogs"></i></span>
                    <span class="font-bold text-lg">Layanan</span>
                    <span class="text-xs text-gray-400">(Segera Hadir)</span>
                </a>
                <a href="#" class="bg-green-100 hover:bg-green-200 rounded-xl p-6 flex flex-col items-center shadow transition opacity-50 cursor-not-allowed">
                    <span class="text-4xl text-green-700 mb-2"><i class="fas fa-newspaper"></i></span>
                    <span class="font-bold text-lg">Artikel</span>
                    <span class="text-xs text-gray-400">(Segera Hadir)</span>
                </a>
                <a href="#" class="bg-pink-100 hover:bg-pink-200 rounded-xl p-6 flex flex-col items-center shadow transition opacity-50 cursor-not-allowed">
                    <span class="text-4xl text-pink-700 mb-2"><i class="fas fa-comment-dots"></i></span>
                    <span class="font-bold text-lg">Testimoni</span>
                    <span class="text-xs text-gray-400">(Segera Hadir)</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
