<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PopulateComicsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newComicData = [
                'title' => $faker->word,
                'author' => $faker->name,
                'overview' => $faker->text,
                'year' => $faker->year
            ];

            $comic = new Comic;
            $comic->fill($newComicData);
            $comic->save();
        }
    }
}
