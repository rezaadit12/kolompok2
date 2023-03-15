<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	<h1>Data Siswa</h1>

	<?php
		$nis = $_POST["nis"];
		$nama = $_POST["nama"];
		$rayon = $_POST["rayon"];

		echo "<p>NIS: $nis</p>";
		echo "<p>Nama: $nama</p>";
		echo "<p>Rayon: $rayon</p>";
	?>
</body>
</html>
    