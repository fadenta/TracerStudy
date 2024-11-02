<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active" aria-current="page">Data Admin</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <form action="index.php?page=data_admin_multidelete" method="POST">
                        <a href="index.php?page=data_admin_input" class="btn btn-primary">Tambah Data</a>
                       
                        <p></p>
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>ID Admin</th>
                                    <th>Username</th>
                                    <th>Password</th> <!-- Masked for security reasons -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "../koneksi.php";

                                // Fetch admin data
                                $sqlAdmin = mysqli_query($con, "SELECT * FROM admint");
                                $no = 1;

                                // Loop through each admin record
                                while ($rowAdmin = mysqli_fetch_array($sqlAdmin)) {
                                ?>
                                    <tr>
                                        <td><input type="checkbox" name="id_admin[]" value="<?php echo $rowAdmin['id_admin']; ?>"></td>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo htmlspecialchars($rowAdmin['id_admin']); ?></td>
                                        <td><?php echo htmlspecialchars($rowAdmin['username']); ?></td>
                                        <td>*****</td> <!-- Masking password for security reasons -->
                                        <td>
                                            <a href='index.php?page=data_admin_edit&id=<?php echo $rowAdmin['id_admin']; ?>' class='btn btn-warning'>Edit</a>
                                            <a href='index.php?page=data_admin_delete&id=<?php echo $rowAdmin['id_admin']; ?>' class='btn btn-danger' 
                                               onclick="return confirm('Apakah Anda Yakin Menghapus Data ini ?')">Delete</a>
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
