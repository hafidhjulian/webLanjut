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
    <title>Halaman Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h3>Selamat Datang <?php echo $_SESSION['namauser'] ?></h3>
    </header>
    <a href="#" data-activates="slide-out" class="button-collapse waves-effect waves-light btn">Menu</a>
        <ul id="slide-out" class="side-nav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="asset/bg1.jpg">
                    </div>
                    <a href="#"><img src="asset/bg3.jpg" class="circle"></a>
                    <a href="#"><span class="white-text name"><?php echo $_SESSION['namauser'] ?></span></a>
                </div>
            </li>
            <li>
                <a href="form-pinjam.php">Form Pengajuan</a>
            </li>
            <li>
                <a href="list-pinjam.php">Lihat Pengajuan</a>        
            </li>
            <li>
                <div class="divider">
                </div>
            </li>
			<li>
                <a href="logout.php">Keluar</a>     
            </li>
        </ul>
	<?php if(isset($_GET['status'])):?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pengajuan Peminjaman Buku Berhasil";
                }else{
                    echo "Pendaftaran gagal";
                }
            ?>    
        </p>
    <?php endif; ?>
    </div>
</body>
</html>

<script>
 $(".button-collapse").sideNav();
//  $('.button-collapse').sideNav({
//       menuWidth: 300, // Default is 300
//       edge: 'right', // Choose the horizontal origin
//       closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
//       draggable: true, // Choose whether you can drag to open on touch screens,
//       onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
//       onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
//     }
//   );
</script>