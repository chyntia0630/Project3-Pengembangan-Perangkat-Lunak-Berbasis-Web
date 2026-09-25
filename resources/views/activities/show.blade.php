@extends('layouts.app')

@section('content')
    <a href="{{ route('activities.index') }}" style="text-decoration: none; color: #2563eb;">&larr; Kembali ke Daftar</a>

    <article class="card" style="margin-top: 1rem;">
        <h1>{{ $activity->title }}</h1>
        <p><strong>Kategori:</strong> {{ $activity->category }}</p>
        <p><strong>Tanggal Kegiatan:</strong> {{ is_string($activity->activity_date) ? $activity->activity_date : $activity->activity_date->format('d M Y') }}</p>
        <p><strong>Status:</strong> <span style="font-weight: bold;">{{ $activity->status }}</span></p>
        <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 1rem 0;">
        <p><strong>Deskripsi:</strong></p>
        <p>{{ $activity->description ?? 'Tidak ada deskripsi.' }}</p>
    </article>
@endsection