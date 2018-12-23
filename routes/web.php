<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// コメント一覧画面
Route::get('/comments', 'CommentController@index')->name('comments.index');
// コメント投稿画面
Route::get('/comments/create', 'CommentController@showCreateForm')->name('comments.create');
// コメント投稿実行
Route::post('/comments/create', 'CommentController@create');
