@extends('layouts.master')

@section('content')
<div class='row'>
        <div class='col-sm-1'>
               <a href="{{{ action('PostsController@index') }}}" style='color:#FFF;'><button type='button' class='btn btn-primary' title='View List of All Posts'><span class='glyphicon glyphicon-list-alt'></span></button></a>
        </div>
</div>
<div class='row'>
	<div class="col-sm-12" id="about">   
        <div class="page-header text-muted">
            Edit this Post
        </div> 
    </div>
</div>
<div class='row'>
	<div class='col-sm-8' id='style'>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id),'files' => true, 'method' => 'PUT'), array('class' => "form-control")) }}
		<div class='form-group'>
			{{ Form::label('title', 'Title', array('style' => 'display:block')) }}
			{{ Form::text('title', null, array('class' => 'form-control')) }}
			{{ $errors->first('title', '<span class="help-block danger" style="color:red;">:message</span>') }}
		</div>
		<div class='form-group'>
			{{ Form::label('body', 'Body', array('style' => 'display:block')) }}
			{{ Form::textarea('body', null, array('class' => 'form-control'))}}
			{{ $errors->first('body', '<span class="help-block" style="color:red;">:message</span>') }}
		</div>
		<div class='form-group'>
			{{ Form::file('file') }}
			@if (!is_null($post->image_path))
			<p> If no image is specified here -- current image will be removed</p>
			@endif
		</div>
		<button style="display:block" class="btn btn-warning" type="submit" value="submit" title='Submit Post'><span class='glyphicon glyphicon-edit'></span>
		{{ Form::close() }}
	</div>
	@if (!is_null($post->image_path))
	<div class='col-sm-3'>
		<img src='{{{ $post->image_path }}}' class='img-responsive' style='margin-top:75px;'>
	</div>
	@endif
</div>
@stop