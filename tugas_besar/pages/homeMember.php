<?php
include "../config/connect.php";
session_start();
if (isset($_SESSION['sesi'])) {
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
        <p>Selamat Datang Member<?php echo $_SESSION['sesi']?></p>
    </body>
    </html>
<?php
}
?>