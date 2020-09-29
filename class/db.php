<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
/**
	* Description 	File maintains database connections
	* @author		Vandita
	* ...
	*/

class DB
{

	function getConn()	{
		$host  = DB_HOST;
		$user  = DB_USER;
		$pwd   = DB_PWD;
		$con   = mysqli_connect($host, $user, $pwd,'test');
		return $con;
	}
	
	function execQry($sqlstr)	{
		$con 	= $this->getConn();
		$result = mysqli_query($con,$sqlstr) or die(mysqli_error($con));
		$this->destroy($con);
		return $result;
	}

	function fetchAll($res)	{
		$con 	= $this->getConn();
		$result = $res -> fetch_assoc() or die(mysqli_error($con));
		$this->destroy($con);
		return $result;
	}

	function destroy($con) {
		mysqli_close($con);
	}
}



?>