@extends('layouts.app')
@section('content')
<div class="container mx-auto py-12 max-w-3xl">
    <h1 class="text-4xl font-bold mb-4 text-red-700">{{ $article->title ?? 'Judul Artikel' }}</h1>
    <img src="https://images.pexels.com/photos/3807495/pexels-photo-3807495.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Artikel" class="rounded mb-6 w-full h-64 object-cover border-4 border-red-500">
    <div class="prose max-w-none mb-8">
        {!! $article->content ?? 'Isi artikel akan tampil di sini.' !!}
    </div>
    <a href="{{ route('articles.index') }}" class="text-red-700 hover:underline">&larr; Kembali ke Daftar Artikel</a>
</div>
@endsection