<?php
$conn = mysqli_connect('localhost', 'root', '', 'barang');

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO barang (nama_barang, harga_barang, stok_barang) VALUES
  ('Buku tulis', 5000, 100),
  ('Pulpen', 2000, 50),
  ('Penghapus', 1000, 75),
  ('Spidol', 8000, 30),
  ('Stabilo', 15000, 20)";

if (mysqli_query($conn, $sql)) {
  echo "Data barang berhasil ditambahkan";
} else {
  echo "Gagal menambahkan data barang: " . mysqli_error($conn);
}

mysqli_close($conn);



?>



