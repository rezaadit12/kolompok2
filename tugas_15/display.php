<?php



$conn = mysqli_connect('localhost', 'root', '', 'barang');

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Hapus data barang jika ID terdefinisi
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM barang WHERE id=$id";

  if (mysqli_query($conn, $sql)) {
    echo "Data barang berhasil dihapus";
  } else {
    echo "Gagal menghapus data barang: " . mysqli_error($conn);
  }
}

// Ambil data dari tabel barang
$sql = "SELECT * FROM barang";
$result = mysqli_query($conn, $sql);

// Cek apakah query berhasil dieksekusi
if (!$result) {
  echo "Gagal menampilkan data barang: " . mysqli_error($conn);
  exit;
}

// Tampilkan data barang
echo "<h1>Data Barang</h1>";
echo "<table>";
echo "<tr><th>ID</th><th>Nama Barang</th><th>Harga Barang</th><th>Stok Barang</th><th>Aksi</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>".$row['id']."</td><td>".$row['nama_barang']."</td><td>".$row['harga_barang']."</td><td>".$row['stok_barang']."</td><td><a href=\"?id=".$row['id']."\" onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\">Delete</a></td></tr>";
}

echo "</table>";

mysqli_close($conn);

?>
