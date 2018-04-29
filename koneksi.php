<?php
    $servername ="localhost";
    $username="root";
    $password="";
    $dbname="peminjaman";

    $db=mysqli_connect($servername,$username,$password,$dbname);

    if(!$db){
        die("Koneksi ke database gagal !!");
    }
?>