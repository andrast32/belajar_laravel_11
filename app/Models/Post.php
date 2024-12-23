<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'judul artikel 1',
                'author' => 'Andrast',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum tempore deleniti impedit placeat repellat quos repellendus neque excepturi quidem officiis nostrum earum error aliquid est aperiam quasi sapiente, accusamus nam.'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'judul artikel 2',
                'author' => 'Andrast',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio dolor architecto labore officia distinctio unde voluptas in minus iusto nam corporis sunt consectetur, dolorum est perferendis? Libero reiciendis fugiat nam.'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
