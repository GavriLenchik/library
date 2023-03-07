<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/register', function () use ($router) {
    return view('register');
});

$router->get('/login', function () use ($router) {
    return view('login');
});

$router->get('/', function () use ($router) {
    return redirect('api/books');
});
$router->get('/add_book', function () use ($router) {
    return view('add_book');
});


$router->group(['prefix' => 'api'], function ($router) {
    $router->post('/regist', 'UserController@register');
    $router->post('/log', 'UserController@login');
});

$router->group(['prefix' => 'api'], function ($router) {
    $router->get('books', 'BooksController@showAllBooks');
    $router->get('books/{id}', 'BooksController@showOneBook');
    $router->post('books', 'BooksController@createBook');
    $router->get('favoriteBooks', 'FavoriteBooksController@showAllBooks');
    $router->post('addFavorites/{id}', 'FavoriteBooksController@createBook');
    $router->put('books/{id}', 'BooksController@updateBook');
    $router->delete('books/{id}', 'BooksController@deleteBook');
});
