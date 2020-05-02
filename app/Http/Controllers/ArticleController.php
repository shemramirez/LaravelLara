<?php


namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   
    public function index() // Render a list in the resources ex. A list of users/list of project etc.
    {
    
          return view('articles.article',[
            'article' => Article::latest()->get()
        ]);
    }
    public function show(Article $articles)     // the query in this is get a Article::where($id, {wildcard})->first();  // Show a single resource ex. Show a certain thing/Show a users/show a single thing
    {
   
        return view('articles.show',compact('articles'));
    }

    /*
     public function show($id)          // ALTERNATIVE IT NEEDS A CERTAIN QUERY
    {
   // Show a single resource ex. Show a certain thing/Show a users/show a single thing
        $article = Article::find($id);

        return view('articles.show',[
            'article' => $article
        ]);
    }
    */
    public function create() // Show a view to create a new resource
    {
    
    return view('articles.create');
    }

    public function store() // Hold or handle the new resource
    {
 
        Article::create($this->validated());

    return redirect('/article');    // hard coded URI
    }

    public function edit(Article $articles) // Show a view to edit a current resource
    {
                        //          ^
                        //          |
                        //          it means get Article data that matches the $articles


    //$article = Article::find($id);   It means to find a certain data or wildcard
    return view('articles.edit',[
        'article' => $articles
    ]);

    }

    public function update(Article $articles)   // Handle the edited resource
    {
        $articles->update($this->validated());

        // ALTERNATIVE 3 OR SHORTER
       // $articles->update(request()->validate([
         //   'title' => 'required',
           // 'excerpt' => 'required',
           // 'body' => 'required' 
       // ]));
      

        /*
            ALTERNATIVE 2
        $validatedArticle = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
            Article::create($validatedArticle);
        */
 

      /*  
                ALTERNATIVE 1
        Artcile::create([
            'title' =>Request('title'),
            'excerpt' => Request('excerpt'),
            'body' => Request('body'),
            ]);
        */   
    /* 
            HARD WAY
     $article = Article::find($id);
    $articles->title = Request('title');
    $articles->excerpt = Request('excerpt');
    $articles->body = Request('body');

    $articles->save();
    */
    return redirect(route('article.show',$articles));   // easier routes system
  //  return redirect($articles->path(),$articles);
    }

    public function delete()    // Delete the resource
    {
    
   // $article = Article::find($id);

    //Schema::dropIfExists('articles');
    //return redirect('/article');
    }

    public function validated() // for easier function
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
            ]);
    }
}
