<?php

namespace App\Models;


// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ananta",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam nulla voluptatum fuga repellat architecto saepe nesciunt quasi sed quo, id alias. Impedit perspiciatis quaerat aliquid consectetur quos aperiam, numquam tempora harum debitis repellendus incidunt, natus nostrum voluptatibus, quisquam saepe at dolor vitae ipsa inventore ea? Quod, molestias facilis culpa et sequi nam, ratione aliquid veniam quam voluptates facere ea aspernatur. Et nihil ipsam maiores atque dolores sed fugiat, autem quod quidem rerum eaque repellendus neque! Voluptate molestias sit quod ex."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Putra",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam nulla voluptatum fuga repellat architecto saepe nesciunt quasi sed quo, id alias. Impedit perspiciatis quaerat aliquid consectetur quos aperiam, numquam tempora harum debitis repellendus incidunt, natus nostrum voluptatibus, quisquam saepe at dolor vitae ipsa inventore ea? Quod, molestias facilis culpa et sequi nam, ratione aliquid veniam quam voluptates facere ea aspernatur. Et nihil ipsam maiores atque dolores sed fugiat, autem quod quidem rerum eaque repellendus neque! Voluptate molestias sit quod ex."
        ]
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();
            // $new_post = [];
            // foreach($posts as $p){
            //     if($p["slug"] === $slug){
            //         $new_post = $p;
            //     }
            // }

            return $posts->firstWhere('slug', $slug);
        }
}
