<?php
    include("koneksi.php");

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
		$nama = $_POST['nama'];
		$confirm = md5($_POST['confirmpass']);

        $sql = "INSERT INTO login(nama,username,password,confirmpass) VALUES('$nama','$username','$password','$confirm')";
        $query = mysqli_query($db,$sql);

        if($query){
            header('location: index.php?status=sukses');
        }else{
            die("Gagal melakukan registrasi");
        }

    }else{
        die("Akses dilarang...");
    }

?>