<?php
$server = "localhost";
$database = "dbperpus";
$username = "root";
$password = "";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db){
    echo "Koneksi gagal".mysqli_connect_error();
}