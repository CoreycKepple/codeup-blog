@extends('layouts.master')

@section('content')
<div class='row'>
	<div class="col-sm-12" id="about">   
        <div class="page-header text-muted">
            Login Page
        </div> 
    </div>
</div>
<div class='row'>
	<div class='col-sm-8' style='padding-left:300px;'>
		{{ Form::open(array('action' => 'HomeController@doLogin')) }}
		{{ Form::label('email', 'E-mail', array('style' => 'display:block')) }}
		{{ Form::email('email') }}
		{{ Form::label('password', 'Password', array('style' => 'display:block')) }}
		{{ Form::password('password', array('style' => 'margin-bottom:5px')) }}
		{{ Form::submit('Login', array('style' => 'display:block', 'style' => 'width:157px', 'class' => "btn btn-success")) }}
		{{ Form::close() }}
	</div>
</div>

@stop