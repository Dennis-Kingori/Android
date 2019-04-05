<?php 
require_once('../../../private/init.php');
if (is_post_req()) {
$team = [];
$team['tname'] = $_POST['team_name'];
$team['aress'] = $_POST['address'];

$result = insert_team($team);
$team_id = mysqli_insert_id($db);
redirect_to(url_for('/members/coaches/coach_team.php?Id=' . $team_id));
}
else {
	redirect_to(url_for('/members/coaches/coach_team.php'));
}
?>