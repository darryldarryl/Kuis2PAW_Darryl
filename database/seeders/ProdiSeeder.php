<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;


class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodi =[
            [
                'nama_prodi' => 'Teknik Informatika',
                'nama_kaprodi' => 'Dr. Andi Wijaya, M.Kom.',
                'alias_prodi' => 'TI',
                'photo_Kaprodi' => 'andi_wijaya.jpg',
            ],
            [
                'nama_prodi' => 'Sistem Informasi',
                'nama_kaprodi' => 'Dr. Siti Aminah, M.E.',
                'alias_prodi' => 'SI',
                'photo_Kaprodi' => 'siti_aminah.jpg',
            ],
            [
                'nama_prodi' => 'Teknik Elektro',
                'nama_kaprodi' => 'Dr. Budi Santoso, M.T.',
                'alias_prodi' => 'TE',
                'photo_Kaprodi' => 'budi_santoso.jpg',
            ],
            [
                'nama_prodi' => 'Teknik Mesin',
                'nama_kaprodi' => 'Dr. Rina Pratiwi, S.H., M.H.',
                'alias_prodi' => 'TM',
                'photo_Kaprodi' => 'rina_pratiwi.jpg',
            ],
            [
                'nama_prodi' => 'Teknik Sipil',
                'nama_kaprodi' => 'Dr. Agus Santoso, M.Kes.',
                'alias_prodi' => 'TS',
                'photo_Kaprodi' => 'agus_santoso.jpg',
            ],  
        ];

        foreach ($prodi as $data) {
            $data['fakultas_id'] = Fakultas::inRandomOrder()->first()->id;

            Prodi::create($data);
        }
    }
}
