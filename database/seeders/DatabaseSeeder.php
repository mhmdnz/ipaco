<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(1)->create();

         \App\Models\User::factory()->create([
             'first_name' => 'Mohammad',
             'last_name' => 'Nazari',
             'birth_date' => '1991-06-25',
             'meli_code' => '0013499564',
             'email' => 'admin@ipaco-group.com',
             'password' => bcrypt('password')
         ]);
    }
}
