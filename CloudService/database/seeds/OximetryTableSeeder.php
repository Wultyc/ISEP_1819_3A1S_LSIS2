<?php

use Illuminate\Database\Seeder;

class OximetryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<50; $i++) {
            factory(\App\Oximetry::class)->create([
                'created_at' => \Carbon\Carbon::now()->addMinutes($i),
            ]);
        }
    }
}
