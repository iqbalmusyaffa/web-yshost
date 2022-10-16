<?php 
include '../koneksi.php';
$id = $_GET['id'];
$query=("DELETE FROM tb_bayar WHERE id_method='$id'");
 mysqli_query($konek, $query);
if ($query) {
        echo "<script>alert('Data berhasil dihapus '); document.location.href = 'bayar.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus ');</script>";
}
?>