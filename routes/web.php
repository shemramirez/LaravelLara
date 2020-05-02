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
    return view('/about',[
        // 'articles' => App\Article::all()      === shows all
        // articles' => App\Article::latest(3)->get()  ==== shows latest
        // This shows the latest take the first 3 then get
        'articles' => App\Article::latest()->take(2)->get()
    ]);
});

Route::get('/contact',function () {
    return view('/contact');
});

Route::get('/career',function () {
    return view('/career');
});

Route::get('/article','ArticleController@index');
Route::post('/article','ArticleController@store');
Route::get('/article/create','ArticleController@create');
Route::get('/article/{articles}','ArticleController@show')->name('article.show');
Route::get('/article/{articles}/edit','ArticleController@edit');
Route::put('/article/{articles}','ArticleController@update');



Route::get('post/{post}','PostController@show');

