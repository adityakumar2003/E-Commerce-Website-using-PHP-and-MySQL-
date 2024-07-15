<?php
include("method.php");

$cart_id = $_GET['cart_id'];

$qty = $_GET["qty"];

if($qty == 1){
  
 $val = deletebycartid($cart_id);

}
else
{
$res = deccart($cart_id);

}
header("location:shoping-cart.php");


?>