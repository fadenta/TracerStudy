<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Jurusan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Jurusan</li>
            <li class="breadcrumb-item active" aria-current="page">Data Jurusan</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <form action="index.php?page=data_jurusan_multidelete" method="POST">
                        <a href="index.php?page=data_jurusan_input" class="btn btn-outline-primary">Tambah Data</a>

                       

                        <p></p>
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>ID Jurusan</th>
                                    <th>Nama Jurusan</th>
                                    <th>Fakultas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                <?php
                                include "../koneksi.php";
                                $sqljrsn = mysqli_query($con, "SELECT * FROM jurusan");
                                $no = 1;
                                while ($rjrsn = mysqli_fetch_array($sqljrsn)) {
                                ?>
                                    <tr>
                                        <td><input type="checkbox" name="id_jrsn[]" value="<?php echo $rjrsn['id_jrsn']; ?>"></td>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rjrsn['id_jrsn']; ?></td>
                                        <td><?php echo $rjrsn['nama_jrsn']; ?></td>
                                        <td><?php echo $rjrsn['fakultas']; ?></td>
                                        <td>
                                            
                                            <a href='index.php?page=data_jurusan_edit&id=<?php echo $rjrsn['id_jrsn']; ?>' class='btn btn-success'><i class='fas fa-edit'></i></a>
                                            <a href='index.php?page=data_jurusan_delete&id=<?php echo $rjrsn['id_jrsn']; ?>' class='btn btn-danger' onclick="return confirm('Apakah Anda Yakin Menghapus Data ini ?')"><i class='fas fa-trash-alt'></i></a>
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
