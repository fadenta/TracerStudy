<?php
include "../koneksi.php";

// Get the id_admin from the URL and sanitize it to prevent SQL injection
$id_admin = intval($_GET['id']); // Convert to integer for safety

// Execute the delete query for the admin table
mysqli_query($con, "DELETE FROM admint WHERE id_admin = $id_admin") or die(mysqli_error($con));

// Use JavaScript to alert the user and redirect
echo "<script language='JavaScript'>
      alert('Data Berhasil Dihapus!');
      document.location='index.php?page=data_admin'; // Update the redirect page accordingly
      </script>";
?>
