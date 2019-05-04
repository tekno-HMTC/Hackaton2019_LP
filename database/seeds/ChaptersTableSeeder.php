<?php

use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chapters = [
            [
                'course_id' => '10',
                'name' => 'Foundations',
                'description' => '',
            ],//1
            [
                'course_id' => '10',
                'name' => 'Sorting and Order Statistics',
                'description' => '',
            ],//2
            [
                'course_id' => '10',
                'name' => 'Data Structures',
                'description' => '',
            ],//3
            [
                'course_id' => '10',
                'name' => 'Advanced Design and Analysis Techniques',
                'description' => '',
            ],//4
            [
                'course_id' => '10',
                'name' => 'Advanced Data Structures',
                'description' => '',
            ],//5
            [
                'course_id' => '10',
                'name' => 'Graph Algorithms',
                'description' => '',
            ],//6
            [
                'course_id' => '5',
                'name' => 'System of Linear Equation and Matrices',
                'description' => '',
            ],//7
            [
                'course_id' => '5',
                'name' => 'Determinants',
                'description' => '',
            ],//8
            [
                'course_id' => '5',
                'name' => 'Euclidean Vector Space',
                'description' => '',
            ],//9
            [
                'course_id' => '7',
                'name' => 'The Foundations: Logic and Proofs',
                'description' => '',
            ],//10
            [
                'course_id' => '7',
                'name' => 'Basic Structures: Sets, Functions, Sequences, Sums, and Matrices',
                'description' => '',
            ],//11
            [
                'course_id' => '7',
                'name' => 'Algorithms',
                'description' => '',
            ],//12
            [
                'course_id' => '11',
                'name' => 'Background',
                'description' => '',
            ],//13
            [
                'course_id' => '11',
                'name' => 'Processes',
                'description' => '',
            ],//14
            [
                'course_id' => '11',
                'name' => 'Memory',
                'description' => '',
            ],//15
            [
                'course_id' => '11',
                'name' => 'Input/Output AND Files',
                'description' => '',
            ],//16
            [
                'course_id' => '11',
                'name' => 'Embedded Systems',
                'description' => '',
            ],//17
        ];
        DB::table('chapters')->insert($chapters);
    }
}
