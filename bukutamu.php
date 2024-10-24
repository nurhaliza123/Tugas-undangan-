<?php
// bukutamu.php itu create.php

session_start();
    if(empty($_SESSION['username'])){
        header('location:login.php');
    }

$json_data = file_get_contents('tamu.json');
$tamu = json_decode($json_data,true);

$waktu = date_default_timezone_set('Asia/Makassar');
$waktu = date ('Y-m-d H:i A');

if(isset($_POST['submit'])){

    $data_baru=[
        "nama"=>$_POST['nama'],
        "alamat"=>$_POST['alamat'],
        "telp"=>$_POST['telp'],
        "opsi"=>$_POST['opsi'],
        "jk"=>$_POST['jk'],
        "komentar"=>$_POST['komentar'],
        "waktu" => $waktu,
    ];

    
    $tamu[]=$data_baru;

    $json_data_baru = json_encode($tamu,JSON_PRETTY_PRINT);
    file_put_contents('tamu.json',$json_data_baru);
    header('location:datatamu.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylebuku.css">
</head>
<body>

<div class="container">
<center><form action="" method="post">
 <br>
    <h2>BUKU TAMU</h2>
     <table ><br>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
     </tr>
     
     <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat"></td>
     </tr>
     
     <tr>
        <td>No.Telp</td>
        <td>:</td>
        <td><input type="text" name="telp"></td>
     </tr>
     
     <tr>
        <td>Pilihan Sebagai</td>
        <td>:</td>
        <td>
            <select name="opsi">
                <option value="Umum">Umum</option>
                <option value="Tamu">Tamu</option>
                <option value="Anggota">Anggota</option>
            </select>
        </td>
     </tr>
     
     <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td colspan="3">
        <center>
            <input type="radio" name="jk" value="Laki-Laki"><label for="">Laki-Laki</label>
            <input type="radio" name="jk" value="Perempuan"><label for="">Perempuan</label>
        </center>
        
     </tr>
     <tr>
        <td>Komentar</td>
        <td>:</td>
        <td><textarea name="komentar"></textarea></td>
     </tr>
    <br>

    
     <tr>
         <td>
            <br>
            <input type="submit" name= "submit" value="Simpan">
        </td>
     </tr>
     
</table>
</form></center>
</div>

</body>
</html>
