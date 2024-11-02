<?php
include "../koneksi.php";

// Ensure the ID is set and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_alumni = $_GET['id'];
    $sqlal = mysqli_query($con, "SELECT * FROM alumni WHERE id_alumni = '$id_alumni'");
    $ral = mysqli_fetch_array($sqlal);
} else {
    echo "<script>alert('ID Alumni tidak valid!'); window.location='index.php?page=data_alumni';</script>";
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
                                    <h1 class="h4 text-gray-900 mb-4">Profil Alumni</h1>
                                </div>
                                <form>
                                    <?php
                                    // Define a helper function to safely fetch and display values
                                    function safeEcho($value) {
                                        return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
                                    }
                                    ?>
                                    
                                    <div class="form-group">
                                        <label>ID Alumni</label>
                                        <input type="hidden" class="form-control" name="id_alumni" value="<?php echo safeEcho($ral['id_alumni']); ?>">
                                        <input type="text" readonly="readonly" class="form-control" name="id_alumni" value="<?php echo safeEcho($ral['id_alumni']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Alumni</label>
                                        <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo safeEcho($ral['nama']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" readonly="readonly" class="form-control" name="jenis_klmin" value="<?php echo safeEcho($ral['jenis_klmin']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" readonly="readonly" class="form-control" name="tempat_lahir" value="<?php echo safeEcho($ral['tempat_lahir']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" readonly="readonly" class="form-control" name="tgl_lahir" value="<?php echo safeEcho($ral['tgl_lahir']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" readonly="readonly" class="form-control" name="alamat" value="<?php echo safeEcho($ral['alamat']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Lulus</label>
                                        <input type="date" readonly="readonly" class="form-control" name="tgl_lulus" value="<?php echo safeEcho($ral['tgl_lulus']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>ID Jurusan</label>
                                        <input type="text" readonly="readonly" class="form-control" name="id_jrsn" value="<?php echo safeEcho($ral['id_jrsn']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input type="text" readonly="readonly" class="form-control" name="no_tlp" value="<?php echo safeEcho($ral['no_tlp']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" readonly="readonly" class="form-control" name="email" value="<?php echo safeEcho($ral['email']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <a href="index.php?page=data_alumni" class="btn btn-primary">Kembali</a>
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
