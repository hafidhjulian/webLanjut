<?php
    include("koneksi.php");
    session_start();

    //cek apakah tombol daftar sudah diklik atau belum?
    if(isset($_POST['daftar'])){
        //ambil data dari formulir
        $judul= $_POST['judul'];
        $user= $_SESSION['id'];

        //buat query
        $sql="INSERT INTO peminjaman(user_id,judul) VALUES ('$user','$judul')";
        $query= mysqli_query($db,$sql);
        // apakah query simpan berhasil atau tidak
        if($query){
            //kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('location: pageAdmin.php?status=sukses');
        }else{
            //kalau gagal alihkan ke halaman index.php dengan status=gagal
            header('location: pageAdmin.php?status=gagal');
        }
    }else{
        die("Akses dilarang...");
    }
    
?>