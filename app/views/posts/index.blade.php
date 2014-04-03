@extends('layouts.master')




@section('content')

<div class='container'>
    <div class='row'>
        <div class='col-sm-1'>
               <a href="{{{ action('PostsController@create') }}}" style='color:#FFF;'><button type='button' class='btn btn-success' title='Create a New Post'><span class='glyphicon glyphicon-pencil'></span></button></a>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            {{ Form::open(array('action' => 'PostsController@index', 'method' => 'get')) }}
            {{ Form::label('search', 'Find Posts', array('style' => 'display:inline')) }}
            {{ Form::text('search') }}
            {{ Form::submit('Search', array('style' => 'display:inline', 'class' => "btn btn-default")) }}
            {{ Form::close() }}
        </div>
    </div>
    <div class='row'>
    	<div class="col-sm-9 page-header text-muted ">   
               <span>BLOG POSTS</span>
        </div>   
    </div>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="row">    
                <div class="col-sm-6">
                    <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a><span class='small fntsize'>&nbsp;&mdash; Created on: {{{ $post->created_at->format('l, F jS Y') }}}</span></h3>
                    <p class='small'>Written by: {{{ $post->user->email}}}</p>
                    <p class='content'> {{{ Str::words($post->body, 4) }}} </p>
                </div>
                @if (!is_null($post->image_path))
                <div class="col-sm-2">
                    <a href="#" class="pull-right"><img src="{{{ $post->image_path }}}" class="img-circle" alt='Post Image'></a>
                </div>
                @endif 
            </div>
        @endforeach
        <div>
            {{ $posts->appends(array('search' => Input::get('search')))->links() }}
        </div>
    @else
        <div class="row">    
            <div class="col-sm-10">
                <h3><a href="{{{ action('PostsController@index') }}}" class='linker'>View all posts</a></h3>
                <p> No posts matched your search, please try again. </p>
            </div>
        </div>
    @endif
</div>
@stop