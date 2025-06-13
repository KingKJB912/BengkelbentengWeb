@extends('layouts.app')
@section('title', 'Artikel & Berita Otomotif - Bengkel Mobil Beteng Betawi')
@section('content')
<div class="min-h-screen py-12 bg-gradient-to-br from-blue-50 via-white to-yellow-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-blue-900 mb-2">Berita & Artikel Otomotif</h2>
        <p class="text-center text-gray-600 mb-10">Dapatkan info, tips, dan berita terbaru seputar dunia otomotif, perawatan mobil, dan teknologi kendaraan.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($articles as $article)
                <div class="bg-white rounded-2xl shadow-xl flex flex-col overflow-hidden hover:scale-[1.01] transition">
                    @if($article->image)
                        <img src="{{ asset('storage/'.$article->image) }}" alt="{{ $article->title }}" class="h-48 w-full object-cover">
                    @endif
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-blue-900 mb-2">{{ $article->title }}</h3>
                        <div class="text-xs text-gray-400 mb-2">{{ $article->created_at->format('d F Y') }}</div>
                        <p class="text-gray-700 mb-4 flex-1">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                        <a href="{{ route('articles.show', $article) }}" class="inline-block mt-auto px-4 py-2 bg-blue-700 text-white rounded-lg font-semibold shadow hover:bg-yellow-400 hover:text-blue-900 transition">Baca Selengkapnya</a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500">Belum ada artikel.</div>
            @endforelse
        </div>
        <div class="mt-8 flex justify-center">{{ $articles->links() }}</div>
    </div>
</div>
@endsection