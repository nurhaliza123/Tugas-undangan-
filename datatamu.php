<?php
// datamu.php itu read.php

session_start();
    if(empty($_SESSION['username'])){
        header('location:login.php');
    }

$json_data = file_get_contents('tamu.json');
$tamu = json_decode($json_data,true);
 $i = 1;
$indeks = 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>
    <link rel="stylesheet" href="styledata.css">
    
    
</head>
<body><center>
    <div class="container">
    <form action="" method="post">
    <h2> Data Tamu</h2>
    <button class="log"><a href="bukutamu.php">Tambah</a></button>
    <button class="log"><a href="logout.php">LogOut</a></button>
    <br>
    <br>
     <table border = "2">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No.Telp</th>
        <th>Pilihan Sebagai</th>
        <th>Jenis Kelamin</th>
        <th>Komentar</th>
        <th>Tanggal & Jam Masuk</th>
    </tr>

  <?php foreach ($tamu as $tm) { ?>
       
    <tr>
        <td><?= $i++?></td>
        <td><?= $tm['nama']?></td>
        <td><?= $tm['alamat']?></td>       
        <td><?= $tm['telp']?></td>       
        <td><?= $tm['opsi']?></td> 
        <td><?= $tm['jk']?></td> 
        <td><?= $tm['komentar']?></td>
        <td><?= $tm['waktu']?></td>
       
        
   <?php } ?>
</table>
</form>
</div>
</body></center>
</html>