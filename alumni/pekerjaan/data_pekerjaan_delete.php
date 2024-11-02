<?php
include "../koneksi.php";

mysqli_query($con, " DELETE FROM prodi WHERE id_prodi = $_GET[id]") or die(mysqli_query($con));
echo "<script language = 'JavaScript'>
      confirm('Data Berhasil Dihapus!');
      document.location='index.php?page=data_prodi';
      </script>";
