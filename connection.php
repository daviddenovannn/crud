<?php

$connect = mysqli_connect('localhost', 'itx', '12internex34', 'karyawan');

if (!$connect) {
    exit("Connection failed: " . mysqli_connect_error());
}
