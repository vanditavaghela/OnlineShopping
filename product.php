<?php

if(isset($_POST["action"])) {
	require_once 'config.php';
	require_once 'class/apis.php';
	$objshoppie = new MyShoppie();
	if($_POST["action"] == "addtocart") {
		$result = $objshoppie->addtocart($_POST["pid"]);
		$incartCount= $result["data"];
		echo $incartCount;
	} elseif($_POST["action"] == "placeorder") {
		$result = $objshoppie->placeorder();
		echo $result;
	}
	exit;
}

require_once 'header.php';
require_once 'class/apis.php';

$objshoppie = new MyShoppie();
// $incartCount= $objshoppie->getInCartProducts();
$products 	= $objshoppie->getProducts();
$id 		= $_GET["pid"];
$prd 		= $products[$id-1];
?>
<div id="product" class="container ">
	<div class="row">
		<div class="col-md-12 col-lg-12 wrapper-div-product">
			<div class="col-md-5 col-lg-5 lfloat" style="height: 100%">
				<img src=<?=$prd->image ?> >
			</div>
			<div class="col-md-6 col-lg-6 rfloat" >
				<span><h4><?=$prd->title ?></h4></span><br/>
				<span><h5> &#x20B9;<?=($prd->price)*70 ?></h5></span><br/>
				<span>
					<label><b>Product Description</b></label><br />
					<?=$prd->description ?>
				</span>
				<br/><br/><br/>
				<span><b>Highlights</b>
					<ul>
						<li class="no-float">lorem ipsum lorem ipsumlorem ipsum</li>
						<li class="no-float">lorem ipsum lorem ipsumlorem ipsum</li>
						<li class="no-float">lorem ipsum lorem ipsumlorem ipsum</li>
						<li class="no-float">lorem ipsum lorem ipsumlorem ipsum</li>
					</ul>
				</span>
				<br/><br/><br/>
				
				<? if (!empty($_SESSION["username"])) { ?>
				<input class="btn btn-dark" type="submit" value="   Add To Cart   " onclick="addtocart(<?= $prd->id?>)">
				<? } else { // redirect to login page if not logged in ?>
				<input class="btn btn-dark" type="submit" value="   Add To Cart   " onclick="gotopage('login')">
				<? } ?>
			</div>

		</div>
	</div>
	<div class="row">
	</div>
</div>

<?
require_once 'footer.php';
?>
