<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page'], ['nama' => '@andrast32']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
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
    ]]);
});

route::get('/posts/{slug}', function($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
