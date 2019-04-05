<?php require_once('../../../private/init.php');?>

<div class="container_fluid">
	<div class="col-xl-4">
		<h1>Team Registration</h1>
		<div class="col">
			<form action="<?php echo url_for('/members/coaches/req_trial.php');?>" method="post">
				<div class="form-group">
					<label for="Teamname">Team Name:</label>
					<input type="text" class="form-control" id="team_name"
					aria-describedby="namehelp" placeholder="Enter Team Name" name="team_name">
				</div>
				<div class="form-group">
					<label for="Address">Address:</label>
					<input type="text" class="form-control" id="address"  placeholder="Enter addresss" name="address">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>