<?php

	function find_coaches(){
	global $db;

	$sql = "SELECT * FROM coach ";
	$sql .= "ORDER BY second_name ASC";
	//echo $sql;
	$coach_set = mysqli_query($db, $sql);
	conf_resultset($coach_set);
	return $coach_set;
	}

	function find_teams(){
	global $db;

	$sql = "SELECT * FROM team ";
	$sql .= "ORDER BY Team_name ASC";
	//echo $sql;
	$team_set = mysqli_query($db, $sql);
	conf_resultset($team_set);
	return $team_set;
	}

	function find_players(){
	global $db;

	$sql = "SELECT * FROM players ";
	$sql .= "ORDER BY first_name ASC";
	//echo $sql;
	$player_set = mysqli_query($db, $sql);
	conf_resultset($player_set);
	return $player_set;
	}


   function find_users(){
	global $db;

	$sql = "SELECT * FROM users ";
	$sql .= "ORDER BY first_name ASC";
	//echo $sql;
	$user_set = mysqli_query($db, $sql);
	conf_resultset($user_set);
	return $user_set;
	}


	function find_coach_byId($Id){
		global $db;

		$sql = "SELECT * FROM coach ";
		$sql .= "WHERE Id='" . $Id . "'";
		$result = mysqli_query($db, $sql);
		conf_resultset($result);
		$coach = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		return $coach; // return assoc array
	}


	function find_coach_by_username($username){
		global $db;

		$sql = "SELECT * FROM coach ";
		$sql .= "WHERE username='" . $username . "' ";
		$sql .= "LIMIT 1";
		$result = mysqli_query($db, $sql);
		conf_resultset($result);
		$coach = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		return $coach; // return assoc array
	}

	function insert_coach($coach){
		global $db;

		//$options = array(
		//	'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
		//);
		$hashed_password = password_hash($coach['password'], PASSWORD_BCRYPT);

		$sql = "INSERT INTO coach ";
		$sql .= "(first_name, second_name, username, password) ";
		$sql .= "VALUES (";
		$sql .= "'" . $coach['fname'] . "',";
		$sql .= "'" . $coach['sname'] . "',";
		$sql .= "'" . $coach['uname'] . "',";
		$sql .= "'" . $hashed_password . "'";
		$sql .= ")"; 
		$result = mysqli_query($db, $sql);
		echo $sql;
		if ($result) {
			return true;
		} else {
			
			echo mysqli_error($db);
			db_disconn($db);
			exit;

		}
			}


	function find_players_byId($Id){
		global $db;

		$sql = "SELECT * FROM players ";
		$sql .= "WHERE Id='" . $Id . "'";
		$result = mysqli_query($db, $sql);
		conf_resultset($result);
		$players = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		return $players; // return assoc array
	}

	function insert_players($players){
		global $db;

		//$hashed_password = password_hash($coach['password'], PASSWORD_BCRYPT);

		$sql = "INSERT INTO players ";
		$sql .= "(first_name, second_name, username, password) ";
		$sql .= "VALUES (";
		$sql .= "'" . $players['fname'] . "',";
		$sql .= "'" . $players['sname'] . "',";
		$sql .= "'" . $players['uname'] . "',";
		$sql .= "'" . $players['pass'] . "'";
		$sql .= ")"; 
		$result = mysqli_query($db, $sql);

		if ($result) {

			$json = array();

			$success = 1;
			$msg = 'player login success';

			array_push($json, array("sucess"=>$success,"message"=>$msg));
			
			return $json;
		} else {

			$success = 0;
			$msg = 'player login fail';

			array_push($json, array("sucess"=>$success,"message"=>$msg));
			echo mysqli_error($db);
			db_disconn($db);
			return $json;
			exit;

		}
			}

	function find_users_byId($Id){
		global $db;

		$sql = "SELECT * FROM users ";
		$sql .= "WHERE Id='" . $Id . "'";
		$result = mysqli_query($db, $sql);
		conf_resultset($result);
		$users = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		return $users; // return assoc array
	}

	function insert_users($users){
		global $db;

		$hashed_password = password_hash($coach['password'], PASSWORD_BCRYPT);

		$sql = "INSERT INTO users ";
		$sql .= "(first_name, second_name, username, password) ";
		$sql .= "VALUES (";
		$sql .= "'" . $users['fname'] . "',";
		$sql .= "'" . $users['sname'] . "',";
		$sql .= "'" . $users['uname'] . "',";
		$sql .= "'" . $hashed_password . "'";
		$sql .= ")"; 
		$result = mysqli_query($db, $sql);

		if ($result) {
			return true;
		} else {
			
			echo mysqli_error($db);
			db_disconn($db);
			exit;

		}
			}

function insert_team($team){
	global $db;

	$sql = "INSERT INTO team ";
	$sql .= "(Team_name, Address, Coach_id) ";
	$sql .= "VALUES (";
	$sql .= "'" . $team['tname'] . "',";
	$sql .= "'" . $team['aress'] . "',";
	$sql .= "'" . $team['coachid'] . "'";
	$sql .= ")";
	$result = mysqli_query($db, $sql);

	if ($result) {
		return true;
	} else {
		echo mysqli_error($db);
		db_disconn($db);
		exit;
	}
}

function find_team_byId($Id){
	global $db;

	$sql = "SELECT * FROM team ";
	$sql .= "WHERE Id='" .$Id . "'";
	$result = mysqli_query($db, $sql);
	conf_resultset($result);
	$team = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $team;
}

function insert_pdetails($pdetails){
	global $db;

	$sql = "INSERT INTO player_detail ";
	$sql .= "(username, phone_number, email, address, team_id, position) ";
	$sql .= "VALUES (";
	$sql .= "'" . $pdetails['uname'] . "',";
	$sql .= "'" . $pdetails['pnumber'] . "',";
	$sql .= "'" . $pdetails['mail'] . "',";
	$sql .= "'" . $pdetails['aress'] . "',";
	$sql .= "'" . $pdetails['tname'] . "',";
	$sql .= "'" . $pdetails['pos'] . "'";
	$sql .= ")";
	$result = mysqli_query($db, $sql);

	if ($result) {
		return true;
	} else {
		echo mysqli_error($db);
		db_disconn($db);
		exit;
	}
}

function approve_coach($grant_coach){
	global $db;

	$sql = "UPDATE coach SET ";
	$sql .= "approval='" . $grant_coach['appr'] . "'";
	$sql .= "WHERE Id='" . $grant_coach['id'] . "' ";
	$sql .= "LIMIT 1";

	$result = mysqli_query($db, $sql);

	if ($result) {
		return true;
	 } else {
	 	echo mysqli_error($db);
	 	db_disconn($db);
	 	exit;
	 }

}

function approve_player($grant_player){
	global $db;

	$sql = "UPDATE players SET ";
	$sql .= "approval='" . $grant_player['appr'] . "'";
	$sql .= "WHERE Id='" . $grant_player['id'] . "' ";
	$sql .= "LIMIT 1";

	$result = mysqli_query($db, $sql);

	if ($result) {
		return true;
	 } else {
	 	echo mysqli_error($db);
	 	db_disconn($db);
	 	exit;
	 }

}

function approve_user($grant_user){
	global $db;

	$sql = "UPDATE users SET ";
	$sql .= "approval='" . $grant_user['appr'] . "'";
	$sql .= "WHERE Id='" . $grant_user['id'] . "' ";
	$sql .= "LIMIT 1";

	$result = mysqli_query($db, $sql);

	if ($result) {
		return true;
	 } else {
	 	echo mysqli_error($db);
	 	db_disconn($db);
	 	exit;
	 }

}


function find_teammates($team_name){
		global $db;

		$sql = "SELECT * FROM player_detail ";
		$sql .= "WHERE team_id='" . $team_name . "'";
		$result = mysqli_query($db, $sql);
		conf_resultset($result);
		$team_mates = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		return $team_mates; // return assoc array
	}



	function insert_tournament($tournament){
		global $db;


		$sql = "INSERT INTO tournaments ";
		$sql .= "(tourn_name, venue_id, description) ";
		$sql .= "VALUES (";
		$sql .= "'" . $tournament['tname'] . "',";
		$sql .= "'" . $tournament['ven'] . "',";
		$sql .= "'" . $tournament['desc'] . "'";
		$sql .= ")"; 
		$result = mysqli_query($db, $sql);

		if ($result) {
			return true;
		} else {
			
			echo mysqli_error($db);
			db_disconn($db);
			exit;

		}
			}


	function find_tournaments(){
	global $db;

	$sql = "SELECT * FROM tournaments ";
	$sql .= "ORDER BY Id ASC";
	//echo $sql;
	$tourn_set = mysqli_query($db, $sql);
	conf_resultset($tourn_set);
	return $tourn_set;
	}

	function approve_tourn($grant_tourn){
	global $db;

	$sql = "UPDATE tournaments SET ";
	$sql .= "approval='" . $grant_tourn['appr'] . "'";
	$sql .= "WHERE Id='" . $grant_tourn['id'] . "' ";
	$sql .= "LIMIT 1";

	$result = mysqli_query($db, $sql);

	if ($result) {
		return true;
	 } else {
	 	echo mysqli_error($db);
	 	db_disconn($db);
	 	exit;
	 }

}

function find_tourn_byId($tournid){
		global $db;

		$sql = "SELECT * FROM tournaments ";
		$sql .= "WHERE Id='" . $tournid . "'";
		$result = mysqli_query($db, $sql);
		conf_resultset($result);
		$tourn = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		return $tourn; // return assoc array
	}



?>