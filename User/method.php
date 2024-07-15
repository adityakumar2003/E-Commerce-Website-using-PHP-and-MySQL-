<?php
// detabase connection
function dbconnect(){
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $dbname = "ecom";

    $conn = mysqli_connect($hostname,$user,$password,$dbname);

    return $conn;
}
// detabase connection
// user registration
function uregistration($deta){
    $conn = dbconnect();

    $name = $deta["name"];
    $email = $deta["email"];
    $password = $deta["password"];
    $number = $deta["number"];
    $address = $deta["address"];

    // $passenc = password_hash($password, PASSWORD_DEFAULT);
    
    if($conn){
        $sql = "insert into u_deta (Name,Email,Password,Number,Address)values('$name','$email','$password','$number','$address')";

        $res = mysqli_query($conn,$sql);

        return $res;
    }
    else{
        echo "detabase not connected";
    }

}
// user registration
// user login
function userlogin($deta){
    $conn = dbconnect();

    $email = $deta["email"];
    $password = $deta["password"];

    if($conn){
        $sql = "select * from u_deta where Email = '$email' and Password = '$password' ";

        $res = mysqli_query($conn,$sql);

        return $res;
    }
    else{
        echo "detabase not connected";
    }
}
// user login
// show admin
function showadmin($deta){
    $conn = dbconnect();

    if($conn){
        $sql = "select * from u_deta where email = '$deta'";

        $res = mysqli_query($conn,$sql);

        return $res;
    }
    else{
        echo "Detabase not connected";
    }


}
function showproduct(){
    $conn = dbconnect();

    if($conn){
        $sql = "select * from add_product";

        $res = mysqli_query($conn,$sql);

        return $res;

    }
    else{
        echo "detabase not connected";
    }
}
function addtocart($pid,$email){
    $conn = dbconnect();

    $flag = checkcart($pid,$email);

    if($flag == 1){
        return 2;
    }
    else{
        $sql = "insert into cart (pid,email,quantity) values('$pid','$email','1')";

        $res = mysqli_query($conn,$sql);
    
        return $res;
    }
    
}
//check the product already in the cart
function checkcart($pid,$email){
    $conn = dbconnect();

    $sql = "select * from cart where pid = '$pid' and email = '$email'";

    $res = mysqli_query($conn,$sql);

    $rec = mysqli_num_rows($res);

    if($rec > 0){
        return 1;
    }
    else{
        return 0;
    }
  
}
function countcart($email){
    $conn = dbconnect();

    $sql = "select * from cart where email = '$email'";

    $res = mysqli_query($conn,$sql);

    $record = mysqli_num_rows($res);

    return $record;
}
//get deta by product id 
function getdetabyid($pid){
    $conn = dbconnect();

    $sql = "select * from add_product where id = '$pid'";

    $res = mysqli_query($conn,$sql);

    return $res;
}
// cart display 
function getallcart($email){
    $conn = dbconnect();

    $sql = "select * from cart where email = '$email'";

    $res  = mysqli_query($conn,$sql);

    return $res;
}
// cart inc
function inccart($cart_id)
{
    $conn = dbconnect();

    $sql = "update cart set quantity=quantity+1 where cart_id = '$cart_id'";
    
    $res  = mysqli_query($conn,$sql);

    return $res;
}
//Dec cart 
function deccart($cart_id){
    $conn = dbconnect();

    $sql = "update cart set quantity=quantity-1 where cart_id = '$cart_id'";
    
    $res  = mysqli_query($conn,$sql);

    return $res; 
}
function deletebycartid($cart_id){
    $conn = dbconnect();
    
    $sql = "delete from cart where cart_id = '$cart_id'";
    
    $res  = mysqli_query($conn,$sql);

    return $res; 


}

//product order
function productorder($deta){
    $conn = dbconnect();

    $email = $deta["email"];
    $nop = $deta["nopp"];
    $mop = $deta["mop"];
    $sipping_address = $deta["saddress"];
    $tamt = $deta["totalamount"];


    $sql  = "insert into product_order(email,noofproduct,totalamount,shipping_address,modeofpayment,status) values('$email','$nop','$tamt','$sipping_address','$mop','Pending')";

    $res  = mysqli_query($conn,$sql);

    $autogenid = mysqli_insert_id($conn);

    return $autogenid; 

}
//add product details
function addorderdetails($email,$orderid){
    $conn = dbconnect();

    $fec = getallcart($email);

    $record = mysqli_num_rows($fec);

    $count = 0;

    while($deta = mysqli_fetch_assoc($fec)){
        $count++;
        $cid=$deta['cart_id'];

        $pid = $deta["pid"];
        $qty = $deta["quantity"];
        $sql = "insert into product_order_details(orderid,productid,quantity) values('$orderid','$pid','$qty')";

        $res = mysqli_query($conn,$sql);  
        
        $del="DELETE FROM cart WHERE cart_id='$cid'";
        mysqli_query($conn,$del); 
        
    }

    return 1;

    // if($record == $count)
    // {
    //     return 1;
    // }
    // else
    // {
    //     return 0;
    // }
}
?>
