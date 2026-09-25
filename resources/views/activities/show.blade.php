@extends('layouts.app')

@section('content')
    <a href="{{ route('activities.index') }}" style="text-decoration: none; color: #2563eb;">&larr; Kembali ke Daftar</a>

    @if (session('success'))
        <div style="background-color: #dcfce7; color: #166534; padding: 0.75rem 1rem; border-radius: 4px; margin: 1rem 0;">
            {{ session('success') }}
        </div>
    @endif

    <article class="card" style="margin-top: 1rem;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
            <h1 style="margin: 0;">{{ $activity->title }}</h1>
            <div style="display: flex; gap: 0.5rem;">
                <a href="{{ route('activities.edit', $activity) }}" style="background-color: #f59e0b; color: white; padding: 0.4rem 0.8rem; border-radius: 4px; text-decoration: none; font-size: 0.875rem; font-weight: bold;">
                    Edit
                </a>
                <form action="{{ route('activities.destroy', $activity) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: #ef4444; color: white; border: none; padding: 0.4rem 0.8rem; border-radius: 4px; cursor: pointer; font-size: 0.875rem; font-weight: bold;">
                        Hapus
                    </button>
                </form>
            </div>
        </div>

        <p style="margin-top: 1rem;"><strong>Kategori:</strong> {{ $activity->category }}</p>
        <p><strong>Tanggal Kegiatan:</strong> {{ is_string($activity->activity_date) ? $activity->activity_date : $activity->activity_date->format('d M Y') }}</p>
        <p><strong>Status:</strong> <span style="font-weight: bold;">{{ $activity->status }}</span></p>
        <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 1rem 0;">
        <p><strong>Deskripsi:</strong></p>
        <p>{{ $activity->description ?? 'Tidak ada deskripsi.' }}</p>
    </article>
@endsection