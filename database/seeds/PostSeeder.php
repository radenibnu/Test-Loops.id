<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 5; $i++){
            DB::table('posts')->insert([
                'user_id' => $faker->numberBetween(1,2),
                'title' => $faker->title,
                'slug' => $faker->sentences,
                'content' => $faker->words,
            ]);
        }
    }
}
