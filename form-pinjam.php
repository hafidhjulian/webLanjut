<?php
include_once("koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman Buku</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="css/pageAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
    <header>
        <h3>Formulir Peminjaman Buku</h3>
		<h4>Mahasiswa <?php echo $_SESSION['namauser']; ?><H4>
    </header>
    <div class="row">
            <form action="proses-pinjam.php" method="post" class="col s12">
                <div class="input-field col s12">
                    <select name="judul">
                        <option value="" disabled selected>Choose your option</option>
                        <option>Tutorial Web Programming</option>
                        <option>Sukses dengan SCRUM Management</option>
                        <option>Cara Ternak Lele dengan Pembibitan Unggul</option>
                    </select>
                    <label for="judul">Judul Buku</label>
                </div>
                <a class="waves-effect waves-light btn"><input type="submit" value="Submit" name="daftar"></a>
            </form>
    </div>
    <!-- <form action="proses-pinjam.php" method="POST">
            <p>
                <label for="judul">Judul Buku:</label>
                <select name="judul">
                    <option>Tutorial Web Programming</option>
                    <option>Sukses dengan SCRUM Management</option>
                    <option>Cara Ternak Lele dengan Pembibitan Unggul</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Submit" name="daftar">
            </p>
    </form> -->
    <a href="pageAdmin.php" class="waves-effect waves-light btn">Kembali</a>
    </div>
</body>
</html>

<script>
 $(document).ready(function() {
    $('select').material_select();
  });
</script>