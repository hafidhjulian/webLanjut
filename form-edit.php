<?php
include_once("koneksi.php");

if (isset($_GET['id'])) {
	header('Location list-pinjam.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM peminjaman WHERE id=$id";
$query = mysqli_query($db,$sql);
$mhs = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query)<1) {
	die("data tidak ditemukan..");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Perubahan Data</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<link rel="stylesheet" type="text/css" href="css/pageAdmin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	</head>
	<body>
		<div class="container">
		<h2>Formulir  Edit Mahasiswa</h2>
		<div>
		<br>
		<form action="proses-edit.php" method="POST" class="col s12">
			<input type="hidden" name="id" value="<?php echo $mhs['id'] ?>"/>
			<div class="input-field col s12">
			<?php $judul = $mhs['judul'];?>
			<select name="judul">
				<option <?php echo ($judul == 'Tutorial Web Programming') ? "selected": "" ?>>Tutorial Web Programming<option>
				<option <?php echo ($judul == 'Sukses dengan SCRUM Management') ? "selected": "" ?>>Sukses dengan SCRUM Management<option>
				<option <?php echo ($judul == 'Cara Ternak Lele dengan Pembibitan Unggul') ? "selected": "" ?>>Cara Ternak Lele dengan Pembibitan Unggul<option>
			</select>
			<label for="judul">Judul</label>
			</div>
			<br><br>
			<a class="waves-effect waves-light btn"><input type="submit" value="submit" name="daftar"/></a>
		</form>
		</div>
		</div>
	</body>
</html>

<script>
 $(document).ready(function() {
    $('select').material_select();
  });
</script>