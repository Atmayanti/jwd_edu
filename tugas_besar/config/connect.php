<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_katalog";

$connect = mysqli_connect($server, $username, $password, $database);

if  (!$connect){
    die("Koneksi gagal".mysqli_connect_error());
}