<?php 
ob_start();


define("PRIVATE_PATH", dirname(__FILE__)); //return dir to current file
define("PURCHASE_PATH",dirname(PRIVATE_PATH)); //return dir to root
define("PUBLIC_PATH", PURCHASE_PATH.'/public');
define("SHARED_PATH",PRIVATE_PATH.'/shared');

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);


require_once('functions.php');
require_once('db.php');
require_once('query_func.php');
require_once('valid_func.php');
require_once('auth_func.php');

$db = db_conn();

?>