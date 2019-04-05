<?php 
require_once('../../../private/init.php');
$coach_id = $_GET['id'];

$coach = find_coach_byId($coach_id);
if (is_post_req()) {
$team = [];
$team['tname'] = $_POST['team_name'];
$team['aress'] = $_POST['address'];
$team['coachid'] = $_POST['CoachId'];


$teamname = $team['tname'];
$result = insert_team($team);
$team_id = mysqli_insert_id($db);
redirect_to(url_for('/members/coaches/coach_team.php?Id=' . $team_id . "&coachid=" . $coach_id . "&tname=" . $teamname));
}
else {
	redirect_to(url_for('/members/coaches/coach_team.php'));
}
?>