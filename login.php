<?php
    session_start();
    if(!empty($_SESSION['username'])){
        header('location:bukutamu.php');
    }

$akun = [
    ["username" => "Haliza", "password" => "Haliza123"],
    ["username" => "Ocha","password" => "Ocha123"],
    ["username" => "Budhi","password" => "Budhi123"],
    ["username" => "Ticil","password" => "Ticil123"]
    ];


    $kondisi = 0;
    if(isset($_POST ['submit'])){
        $kondisi = 1;
        foreach ($akun as $akn) {
            if($akn['username']==$_POST['username']&& $akn ['password']==$_POST['password']){
            $_SESSION['username']=$akn['username'];
            header('location:bukutamu.php');

           
                                   
        }else{
            $kondisi = 2;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
</head>
<body>
 <div class = "login"> <center><h2>Login</h2></center>
    <div class="login-container">
        
        <form class = "" method = "post">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username"placeholder="Username">
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password"placeholder="Password">
            </div>
            <button type="submit" name= "submit" class="login-btn">Login</button>


            <?php if( $kondisi ==2) { ?>
                <center><p>Username/Password kamu salah!😭</p></center>
            <?php } ?>
        </form>
    </div>
</div>

</body>
</html>