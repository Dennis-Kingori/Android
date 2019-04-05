<?php require_once('../../../private/init.php');?>
<?php $tourn_set = find_tournaments();?>

<div class="">
	<h1>ALL TOURNAMENTS</h1>
<table class="table" width="350" cellpadding="10" cellspacing="5">
	 	<tr>
	 		<th>ID</th>
	 		<th>TOURNAMENT NAME</th>
	 		<th>VENUE</th>
	 		<th>APPROVAL</th>
	 		<th>&nbsp;</th>
	 		<th>&nbsp;</th>
	 		<th>&nbsp;</th>
	 	</tr>

	 	<?php while($pend_tourn = mysqli_fetch_assoc($tourn_set)) { ?>
	 	<tr>
	 		<td><?php echo $pend_tourn['Id'];?></td>
	 		<td><?php echo $pend_tourn['tourn_name'];?></td>
	 		<td><?php echo $pend_tourn['venue_id'];?></td>
	 		<td><?php echo $pend_tourn['approval']?></td>
	 		<td><a class="action" href="<?php echo url_for('/members/admin/tourn_approve.php?Id=' . h(u($pend_tourn['Id']))); ?>">Approve</a></td>
	 		<td><a class="action" href="<?php echo url_for('/members/admin/tourn_denyapproval.php?Id=' . h(u($pend_tourn['Id']))); ?>">Deny Approval</a></td>
	 	</tr>
	 	<?php } ?>
	 </table>
</div>


