<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comics;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach($comics as $element){

            $newComics =  new Comics();

            $newComics->Title = $element['title'];
            $newComics->Description = $element['description'];
            $newComics->Thumb = $element['thumb'];
            $newComics->Price = $element['price'];
            $newComics->Series = $element['series'];
            $newComics->Sale_date = $element['sale_date'];
            $newComics->Type = $element['type'];

            $newComics->save();
        }
    }
    }

