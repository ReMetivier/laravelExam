<?php

use Illuminate\Database\Seeder;

class AnimalSpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('animal_species')->insert([
        [
            'animal_id' => '1',
            'species_id' => '1',
        ],
        [
            'animal_id' => '2',
            'species_id' => '2',
        ],
        [
            'animal_id' => '3',
            'species_id' => '2',
        ]
      ]);
    }
}
