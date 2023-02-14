<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Gunung;
use App\Models\mountain;
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
        \App\Models\Gunung::create(['nama_gunung'=>'Semeru']);
        \App\Models\Gunung::create(['nama_gunung'=>'Bromo']);
        \App\Models\Gunung::create(['nama_gunung'=>'Merbabu']);

        \App\Models\mountain::create(['name'=>'Semeru']);
        \App\Models\mountain::create(['name'=>'Bromo']);
        \App\Models\mountain::create(['name'=>'Merbabu']);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

}
