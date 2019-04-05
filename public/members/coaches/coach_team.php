<?php require_once('../../../private/init.php');
$team_Id = $_GET['Id'];
$coach_id = $_GET['coachid'];
$team = find_team_byId($team_Id);
$coach = find_coach_byId($coach_id);
$team_name = $team['Team_name'];
$teammembers = find_teammates($team_name);

?>
<?php include(SHARED_PATH . '/home_coach.php'); ?>

<div class="jumbotron">
	<div class="container-fluid">
		<div class="col-xl-4">
			<h1>Team profile</h1>
		<h1>Team Id: <?php echo h($team['Id']);?></h1>
		<div class="col">
		<dl>
			<dt>Team Name:</dt>
			<dd><?php echo h($team['Team_name']);?></dd>
		</dl>
		<dl>
			<dt>Address:</dt>
			<dd><?php echo h($team['Address']);?></dd>
		</dl>
		<dl>
			<dt>Coach ID:</dt>
			<dd><?php echo h($coach['Id']);?></dd>
		</dl>
		</div>
	</div>
</div>
</div>

<div class="container-fluid">
	<div class="col-xl-4">
		<h1>Team Members</h1>

	<table class="table" width="350" cellpadding="10" cellspacing="5">
		<tr>
			<th>username</th>
			<th>phone number</th>
			<th>email</th>
			<th>address</th>
			<th>position</th>
		</tr>

			<?php print_r($teammembers) ?>
		<?php while($team_mates = mysqli_fetch_assoc($teammembers)) { ?>
		<tr>
			<td><?php echo $team_mates['username'];?></td>
			<td><?php echo $team_mates['phone_number'];?></td>
			<td><?php echo $team_mates['email'];?></td>
			<td><?php echo $team_mates['address'];?></td>
			<td><?php echo $team_mates['position'];?></td>
		</tr>
	<?php }?>
	</table>
	
	<?php echo $teammembers['username'];?>
	<?php echo $teammembers['phone_number'];?>
	<?php echo $teammembers['email'];?>
	<?php echo $teammembers['address'];?>
	<?php echo $teammembers['position'];?>
	</div>
</div>
