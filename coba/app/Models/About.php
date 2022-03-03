<?php

namespace App\Models;


class About
{
    private static $data_film = [
        [
            "title" => "Toy Story",
            "slug" => "toy-story",
            "released" => 2018,
            "image" => "toy_story.jpeg",
            "sinopsis" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corporis itaque tempore deleniti fugiat in, quam rem praesentium cum necessitatibus amet eius, expedita, excepturi consequuntur aliquam natus molestiae? Possimus, quia!"
        ],
        [
            "title" => "Fast and Furious 5",
            "slug" => "fast-and-furious-5",
            "released" => 2015,
            "image" => "fast_furious_5.jpg",
            "sinopsis" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corporis itaque tempore deleniti fugiat in, quam rem praesentium cum necessitatibus amet eius, expedita, excepturi consequuntur aliquam natus molestiae? Possimus, quia!"
        ],
        [
            "title" => "Home Alone",
            "slug" => "home-alone",
            "released" => 2006,
            "image" => "home_alone.jpeg",
            "sinopsis" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corporis itaque tempore deleniti fugiat in, quam rem praesentium cum necessitatibus amet eius, expedita, excepturi consequuntur aliquam natus molestiae? Possimus, quia!"
        ]

    ];
    public static function all()
    {
        return collect(self::$data_film);
    }

    public static function find($slug)
    {
        $film = static::all();
        return $film->firstWhere('slug', $slug);
    }
}
