@extends('layout')


@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
		</div>
		<div id="sidebar">
			<div id="stwo-col">
				<div class="sbox1">
				</div>
				<div class="sbox2">
                     <!--Grab the a data in database output a certain data --> 
                     <p>{{$post->body}}</p
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

