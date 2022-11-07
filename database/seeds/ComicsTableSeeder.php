<?php

use Illuminate\Database\Seeder;
use App\Comic; // vedi app > Comic.php

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // copiare da config > data > comics.php
        $comics = config('data.comics');
        foreach($comics as $model) {
            $comic = new Comic();
            $comic->title = $model['title'];
            $comic->description = $model['description'];
            $comic->thumb = $model['thumb'];
            $comic->price = $model['price'];
            $comic->series = $model['series'];
            $comic['sale_date'] = $model['sale_date'];
            $comic->type = $model['type'];
            $comic->save();
        }
        // a questo punto eseguire su terminale:
        // php artisan db:seed --class=ComicsTableSeeder
    }
}
