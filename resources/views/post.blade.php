

@extends('layout')


@section('content')

<h1>My blog post</h1>
<!--Grab the a data in database output a certain data -->
<p>{{$post->body}}</p>
@endsection

