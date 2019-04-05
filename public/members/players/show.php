<?php
require_once('../../../private/init.php');

$Id = $_GET['Id'];

$players = find_players_byId($Id);
?>

<?php include(SHARED_PATH . '/players_header.php'); ?>

<div id="container">
	<div class="row">
	<div class="col">
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