<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Kemajuan Teknologi di Tahun 2024',
                'content' => 'Teknologi semakin maju di tahun 2024 dengan adanya inovasi di bidang kecerdasan buatan, komputasi awan, dan teknologi 5G yang semakin meluas.',
                'category_id' => 1, // Teknologi
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Indonesia Menjadi Tuan Rumah Olimpiade 2032',
                'content' => 'Indonesia secara resmi ditetapkan sebagai tuan rumah Olimpiade 2032. Persiapan untuk acara olahraga internasional ini sudah mulai berjalan.',
                'category_id' => 2, // Olahraga
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kondisi Ekonomi Global Tahun Ini',
                'content' => 'Kondisi ekonomi global pada tahun ini cukup menantang, terutama dengan adanya inflasi dan ketidakstabilan pasar internasional.',
                'category_id' => 3, // Ekonomi
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pentingnya Pendidikan di Era Digital',
                'content' => 'Pendidikan di era digital semakin penting. Akses terhadap teknologi dan internet harus dimaksimalkan untuk meningkatkan kualitas pendidikan.',
                'category_id' => 4, // Pendidikan
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tips Menjaga Kesehatan di Tengah Pandemi',
                'content' => 'Menjaga kesehatan sangat penting, terutama di masa pandemi. Pola hidup sehat, rajin berolahraga, dan menjaga kebersihan adalah kunci utama.',
                'category_id' => 5, // Kesehatan
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
