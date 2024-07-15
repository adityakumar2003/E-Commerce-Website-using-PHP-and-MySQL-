<?php
//******-------DETABASE CONNECTION-------******

function dbconnect(){
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $dbname = "ecom";

    $conn = mysqli_connect($hostname,$user,$password,$dbname);

    return $conn;
}
//******-------DETABASE CONNECTION-------******
//******-------ADMIN LOGIN METHOD-------*******
function adminlogin($deta){
    $conn = dbconnect();

    $email = $deta["Email"];
    $password = $deta["password"];

    if($conn){
        $sql = "select * from admin_login where Email = '$email' and Password = '$password'";

        $ros = mysqli_query($conn,$sql);

        return $ros;
    }
    else{
        echo "Detabase not connected";
    }
}
function showadmin($data)
{
    $conn = dbconnect();
    if($conn){
        $sql = "select * from admin_login where Email = '$data'";

        $ros = mysqli_query($conn,$sql);

        return $ros;
    }
}
//******-------ADMIN LOGIN METHOD-------*******
//******-------Method for add product in user page-------******
function addproduct(){
    $conn = dbconnect();

    $name = $_POST["name"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $category = $_POST["category"];

    $place = "box/";

    $tar_file = $place.basename($_FILES["image"]["name"]);

    if(move_uploaded_file($_FILES["image"]["tmp_name"],$tar_file)){

        $sql = "insert into add_product(category,name,price,stock,image) values('$category','$name','$price','$stock','$tar_file')";

        $res = mysqli_query($conn,$sql);

        return $res;
    }
    else{
        echo "Detabase not conneted";
    }
}
//******-------Method for add product in user page-------******
//******-------Method for show listed product on page-------******
function showproduct(){
    $conn = dbconnect();

    if($conn){
        $sql = "select * from add_product";

        $ros = mysqli_query($conn,$sql);

       return $ros; 
    }
    else{
        echo "Detabase not conneted";
    }
}
function showproductbycategory($data){
    $conn = dbconnect();

    if($conn){
        $sql = "select * from add_product where category='$data'";

        $ros = mysqli_query($conn,$sql);

       return $ros; 
    }
    else{
        echo "Detabase not conneted";
    }
}
// ***************--------show all user---------****************
function showalluser(){
    $conn = dbconnect();

    if($conn){
        $sql = "select * from u_deta";

        $res = mysqli_query($conn,$sql);

        return $res;
    }
    else{
        echo "detabase not connected";
    }
}
// ***************--------show all user---------****************
// ***************--------dashboard read---------****************
function readuser(){
    $conn = dbconnect();

    $sql = "select * from u_deta";

    $ros = mysqli_query($conn,$sql);

    return $ros;
}
// ***************--------dashboard read---------****************
// ***************--------dashboard read---------****************
function readallproduct(){
    $conn = dbconnect();

    $sql = "select * from add_product";

    $ros = mysqli_query($conn,$sql);

    return $ros; 
}
// ***************--------dashboard read---------****************
?>