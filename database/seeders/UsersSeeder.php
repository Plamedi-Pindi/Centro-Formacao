<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'telefone' => '990990990',
            'genero' => 'Masculino',
            'genero' => 'Masculino',
            'id_area' => 1,
        ]);
    }
}
