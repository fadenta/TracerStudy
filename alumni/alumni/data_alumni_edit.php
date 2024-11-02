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
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Edit Data Alumni</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Alumni</li>
            <li class="breadcrumb-item">Data Alumni</li>
            <li class="breadcrumb-item active" aria-current="page">Form Edit Data Alumni</li>
        </ol>
    </div>

    <div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="#" method="post">
                    <!-- ID Alumni -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>ID Alumni</b></label>
                        <div class="col-md-9">
                            <input type="hidden" class="form-control" name="id_alumni" value="<?php echo htmlspecialchars($ral['id_alumni']); ?>">
                            <input type="text" readonly="readonly" class="form-control" name="id_alumni" value="<?php echo htmlspecialchars($ral['id_alumni']); ?>">
                        </div>
                    </div>

                    <!-- Nama Alumni -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Nama Alumni</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama" value="<?php echo htmlspecialchars($ral['nama']); ?>">
                        </div>
                    </div>

                    <!-- Jenis Kelamin and Email Alumni -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Jenis Kelamin</b></label>
                        <div class="col-md-9">
                            <div class="form-check form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="gender_male" value="Laki-Laki" name="jenis_klmin" <?php if ($ral['jenis_klmin'] == 'Laki-Laki') echo "checked"; ?>> 
                                    <label class="custom-control-label" for="gender_male">Laki-Laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="gender_female" value="Perempuan" name="jenis_klmin" <?php if ($ral['jenis_klmin'] == 'Perempuan') echo "checked"; ?>> 
                                    <label class="custom-control-label" for="gender_female">Perempuan</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Email Alumni</b></label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($ral['email']); ?>">
                        </div>
                    </div>

                    <!-- Tempat Lahir and Tanggal Lahir -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Tempat Lahir</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="tempat_lahir" value="<?php echo htmlspecialchars($ral['tempat_lahir']); ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Tanggal Lahir</b></label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="tgl_lahir" value="<?php echo htmlspecialchars($ral['tgl_lahir']); ?>">
                        </div>
                    </div>

                    <!-- Alamat Alumni and Tanggal Lulus -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Alamat Alumni</b></label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="alamat" rows="3"><?php echo htmlspecialchars($ral['alamat']); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Tanggal Lulus</b></label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="tgl_lulus" value="<?php echo htmlspecialchars($ral['tgl_lulus']); ?>">
                        </div>
                    </div>

                    <!-- ID Jurusan and Nomor Telepon -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>ID Jurusan</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="id_jrsn" value="<?php echo htmlspecialchars($ral['id_jrsn']); ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Nomor Telepon</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="no_tlp" value="<?php echo htmlspecialchars($ral['no_tlp']); ?>">
                        </div>
                    </div>
                     <!-- ID Jurusan and Nomor Telepon -->
                     <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Email</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" value="<?php echo htmlspecialchars($ral['email']); ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Username</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="usern" value="<?php echo htmlspecialchars($ral['usern']); ?>">
                        </div>
                    </div>
                     <!-- ID Jurusan and Nomor Telepon -->
                     <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Password</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="pass" value="<?php echo htmlspecialchars($ral['pass']); ?>">
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

<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $query = mysqli_query($con, "UPDATE alumni SET nama='$_POST[nama]', jenis_klmin='$_POST[jenis_klmin]', tempat_lahir='$_POST[tempat_lahir]', tgl_lahir='$_POST[tgl_lahir]', alamat='$_POST[alamat]', tgl_lulus='$_POST[tgl_lulus]', id_jrsn='$_POST[id_jrsn]', no_tlp='$_POST[no_tlp]', email='$_POST[email]', usern='$_POST[usern]', pass='$_POST[pass]' WHERE id_alumni='$_POST[id_alumni]'");

    echo "<script language='JavaScript'>
         alert('Data Berhasil Diupdate!');
         document.location='index.php?page=data_alumni';
    </script>";
}
?>
