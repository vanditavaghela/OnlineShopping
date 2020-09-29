<?php
require_once 'header.php';
require_once 'class/apis.php';

$objshoppie = new MyShoppie();
$products 	= $objshoppie->getProducts();
$pcount		= count($products);

$randomString = md5(rand()); 
?>

<div id="listing" class="container" style="top:100px;">
	<div class="row">
		<div class="col-md-12 col-lg-12 wrapper-div-listing">
			<? for ($pcnt=0; $pcnt < $pcount; $pcnt++) { ?>
			<!-- <div class="col-md-2 col-lg-2" onclick="location.href='product.php?action=detail&pid=<?=$products[$pcnt]->id ?>&rs=<?=$randomString?>'" id=<?=$products[$pcnt]->id ?> > -->
			<div class="col-md-2 col-lg-2" onclick="gotopage('product','<?=$products[$pcnt]->id ?>&rs=<?=$randomString?>')" id=<?=$products[$pcnt]->id ?> >
				<div>
					<img src=<?=$products[$pcnt]->image ?>>
					<span class="product_txt"><?=$products[$pcnt]->title ?></span><br />
					<span><b>MRP &#x20B9;<?=($products[$pcnt]->price)*70 ?></b></span>
				</div>
				
			</div>
		<? } ?>
		</div>
	</div>
</div>

<?
require_once 'footer.php';
?>
