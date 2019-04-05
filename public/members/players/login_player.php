<?php require_once('../../../private/init.php');?>

<?php include(SHARED_PATH . '/players_header.php'); ?>


<div class="container">
	<div class="row">
		<div class="col">
			<form>
				<div class="form-group">
					<label for="Username">Username:</label>
					<input type="text" class="form-control" id="Username"  placeholder="Enter Username">
				</div>
				<div class="form-group">
					<label for="Password">Password :</label>
					<input type="text" class="form-control" id="Password"  placeholder="Enter Password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>