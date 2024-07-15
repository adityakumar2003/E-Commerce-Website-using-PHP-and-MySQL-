<?php
include("method.php");

$cart_id = $_GET['cart_id'];

$res = inccart($cart_id);

header("location:shoping-cart.php");

?>