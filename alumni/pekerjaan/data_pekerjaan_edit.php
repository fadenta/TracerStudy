<?php
include "../koneksi.php";

// Fetch the data of the specific pekerjaan record based on id_pkrjaan
$sqlp = mysqli_query($con, "SELECT * FROM pekerjaan WHERE id_pkrjaan = $_GET[id]");
$rp = mysqli_fetch_array($sqlp);
?>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Edit Data Pekerjaan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Pekerjaan</li>
            <li class="breadcrumb-item active" aria-current="page">Form Edit Data Pekerjaan</li>
        </ol>
    </div>

    <div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="#" method="post">

                    <!-- ID Pekerjaan and Nama Perusahaan -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>ID Pekerjaan</b></label>
                        <div class="col-md-9">
                            <input type="hidden" class="form-control" name="id_pkrjaan" value="<?php echo $rp['id_pkrjaan']; ?>">
                            <input type="text" class="form-control" name="id_alumni" value="<?php echo $rp['id_alumni']; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Nama Perusahaan</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $rp['nama_perusahaan']; ?>" required>
                        </div>
                    </div>

                    <!-- Alamat Perusahaan and Nama Jabatan -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Alamat Perusahaan</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="alamat_perusahaan" value="<?php echo $rp['alamat_perusahaan']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Nama Jabatan</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama_jabatan" value="<?php echo $rp['nama_jabatan']; ?>" required>
                        </div>
                    </div>

                    <!-- Gaji and Pengalaman Kerja -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Gaji</b></label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="gaji" value="<?php echo $rp['gaji']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Pengalaman Kerja</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="pengalaman_kerja" value="<?php echo $rp['pengalaman_kerja']; ?>" required>
                        </div>
                    </div>

                    <!-- Pendidikan Lanjutan -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Pendidikan Lanjutan</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="pendidikan_lanjutan" value="<?php echo $rp['pendidikan_lanjutan']; ?>" required>
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

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
if($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../koneksi.php";

    // Prepare the update query
    $id_pkrjaan = $_POST['id_pkrjaan'];
    $id_alumni = $_POST['id_alumni'];
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $alamat_perusahaan = $_POST['alamat_perusahaan'];
    $nama_jabatan = $_POST['nama_jabatan'];
    $gaji = $_POST['gaji'];
    $pengalaman_kerja = $_POST['pengalaman_kerja'];
    $pendidikan_lanjutan = $_POST['pendidikan_lanjutan'];

    // Execute the update query
    $query = mysqli_query($con, "UPDATE pekerjaan SET 
        id_alumni='$id_alumni', 
        nama_perusahaan='$nama_perusahaan', 
        alamat_perusahaan='$alamat_perusahaan', 
        nama_jabatan='$nama_jabatan', 
        gaji='$gaji', 
        pengalaman_kerja='$pengalaman_kerja', 
        pendidikan_lanjutan='$pendidikan_lanjutan' 
        WHERE id_pkrjaan='$id_pkrjaan'");

    if ($query) {
        echo "<script language='JavaScript'>
            alert('Data Berhasil Diperbarui!');
            document.location='index.php?page=data_pekerjaan';
        </script>";
    } else {
        echo "<script language='JavaScript'>
            alert('Error: " . mysqli_error($con) . "');
            document.location='index.php?page=data_pekerjaan';
        </script>";
    }
}
?>
