<?php

namespace App\Models;

class Post
{
    public static function all()
    {
        return[
            [
                'id' => 1,
                'slug' => 'Produk-Tersedia',
                'title' => 'e-commerce',
                'author' => 'Haafiz',
                'body' => 'testing lalalalalalala'
            ],
            [
                'id' => 2,
                'slug' => 'Produk-Tersedia2',
                'title' => 'e-commerce',
                'author' => 'Haafiz',
                'body' => 'testing lalalalalalala'
            ]
            ];
    }
}
?>