<?php

namespace Database\Seeders;

use App\Models\Listing;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();
        Listing:factory(6)=>create();
       //  Listing::create([
         //   'title'=>'full stack devlopmetn',
           // 'tage'=> 'laravel, backend, api',
            //'company'=>'Stark',
            //'location'=>'email2@gmail.com'

         //]);
         // Listing::create([
            // 'title'=>'full stack devlopmetn',
            // 'tage'=> 'laravel, backend, api',
            // 'company'=>'Stark',
           //  'location'=>'email2@gmail.com'
         // ]);
         // Listing::create(['title'=>'full stack devlopmetn',
         // 'tage'=> 'laravel, backend, api',
         // 'company'=>'Stark',
         // 'location'=>'email2@gmail.com'
        // ]);
        // Listing::create([
          //  'title'=>'full stack devlopmetn',
           // 'tage'=> 'laravel, backend, api',
           // 'company'=>'Stark',
           // 'location'=>'email2@gmail.com'
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
