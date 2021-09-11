<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comics = config('comics'); 
        foreach ($array_comics as $comic) {
          $newComic = new Comic();
          $newComic->title= $comic['title'];
          $newComic->description= $comic['description'];
          $newComic->thumb= $comic['thumb'];
          $newComic->price= $comic['price'];
          $newComic->series= $comic['series'];
          $newComic->sale_date= $comic['sale_date'];
          $newComic->type= $comic['type'];

          $newComic->save();
        }
    }
}
