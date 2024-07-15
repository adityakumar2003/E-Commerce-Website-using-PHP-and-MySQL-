<?php
include("method.php");
include("ureg.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/log.css">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="main-form-container">
            <div id="form_section" class="form-container">
                <div class="login-form form-wraper ">
                    <div>
                        <div class="form-title">
                            <h2>Login</h2>
                        </div>
                        <form action="#" method="post">
                        <div class="input-group">
                            <div class="box">
                                <span>
                                    <input placeholder="Email" class="myInput" type="text" name="email" />
                                </span>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="box">
                                <span>
                                    <input placeholder="Password" class="myInput" type="text" name="password"/>
                                </span>
                            </div>
                        </div>
                        <div class="forget-password">
                            <a href="">FORGOT PASSWORD</a>
                        </div>
                        <div class="action-button">
                            <button type="submit" name="btn">Login</button>
                        </div>
</form>
                    </div>
                </div>
                <div class="signUp-form form-wraper">
                    <div>
                        <div class="form-title">
                            <h2>Sign Up</h2>
                        </div>
                        <form action="#" method="post">
                        <div class="input-group">
                            <div class="box">
                                <span>
                                    <input placeholder="Full Name" class="myInput" type="text" name="name" />
                                </span>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="box">
                                <span>
                                    <input placeholder="Email" class="myInput" type="text" name="email" />
                                </span>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="box">
                                <span>
                                    <input placeholder="Mobile No." class="myInput" type="number" name="number" />
                                </span>
                            </div>
                        </div>
                        <div style="" class="input-group">
                            <div class="box">
                                <span>
                                    <input placeholder="Password" class="myInput" type="password" name="password"/>
                                </span>
                            </div>
                        </div>
                        <div style="margin-bottom: 0px;" class="input-group">
                            <div class="box">
                                <span>
                                    <input placeholder="Address" class="myInput" type="text" name="address"/>
                                </span>
                            </div>
                        </div>
                        <div class="action-button">
                            <button type="submit" name="rbtn">Sign Up</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="multiple-btn" class="bg-btn-container">
                <div class="action-button">
                    <button>Login</button>
                </div>
                <div class="action-button">
                    <button>Sign Up</button>
                </div>
            </div>

        </div>
    </section>
    <!-- js link -->
    <script src="js/log.js"></script>
     <!-- js link -->
     <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- sweet alert -->
</body>

</html>

<?php
if(isset($_POST["btn"])){

   $res = userlogin($_POST);

   $find = mysqli_num_rows($res);

   $ses_stor = $_POST["email"];

    // var_dump($_POST);

    if($find == 1){

        $_SESSION["semail"] = $ses_stor;
        
        echo "<script>Swal.fire({
            position: 'top',
            icon: 'success',
            title: ' Welcome User !! Login Successful ',
            showConfirmButton: false,
            timer: 1500
          });</script>";
 ?>
           <meta http-equiv = "refresh" content = "1; url = index.php"/>
 <?php
           
          }
          else{
            echo "<script>Swal.fire({
                position: 'top',
                icon: 'success',
                title: ' Login Failed ',
                showConfirmButton: false,
                timer: 1500
              });</script>";
          }
      }
?>