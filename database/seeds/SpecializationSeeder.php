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
                'path_logo' => 'template/images/RPL.jpg',
            ],
            [
                'name' => 'Komputasi Berbasis Jaringan',
                'short' => 'RPL',
                'path_logo' => 'template/images/NCC.jpg',
            ],
            [
                'name' => 'Komputasi Cerdas Visi',
                'short' => 'KCV',
                'path_logo' => 'template/images/KCV.jpg',
            ],
            [
                'name' => 'Arsitektur Jaringan Komputer',
                'short' => 'AJK',
                'path_logo' => 'template/images/AJK.jpg',
            ],
            [
                'name' => 'Interaksi Grafika dan Seni',
                'short' => 'IGS',
                'path_logo' => 'template/images/IGS.jpg',
            ],
            [
                'name' => 'Algoritma dan Pemrograman',
                'short' => 'Alpro',
                'path_logo' => 'template/images/ALPRO.jpg',
            ],
            [
                'name' => 'Manajemen Informasi',
                'short' => 'MI',
                'path_logo' => 'template/images/MI.jpg',
            ],
            [
                'name' => 'Dasar dan Terapan Komputasi',
                'short' => 'DTK',
                'path_logo' => 'template/images/DTK.jpg',
            ],
        ];
        DB::table('specializations')->insert($rmk);
    }
}
