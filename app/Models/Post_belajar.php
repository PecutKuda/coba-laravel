<?php

namespace App\Models;

class Post
{
    private static $posts = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Elliot",
                "body" => "
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam eius debitis magnam a iste iusto dolores soluta praesentium obcaecati. Impedit, inventore. Delectus reprehenderit itaque repudiandae commodi similique ipsum facilis, blanditiis perspiciatis vero vel eos animi tempore reiciendis. Magnam, reprehenderit officiis minima deserunt dolorum saepe laborum obcaecati reiciendis illum, perferendis velit fugiat eligendi! Non provident expedita quos ducimus eaque ea quibusdam reprehenderit magni, nostrum placeat iusto cum nemo, maxime quia, molestiae odio voluptatum commodi minus id! Impedit, quod? Unde, neque doloribus!"
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Lie",
                "body" => "
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam eius debitis magnam a iste iusto dolores soluta praesentium obcaecati. Impedit, inventore. Delectus reprehenderit itaque repudiandae commodi similique ipsum facilis, blanditiis perspiciatis vero vel eos animi tempore reiciendis. Magnam, reprehenderit officiis minima deserunt dolorum saepe laborum obcaecati reiciendis illum, perferendis velit fugiat eligendi! Non provident expedita quos ducimus eaque ea quibusdam reprehenderit magni, nostrum placeat iusto cum nemo, maxime quia, molestiae odio voluptatum commodi minus id! Impedit, quod? Unde, neque doloribus!"
            ]
    ];

    public static function all()
    {
        return collect(self::$posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
