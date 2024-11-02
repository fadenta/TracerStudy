<?php
include "../koneksi.php";
if (isset($_POST['submit'])) {

    // Validate input
    $id_admin = trim($_POST['id_admin']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if the fields are not empty
    if (empty($id_admin) || empty($username) || empty($password)) {
        echo "Semua field harus diisi!";
        exit;
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO admint (id_admin, username, password) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $con->error);
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Bind parameters
    $stmt->bind_param("sss", $id_admin, $username, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data Admin berhasil disimpan!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
