<?php require_once('../../../private/init.php');?>
<?php $playerid = $_GET['Id'];
$player = find_players_byId($playerid);

if (is_post_req()) {
	$grant_player = [];
	$grant_player['id'] = $playerid;
	$grant_player['appr'] = $_POST['approval'] ?? '';

	$result = approve_player($grant_player);
	redirect_to(url_for('/members/admin/admin_manage.php?id=' . $playerid));
} else {
	$grant_player = find_players_byId($playerid);
}
?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>


	<div class="container-fluid">
		<div class="col-xl-4">
			<h1>Grant approval</h1> 
		<div class="col">
			<form action="<?php echo url_for('/members/admin/player_approve.php?Id=' . $playerid);?>" method="post">
				<div class="form-group">
					<label for="Approval">Approval Status:</label>
					<input type="text" class="form-control" id="approval" value="<?php echo $player['approval']; ?>" 
					aria-describedby="namehelp" placeholder="Enter Approval code" name="approval">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		</div>
	</div>
