<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        Activity::query()->delete(); // membersihkan data lama jika ada

        Activity::query()->insert([
            [
                'title' => 'Workshop Git dan GitHub',
                'description' => 'Latihan kolaborasi branch dan pull request.',
                'activity_date' => '2026-10-05',
                'category' => 'Workshop',
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Seminar Web Quality Assurance',
                'description' => 'Pengenalan testing dan clean code.',
                'activity_date' => '2026-10-12',
                'category' => 'Seminar',
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sprint Planning Proyek Web',
                'description' => 'Pembagian backlog dan user story.',
                'activity_date' => '2026-10-15',
                'category' => 'Meeting',
                'status' => 'Ongoing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pengerjaan Modul 3 Laravel',
                'description' => 'Implementasi routing, controller, dan blade.',
                'activity_date' => '2026-10-18',
                'category' => 'Development',
                'status' => 'Ongoing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Setup Baseline Environment',
                'description' => 'Inisialisasi repo dan verifikasi lifecycle.',
                'activity_date' => '2026-09-20',
                'category' => 'Setup',
                'status' => 'Done',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}