<?php require_once('../../../private/init.php');?>

<?php include(SHARED_PATH . '/others_header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<form action="<?php echo url_for('/members/users/create.php');?>" method="post">
				<div class="form-group">
					<label for="Firstname">First Name:</label>
					<input type="text" class="form-control" id="Firstname"
					aria-describedby="namehelp" placeholder="Enter First Name" name="first_name">
				</div>
				<div class="form-group">
					<label for="Secondname">Second Name:</label>
					<input type="text" class="form-control" id="Secondname"  placeholder="Enter Second Name" name="second_name">
				</div>
				<div class="form-group">
					<label for="Username">Username:</label>
					<input type="text" class="form-control" id="Username"  placeholder="Enter Username" name="username">
				</div>
				<div class="form-group">
					<label for="Password">Password :</label>
					<input type="text" class="form-control" id="Password"  placeholder="Enter Password" name="password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>