<?php require_once('../../../private/init.php');?>
<?php $userid = $_GET['Id'];
$user = find_users_byId($userid);

if (is_post_req()) {
	$grant_user = [];
	$grant_user['id'] = $userid;
	$grant_user['appr'] = $_POST['approval'] ?? '';

	$result = approve_user($grant_user);
	redirect_to(url_for('/members/admin/admin_manage.php?id=' . $userid));
} else {
	$grant_user = find_users_byId($userid);
}
?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>


	<div class="container-fluid">
		<div class="col-xl-4">
			<h1>Deny approval</h1> 
		<div class="col">
			<form action="<?php echo url_for('/members/admin/user_approve.php?Id=' . $userid);?>" method="post">
				<div class="form-group">
					<label for="Approval">Approval Status:</label>
					<input type="text" class="form-control" id="approval" value="<?php echo $user['approval']; ?>" 
					aria-describedby="namehelp" placeholder="Enter Approval code" name="approval">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		</div>
	</div>
