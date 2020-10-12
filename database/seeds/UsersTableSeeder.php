<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Diego Sampaio',
            'email' => 'diego.estaleiro@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
