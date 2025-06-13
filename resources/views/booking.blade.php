@extends('layouts.app')

@section('title', 'Booking Servis - Bengkel Mobil Beteng Betawi')

@section('content')
<section class="py-16 bg-gradient-to-r from-blue-900 via-yellow-400 to-red-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 font-poppins drop-shadow-lg">Form Booking Servis</h1>
        <p class="text-yellow-100 mb-8">Booking servis mobil Anda dengan mudah dan cepat!</p>
        <div class="flex justify-center">
            <img src="https://images.pexels.com/photos/3807811/pexels-photo-3807811.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Booking Servis" class="rounded-2xl shadow-2xl w-full max-w-xl object-cover border-4 border-yellow-400">
        </div>
    </div>
</section>
<section class="py-16 bg-gradient-to-br from-yellow-50 via-white to-blue-50">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-xl border-t-4 border-yellow-400">
            <h2 class="text-2xl font-bold mb-6 text-blue-900">Isi Formulir Booking</h2>
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-800 rounded shadow text-center font-semibold">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('booking.store') }}" method="POST" class="space-y-0">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block mb-1 font-semibold">Nama</label>
                        <input type="text" name="full_name" class="w-full border rounded px-3 py-2" required value="{{ old('full_name') }}">
                        @error('full_name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label class="block mb-1 font-semibold">No. Telepon</label>
                        <input type="text" name="phone_number" class="w-full border rounded px-3 py-2" required value="{{ old('phone_number') }}">
                        @error('phone_number')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block mb-1 font-semibold">Tipe Mobil</label>
                    <input type="text" name="car_type" class="w-full border rounded px-3 py-2" required value="{{ old('car_type') }}">
                    @error('car_type')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-1 font-semibold">Jenis Layanan</label>
                    <select name="service" class="w-full border rounded px-3 py-2" required>
                        <option value="">Pilih Layanan</option>
                        <option value="Servis Mesin" @if(old('service')=='Servis Mesin') selected @endif>Servis Mesin</option>
                        <option value="Cuci Mobil" @if(old('service')=='Cuci Mobil') selected @endif>Cuci Mobil</option>
                        <option value="Ganti Oli" @if(old('service')=='Ganti Oli') selected @endif>Ganti Oli</option>
                        <option value="Tune-Up" @if(old('service')=='Tune-Up') selected @endif>Tune-Up</option>
                        <option value="Spooring & Balancing" @if(old('service')=='Spooring & Balancing') selected @endif>Spooring & Balancing</option>
                        <option value="Lainnya" @if(old('service')=='Lainnya') selected @endif>Lainnya</option>
                    </select>
                    @error('service')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block mb-1 font-semibold">Tanggal Booking</label>
                        <input type="date" name="date" class="w-full border rounded px-3 py-2" required value="{{ old('date') }}">
                        @error('date')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label class="block mb-1 font-semibold">Jam Booking</label>
                        <input type="time" name="time" class="w-full border rounded px-3 py-2" required value="{{ old('time') }}">
                        @error('time')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block mb-1 font-semibold">Catatan Tambahan</label>
                    <textarea name="notes" class="w-full border rounded px-3 py-2">{{ old('notes') }}</textarea>
                    @error('notes')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                </div>
                <button type="submit" class="w-full bg-red-500 text-white py-3 rounded font-bold hover:bg-yellow-400 hover:text-red-800 transition">Kirim Booking</button>
            </form>
        </div>
    </div>
</section>
@endsection