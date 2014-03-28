@extends('layouts.master')




@section('content')
<div class='container'>
	<div class="col-sm-12" id="about">   
        <div class="page-header text-muted">
            BLOG POSTS
        </div> 
    </div>
@foreach ($posts as $post)
    <div class="row">    
    	<div class="col-sm-10">
            <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
			<p class='small'>Created on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}} </p>
            <p> {{{ Str::words($post->body, 4) }}} </p>
        </div>
	</div>
@endforeach
{{ $posts->links() }}

<div class="col-sm-12">   
        <div class="page-header">
            <a href="{{{ action('PostsController@create') }}}" class=''><button type="button" class="btn btn-success">Create New Post!</button></a>
        </div> 
</div>
@stop