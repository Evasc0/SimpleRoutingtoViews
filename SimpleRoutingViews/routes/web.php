<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return view('itemForm');
});

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet', [GreetController::class, 'greet']);

Route::get('posts', function(){
    $res = Post::with('comments')->get();
    dd($res->toArray());
});

Route::prefix('test')
    ->middleware(CheckParam::class)
    ->group(function () {
    Route::get('/', function () {
        return "This is the /test route.";
    });

    Route::get('{value}', function ($value) {
        return "Accepted: " . $value;
    });
});

Route::resource('items', ItemsController::class);