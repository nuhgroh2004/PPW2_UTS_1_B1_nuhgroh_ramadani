<?php

namespace Database\Seeders;
use App\Models\Mu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++){
            Mu::create([
                'nama_pemain' => fake() -> name(3),
                'no_punggung' => fake() -> numberBetween(1, 100),
                'posisi' => fake() -> sentence("Gelandang", "Penyerang", "Bek", "Kiper"),
            ]);
        }
    }
}
