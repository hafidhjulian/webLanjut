<?php
    include("koneksi.php");

    if(isset($_POST['daftar'])){
        $id = $_POST['id'];
        $judul = $_POST['judul'];


        //buat query
        $sql ="UPDATE peminjaman SET judul='$judul' WHERE id=$id";
        $query = mysqli_query($db,$sql);
        // apakah query  update berhasil ?
        if($query){
            // apabila berhasil alihkan ke halaman list-pendaftar.php
            header('Location: list-pinjam.php?status=sukses');
        }else{
            // kalau gagal tampilkan pesan
            die("Gagal update perubahan");
        }
    }else{
        die("Akses dilarang....");
    }
?>