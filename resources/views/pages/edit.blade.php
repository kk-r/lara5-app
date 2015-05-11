@extends('layout')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Edit Blog Post</h1>
<hr/>
{!!Form::open(['method'=>'PATCH','url'=>('blog',$post->$id)])!!}
<div class="form-group">
	{!!Form::label('name','Post Name')!!}
	{!!Form::text('name',null,['class'=>'form-conrol','placeholder'=>'Post Name'])!!}
</div>
<div class="form-group">
	{!!Form::label('excerpt','Excerpt')!!}
	{!!Form::textarea('excerpt',null,['class'=>'form-conrol','placeholder'=>'Excerpt'])!!}
</div>
<div class="form-group">
	{!!Form::label('content','Post Content')!!}
	{!!Form::textarea('content',null,['class'=>'form-conrol','placeholder'=>'Post Content'])!!}
</div>
<div class="form-group">
	{!!Form::label('published_at','Published On')!!}
	{!!Form::input('date','published_at',date('Y-m-d'),['class'=>'form-conrol'])!!}
</div>
<div class="form-group">
	{!!Form::label('created_by','Created By')!!}
	{!!Form::text('created_by',null,['class'=>'form-conrol','placeholder'=>'Author Name'])!!}
</div>
<div class="form-group">
	{!!Form::submit('Edit Article',null,['class'=>'form-conrol'])!!}
</div>
{!!Form::close()!!}

@if($errors->any())
<ul class="alert alert-danger">
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
</ul>
@endif
</div>
</div>
</div>
@endsection