<?php
include "../koneksi.php";

// Ensure the ID is set and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_jrsn = $_GET['id'];
    $sqljurusan = mysqli_query($con, "SELECT * FROM jurusan WHERE id_jrsn = '$id_jrsn'");
    $rjurusan = mysqli_fetch_array($sqljurusan);
} else {
    echo "<script>alert('ID Jurusan tidak valid!'); window.location='index.php?page=data_jurusan';</script>";
    exit;
}
?>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Edit Data Jurusan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Jurusan</li>
            <li class="breadcrumb-item">Data Jurusan</li>
            <li class="breadcrumb-item active" aria-current="page">Form Edit Data Jurusan</li>
        </ol>
    </div>

    <div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="#" method="post">
                    <!-- ID Jurusan -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>ID Jurusan</b></label>
                        <div class="col-md-9">
                            <input type="hidden" class="form-control" name="id_jrsn" value="<?php echo htmlspecialchars($rjurusan['id_jrsn']); ?>">
                            <input type="text" readonly="readonly" class="form-control" value="<?php echo htmlspecialchars($rjurusan['id_jrsn']); ?>">
                        </div>
                    </div>

                    <!-- Nama Jurusan -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Nama Jurusan</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama_jrsn" value="<?php echo htmlspecialchars($rjurusan['nama_jrsn']); ?>">
                        </div>
                    </div>

                    <!-- Fakultas -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Fakultas</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="fakultas" value="<?php echo htmlspecialchars($rjurusan['fakultas']); ?>">
                        </div>
                    </div>

                    <div class="form-actions text-right">
                        <input type="submit" name="submit" class="btn btn-success" value="Update Data">
                        <button type="reset" class="btn btn-dark">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $query = mysqli_query($con, "UPDATE jurusan SET nama_jrsn='$_POST[nama_jrsn]', fakultas='$_POST[fakultas]' WHERE id_jrsn='$_POST[id_jrsn]'");

    if ($query) {
        echo "<script language='JavaScript'>
             alert('Data Berhasil Diupdate!');
             document.location='index.php?page=data_jurusan';
        </script>";
    } else {
        echo "<script language='JavaScript'>
             alert('Data Gagal Diupdate! Silakan coba lagi.');
             document.location='index.php?page=data_jurusan';
        </script>";
    }
}
?>
