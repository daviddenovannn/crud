<?php

include('connection.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// echo $alamat;

$update = mysqli_query($connect, "UPDATE indoternak SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin' WHERE id='$id'");
//nah kalo disni insert nya masukin kedalam nama tabel database nya bukan nama databse nya jangan sampai keliru ya
if ($update)
    header('Location:list.php'); // jika berhasil di simpan atau data nya masuk maka akan di arahkan ke tampilan list.php 
else
    echo 'data tidak berhasil di update';
