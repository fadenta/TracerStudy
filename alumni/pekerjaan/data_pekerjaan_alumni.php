<?php
include "../koneksi.php";

$sqlp = mysqli_query($con, "SELECT * FROM pekerjaan WHERE id_pkrjaan = $_GET[id]");
$rp = mysqli_fetch_array($sqlp);
?>

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pekerjaan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Pekerjaan</li>
            <li class="breadcrumb-item active" aria-current="page">Data Pekerjaan</li>
        </ol>
    </div>

    <form method="post">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><b>ID Pekerjaan</b></label>
                                    <input type="hidden" class="form-control" name="id_pkrjaan" value="<?php echo $rp['id_pkrjaan']; ?>">
                                    <input type="text" readonly class="form-control" name="kd_pkrjaan" value="<?php echo $rp['id_pkrjaan']; ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><b>Nama Perusahaan</b></label>
                                    <input type="text" class="form-control" name="nama_perusahaan" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><b>Alamat Perusahaan</b></label>
                                    <input type="text" class="form-control" name="alamat_perusahaan" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><b>Nama Jabatan</b></label>
                                    <input type="text" class="form-control" name="nama_jabatan" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><b>Gaji</b></label>
                                    <input type="number" class="form-control" name="gaji" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><b>Pengalaman Kerja</b></label>
                                    <input type="text" class="form-control" name="pengalaman_kerja" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><b>Pendidikan Lanjutan</b></label>
                            <input type="text" class="form-control" name="pendidikan_lanjutan">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                <thead class="thead-light">
                                <tr>
            <th>No</th>
            <th>ID Pekerjaan</th>
            <th>ID Alumni</th>
            <th>Nama Perusahaan</th>
            <th>Alamat Perusahaan</th>
            <th>Nama Jabatan</th>
            <th>Gaji</th>
            <th>Pengalaman Kerja</th>
            <th>Pendidikan Lanjutan</th>
            <th>Pilih</th>
        </tr>
                                </thead>
                                <tfoot>
                                <tr>
            <th>No</th>
            <th>ID Pekerjaan</th>
            <th>ID Alumni</th>
            <th>Nama Perusahaan</th>
            <th>Alamat Perusahaan</th>
            <th>Nama Jabatan</th>
            <th>Gaji</th>
            <th>Pengalaman Kerja</th>
            <th>Pendidikan Lanjutan</th>
            <th>Pilih</th>
        </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $sqlal = mysqli_query($con, "SELECT * FROM alumni WHERE NOT EXISTS (SELECT * FROM pekerjaan WHERE alumni.id_alumni = pekerjaan.id_alumni)");
                                    $no = 1;
                                    while ($ral = mysqli_fetch_array($sqlal)) {
                                    ?>
                                       <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $ral['id_pkrjaan']; ?></td>
    <td><?php echo $ral['id_alumni']; ?></td>
    <td><?php echo $ral['nama_perusahaan']; ?></td>
    <td><?php echo $ral['alamat_perusahaan']; ?></td>
    <td><?php echo $ral['nama_jabatan']; ?></td>
    <td><?php echo $ral['gaji']; ?></td>
    <td><?php echo $ral['pengalaman_kerja']; ?></td>
    <td><?php echo $ral['pendidikan_lanjutan']; ?></td>
    <td><input type="checkbox" name="id_pekerjaan[]" value="<?php echo $ral['id_pkrjaan']; ?>"></td>
</tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <p></p>
                        <div class="form-actions">
                            <div class="text-left">
                                <input type="submit" name="submit" class="btn btn-success" value="Simpan Data">
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../koneksi.php";
    $id_pkrjaan = $_POST['id_pkrjaan'];
    $id_alumni = $_POST['id_alumni'];
    $jumlah = count($id_alumni);

    for ($i = 0; $i < $jumlah; $i++) {
        $query = mysqli_query($con, "INSERT INTO pekerjaan (id_pkrjaan, id_alumni, nama_perusahaan, alamat_perusahaan, nama_jabatan, gaji, pengalaman_kerja, pendidikan_lanjutan) VALUES ('$id_pkrjaan', '$id_alumni[$i]', '{$_POST['nama_perusahaan']}', '{$_POST['alamat_perusahaan']}', '{$_POST['nama_jabatan']}', '{$_POST['gaji']}', '{$_POST['pengalaman_kerja']}', '{$_POST['pendidikan_lanjutan']}')");
    }

    echo "<script language='JavaScript'>
            confirm('Data Berhasil Disimpan!');
            document.location='index.php?page=data_pekerjaan_view&id=$rp[id_pkrjaan]'
          </script>";
}
?>
