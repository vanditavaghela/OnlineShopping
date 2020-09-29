<?php
require_once 'header.php';
require_once 'class/apis.php';


$objshoppie  = new MyShoppie();
$products 	 = $objshoppie->getProducts();
// $incartCount = $objshoppie->getInCartProducts();
// $_SESSION["incartCount"] = $incartCount;

$html_1 = $html_2 = $html_3 = '';

for ($i=15; $i < 20; $i++) { 
// $html_1 .='<div class="col-md-2 col-lg-2" onclick="location.href=\'product.php?action=detail&pid='.$products[$i]->id.'\'">
$html_1 .='<div class="col-md-2 col-lg-2" onclick="gotopage(\'product\','.$products[$i]->id.')">
			<span><img src="'.$products[$i]->image .'" title="'.$products[$i]->title .'"></span>
			<span>Upto '.rand(10,50).'% off</span>
		</div>';
}

for ($i=10; $i < 15; $i++) { 
$html_2 .='<div class="col-md-2 col-lg-2" onclick="gotopage(\'product\','.$products[$i]->id.')">
			<span><img src="'.$products[$i]->image .'" title="'.$products[$i]->title .'"></span>
			<span>Upto '.rand(10,50).'% off</span>
		</div>';
}

for ($i=5; $i < 10; $i++) { 
$html_3 .='<div class="col-md-2 col-lg-2" onclick="gotopage(\'product\','.$products[$i]->id.')">
			<span><img src="'.$products[$i]->image .'" title="'.$products[$i]->title .'"></span>
			<span>Upto '.rand(10,50).'% off</span>
		</div>';
}
?>

<div class="container" id="homepage" style="top:120px;">

	<div class="row margin20">
		<div class="col-md-12 col-lg-12 wrapper-div">
			<img src="https://fakestoreapi.com/img/81Zt42ioCgL._AC_SX679_.jpg" style="width: 100%; height: 250px">
		</div>
	</div>
	<div class="row margin20">
		<div class="col-md-12 col-lg-12 wrapper-div">
			<img src="https://fakestoreapi.com/img/81QpkIctqPL._AC_SX679_.jpg" style="width: 100%; height: 250px">
		</div>
	</div>
	<div class="row margin20">
		<div class="col-md-12 col-lg-12 wrapper-div">
			<?= $html_1;?>
		</div>
		
	</div>

	<div class="row margin20">
		<div class="col-md-12 col-lg-12 wrapper-div">
			<?=$html_2;?>
		</div>
		
	</div>

	<div class="row margin20">
		<div class="col-md-12 col-lg-12 wrapper-div">
			<?=$html_3;?>
		</div>
		
	</div>

</div>
<?
// require_once 'home.php';
require_once 'footer.php';
?>
