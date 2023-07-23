<?php

namespace App\Models;

class posts
{
    private static $blog_posts = [
        [   
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consequuntur eum ullam facere, sit pariatur! Ducimus blanditiis maxime fugit voluptatem incidunt error? Officia dignissimos officiis iusto sint ea odio assumenda eum cupiditate ipsam adipisci iure sequi libero aliquam saepe quae aut, veniam suscipit! In, facere odit. Aliquam molestias impedit ab praesentium quia inventore maiores vel quos quis, deserunt dolorum? Sint in eligendi, reiciendis excepturi soluta aliquam hic voluptatum velit dolores fuga asperiores ea tenetur ipsa veritatis earum minus repellendus! Consequatur"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consequuntur eum ullam facere, sit pariatur! Ducimus blanditiis maxime fugit voluptatem incidunt error? Officia dignissimos officiis iusto sint ea odio assumenda eum cupiditate ipsam adipisci iure sequi libero aliquam saepe quae aut, veniam suscipit! In, facere odit. Aliquam molestias impedit ab praesentium quia inventore maiores vel quos quis, deserunt dolorum? Sint in eligendi, reiciendis excepturi soluta aliquam hic voluptatum velit dolores fuga asperiores ea tenetur ipsa veritatis earum minus repellendus! Consequatur"
        ],
    ];

    public static function all()
    {
        return self::$blog_posts;
    }
}
