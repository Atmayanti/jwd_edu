<?php
    session_start();
    $_SESSION['sesi'] = NULL;

    include "connect.php";
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $query = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $row = mysqli_fetch_assoc($query);

        if($row['accesslevel'] == 1){
            $userid = $row['userid'];
            $query_admin = mysqli_query($connect,"SELECT * FROM admins WHERE userid = '$userid'");
            $data_admin = mysqli_fetch_array($query_admin);
            $_SESSION['adminid'] = $data_admin['adminid'];
            $_SESSION['sesi'] = $data_admin['name'];?>
            <script>alert('Anda Berhasil Login Admin!')</script>
            <a href="../pages/homeAdmin.php">KLik untuk melanjutkan</a>
            <?php
        }
        else if($row['accesslevel'] == 2){
            $userid = $row['userid'];
            $query_member = mysqli_query($connect,"SELECT * FROM members WHERE userid = '$userid'");
            $data_member = mysqli_fetch_array($query_member);
            $_SESSION['memberid'] = $data_member['memberid'];
            $_SESSION['sesi'] = $data_member['name'];?>
            <script>alert('Anda Berhasil Login Member!')</script>
            <a href="../pages/">KLik untuk melanjutkan</a>
            <?php
        } else {
            ?>
            <script>alert('Anda Gagal Login')</script>
            <a href="../pages/login.php">KLik untuk melanjutkan</a>
            <?php 
        }
    }