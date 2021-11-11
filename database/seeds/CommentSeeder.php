<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
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
            DB::table('comments')->insert([
                'post_id' => $faker->numberBetween(1,2),
                'name' => $faker->name,
                'email' => $faker->email,
                'website' => $faker->domainName,
                'comment' => $faker->word,
            ]);
        }
    }
}
