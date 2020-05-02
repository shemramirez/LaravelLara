<?php

namespace App\Http\Controllers;

use DB;
use App\Posts;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($idunno)
    {        

                //'post' => Post::where('slug',$slug)->firstOrfail()        
        return view('post',[
            'post' => Posts::where('id',$idunno)->firstOrfail()
        ]);

           // 'articles' => App\Article::latest()->take(3)->get()       
    }
}
