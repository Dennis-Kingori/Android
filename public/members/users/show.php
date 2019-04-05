<?php
require_once('../../../private/init.php');

$Id = $_GET['Id'];

$users = find_users_byId($Id);
?>

<?php include(SHARED_PATH . '/others_header.php'); ?>

<div id="container">
	<div class="row">
	<div class="col">
		<h1>Users: <?php echo h($users['Id']);?></h1>

	<div class="col">
		<dl>
			<dt>First Name</dt>
			<dd><?php echo h($users['first_name']);?></dd>
		</dl>
		<dl>
			<dt>Second Name</dt>
			<dd><?php echo h($users['second_name']);?></dd>
		</dl>
		<dl>
			<dt>Username</dt>
			<dd><?php echo h($users['username']);?></dd>
		</dl>
	</div>

    </div>	
	</div>
	
</div>