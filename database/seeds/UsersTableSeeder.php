<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'full_name' => 'Administrator',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'ADMINISTRATOR',
                'id_line' => 'ferdinandjason',
                'uuid' => 'U1e7826162c61ece690c483c4ee448176'
            ],
            [
                'username' => '05111840000001',
                'full_name' => '05111840000001',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'USER',
                'id_line' => null,
                'uuid' => null,
            ],
            [
                'username' => '05111840000002',
                'full_name' => '05111840000002',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'USER',
                'id_line' => null,
                'uuid' => null,
            ],
            [
                'username' => '05111840000003',
                'full_name' => '05111840000003',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'USER',
                'id_line' => null,
                'uuid' => null,
            ],
            [
                'username' => '05111840000004',
                'full_name' => '05111840000004',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'USER',
                'id_line' => null,
                'uuid' => null,
            ],
            [
                'username' => '05111840000005',
                'full_name' => '05111840000005',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'USER',
                'id_line' => null,
                'uuid' => null,
            ],
            [
                'username' => 'user',
                'full_name' => 'user',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'USER',
                'id_line' => null,
                'uuid' => null,
            ]
        ];
        DB::table('users')->insert($user);  
    }
}
