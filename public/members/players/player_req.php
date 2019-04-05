<?php
require_once('../../../private/init.php');
$player_id = $_GET['id'];

$players = find_players_byId($player_id);
if (is_post_req()) {
	
	$pdetails = [];
	$pdetails['uname'] = $_POST['username'];
	$pdetails['pnumber'] = $_POST['phone_number'];
	$pdetails['mail'] = $_POST['email'];
	$pdetails['aress'] = $_POST['address'];
	$pdetails['tname'] = $_POST['team_name'];
	$pdetails['pos'] = $_POST['position'];

$result = insert_pdetails($pdetails);
$pdetails_id = mysqli_insert_id($db);
redirect_to(url_for('/members/players/player_team.php?Id=' . $pdetails_id . "&playerid=" . $player_id));
}
else {
	redirect_to(url_for('/members/players/player_team.php'));
}
?>