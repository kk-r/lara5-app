@extends('layout')

@section('content')

<div class="container">
	<div class="row">
	<div class="col-md-10 col-md-offset-1">
@foreach($posts as $post)
<article class="article article-{{$post->id}}">
<h2><a href="{{action('BlogController@show',[$post->id])}}">{{$post->name}}</a></h2> by <site>{{$post->created_by}}</site>
<p>{{$post->excerpt}}</p>
<a href="{{url('/blog',$post->id)}}">Read More</a>
</article>
@endforeach
</div>
</div>
</div>
@endsection
