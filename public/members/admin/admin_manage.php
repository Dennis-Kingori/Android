<?php require_once('../../../private/init.php');?>
<?php $coach_set = find_coaches();?>
<?php $player_set = find_players();?>
<?php $user_set = find_users();?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>


<div class="">
	<h1>ALL COACHES</h1>
<table class="table" width="350" cellpadding="10" cellspacing="5">
	 	<tr>
	 		<th>ID</th>
	 		<th>FIRST NAME</th>
	 		<th>SECOND NAME</th>
	 		<th>USERNAME</th>
	 		<th>APPROVAL</th>
	 		<th>&nbsp;</th>
	 		<th>&nbsp;</th>
	 		<th>&nbsp;</th>
	 	</tr>

	 	<?php while($pend_coach = mysqli_fetch_assoc($coach_set)) { ?>
	 	<tr>
	 		<td><?php echo $pend_coach['Id'];?></td>
	 		<td><?php echo $pend_coach['first_name'];?></td>
	 		<td><?php echo $pend_coach['second_name'];?></td>
	 		<td><?php echo $pend_coach['username']?></td>
	 		<td><?php echo $pend_coach['approval']?></td>
	 		<td><a class="action" href="<?php echo url_for('/members/admin/coach_approve.php?Id=' . h(u($pend_coach['Id']))); ?>">Approve</a></td>
	 		<td><a class="action" href="<?php echo url_for('/members/admin/coach_denyapproval.php?Id=' . h(u($pend_coach['Id']))); ?>">Deny Approval</a></td>
	 	</tr>
	 	<?php } ?>
	 </table>
</div>

<div class="">
	<h1>ALL PLAYERS</h1>
<table class="table" width="350" cellpadding="10" cellspacing="5">
	 	<tr>
	 		<th>ID</th>
	 		<th>FIRST NAME</th>
	 		<th>SECOND NAME</th>
	 		<th>USERNAME</th>
	 		<th>APPROVAL</th>
	 		<th>&nbsp;</th>
	 		<th>&nbsp;</th>
	 		<th>&nbsp;</th>
	 	</tr>

	 	<?php while($pend_player = mysqli_fetch_assoc($player_set)) { ?>
	 	<tr>
	 		<td><?php echo $pend_player['Id'];?></td>
	 		<td><?php echo $pend_player['first_name'];?></td>
	 		<td><?php echo $pend_player['second_name'];?></td>
	 		<td><?php echo $pend_player['username']?></td>
	 		<td><?php echo $pend_player['approval']?></td>
	 		<td><a class="action" href="<?php echo url_for('/members/admin/player_approve.php?Id=' . h(u($pend_player['Id']))); ?>">Approve</a></td>
	 		<td><a class="action" href="<?php echo url_for('/members/admin/player_denyapproval.php?Id=' . h(u($pend_player['Id']))); ?>">Deny Approval</a></td>
	 	</tr>
	 	<?php } ?>
	 </table>
</div>

<div class="">
	<h1>ALL USERS</h1>
<table class="table" width="350" cellpadding="10" cellspacing="5">
	 	<tr>
	 		<th>ID</th>
	 		<th>FIRST NAME</th>
	 		<th>SECOND NAME</th>
	 		<th>USERNAME</th>
	 		<th>APPROVAL</th>
	 		<th>&nbsp;</th>
	 		<th>&nbsp;</th>
	 		<th>&nbsp;</th>
	 	</tr>

	 	<?php while($pend_user = mysqli_fetch_assoc($user_set)) { ?>
	 	<tr>
	 		<td><?php echo $pend_user['Id'];?></td>
	 		<td><?php echo $pend_user['first_name'];?></td>
	 		<td><?php echo $pend_user['second_name'];?></td>
	 		<td><?php echo $pend_user['username']?></td>
	 		<td><?php echo $pend_user['approval']?></td>
	 		<td><a class="action" href="<?php echo url_for('/members/admin/user_approve.php?Id=' . h(u($pend_user['Id']))); ?>">Approve</a></td>
	 		<td><a class="action" href="<?php echo url_for('/members/admin/user_denyapproval.php?Id=' . h(u($pend_user['Id']))); ?>">Deny Approval</a></td>
	 	</tr>
	 	<?php } ?>
	 </table>
</div>