<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/posts/{post}', function ($post) { 
    $posts =[
        'my-first-post' => 'Hello, 1nd post',
        'my-second-post' => 'Hello 2nd post'
    ];
    if(! array_key_exists($post,$posts))
    {
        abort(404, 'No'); 
    }

    return view('test',[
        'post' => $posts[$post]
    ]);

});

*/

Route::get('/',function () {
    return view('/welcome');
});


Route::get('/about',function () {
    return view('/about');
});

Route::get('/contact',function () {
    return view('/contact');
});

Route::get('/posts/{post}','PostController@show');


