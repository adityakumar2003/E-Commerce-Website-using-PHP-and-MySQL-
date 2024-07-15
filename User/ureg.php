<?php

if(isset($_POST["rbtn"])){
    $ros = uregistration($_POST);

    if($ros == 1){
        echo "registration done";
    }
    else{
        echo "registration not done";
    }
}

?>