@extends('layouts.master')

@section('topscript')
 	<script src="/ckeditor/ckeditor.js"></script>
@stop

@section('content')
<div class='row'>
        <div class='col-sm-1'>
               <a href="{{{ action('PostsController@index') }}}" style='color:#FFF;'><button type='button' class='btn btn-primary' title='View List of All Posts'><span class='glyphicon glyphicon-list-alt'></span></button></a>
        </div>
</div>
<div class='row'>
	<div class="col-sm-12" id="about">   
        <div class="page-header text-muted">
            Create a New Post
        </div> 
    </div>
</div>
<div class='row'>
	<div class='col-sm-11' id='style'>
		{{ Form::open(array('action' => 'PostsController@store', 'role' =>'form', 'files' => true)) }}
		<div class='form-group'>
			{{ Form::label('title', 'Title', array('style' => 'display:block')) }}
			<input type="text" class="form-control" id="title" name='title' placeholder="Title goes here...">
			{{ $errors->first('title', '<span class="help-block danger" style="color:red;">:message</span>') }}
		</div>
		<div class='form-group'>
			{{ Form::label('body', 'Body', array('style' => 'display:block')) }}
			<textarea class="form-control" id="body" name='body' placeholder="Content goes here..." rows='10'></textarea>
			{{ $errors->first('body', '<span class="help-block" style="color:red;">:message</span>') }}
		</div>
		<div class='form-group'>
			{{Form::label('file','Upload Image')}}
			{{ Form::file('file') }}
		</div>
		<button style="display:block" class="btn btn-success" type="submit" value="submit" title='Submit Post'><span class='glyphicon glyphicon-pencil'></span>
		{{ Form::close() }}
	</div>

</div>

<script>
 	// Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'body' );
</script>

@stop