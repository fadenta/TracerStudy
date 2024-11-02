<?php
include "../koneksi.php";

if (isset($_POST["id_loker"])) {
    foreach ($_POST["id_loker"] as $id) {
        $query = "DELETE FROM loker WHERE id_loker = ?";
        $del = $con->prepare($query);
        $del->bind_param("i", $id);
        $del->execute();
    }   
    echo "<script language='JavaScript'>
          alert('Data Berhasil Dihapus!');
          document.location='index.php?page=data_loker';
          </script>";
} else {
    echo "<script language='JavaScript'>
          alert('Tidak ada data yang dipilih untuk dihapus.');
          document.location='index.php?page=data_loker';
          </script>";
}
?>
