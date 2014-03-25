@extends('layouts.master')

@section('content')
<style type="text/css">
	
#style{
	margin-left: 200px;
	height: 300px;
	width:300px;
	margin-top: 100px;
}	

</style>
<div id='style'>
	<h1>Blog Post</h1>
<form method='POST' action='{{{ action("PostsController@store") }}}'>
	<label for="title">Title
            <input id="title" name="title" type="text" value="{{{ Input::old('title') }}}">
    </label>

    <label for='body'>Body
    		<textarea id='body' name='body'  rows="4" cols="50">{{{ Input::old('body') }}}</textarea>
	</label>
	<button type="submit">Send</button>

</form>
</div>
@stop