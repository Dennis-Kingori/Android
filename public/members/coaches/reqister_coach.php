<?php require_once('../../../private/init.php');?>

<?php include(SHARED_PATH . '/coaches_header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<form action="<?php echo url_for('/members/coaches/create.php');?>" method="post">
				<div class="form-group">
					<label for="Firstname">First Name:</label>
					<input type="text" class="form-control" id="first_name"
					aria-describedby="namehelp" placeholder="Enter First Name" name="first_name">
				</div>
				<div class="form-group">
					<label for="Secondname">Second Name:</label>
					<input type="text" class="form-control" id="second_name"  placeholder="Enter Second Name" name="second_name">
				</div>
				<div class="form-group">
					<label for="Username">Username:</label>
					<input type="text" class="form-control" id="username"  placeholder="Enter Username" name="username">
				</div>
				<div class="form-group">
					<label for="Password">Password :</label>
					<input type="text" class="form-control" id="password"  placeholder="Enter Password" name="password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>