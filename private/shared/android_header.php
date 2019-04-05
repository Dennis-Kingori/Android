<!DOCTYPE html>
<html lang="en">
<head>
	<title>Public index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo url_for('/stylesheets/css/bootstrap.css');?>">
</head>

<body>
	<div class="jumbotron">
		<h1 class="display-4">WELCOME TO MERU REGIONAL BASKETBALL</h1>
	</div>

<div class="container">
<div id="nav">
	<ul class="nav nav-pills nav-justified">
		<li class="nav-item"><a class="nav-link active" href="">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo url_for('/members/coaches/index.php');?>">Coach</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo url_for('/members/players/index.php');?>">Players</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo url_for('/members/users/index.php');?>">Others</a></li>
	</ul>
</div> 
</div>
