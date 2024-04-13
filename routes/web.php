<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * タスク登録用ページ
 */
Route::get('/pages/taskregister', function () {
  return view('/pages/taskregister');
});
