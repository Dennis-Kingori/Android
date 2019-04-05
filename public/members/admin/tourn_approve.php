<?php require_once('../../../private/init.php');?>
<?php $tournid = $_GET['Id'];
$tourn = find_tourn_byId($tournid);

if (is_post_req()) {
	$grant_tourn = [];
	$grant_tourn['id'] = $tournid;
	$grant_tourn['appr'] = $_POST['approval'] ?? '';

	$result = approve_tourn($grant_tourn);
	redirect_to(url_for('/members/admin/tourn_all.php'));
} else {
	$grant_tourn = find_tourn_byId($tournid);   
}
?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>


	<div class="container-fluid">
		<div class="col-xl-4">
			<h1>Grant Tournament Approval</h1> 
		<div class="col">
			<form action="<?php echo url_for('/members/admin/tourn_approve.php');?>" method="post">
				<div class="form-group">
					<label for="Approval">Approval Status:</label>
					<input type="text" class="form-control" id="approval" value="<?php echo $tourn['approval']; ?>" 
					aria-describedby="namehelp" placeholder="Enter Approval code" name="approval">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		</div>
	</div>
