<?php
	include_once("koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Peminjaman Buku Baru</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<link rel="stylesheet" type="text/css" href="css/pageAdmin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	</head>
	<body>
		<div class="container">
		<h3>Peminjaman Baru Admin Terdaftar</h3>
		<br><br>
		<a class="waves-effect waves-light btn" href="form-pinjam.php">Tambah Baru</a>
		<br><br>
		<h5>
		<?php
		echo $_SESSION['namauser'];
		?>
		</h5>
		<table>
		<thead>
			<tr>
				<th>NO</th>
				<th>Judul</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT * FROM peminjaman";
				$query = mysqli_query($db,$sql);
				$no=1;
				
				while($mhs = mysqli_fetch_array($query)){
					echo "<tr>";
					echo "<td>".$no."</td>";
					$no++;
					echo "<td>".$mhs['judul']."</td>";
					echo "<td>";
					echo "<a href='form-edit.php?id=".$mhs['id']."'>Edit</a> | ";
					echo "<a href='hapus.php?id=".$mhs['id']."'>Hapus</a>";
					echo "</td>";
					echo "</tr>";
				}
			?>
		</tbody>
		</table>
		<br><br>
		
		<?php if(isset($_GET['status'])):?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Perubahan data Berhasil";
                }else{
                    echo "Perubahan gagal";
                }
            ?>    
        </p>
		<?php endif; ?>
		<a href="pageAdmin.php" class="waves-effect waves-light btn">Kembali</a>
		</div>
	</body>
</html>