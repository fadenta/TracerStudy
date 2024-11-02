<?php
include "../koneksi.php";

// Ensure the ID is set and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_jrsn = $_GET['id']; // Use id_jrsn for departments
    $sqljurusan = mysqli_query($con, "SELECT * FROM jurusan WHERE id_jrsn = '$id_jrsn'"); // Query for jurusan
    $rjurusan = mysqli_fetch_array($sqljurusan);
} else {
    echo "<script>alert('ID Jurusan tidak valid!'); window.location='index.php?page=data_jurusan';</script>";
    exit;
}
?>
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Profil Jurusan</h1>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label>ID Jurusan</label>
                                        <input type="hidden" class="form-control" name="id_jrsn" value="<?php echo htmlspecialchars($rjurusan['id_jrsn']); ?>">
                                        <input type="text" readonly="readonly" class="form-control" name="id_jrsn_display" value="<?php echo htmlspecialchars($rjurusan['id_jrsn']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Jurusan</label>
                                        <input type="text" readonly="readonly" class="form-control" name="nama_jrsn" value="<?php echo htmlspecialchars($rjurusan['nama_jrsn']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Fakultas</label>
                                        <input type="text" readonly="readonly" class="form-control" name="fakultas" value="<?php echo htmlspecialchars($rjurusan['fakultas']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <a href="index.php?page=data_jurusan" class="btn btn-primary">Kembali</a>
                                    </div>
                                </form>

                                <div class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
