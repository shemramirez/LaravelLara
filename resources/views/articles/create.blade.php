@extends('layout')

@section('headers')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
@endsection

@section('content')

<div id="wrapper">
	<div id="page" class="container">
        <h1 class="">NEW ARTICLE</h1>
        <form method="POST" action="/article">
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input 
                    class="input @error('title')is-danger @enderror" 
                    type="text" 
                    name="title" 
                    id="title"
                    value="{{ old('title') }}">

                    @error('title')
                    <p class="help is-danger">{{ $errors->first('title')}}</p>
                    @enderror 
                </div>
            </div> 

                <div class="field">
                    <label class="label" for="title">Excerpt</label>
    
                    <div class="control">
                        <textarea class="textarea @error('excerpt')is-danger @enderror"  name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt')}}</p>
                            @enderror 
                    </div>
                </div> 
                    
                    <div class="field">
                        <label class="label" for="title">Body</label>
        
                        <div class="control">
                            <textarea class="textarea @error('body')is-danger @enderror" 
                            name="body" 
                            id="body">{{ old('body') }}</textarea>
                            @error('body')
                                <p class="help is-danger">{{ $errors->first('body')}}</p>
                                @enderror 
                        </div>
                    </div> 

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                       
        
                        <div class="control">
                            <button class="button is-text">Cancel</button>
                        </div>
                    </div> 
	</div>
</div>

@endsection

