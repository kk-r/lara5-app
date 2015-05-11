@extends('layout')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Edit Blog Post - {{$post->name}}</h1>
<hr/>
{!!Form::model($post,['method'=>'PATCH','url'=>['blog',$post->id]])!!}
@include('blog._form',['submitButtonNext'=>'Edit Blog Post'])
{!!Form::close()!!}

@include('errors.list')
</div>
</div>
</div>
@endsection