<?php
include "../koneksi.php";

if (isset($_POST["id_pkrjaan"])) {  // Change this to match the new table
    foreach ($_POST["id_pkrjaan"] as $id) {
        $query = "DELETE FROM pekerjaan WHERE id_pkrjaan=?";
        $del = $con->prepare($query);
        $del->bind_param("i", $id);
        $del->execute();
    }       
}

echo "<script language='JavaScript'>
      confirm('Data Berhasil Dihapus!');
      document.location='index.php?page=data_pekerjaan';  // Redirect to the pekerjaan page
      </script>";
?>
