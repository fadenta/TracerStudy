<?php
include "../koneksi.php";

// Check if 'id_jrsn' is set in POST request
if (isset($_POST["id_jrsn"])) {
    foreach ($_POST["id_jrsn"] as $id) {
        // Prepare the DELETE statement
        $query = "DELETE FROM jurusan WHERE id_jrsn=?";
        $del = $con->prepare($query);
        $del->bind_param("i", $id);
        $del->execute();
    }
    
    // Success message after deletion
    echo "<script language='JavaScript'>
            alert('Data Berhasil Dihapus!');
            document.location='index.php?page=data_jurusan'; // Redirect to data_jurusan page
          </script>";
} else {
    // Handle case where no IDs were selected for deletion
    echo "<script language='JavaScript'>
            alert('Tidak ada data yang dipilih untuk dihapus.');
            document.location='index.php?page=data_jurusan';
          </script>";
}
?>
