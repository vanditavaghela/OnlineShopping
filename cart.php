<?php
require_once 'header.php';
require_once 'class/apis.php';

$objshoppie   = new MyShoppie();
$products 	  = $objshoppie->getProducts();
$userProducts = $objshoppie->getUserProducts();
$productCount = count($userProducts);
$total_price  = 0;
?>
<div  class="container ">
<?
if(!empty($productCount)) { ?>
<div id="cartpage" class="  " style="padding-top: 130px">
	<div class="row">
		<div class="col-md-12 col-lg-12 wrapper-div-cart">
			<div class="col-md-7 col-lg-7 lfloat" >
				<div>My Cart (<?= $_SESSION["incartCount"]; ?>)</div>
				<hr>
				<? for ($i=0; $i < count($userProducts); $i++) { 
					$item  = $userProducts[$i]["productid"];
					$amount = ($products[$item]->price)*70;
					$total_price += $amount; ?>
					<div class="row margin20" >
						<div class="col-md-12 col-lg-12">
							<div class="col-md-4 col-lg-4 lfloat">
								<img src="<?= $products[$item]->image;?>" >
							</div>
							<div class="col-md-8 col-lg-8 rfloat">
								<span><h5><?=$products[$item]->title ?></h5></span><br/>
								<span><h6> &#x20B9;<?= $amount; ?></h6></span>
							</div>
						</div>
						
					</div>
					<hr>
					<?
				} ?>
				
			</div>

			<div class="col-md-4 col-lg-4 rfloat" >
				<div><b>Price Details</b></div>
				<hr>
				<div class="row padding15" >
					<div class="col-md-12 col-lg-12">
						<div class="col-md-8 col-lg-8 lfloat">
							Price (<?= $productCount; ?> items)
						</div>
						<div class="col-md-4 col-lg-4 rfloat">
							&#x20B9;<?= $total_price; ?>
						</div>
					</div>
				</div>
				<div class="row padding15" >
					<div class="col-md-12 col-lg-12">
						<div class="col-md-8 col-lg-8 lfloat">
							Delivery Charges
						</div>
						<div class="col-md-4 col-lg-4 rfloat">
							&#x20B9;150
						</div>
					</div>
				</div>
				<hr>
				<div class="row padding15" >
					<div class="col-md-12 col-lg-12">
						<div class="col-md-8 col-lg-8 lfloat">
							<h6>Total Amount</h6>
						</div>
						<div class="col-md-4 col-lg-4 rfloat">
							<h6>&#x20B9;<?= 150+$total_price; ?></h6>
						</div>
					</div>
				</div>	
			</div>


			<div class="col-md-4 col-lg-4 rfloat padding15" >
				<input type="submit" class="btn btn-info" id="place_order" value="Place Order" onclick="placeOrder()">
				<span> <b>( Cash On Delivery )</b></span>
			</div>

		</div>
	</div>
	<div class="row">
	</div>
</div>
<?
} else { ?>
<div id="cartpage" class="  ">
	<div class="row">
		<div class="col-md-12 col-lg-12 wrapper-div-cart">
			<div class="col-md-7 col-lg-7 lfloat" >
			<div>Your Cart is Empty !!!</div>
				<hr>
			</div>
		</div>
	</div>
</div>
<?
} ?>

<div id="afterSuccess" class=" " style="top:130px;">
	<div class="row">
		<div class="col-md-12 col-lg-12 wrapper-div-cart">
			<div class="col-md-7 col-lg-7 lfloat" >
			<div id="cartText"></div>
				<hr>
			</div>
		</div>
	</div>
</div>

</div>
<?
require_once 'footer.php';
?>
