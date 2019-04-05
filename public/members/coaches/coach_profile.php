<?php require_once('../../../private/init.php');
$cId = $_GET['Id'];

$coach = find_coach_byId($cId);
?>
<?php include(SHARED_PATH . '/home_coach.php'); ?>

<div class="jumbotron">
<div class="container_fluid">
	<div class="col-xl-4">
		<h1>Coach profile</h1>
		<h1>Coach: <?php echo h($coach['Id']);?></h1>
		<div class="col">
		<dl>
			<dt>First Name</dt>
			<dd><?php echo h($coach['first_name']);?></dd>
		</dl>
		<dl>
			<dt>Second Name</dt>
			<dd><?php echo h($coach['second_name']);?></dd>
		</dl>
		<dl>
			<dt>Username</dt>
			<dd><?php echo h($coach['username']);?></dd>
		</dl>
	</div>
	</div>
</div>
</div>

<div class="container_fluid">
	<div class="col-xl-4">
		<h1>Team Registration</h1>
		<div class="col">
			<form action="<?php echo url_for('/members/coaches/team_req.php?id=' . $cId);?>" method="post">
				<div class="form-group">
					<label for="Teamname">Team Name:</label>
					<input type="text" class="form-control" id="team_name"
					aria-describedby="namehelp" placeholder="Enter Team Name" name="team_name">
				</div>
				<div class="form-group">
					<label for="Address">Address:</label>
					<input type="text" class="form-control" id="address"  placeholder="Enter addresss" name="address">
				</div>
				<div class="form-group">
					<label for="CoachId">Coach Id:</label>
					<input type="text" class="form-control" id="CoachId" placeholder="Enter Coach Id" name="CoachId">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>