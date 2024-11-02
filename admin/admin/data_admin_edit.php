<?php
include "../koneksi.php";

// Ensure the ID is set and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_admin = $_GET['id'];
    $sqlAdmin = mysqli_query($con, "SELECT * FROM admint WHERE id_admin = '$id_admin'");
    $rowAdmin = mysqli_fetch_array($sqlAdmin);
} else {
    echo "<script>alert('ID Admin tidak valid!'); window.location='index.php?page=data_admin';</script>";
    exit;
}
?>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Edit Data Admin</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item">Data Admin</li>
            <li class="breadcrumb-item active" aria-current="page">Form Edit Data Admin</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="#" method="post">
                        <!-- ID Admin -->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"><b>ID Admin</b></label>
                            <div class="col-md-9">
                                <input type="hidden" class="form-control" name="id_admin" value="<?php echo htmlspecialchars($rowAdmin['id_admin']); ?>">
                                <input type="text" readonly="readonly" class="form-control" name="id_admin" value="<?php echo htmlspecialchars($rowAdmin['id_admin']); ?>">
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"><b>Username</b></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="username" value="<?php echo htmlspecialchars($rowAdmin['username']); ?>">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"><b>Password</b></label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" placeholder="Leave blank to keep unchanged">
                            </div>
                        </div>

                        <br>
                        <div class="form-actions text-right">
                            <input type="submit" name="submit" class="btn btn-success" value="Update Data">
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Prepare password update
    $password_query_part = '';
    if (!empty($_POST['password'])) {
        $hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $password_query_part = ", password='$hashed_password'";
    }

    $query = mysqli_query($con, "UPDATE admint SET username='$_POST[username]' $password_query_part WHERE id_admin='$_POST[id_admin]'");

    if ($query) {
        echo "<script language='JavaScript'>
             alert('Data Berhasil Diupdate!');
             document.location='index.php?page=data_admin';
        </script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!');</script>";
    }
}
?>
