<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','excerpt','body'];          // mass assigning the values 
        // 

      //protected $guarded = [];          // fuck it let it in

      public function path()
    {
        return route('article.show',$this);
    }
}
