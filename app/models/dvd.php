<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2/18/14
 * Time: 3:59 PM
 */

class Dvd
{
    public static function search($dvd_title, $rating, $genre) //TODO: What are the parameters
    {
        $query = DB::table('dvds')
            ->select('title','rating_name', 'genre_name', 'label_name', 'sound_name', 'format_name',
                DB::raw("DATE_FORMAT(release_Date, '%c/%e/%Y') AS releaseDate"))
            ->join('ratings','dvds.rating_id','=','ratings.id')
            ->join('genres','dvds.genre_id','=','genres.id')
            ->join('labels','dvds.label_id','=','labels.id')
            ->join('sounds','dvds.sound_id','=','sounds.id')
            ->join('formats','dvds.format_id','=','formats.id');
        if($dvd_title)
        {
            $query->where('title','LIKE',"%$dvd_title%");
        }
        if($rating != 'All')
        {
            $query->where('rating_name','=',"$rating");
        }
        if($genre != 'All')
        {
            $query->where('genre_name','=',"$genre");
        }

        $dvds = $query->get();

        return $dvds;
    }


    public static function pullRatings()
    {
        $query = DB::table('dvds')
            ->select('rating')
            ->join('ratings','dvds.rating_id','=','ratings.id');
        $genres = $query->get();
        return $genres;
    }
}