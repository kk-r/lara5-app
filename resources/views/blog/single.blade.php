@extends('layout')

@section('content')
<div class="container">
	<div class="row">
	<div class="col-md-10 col-md-offset-1 single-article">
<article>
	<h2>{{$post->name}}</h2>
	<p>{{$post->content}}</p>
	<site>Published On- {{$post->published_at}}</site>
	<site>Submitted By- {{$post->created_by}}</site>
</article>
</div>
</div>
</div>
@endsection