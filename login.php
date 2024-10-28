
<?php
    session_start();
    if(!empty($_SESSION['username'])){
        header('location:read.php');
    }

$akun = [
    ["username" => "Haliza", "password" => "Haliza123"],
    ["username" => "Sultan","password" => "Sultan123"],
    ["username" => "Budhi","password" => "Budhi123"],
    ["username" => "Ticil","password" => "Ticil123"]
    ];

    
    $kondisi = 0;

    if(isset($_POST ['submit'])){
        
        $kondisi = 1;
        foreach ($akun as $akn) {
            if($akn['username']==$_POST['username']&& $akn ['password']==$_POST['password']){
            $_SESSION['username']=$akn['username'];
            header('location:read.php');
               
        }else{
            // diberikan peringatan ketika salah makanya di berikan kondisi 2
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
    <title>Belajar Form</title>
    <link rel="stylesheet" href="styleslogin.css">
<style>
     body {
            background-image: url(../TUGAS/gambar1.jpg);
            background-size: cover; /* Agar gambar memenuhi seluruh area */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
        }
</style>
    
</head>
<body>
    <div class="nav">

        <center><ul>
            <h2>SELAMAT DATANG PADA HALAMAN LOGIN😊</h2>
        </ul></center>

    </div>

<!-- <div class= "form-container"> 
    <form action="" method="post">
        <h2>Login Karyawan</h2>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Kata Sandi:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <input type="submit" name="submit" value="Login"> -->

    <form action="" method="post">
        <h2>Login Karyawan</h2>
        <input type="text" name="username" placeholder="Masukan Username">
        <input type="password" name="password" placeholder="Masukan Password">
        <input type="submit" name="submit" value="Login">

        <?php if( $kondisi ==2) { ?>
        <center><p>Username/Password kamu salah!😭</p></center>
    <?php } ?>

</form>
<!-- </div> -->

</body>
</html>




