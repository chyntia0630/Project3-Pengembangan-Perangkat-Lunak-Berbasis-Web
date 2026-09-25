@extends('layouts.app')

@section('content')
    <a href="{{ route('activities.show', $activity) }}" style="text-decoration: none; color: #2563eb;">&larr; Batal dan Kembali</a>

    <h1 style="margin-top: 1rem;">Edit Kegiatan: {{ $activity->title }}</h1>

    <article class="card" style="margin-top: 1rem;">
        <form action="{{ route('activities.update', $activity) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 1rem;">
                <label for="title" style="display: block; font-weight: bold; margin-bottom: 0.25rem;">Judul Kegiatan:</label>
                <input type="text" id="title" name="title" value="{{ old('title', $activity->title) }}" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;">
                @error('title')
                    <span style="color: #ef4444; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 1rem;">
                <label for="category" style="display: block; font-weight: bold; margin-bottom: 0.25rem;">Kategori:</label>
                <input type="text" id="category" name="category" value="{{ old('category', $activity->category) }}" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;">
                @error('category')
                    <span style="color: #ef4444; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 1rem;">
                <label for="activity_date" style="display: block; font-weight: bold; margin-bottom: 0.25rem;">Tanggal Kegiatan:</label>
                <input type="date" id="activity_date" name="activity_date" value="{{ old('activity_date', is_string($activity->activity_date) ? $activity->activity_date : $activity->activity_date->format('Y-m-d')) }}" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;">
                @error('activity_date')
                    <span style="color: #ef4444; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 1rem;">
                <label for="status" style="display: block; font-weight: bold; margin-bottom: 0.25rem;">Status:</label>
                <select id="status" name="status" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;">
                    <option value="Planned" {{ old('status', $activity->status) === 'Planned' ? 'selected' : '' }}>Planned</option>
                    <option value="Ongoing" {{ old('status', $activity->status) === 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                    <option value="Done" {{ old('status', $activity->status) === 'Done' ? 'selected' : '' }}>Done</option>
                </select>
                @error('status')
                    <span style="color: #ef4444; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label for="description" style="display: block; font-weight: bold; margin-bottom: 0.25rem;">Deskripsi:</label>
                <textarea id="description" name="description" rows="4" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;">{{ old('description', $activity->description) }}</textarea>
                @error('description')
                    <span style="color: #ef4444; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" style="background-color: #2563eb; color: white; border: none; padding: 0.6rem 1.2rem; border-radius: 4px; cursor: pointer; font-weight: bold;">
                Perbarui Kegiatan
            </button>
        </form>
    </article>
@endsection