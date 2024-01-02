<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mustofa Firdaus",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum explicabo porro ad libero, 
            tenetur consequuntur inventore vel sapiente ullam iusto doloribus numquam nobis labore veritatis consectetur nihil. 
            Veniam laborum eius, facilis architecto explicabo expedita? Officia cumque qui non natus consequatur accusantium. Eum commodi nulla 
            rem earum, corporis esse minima expedita nostrum quod cupiditate eos itaque vero vel quidem odit similique pariatur 
            voluptatibus officiis aspernatur veritatis maiores ullam alias! Delectus, placeat consequatur sed earum quam minus maxime ex laboriosam 
            incidunt perferendis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Firdaus",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi debitis laboriosam, porro eos inventore doloribus, et, ea id illo optio. 
            Sint minus aspernatur ullam possimus voluptate magnam mollitia quia, praesentium ad quos nisi voluptas atque, eius fugit. Amet sit fugiat quae totam 
            suscipit quia dolorem, quaerat nemo, itaque dolor excepturi rem delectus accusantium expedita architecto exercitationem minima laborum commodi sapiente 
            illum temporibus voluptatum? Placeat iste incidunt neque beatae ut enim perferendis est facere soluta, nam consectetur modi ratione perspiciatis recusandae necessitatibus 
            numquam, nulla molestiae illum assumenda officia? Debitis dolorem maxime exercitationem laboriosam aliquid dolore rem pariatur libero nostrum corporis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
