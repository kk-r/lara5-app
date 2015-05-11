@extends('layout')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Add Blog Post</h1>


<hr/>

{!!Form::open(['url'=>'blog'])!!}
@include('blog._form',['submitButtonNext'=>'Add Blog Post'])
{!!Form::close()!!}

@include('errors.list')
</div>
</div>
</div>
@endsection