<?php require_once('../../../private/init.php');?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>


<div class="col">
	<h1>Create Tournament</h1>
			<form action="<?php echo url_for('/members/admin/tourn_create.php');?>" method="post">
				<div class="form-group">
					<label for="Team">Team Name:</label>
					<input type="text" class="form-control" id="team_name" value="" aria-describedby="namehelp" placeholder="Enter team Name" name="team_name">
					<label for="Venue">Venue</label>
					<input type="text" class="form-control" id="venue" value="" aria-describedby="namehelp" placeholder="Enter venue" name="venue">
					<label for="Descriprion">Description:</label>
					<input type="text" class="form-control" id="description" value="" aria-describedby="namehelp" placeholder="Enter description" name="description">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		</div>
