@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h1 style="margin: 0;">Daftar Kegiatan</h1>
        <a href="{{ route('activities.create') }}" style="background-color: #2563eb; color: white; padding: 0.5rem 1rem; border-radius: 4px; text-decoration: none; font-weight: bold;">
            + Tambah Kegiatan
        </a>
    </div>

    @forelse ($activities as $activity)
        <article class="card">
            <h2>
                <a href="{{ route('activities.show', $activity) }}">
                    {{ $activity->title }}
                </a>
            </h2>
            <p>{{ is_string($activity->activity_date) ? $activity->activity_date : $activity->activity_date->format('d M Y') }}</p>
            <p>Status: {{ $activity->status }}</p>
        </article>
    @empty
        <p>Belum ada kegiatan.</p>
    @endforelse
@endsection