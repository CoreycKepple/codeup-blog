@extends('layouts.master')

@section('content')
    <div class="row">    
    	<div class="col-sm-10">
            <div class='page-header'>
            <h3>{{{ $post->title }}}</h3>
            <p class='text-muted'>Posted on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}} </p>
            </div>           
            <p> {{{ $post->body }}} </p>
        </div>
	</div>
    <div class="col-sm-12" id="about">   
        <div class="page-header">
           <button type="button" class="btn btn-success"><a href="{{{ action('PostsController@create') }}}" style='color:#FFF;'>Create New Post</a></button> | <button type="button" class="btn btn-warning"><a href="{{{ action('PostsController@edit', $post->id) }}}" style='color:#FFF;'>Edit Post</a></button> | <button type="button" class="btn btn-danger"><a href='#' id='btnDelete' style='color:#FFF;'>Delete Post</a></button>
        </div> 
    </div>
    <div class="col-sm-12" id="about">   
        <div class="page-header">
            <button type='button' class='btn btn-primary'><a href="{{{ action('PostsController@index') }}}" style='color:#FFF;'>View all Posts!</a></button>
        </div> 
    </div>
</div>
    {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
    {{ Form::close() }}

<script>
$('#btnDelete').on('click', function (e) {
    e.preventDefault();
    bootbox.confirm('Are you sure you want to delete this post?', function(result) {
        if (result) {
            $('#formDelete').submit();
        };
    });
});
</script>

@stop