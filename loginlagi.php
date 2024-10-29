
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

            display: flex;
            justify-content: center; /* Menengahkan secara horizontal */
            align-items: center; /* Menengahkan secara vertikal */
            height: 100vh; /* Menggunakan tinggi viewport */
            margin: 0; /* Menghapus margin default body */
        }

    form {
        width: 30%;
        border: 1px solid black;
        padding: 30px;
        padding-bottom: 50px;
        border-radius: 10px;
        background-color: white;
    }
    input{
        display: block;
        height: 30px;
        width: 100%;
        border: none;
        border-bottom: 1px solid black;
        margin-top: 10px;
    }   
</style>
    
</head>
<body>
   

    <form action="" method="post">
    <center>
        <h1>Login Karyawan</h1>
    </center>
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




