<?php require_once('../../../private/init.php');

$errors = [];
$username ='';
$pass = '';

$unhas = 'aaaa';
$hash = '$2y$10$tTQD0BaOhm/aE121fdsMwO6bQ.qzv99uoStpMCg/TkQpqYF4CK7ce';

if (is_post_req()) {
	$username = $_POST['username'] ?? '';
	$pass = $_POST['password'] ?? '';

	if (is_blank($username)) {
		$errors[] = 'username cannot be blank';
	}

	if (is_blank($pass)) {
		$errors[] = 'password cannot be blank';
	}

	if (empty($errors)) {
		
		$coach = find_coach_by_username($username);
		if ($coach) {

			$login_fail_msg = "login unsuccesful1";

			if (password_verify($pass, $coach['password'])) {
				
				//log_in_coach($coach);
				redirect_to(url_for('/members/coaches/coach_profile.php'));
			}
			else{
				$login_fail_msg = "login unsuccesful2";
				$errors[] = $login_fail_msg;
			}

		} else {
			$login_fail_msg = "login unsuccesful3";
			$errors[] = $login_fail_msg;
		}
			}
		}


?>

<?php include(SHARED_PATH . '/coaches_header.php'); ?>


<div class="container">
	<div class="row">
		<div class="col">
			<?php echo display_errors($errors);?>
			<form action="<?php echo url_for('/members/coaches/login_coach.php?');?>" method="post">
				<div class="form-group">
					<label for="Username">Username:</label>
					<input type="text" class="form-control" id="Username" name="username" placeholder="Enter Username">
				</div>
				<div class="form-group">
					<label for="Password">Password :</label>
					<input type="text" class="form-control" id="Password" name="password"  placeholder="Enter Password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>