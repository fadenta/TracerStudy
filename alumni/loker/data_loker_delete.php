<?php
include "../koneksi.php";

// Check if the id is set and is a valid number
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Prepare the DELETE statement
    $id_loker = $_GET['id'];

    // Execute the query to delete the record
    $result = mysqli_query($con, "DELETE FROM loker WHERE id_loker = '$id_loker'");

    if ($result) {
        // If deletion is successful, show confirmation message
        echo "<script language='JavaScript'>
              alert('Data Berhasil Dihapus!');
              document.location='index.php?page=data_loker'; // Redirect to the loker data page
              </script>";
    } else {
        // If there's an error, show an error message
        echo "<script language='JavaScript'>
              alert('Data Gagal Dihapus! Silakan coba lagi.');
              document.location='index.php?page=data_loker'; // Redirect to the loker data page
              </script>";
    }
} else {
    // If id is not valid, redirect to the loker data page with an error
    echo "<script language='JavaScript'>
          alert('ID Loker tidak valid!');
          document.location='index.php?page=data_loker'; // Redirect to the loker data page
          </script>";
}
?>
