<?php

include('connection.php');

$id = $_GET['id'];

// echo $id;
//untuk mengecek aja

$delete = mysqli_query($connect, "DELETE FROM indoternak WHERE id='$id'");

if ($delete) {
    header('location: list.php');
} else
    echo 'data tidak berhasil di hapus';
