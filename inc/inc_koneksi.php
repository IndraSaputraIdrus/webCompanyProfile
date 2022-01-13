<?php

$host       = "localhost";
$username   = "root";
$password   = "";
$db         = "companyprofile";

$koneksi = mysqli_connect($host, $username, $password, $db);
if (!$koneksi) {
   die("gagal koneksi");
}
