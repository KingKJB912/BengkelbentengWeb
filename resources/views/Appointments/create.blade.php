@extends('layouts.app')
@section('content')
<div class="container mx-auto py-12 max-w-xl">
    <h2 class="text-3xl font-bold mb-8 text-blue-900 text-center">Booking Servis / Reservasi</h2>
    <form action="{{ route('appointments.store') }}" method="POST" class="bg-white p-8 rounded shadow">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama Lengkap</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nomor Telepon</label>
            <input type="text" name="phone" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Tipe Mobil</label>
            <input type="text" name="vehicle_make" class="w-full border rounded px-3 py-2" placeholder="Contoh: Toyota Avanza" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Model Mobil</label>
            <input type="text" name="vehicle_model" class="w-full border rounded px-3 py-2" placeholder="Contoh: G 1.3 AT" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Tahun</label>
            <input type="number" name="year" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Jenis Layanan</label>
            <select name="service_id" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Pilih Layanan --</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Tanggal</label>
            <input type="date" name="preferred_date" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Jam</label>
            <input type="time" name="preferred_time" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Catatan Tambahan</label>
            <textarea name="description" class="w-full border rounded px-3 py-2"></textarea>
        </div>
        <button type="submit" class="w-full bg-blue-700 text-white py-3 rounded font-bold hover:bg-blue-800 transition">Kirim Booking</button>
    </form>
</div>
@endsection