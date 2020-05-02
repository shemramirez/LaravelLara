@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$articles->title}}</h2>
			</div>
			<p><img src="/css/images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>{{$articles->body}}</p>
		</div>
    </div>
</div>
@endsection