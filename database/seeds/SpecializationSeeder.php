<?php

use Illuminate\Database\Seeder;
use App\Models\Specialization;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rmk = [
            [
                'name' => 'Rekayasa Perangkat Lunak',
                'short' => 'RPL',
                'path_logo' => 'template/images/RMK/RPL.png',
            ],
            [
                'name' => 'Komputasi Berbasis Jaringan',
                'short' => 'NCC',
                'path_logo' => 'template/images/RMK/NCC.png',
            ],
            [
                'name' => 'Komputasi Cerdas Visi',
                'short' => 'KCV',
                'path_logo' => 'template/images/RMK/KCV.png',
            ],
            [
                'name' => 'Arsitektur Jaringan Komputer',
                'short' => 'AJK',
                'path_logo' => 'template/images/RMK/AJK.png',
            ],
            [
                'name' => 'Interaksi Grafika dan Seni',
                'short' => 'IGS',
                'path_logo' => 'template/images/RMK/IGS.png',
            ],
            [
                'name' => 'Algoritma dan Pemrograman',
                'short' => 'Alpro',
                'path_logo' => 'template/images/RMK/ALPRO.png',
            ],
            [
                'name' => 'Manajemen Informasi',
                'short' => 'MI',
                'path_logo' => 'template/images/RMK/MI.png',
            ],
            [
                'name' => 'Dasar dan Terapan Komputasi',
                'short' => 'DTK',
                'path_logo' => 'template/images/RMK/DTK.png',
            ],
        ];
        DB::table('specializations')->insert($rmk);
    }
}
