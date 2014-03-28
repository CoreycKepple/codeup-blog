@extends('layouts.master')

@section('content')
<style type="text/css">
	
#style{
	margin-left: 250px;
	margin-top: 25px;
	margin-bottom: 25px;
}

#send {
	margin-bottom: 5px;
}

.margtop {
	margin-top: 10px
}	

</style>
<div class='row'>
	<div class="col-sm-12" id="about">   
        <div class="page-header text-muted">
            Create a Post
        </div> 
    </div>
</div>
<div class='row'>
	<div class='col-sm-8' id='style'>
		<h1>Blog Post</h1>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT'), array('class' => "btn btn-default")) }}
		{{ Form::label('title', 'Title', array('style' => 'display:block')) }}
		{{ $errors->first('title', '<span class="help-block" style="color:red;">:message</span>') }}
		{{ Form::text('title') }}
		{{ Form::label('body', 'Body', array('style' => 'display:block')) }}
		{{ Form::textarea('body') }}
		{{ $errors->first('body', '<span class="help-block" style="color:red;">:message</span>') }}
		{{ Form::submit('Edit Post', array('style' => 'display:block', 'class' => "btn btn-warning")) }}
		{{ Form::close() }}
	</div>
</div>
<div class='row'>
	 <div class="col-sm-12" id="about">   
        <div class="page-header">
            <button type='button' class='btn btn-primary'><a href="{{{ action('PostsController@index') }}}" style='color:#FFF;'>View all Posts!</a></button>
        </div> 
    </div>
</div>

@stop