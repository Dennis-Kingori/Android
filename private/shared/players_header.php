<!DOCTYPE html>
<html lang="en">
<head>
	<title>Players index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo url_for('/stylesheets/css/bootstrap.css');?>">
</head>
<body>
	<div class="jumbotron">
		 <h1 class="display-4">WELCOME PLAYERS</h1>
	</div>
<div class="container">
<div id="nav">
	<ul class="nav nav-pills nav-justified">
	<li class="nav-item"><a class="nav-link" href="<?php echo url_for('/members/players/index.php');?>">Home</a></li>
	<li class="nav-item"><a class="nav-link" href="<?php echo url_for('/members/players/reqister_player.php');?>">Sign up</a></li>
	<li class="nav-item"><a class="nav-link" href="<?php echo url_for('/members/players/login_player.php');?>">Login</a></li>
	</ul>
</div>
 
</div>
