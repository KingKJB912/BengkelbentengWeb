@extends('layouts.app')
@section('content')
<div class="container mx-auto py-12">
    <h2 class="text-3xl font-bold mb-2 text-blue-900 text-center">Testimoni Pelanggan</h2>
    <p class="text-blue-700 text-center mb-8 max-w-2xl mx-auto">Apa kata pelanggan kami tentang layanan servis dan cuci mobil di AutoServiWash. Kami bangga dengan kepercayaan yang diberikan oleh pelanggan setia kami.</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        @forelse($testimonials as $testimonial)
            <div class="bg-white rounded-2xl shadow-xl p-6 border border-gray-100 flex flex-col h-full hover:scale-[1.01] hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center mb-3">
                    <img src="{{ $testimonial->image ? asset('storage/'.$testimonial->image) : 'https://randomuser.me/api/portraits/men/' . ($loop->index+10) . '.jpg' }}" alt="{{ $testimonial->name }}" class="w-12 h-12 rounded-full object-cover border-2 border-blue-400 shadow mr-3">
                    <div>
                        <div class="font-bold text-blue-900">{{ $testimonial->name }}</div>
                        <div class="text-xs text-gray-500">{{ $testimonial->position }}</div>
                    </div>
                </div>
                <div class="flex mb-2">
                    @for($i=0; $i<($testimonial->rating ?? 5); $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><polygon points="9.9,1.1 12.3,6.6 18.2,7.3 13.8,11.3 15.1,17.1 9.9,14.1 4.7,17.1 6,11.3 1.6,7.3 7.5,6.6 "/></svg>
                    @endfor
                </div>
                <p class="text-gray-700 italic flex-1 mb-4">"{{ $testimonial->content }}"</p>
                <div class="text-xs text-gray-400 mt-auto">{{ \Carbon\Carbon::parse($testimonial->created_at)->format('d M Y') }}</div>
            </div>
        @empty
            <div class="text-center text-gray-500 col-span-3">Belum ada testimoni.</div>
        @endforelse
    </div>
    <div class="mt-8 flex justify-center">{{ $testimonials->links() }}</div>
    <div class="bg-white/80 rounded-xl shadow p-8 text-center max-w-2xl mx-auto mt-8">
        <h3 class="text-xl font-bold mb-2 text-blue-900">Bagikan Pengalaman Anda</h3>
        <p class="mb-4 text-gray-700">Kami senang mendengar pengalaman Anda menggunakan layanan AutoServiWash. Berikan review Anda dan bantu kami terus meningkatkan kualitas pelayanan.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold shadow hover:bg-blue-800 transition">Google Review</a>
            <a href="#" class="px-6 py-2 bg-blue-400 text-white rounded-lg font-semibold shadow hover:bg-blue-600 transition">Facebook Review</a>
        </div>
    </div>
</div>
@endsection