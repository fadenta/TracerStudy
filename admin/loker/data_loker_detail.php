<?php
include "../koneksi.php";

// Ensure the ID is set and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_loker = $_GET['id'];
    $sqlloker = mysqli_query($con, "SELECT * FROM loker WHERE id_loker = '$id_loker'");
    $rloker = mysqli_fetch_array($sqlloker);
} else {
    echo "<script>alert('ID Loker tidak valid!'); window.location='index.php?page=data_loker';</script>";
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
                                    <h1 class="h4 text-gray-900 mb-4">Detail Lowongan Pekerjaan</h1>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label>ID Loker</label>
                                        <input type="hidden" class="form-control" name="id_loker" value="<?php echo htmlspecialchars($rloker['id_loker']); ?>">
                                        <input type="text" readonly="readonly" class="form-control" name="id_loker" value="<?php echo htmlspecialchars($rloker['id_loker']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="text" readonly="readonly" class="form-control" name="judul" value="<?php echo htmlspecialchars($rloker['judul']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Perusahaan</label>
                                        <input type="text" readonly="readonly" class="form-control" name="perusahaan" value="<?php echo htmlspecialchars($rloker['perusahaan']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" readonly="readonly" class="form-control" name="tgl" value="<?php echo htmlspecialchars($rloker['tgl']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea readonly="readonly" class="form-control" name="deskripsi" rows="3"><?php echo htmlspecialchars($rloker['deskripsi']); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <a href="index.php?page=data_loker" class="btn btn-primary">Kembali</a>
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
