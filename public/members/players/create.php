<?php 
require_once('../../../private/init.php');
if (is_post_req()) {


$players = [];
$players['fname'] = $_POST['first_name'] ?? '';
$players['sname'] = $_POST['second_name'] ?? '';
$players['uname'] = $_POST['username'] ?? '';
$players['pass'] = $_POST['password'] ?? '';
 
$result = insert_players($players);
$new_id = mysqli_insert_id($db);

$jso= json_encode($result);

redirect_to(url_for('/members/players/player_profile.php?Id=' . $new_id . "&json=" . $jso));


} else {
	redirect_to(url_for('/members/players/index.php'));
}

?>