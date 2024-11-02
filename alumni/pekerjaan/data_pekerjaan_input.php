<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Input Data Pekerjaan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Pekerjaan</li>
            <li class="breadcrumb-item active" aria-current="page">Form Input Data Pekerjaan</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="#" method="post">
                        <!-- ID Pekerjaan -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>ID Pekerjaan</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="id_pkrjaan" placeholder="Masukkan ID Pekerjaan" required>
                            </div>
                        </div>

                        <!-- ID Alumni -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>ID Alumni</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="id_alumni" placeholder="Masukkan ID Alumni" required>
                            </div>
                        </div>

                        <!-- Nama Perusahaan -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Nama Perusahaan</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_perusahaan" placeholder="Masukkan Nama Perusahaan" required>
                            </div>
                        </div>

                        <!-- Alamat Perusahaan -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Alamat Perusahaan</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alamat_perusahaan" placeholder="Masukkan Alamat Perusahaan" required>
                            </div>
                        </div>

                        <!-- Nama Jabatan -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Nama Jabatan</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_jabatan" placeholder="Masukkan Nama Jabatan" required>
                            </div>
                        </div>

                        <!-- Gaji -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Gaji</b></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="gaji" placeholder="Masukkan Gaji" required>
                            </div>
                        </div>

                        <!-- Pengalaman Kerja -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Pengalaman Kerja</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="pengalaman_kerja" placeholder="Masukkan Pengalaman Kerja" required>
                            </div>
                        </div>

                        <!-- Pendidikan Lanjutan -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Pendidikan Lanjutan</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="pendidikan_lanjutan" placeholder="Masukkan Pendidikan Lanjutan" required>
                            </div>
                        </div>

                        <!-- Submit and Reset Buttons -->
                        <div class="form-group row">
                            <div class="col-sm-12 text-right">
                                <input type="submit" name="submit" class="btn btn-success" value="Simpan Data">
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../koneksi.php";

    // Prepare and sanitize input data
    $id_pkrjaan = mysqli_real_escape_string($con, $_POST['id_pkrjaan']);
    $id_alumni = mysqli_real_escape_string($con, $_POST['id_alumni']);
    $nama_perusahaan = mysqli_real_escape_string($con, $_POST['nama_perusahaan']);
    $alamat_perusahaan = mysqli_real_escape_string($con, $_POST['alamat_perusahaan']);
    $nama_jabatan = mysqli_real_escape_string($con, $_POST['nama_jabatan']);
    $gaji = mysqli_real_escape_string($con, $_POST['gaji']);
    $pengalaman_kerja = mysqli_real_escape_string($con, $_POST['pengalaman_kerja']);
    $pendidikan_lanjutan = mysqli_real_escape_string($con, $_POST['pendidikan_lanjutan']);

    // Insert data into the pekerjaan table
    $query = mysqli_query($con, "INSERT INTO pekerjaan (id_pkrjaan, id_alumni, nama_perusahaan, alamat_perusahaan, nama_jabatan, gaji, pengalaman_kerja, pendidikan_lanjutan) 
                                  VALUES ('$id_pkrjaan', '$id_alumni', '$nama_perusahaan', '$alamat_perusahaan', '$nama_jabatan', '$gaji', '$pengalaman_kerja', '$pendidikan_lanjutan')");

    if ($query) {
        echo "<script language='JavaScript'>
                alert('Data Berhasil Disimpan!');
                document.location='index.php?page=data_pekerjaan';
              </script>";
    } else {
        echo "<script language='JavaScript'>
                alert('Error: " . mysqli_error($con) . "');
              </script>";
    }
}
?>
