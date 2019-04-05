<!DOCTYPE html>
<html lang="en">
<head>
	<title>Players Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo url_for('/stylesheets/css/bootstrap.css');?>">
</head>

<body>

<div class="container-fluid">
	<div id="nav">
		<ul class="nav nav-pills nav-justified">
	<li class="nav-item"><a class="nav-link" href="<?php echo url_for('/members/players/player_profile.php');?>">Profile</a></li>
	<li class="nav-item"><a class="nav-link" href="<?php echo url_for('/members/players/player_team.php');?>">Team Registration</a></li>
	</ul>
	</div>
</div>