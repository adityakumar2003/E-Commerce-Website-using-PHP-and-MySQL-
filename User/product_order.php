<?php   
include("method.php");
session_start();
$orderid = productorder($_POST);

if($orderid > 0)
{
     $adddel = addorderdetails($_SESSION["semail"], $orderid);

     if($adddel)
     {
      echo "product added";
     }
     else
     {
      echo "product not added";
     }

}
else{
   echo "not insert in product_order";
}

?>