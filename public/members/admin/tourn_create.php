<?php 
require_once('../../../private/init.php');
if (is_post_req()) {


$tournament = [];
$tournament['tname'] = $_POST['team_name'] ?? '';
$tournament['ven'] = $_POST['venue'] ?? '';
$tournament['desc'] = $_POST['description'] ?? '';

 
$result = insert_tournament($tournament);
$new_id = mysqli_insert_id($db);
redirect_to(url_for('/members/admin/admin_home.php'));


} else {
	redirect_to(url_for('/members/admin/admin_home.php'));
}

?>