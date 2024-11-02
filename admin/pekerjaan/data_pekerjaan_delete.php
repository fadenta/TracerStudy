<?php
include "../koneksi.php";

// Ensure that the id_pkrjaan is provided and is a valid number
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_pkrjaan = $_GET['id'];

    // Delete query for the pekerjaan table
    $deleteQuery = "DELETE FROM pekerjaan WHERE id_pkrjaan = ?";
    $stmt = $con->prepare($deleteQuery);
    
    // Bind parameters and execute
    $stmt->bind_param("i", $id_pkrjaan);
    
    if ($stmt->execute()) {
        echo "<script language='JavaScript'>
                alert('Data Berhasil Dihapus!');
                document.location='index.php?page=data_pekerjaan';
              </script>";
    } else {
        echo "<script language='JavaScript'>
                alert('Error: " . $stmt->error . "');
                document.location='index.php?page=data_pekerjaan';
              </script>";
    }
    
    // Close statement
    $stmt->close();
} else {
    echo "<script language='JavaScript'>
            alert('Invalid ID!');
            document.location='index.php?page=data_pekerjaan';
          </script>";
}

// Close database connection
$con->close();
?>
