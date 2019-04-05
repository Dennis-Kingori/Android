<?php require_once('../../../private/init.php');?>
<?php $coachid = $_GET['Id'];
$coach = find_coach_byId($coachid);

if (is_post_req()) {
	$grant_coach = [];
	$grant_coach['id'] = $coachid;
	$grant_coach['appr'] = $_POST['approval'] ?? '';

	$result = approve_coach($grant_coach);
	redirect_to(url_for('/members/admin/admin_manage.php?id=' . $coachid));
} else {
	$grant_coach = find_coach_byId($coachid);
}
?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>


	<div class="container-fluid">
		<div class="col-xl-4">
			<h1>Deny approval</h1> 
		<div class="col">
			<form action="<?php echo url_for('/members/admin/coach_denyapproval.php?Id=' . $coachid);?>" method="post">
				<div class="form-group">
					<label for="Approval">Approval Status:</label>
					<input type="text" class="form-control" id="approval" value="<?php echo $coach['approval']; ?>" 
					aria-describedby="namehelp" placeholder="Enter Approval code" name="approval">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		</div>
	</div>
