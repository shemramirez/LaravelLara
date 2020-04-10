<?php

namespace App\Http\Controllers;

use DB;
use App\Posts;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {        
            return view('/post',[
                'post' => Posts::where('slug',$slug)->firstOrfail()
            ]);
        
    }
}
