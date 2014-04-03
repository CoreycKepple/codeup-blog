@extends('layouts.master')

@section('content')
<div class='row'>
        <div class='col-sm-1'>
               <a href="{{{ action('PostsController@index') }}}" style='color:#FFF;'><button type='button' class='btn btn-primary' title='View List of All Posts'><span class='glyphicon glyphicon-list-alt'></span></button></a>
        </div>
</div>
    <div class="row">    
    	<div class="col-sm-8">
            <div class='page-header'>
            <h3>{{{ $post->title }}}</h3>
            <p class='text-muted'>Posted on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y') }}} </p>
            </div>    
            <p class='small text-muted'>Written By: {{{$post->user->email}}} </p>    
            <p class='content'> {{{ $post->body }}} </p>
        </div>
        @if (!is_null($post->image_path))  
        <div class='col-sm-3' style='margin-top:130px; margin-left:40px;'>
            <img src='{{{ $post->image_path }}}' class='img-responsive'>
        </div>
        @endif
    </div>
    <div class='row'>
        <div class="col-sm-12">   
            <div class="page-header">
               <a href="{{{ action('PostsController@create') }}}"><button style="display:inline" class="btn btn-success" type="submit" value="submit" title='Create New Post'><span class='glyphicon glyphicon-pencil' style='color:#FFF;'></span></button></a> &mdash; <a href="{{{ action('PostsController@edit', $post->id) }}}"><button style="display:inline" class="btn btn-warning" title='Edit Current Post'><span class='glyphicon glyphicon-edit' style='color:#FFF;'></span> </button></a> &mdash; <a href="#" id='btnDelete'><button style="display:inline" class="btn btn-danger" title='Delete Post'><span class='glyphicon glyphicon-trash' style='color:#FFF;'></span> </button></a>
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