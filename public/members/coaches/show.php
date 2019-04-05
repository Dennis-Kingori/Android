<?php
require_once('../../../private/init.php');

$Id = $_GET['Id'];

$coach = find_coach_byId($Id);
?>

<?php include(SHARED_PATH . '/home_coach.php'); ?>

<div id="container">
	<div class="row">
	<div class="col">
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