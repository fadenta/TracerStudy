<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pekerjaan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Pekerjaan</li>
            <li class="breadcrumb-item active" aria-current="page">Data Pekerjaan</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <form action="index.php?page=data_pekerjaan_multidelete" method="POST">
                        <a href="index.php?page=data_pekerjaan_input" class="btn btn-outline-primary">Tambah Data</a>
                        
                       

                        <p></p>
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th><center>No</th>
                                    <th><center>ID Pekerjaan</th>
                                    <th><center>ID Alumni</th>
                                    <th><center>Nama Perusahaan</th>
                                    <th><center>Alamat Perusahaan</th>
                                    <th><center>Nama Jabatan</th>
                                    <th><center>Gaji</th>
                                    <th><center>Pengalaman Kerja</th>
                                    <th><center>Pendidikan Lanjutan</th>
                                    <th><center>Action</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                <?php
                                include "../koneksi.php";
                                $sqlp = mysqli_query($con, "SELECT * FROM pekerjaan");
                                $no = 1;
                                while ($rp = mysqli_fetch_array($sqlp)) {
                                ?>
                                    <tr>
                                        <td><center><input type="checkbox" name="id_pkrjaan[]" value="<?php echo "$rp[id_pkrjaan]"; ?>"></td>
                                        <td><center><?php echo "$no"; ?></td>
                                        <td><center><?php echo "$rp[id_pkrjaan]"; ?></td>
                                        <td><center><?php echo "$rp[id_alumni]"; ?></td>
                                        <td><center><?php echo "$rp[nama_perusahaan]"; ?></td>
                                        <td><center><?php echo "$rp[alamat_perusahaan]"; ?></td>
                                        <td><center><?php echo "$rp[nama_jabatan]"; ?></td>
                                        <td><center><?php echo "$rp[gaji]"; ?></td>
                                        <td><center><?php echo "$rp[pengalaman_kerja]"; ?></td>
                                        <td><center><?php echo "$rp[pendidikan_lanjutan]"; ?></td>
                                        <td><center>
                                           
                                            <a href='index.php?page=data_pekerjaan_edit&id=<?php echo $rp['id_pkrjaan']; ?>' class='btn btn-success'><i class='fas fa-edit'></i></a>
                                            <a href='index.php?page=data_pekerjaan_delete&id=<?php echo $rp['id_pkrjaan']; ?>' class='btn btn-danger' onclick="return confirm('Apakah Anda Yakin Menghapus Data ini ?')"><i class='fas fa-trash-alt'></i></a>
                                        </center></td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
