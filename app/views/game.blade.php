@extends('layouts.master')

@section('topscript')
<link href='http://fonts.googleapis.com/css?family=Oldenburg' rel='stylesheet' type='text/css'>
<link href='/css/mole.css' rel='stylesheet'>
@stop

@section('content')
	<div class='row'>
		<div class='scorebox col-sm-4'>
			<p id='scoretext'>Score: <span> </span></p>
		</div>
		<div class='bonusbox col-sm-4 col-sm-offset-2'>
			<p id='bonustext'>Bonus Points!</p>
		</div>
		<div class='scorebox col-sm-4 col-sm-offset-1'>
			<p id='hightext'>High-Score: <span> </span></p>
		</div>
	</div>
	<div class='row'>
		<div id='b' class='col-sm-4'>
			<img src='/img/whack/logo.png'>
			<div id='startbutton'>
				<p class='text-center'>Start<p>
			</div>
	</div> 
			
			
	<div id='gamebox' class='col-sm-8'> 
		<div class='boxes'>
			<img src='/img/whack/yanks.png' class='pic'>
		</div>
		<div class='boxes'>
			<img src='/img/whack/yanks.png' class='pic'>
		</div>
		<div class='boxes'>
			<img src='/img/whack/yanks.png' class='pic'>
		</div>
		<div class='boxes'>
			<img src='/img/whack/yanks.png' class='pic'>
		</div>
		<div class='boxes'>
			<img src='/img/whack/yanks.png' class='pic'>
		</div>
		<div class='boxes'>
			<img src='/img/whack/yanks.png' class='pic'>
		</div>
		<div class='boxes'>
			<img src='/img/whack/yanks.png' class='pic'>
		</div>
		<div class='boxes'>
			<img src='/img/whack/yanks.png' class='pic'>
		</div>
		<div class='boxes'>
			<img src='/img/whack/yanks.png' class='pic'>
		</div>
	</div>
<script>
	$(document).ready(function() {

		var boxArray = $('.boxes');
		var score = 0;
		var highscore = 0;
		var audioElement = document.createElement('audio');
       	audioElement.setAttribute('src', '/sounds/song.mp3');
       	var hit = document.createElement('audio');
       	hit.setAttribute('src', '/sounds/hit.mp3');
       	var cartman = document.createElement('audio');
       	cartman.setAttribute('src', 'sounds/cartman.mp3')
       	var i = 5;
       	var t = 8000;
       	

       	

		function boxchange(){
			$('.boxes').children().fadeOut(250);
			var random = Math.floor(Math.random() * boxArray.length);
			$(boxArray[random]).children().fadeIn(250);
		}

		function endGame(){
			t = 8000;
			clearInterval(game);
			clearInterval(bpoints);
			$('#bonustext').show();
			$('#bonustext').html('<p> Game Over</p>').css('margin-left','45px');
			$('.pic').hide("explode");
			score = 0;
			$('#scoretext').children().html(score);
			$('#startbutton').removeAttr('style');
			audioElement.pause();

		}

		function bonus(){
       		if (score >= i) {
       			score = score+2;
       			cartman.play();
       			$('#scoretext').children().html(score);
       			if (score > highscore) {
					highscore = score;
				};
				$('#hightext').children().html(highscore);
       			$('#bonustext').fadeIn(500);
       			$('#bonustext').fadeOut(500);
       			$('#bonustext').fadeIn(500);
       			$('#bonustext').fadeOut(500);
       			$('#bonustext').fadeIn(500);
       			$('#bonustext').fadeOut(500);
       			$('#bonustext').fadeIn(500);
       			$('#bonustext').fadeOut(500);
       			$('#bonustext').fadeIn(500);
       			$('#bonustext').fadeOut(500);
       			
       		};
       		clearInterval(bpoints);
       		i = i+5;
       		t= t-1000;
       		console.log(t);
       		bpoints = window.setInterval(bonus, t);
       	}

 

		
		
		$('#startbutton').click(function(){
			$('#bonustext').hide();
			$('#startbutton').css('box-shadow','0px 0px 15px #F00');
			game = window.setInterval(boxchange, 800);
			bpoints = window.setInterval(bonus, t);
			window.setInterval(endGame, 30000);
       		audioElement.play();
       		console.log(t);
		});

		$('.boxes').children().click(function() {
			$('.pic').hide("explode");
			hit.play();
			score = score + 1;
			$('#scoretext').children().html(score);
			if (score > highscore) {
				highscore = score;
			};
			$('#hightext').children().html(highscore);
		});

	});

	</script> 
				


@stop