<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\User::class)->create([
            'name' => 'Rui Pinto',
            'client_number' => 123456,
            'password' => bcrypt('123456'),
            'admin' => true,
            'language' => 'pt-PT',
        ]);

        factory(\App\User::class)->create([
            'client_number' => 111111,
            'password' => bcrypt('123456'),
            'language' => 'en'
        ]);
    }
}
