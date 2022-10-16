<?php 
include '../koneksi.php';
$id = $_GET['id'];
$query=("DELETE FROM kategori WHERE id_kategori='$id'");
 mysqli_query($konek, $query);
if ($query) {
        echo "<script>alert('Data berhasil dihapus '); document.location.href = 'kategori.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus ');</script>";
}
?>