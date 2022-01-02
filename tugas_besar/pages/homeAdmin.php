<?php
include "../config/connect.php";
session_start();
if (isset($_SESSION['sesi'])) {
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php echo $_SESSION['sesi']?>
        <h1>INI ADMIN</h1>
    </body>
</html>