<?php
require_once("<?php echo SITEROOT; ?>includes/config.php");
require_once("<?php echo SITEROOT; ?>includes/db_connect.php"); 
require_once("<?php echo SITEROOT; ?>includes/class.design_cart.php");

$design_cart = new DesignCart;


$design_id = $_GET['design_id'];


//echo $design_id; 

//echo "<br />";

$design_cart->removeDesign($design_id);

//echo $design_cart->getItemCount();

/*
$shipping = new Shipping;


if($shipping->getShipType() == "carrier"){
	$weight = $cart->getCartTotalWeight();
	$tmp = $shipping->resetCarrierRates($weight);
}
*/

//$design_cart->saveCart($dbCustom);

?>