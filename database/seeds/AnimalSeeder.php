<?php

use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('animals')->insert([
        [
          'name' => 'Rex',
          'age' => '5',
          'description' => 'cuddle and sweet',
          'genre' => 'male',
          'weight' => '25'
        ],
        [
          'name' => 'kitty',
          'age' => '4',
          'description' => 'fast and docile',
          'genre' => 'female',
          'weight' => '5'
        ],
        [
          'name' => 'daisy',
          'age' => '8',
          'description' => 'kind and graceful',
          'genre' => 'female',
          'weight' => '5'
        ]
      ]);
    }
}
