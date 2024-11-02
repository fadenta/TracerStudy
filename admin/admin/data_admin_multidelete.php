<?php
include "../koneksi.php";

if (isset($_POST["id_admin"])) { // Change "id_user" to "id_admin"
    foreach ($_POST["id_admin"] as $id) { // Change the array reference to "id_admin"
        $query = "DELETE FROM admint WHERE id_admin = ?"; // Change table name and field
        $del = $con->prepare($query);
        $del->bind_param("i", $id); // Bind as integer
        $del->execute();
    }       
}

echo "<script language='JavaScript'>
      alert('Data Berhasil Dihapus!'); // Use alert instead of confirm for notification
      document.location='index.php?page=data_admin'; // Change redirect page accordingly
      </script>";
?>
