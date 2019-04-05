<?php 
require_once('../../../private/init.php');
if (is_post_req()) {


$users = [];
$users['fname'] = $_POST['first_name'] ?? '';
$users['sname'] = $_POST['second_name'] ?? '';
$users['uname'] = $_POST['username'] ?? '';
$users['pass'] = $_POST['password'] ?? '';
 
$result = insert_users($users);
$new_id = mysqli_insert_id($db);
redirect_to(url_for('/members/users/show.php?Id=' . $new_id));


} else {
	redirect_to(url_for('/members/users/index.php'));
}

?>