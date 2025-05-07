<?php

include('connection.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// echo $alamat;

$insert = mysqli_query($connect, "INSERT INTO indoternak SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin'");
//nah kalo disni insert nya masukin kedalam nama tabel database nya bukan nama databse nya jangan sampai keliru ya
if ($insert)
    header('Location:list.php'); // jika berhasil di simpan atau data nya masuk maka akan di arahkan ke tampilan list.php 
else
    echo 'data tidak berhasil di simpan';
