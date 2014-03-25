
<!doctype html>
<html lang="en">
<head>
    <title>Dice | View</title>
    <style>
    	div {
    		background-color: #9E9E9E;
    		width: 400px;
    		height: 300px;
    		margin-left: 375px;
    	}
    	h1 {
    		text-align: center;
    		color : #3F4647;
    		text-shadow: 3px 3px 2px #FFF;
    		padding-top: 60px;
    	}
    	h2 {
    		text-align: center;
    		color : #3F4647;
    		text-shadow: 3px 3px 2px #FFF;
    	}
    	h3 {
    		text-align: center;
    		color : #3F4647;
    		text-shadow: 3px 3px 2px #FFF;
    	}
    </style>
</head>
<body>
	<div>
	    <h1>Random: <?=$rand?></h1>
	    <h2>Guess: <?=$num?></h2>
	    <h3> -- <?=$guess?> -- <h2>
	</div>
</body>
</html>