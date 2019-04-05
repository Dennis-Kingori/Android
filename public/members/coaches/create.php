<?php 
require_once('../../../private/init.php');
if (is_post_req()) {


$coach = [];
$coach['fname'] = $_POST['first_name'] ?? '';
$coach['sname'] = $_POST['second_name'] ?? '';
$coach['uname'] = $_POST['username'] ?? '';
$coach['pass'] = $_POST['password'] ?? '';
 

$result = insert_coach($coach);
$new_id = mysqli_insert_id($db);
redirect_to(url_for('/members/coaches/coach_profile.php?Id=' . $new_id));


} else {
	redirect_to(url_for('/members/coaches/index.php'));
}

?>