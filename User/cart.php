<?php
include("method.php");
session_start();

$pid = $_GET["pid"];

$email = $_SESSION["semail"];
$refer = $_SERVER['HTTP_REFERER'];
$res = addtocart($pid,$email);

header('location:'.$refer.'?massage='.$res);
?>