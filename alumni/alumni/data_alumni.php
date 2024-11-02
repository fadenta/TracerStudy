<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Alumni</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Alumni</li>
            <li class="breadcrumb-item active" aria-current="page">Data Alumni</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <form action="index.php?page=data_dosen_multidelete" method="POST">
                        <a href="index.php?page=data_alumni_input" class="btn btn-outline-primary">Tambah Data</a>
                        
                        

                        <p></p>
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>ID Alumni</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Lulus</th>
                                    <th>ID Jurusan</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                include "../koneksi.php";
                                $sqlal = mysqli_query($con, "SELECT * FROM alumni");
                                $no = 1;
                                while ($ral = mysqli_fetch_array($sqlal)) {
                                ?>
                                    <tr>
                                        <td><input type="checkbox" name="id_alumni[]" value="<?php echo $ral['id_alumni']; ?>"></td>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $ral['id_alumni']; ?></td>
                                        <td><?php echo $ral['nama']; ?></td>
                                        <td><?php echo $ral['jenis_klmin']; ?></td>
                                        <td><?php echo $ral['tempat_lahir']; ?></td>
                                        <td><?php echo $ral['tgl_lahir']; ?></td>
                                        <td><?php echo $ral['alamat']; ?></td>
                                        <td><?php echo $ral['tgl_lulus']; ?></td>
                                        <td><?php echo $ral['id_jrsn']; ?></td>
                                        <td><?php echo $ral['no_tlp']; ?></td>
                                        <td><?php echo $ral['email']; ?></td>
                                        <td><?php echo $ral['usern']; ?></td>
                                        <td>*****</td> <!-- Masking password for security reasons -->
                                        <td>
                                           
                                            <a href='index.php?page=data_alumni_edit&id=<?php echo $ral['id_alumni']; ?>' class='btn btn-success'><i class='fas fa-edit'></i></a>
                                            <a href='index.php?page=data_alumni_delete&id=<?php echo $ral['id_alumni']; ?>' class='btn btn-danger' onclick="return confirm('Apakah Anda Yakin Menghapus Data ini ?')"><i class='fas fa-trash-alt'></i></a>
                                        </td>
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
