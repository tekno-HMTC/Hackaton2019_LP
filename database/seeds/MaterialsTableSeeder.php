<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            [
                //1
                'module_id' => '27',
                'name' => 'Linear Equation',
                'video_path' => 'https://www.youtube.com/embed/bAerID24QJ0',
                'image_path' => '',
                'html' => '',
                'active' => '1',
                'type' => 'VIDEO',
            ],
            [
                //2
                'module_id' => '28',
                'name' => 'Gaussian Elimination',
                'video_path' => 'https://www.youtube.com/embed/2j5Ic2V7wq4',
                'image_path' => '',
                'html' => '',
                'active' => '1',
                'type' => 'VIDEO',
            ],
            [
                //3
                'module_id' => '29',
                'name' => 'Operation',
                'video_path' => 'https://www.youtube.com/embed/EFApWAl3NJw',
                'image_path' => '',
                'html' => '',
                'active' => '1',
                'type' => 'VIDEO',
            ],
            [
                //4
                'module_id' => '29',
                'name' => 'Equality Matrices',
                'video_path' => 'https://www.youtube.com/embed/4Z7hMU3smEM',
                'image_path' => '',
                'html' => '',
                'active' => '1',
                'type' => 'VIDEO',
            ],
            [
                //5
                'module_id' => '29',
                'name' => 'Operation',
                'video_path' => 'https://www.youtube.com/embed/EFApWAl3NJw',
                'image_path' => '',
                'html' => '',
                'active' => '1',
                'type' => 'VIDEO',
            ],
        ];
    }
}
