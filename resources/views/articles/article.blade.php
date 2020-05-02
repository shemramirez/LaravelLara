@extends('layout')

@section('content')
@foreach ($article as $article)
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
			<h2><a href="{{route('article.show',$article)}}">{{$article->title}}</a></h2>
	  	    </div>
				<p><img src="/css/images/banner.jpg" alt="" class="image image-full"/> </p>
				<p>{{$article->body}}</p>
	   </div>
	</div>
</div>
@endforeach
@endsection

