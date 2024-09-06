<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            'title' => 'Artikel 1',
            'author' => 'Joko',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente reiciendis, ipsa
            obcaecati, vitae maiores magni eius eligendi aliquid quasi magnam iusto optio id possimus architecto repellat impedit delectus enim
            porro.'
        ],
        [
            'title' => 'Artikel 2',
            'author' => 'Budi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat explicabo
            consequatur, modi ipsa earum veniam, minima fugiat ratione officia nostrum praesentium aut, harum atque
            nesciunt. Aperiam repudiandae vero sunt distinctio?'
        ],
        [
            'title' => 'Artikel 3',
            'author' => 'Asep',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestias, totam
            eveniet in delectus, magni nesciunt similique natus rerum, vel optio ducimus sapiente saepe! Nemo
            consequuntur corporis quas voluptatibus assumenda?'
        ]
    ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
