<?php
    include("koneksi.php");
    session_start();
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $stmt    = mysqli_query($db,$sql);
        $row      = mysqli_fetch_array($stmt);
        if ($row['username'] == $username AND $row['password'] == $password) {
          session_start();
         $_SESSION['namauser'] = $username;
         $_SESSION['id'] = $row['id'];
         header('Location: pageAdmin.php');
        }else{
          header('Location: index.php?status=gagal');
        }
    }
?>