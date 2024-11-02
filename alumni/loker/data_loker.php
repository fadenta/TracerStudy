<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Loker</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Loker</li>
            <li class="breadcrumb-item active" aria-current="page">Data Loker</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <form action="index.php?page=data_loker_multidelete" method="POST">
                       
                       

                        <p></p>
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>ID Loker</th>
                                    <th>Judul</th>
                                    <th>Perusahaan</th>
                                    <th>Tanggal</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                include "../koneksi.php";
                                $sqlloker = mysqli_query($con, "SELECT * FROM loker");
                                $no = 1;
                                while ($rloker = mysqli_fetch_array($sqlloker)) {
                                ?>
                                    <tr>
                                        <td><input type="checkbox" name="id_loker[]" value="<?php echo $rloker['id_loker']; ?>"></td>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rloker['id_loker']; ?></td>
                                        <td><?php echo $rloker['judul']; ?></td>
                                        <td><?php echo $rloker['perusahaan']; ?></td>
                                        <td><?php echo $rloker['tgl']; ?></td>
                                        <td><?php echo $rloker['deskripsi']; ?></td>
                                        <td>
                <?php echo "<a href='index.php?page=data_loker_detail&id={$rloker['id_loker']}' class='btn btn-info'><i class='fas fa-eye'></i></a>"; ?>
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
