<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultas = [
            [
                'nama_fakultas' => 'Fakultas Teknik',
                'nama_dekan' => 'Dr. Ir. Budi Santoso, M.T.',
            ],
            [
                'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis',
                'nama_dekan' => 'Dr. Siti Aminah, M.E.',
            ],
            [
                'nama_fakultas' => 'Fakultas Ilmu Komputer',
                'nama_dekan' => 'Dr. Andi Wijaya, M.Kom.',
            ],
            [
                'nama_fakultas' => 'Fakultas Hukum',
                'nama_dekan' => 'Dr. Rina Pratiwi, S.H., M.H.',
            ],
            [
                'nama_fakultas' => 'Fakultas Kedokteran',
                'nama_dekan' => 'Dr. dr. Agus Santoso, M.Kes.',
            ],  
        ];

        foreach ($fakultas as $data) {
            Fakultas::create($data);
        }
    }
}
