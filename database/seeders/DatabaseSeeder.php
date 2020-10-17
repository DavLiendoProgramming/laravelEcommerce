<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));
        // $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));
        // \App\Models\User::factory(10)->create();
        for($i = 0; $i < 50; $i++){
            DB::table('articles')->insert([
                'title' => $faker->words(2,true),
                'description' => $faker->paragraph,
                'price'=> $faker->randomFloat($nbMaxDecimals = 5, $min = 200, $max = 999),
                'img'=> $faker->imageUrl(640, 480,true),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                ]);
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

    }
}
