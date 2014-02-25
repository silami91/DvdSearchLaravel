<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2/18/14
 * Time: 4:08 PM
 */

class DVDController extends baseController
{
    public function search()
    {

       $ratings = Rating::all();
       $genres = Genre::all();

       return View::make('DVDs/search',[
           'genres' => $genres,
           'ratings' => $ratings
       ]);
    }

    public function listDvds()
    {
        $dvd_title = Input::get('dvd_title');
        $rating = Input::get('rating');
        $genre = Input::get('genre');

        $dvds = Dvd::search($dvd_title, $rating, $genre);
        return View::make('dvds/dvds-lists',[
            'dvds' => $dvds
        ]);
    }
}