<?php
include "../koneksi.php";

// Check if the id is set and is a valid number
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Prepare the DELETE statement
    $id_alumni = $_GET['id'];
    
    // Execute the query to delete the record
    $result = mysqli_query($con, "DELETE FROM alumni WHERE id_alumni = '$id_alumni'");

    if ($result) {
        // If deletion is successful, show confirmation message
        echo "<script language='JavaScript'>
              alert('Data Berhasil Dihapus!');
              document.location='index.php?page=data_alumni';
              </script>";
    } else {
        // If there's an error, show an error message
        echo "<script language='JavaScript'>
              alert('Data Gagal Dihapus! Silakan coba lagi.');
              document.location='index.php?page=data_alumni';
              </script>";
    }
} else {
    // If id is not valid, redirect to the alumni data page with an error
    echo "<script language='JavaScript'>
          alert('ID Alumni tidak valid!');
          document.location='index.php?page=data_alumni';
          </script>";
}
?>
