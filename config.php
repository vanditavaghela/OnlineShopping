<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();
define ("DOMAIN","http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

define("DB_HOST", "localhost");
define("DB_USER", "");
define("DB_PWD", "");
// $_SESSION["userid"] = "user001";

$username = (!empty($_SESSION["username"])) ? $_SESSION["username"] : "Guest";
$userid   = (!empty($_SESSION["userid"])) ? $_SESSION["userid"] : NULL;

?>
