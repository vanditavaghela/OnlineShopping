<?php

if(isset($_POST["action"])) {
	require_once 'config.php';
	require_once 'class/apis.php';
	$objshoppie = new MyShoppie();
	if($_POST["action"] == "login") {
		$params = array(
			"username"=>$_POST["uname"],
			"password"=>$_POST["pwd"]
		);
		$result = $objshoppie->login($params);
		echo json_encode($result);
	}
	exit;
}

// require_once 'config.php';
require_once 'header.php';
?>


<div class="container login-container">
	<div class="row">
		<div><h3>Log In</h3></div>
		<hr>

		<div class="col-md-12 col-lg-12 margin20">
			<p id="logintxt"></p>
			<input class="padding10" type="text" id="username" placeholder="Username" style="width:30%">
		</div>
		<div class="col-md-12 col-lg-12 margin20">
			<input class="padding10" type="password" id="password" placeholder="Password" style="width:30%">
		</div>
		<div class="col-md-12 col-lg-12 margin20">
			<input class="btn btn-dark" type="submit" value="   LogIn   " onclick="userLogin()"  style="width:15%">
		</div>
	</div>

</div>
