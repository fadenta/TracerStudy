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

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                
                        </div>
                    </form>
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
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $sqlpekerjaan = mysqli_query($con, "SELECT * FROM pekerjaan WHERE id_pkrjaan IN (SELECT id_pkrjaan FROM alumni WHERE id_pkrjaan = $rp[id_pkrjaan])");
                                $no = 1;
                                while ($rpekerjaan = mysqli_fetch_array($sqlpekerjaan)) {
                                ?>
                                    <tr>
                                        <td><?php echo "$no"; ?></td>
                                        <td><?php echo "$rpekerjaan[id_pkrjaan]"; ?></td>
                                        <td><?php echo "$rpekerjaan[id_alumni]"; ?></td>
                                        <td><?php echo "$rpekerjaan[nama_perusahaan]"; ?></td>
                                        <td><?php echo "$rpekerjaan[alamat_perusahaan]"; ?></td>
                                        <td><?php echo "$rpekerjaan[nama_jabatan]"; ?></td>
                                        <td><?php echo "$rpekerjaan[gaji]"; ?></td>
                                        <td><?php echo "$rpekerjaan[pengalaman_kerja]"; ?></td>
                                        <td><?php echo "$rpekerjaan[pendidikan_lanjutan]"; ?></td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
