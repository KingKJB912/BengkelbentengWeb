@extends('layouts.app')
@section('title', 'Manajemen Booking')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-yellow-50 py-12">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <h1 class="text-2xl font-bold text-blue-900 mb-4">Daftar Booking</h1>
            <table class="min-w-full bg-white border border-gray-200 rounded-xl overflow-hidden">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">No. HP</th>
                        <th class="px-4 py-2 text-left">Tipe Mobil</th>
                        <th class="px-4 py-2 text-left">Layanan</th>
                        <th class="px-4 py-2 text-left">Tanggal</th>
                        <th class="px-4 py-2 text-left">Jam</th>
                        <th class="px-4 py-2 text-left">Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bookings as $booking)
                    <tr class="border-b hover:bg-blue-50">
                        <td class="px-4 py-2">{{ $booking->full_name }}</td>
                        <td class="px-4 py-2">{{ $booking->phone_number }}</td>
                        <td class="px-4 py-2">{{ $booking->car_type }}</td>
                        <td class="px-4 py-2">{{ $booking->service }}</td>
                        <td class="px-4 py-2">{{ $booking->date }}</td>
                        <td class="px-4 py-2">{{ $booking->time }}</td>
                        <td class="px-4 py-2">{{ $booking->notes }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-gray-500 py-8">Belum ada data booking.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-6">{{ $bookings->links() }}</div>
        </div>
    </div>
</div>
@endsection
