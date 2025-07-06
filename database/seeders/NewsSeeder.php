<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'Timnas U-23 Menang Telak!',
                'description' => 'Timnas Indonesia U-23 berhasil menang dengan skor 5-0 melawan Vietnam.',
                'date' => now()->toDateString(),
                'image_url' => 'https://example.com/image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Piala Dunia 2026: Persiapan Dimulai',
                'description' => 'Negara-negara peserta mulai melakukan pemusatan latihan untuk Piala Dunia 2026.',
                'date' => now()->toDateString(),
                'image_url' => 'https://example.com/image2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Transfer Ronaldo ke Klub Baru?',
                'description' => 'Isu kepindahan Cristiano Ronaldo ke klub baru semakin kuat terdengar.',
                'date' => now()->toDateString(),
                'image_url' => 'https://example.com/image3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
