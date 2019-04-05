<?php require_once('../../../private/init.php');
$pId = $_GET['Id'];
$pprof = array();
$pprof = $_GET['json'];

$players = find_players_byId($pId);

//$jsn = json_encode($players);
$jsn1 = json_encode($pprof);
//echo $jsn;
echo json_encode($jsn1);
?>
<?php $team_set = find_teams();?>
<?php include(SHARED_PATH . '/home_player.php'); ?>

<div class="jumbotron">
<div class="container_fluid">
	<div class="col-xl-4">
		<h1>Player profile</h1>
		<h1>Player: <?php echo h($players['Id']);?></h1>
		<div class="col">
		<dl>
			<dt>First Name</dt>
			<dd><?php echo h($players['first_name']);?></dd>
		</dl>
		<dl>
			<dt>Second Name</dt>
			<dd><?php echo h($players['second_name']);?></dd>
		</dl>
		<dl>
			<dt>Username</dt>
			<dd><?php echo h($players['username']);?></dd>
		</dl>
	</div>
	</div>
</div>
</div>

<div class="container_fluid">
	<div class="col-xl-4">
		<h1>Players Registration</h1>
		<div class="col">
			<form action="<?php echo url_for('/members/players/player_req.php?id=' . $pId);?>" method="post">
				<div class="form-group">
					<label for="Username">Username:</label>
					<input type="text" class="form-control" id="username"
					aria-describedby="namehelp" placeholder="Enter your username" name="username">
				</div>
				<div class="form-group">
					<label for="Phone_number">Phone Number:</label>
					<input type="text" class="form-control" id="phone_number"  placeholder="Enter your phone_number" name="phone_number">
				</div>
				<div class="form-group">
					<label for="email">Email Address:</label>
					<input type="text" class="form-control" id="email" placeholder="Enter your email address" name="email">
				</div>
				<div class="form-group">
					<label for="address">Physical address:</label>
					<input type="text" class="form-control" id="address" placeholder="Enter your physical address" name="address">
				</div>
				<div class="form-group">
					<label for="team_name">Team Name:</label>
					<input type="text" class="form-control" id="team_name" placeholder="Enter Team Name" name="team_name">
				</div>
				<div class="row">
					<label for="position">Player position:</label>
				<div class="col-xl-2">
					<label for="position">Center:</label>
					<input type="radio" class="radio-inline" id="position" value="Center" placeholder="Enter playing position" name="position">
				</div>
				<div class="col-xl-2">
					<label for="position">Forward:</label>
					<input type="radio" class="radio-inline" id="position" value="Forward" placeholder="Enter playing position" name="position">
				</div>
				<div class="col-xl-2">
					<label for="position">Guard:</label>
					<input type="radio" class="radio-inline" id="position" value="Guard" placeholder="Enter playing position" name="position">
				</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>