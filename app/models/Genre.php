<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2/19/14
 * Time: 6:00 PM
 */

class Genre
{
    public static function all()
    {
        $query = DB::table('genres')
            ->select('genre_name');
        $genres = $query->get();
        return $genres;
    }
}