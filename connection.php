<?php

$connect = mysqli_connect('localhost', 'itx', '12internex34', 'karyawan');
//koneksi dsni dengan nama database nya
if (!$connect) {
    exit("Connection failed: " . mysqli_connect_error());
}
