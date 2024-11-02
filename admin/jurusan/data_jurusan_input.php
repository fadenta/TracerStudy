<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Input Data Jurusan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Jurusan</li>
            <li class="breadcrumb-item active" aria-current="page">Form Input Data Jurusan</li>
        </ol>
    </div>

    

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="#" method="post">
                        <!-- ID Jurusan -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>ID Jurusan</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="id_jrsn" placeholder="Masukkan ID Jurusan" required>
                            </div>
                        </div>

                        <!-- Nama Jurusan -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Nama Jurusan</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_jrsn" placeholder="Masukkan Nama Jurusan" required>
                            </div>
                        </div>

                        <!-- Fakultas -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Fakultas</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="fakultas" placeholder="Masukkan Nama Fakultas" required>
                            </div>
                        </div>

                        <div class="form-actions text-right">
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan Data">
                            <button type="reset" class="btn btn-dark">Reset</button>
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

    // Collect the data from the form
    $id_jrsn = $_POST['id_jrsn'];
    $nama_jrsn = $_POST['nama_jrsn'];
    $fakultas = $_POST['fakultas'];

    // Insert data into the jurusan table
    $query = mysqli_query($con, "INSERT INTO jurusan (id_jrsn, nama_jrsn, fakultas) VALUES ('$id_jrsn', '$nama_jrsn', '$fakultas')");

    // Check if the insert was successful
    if ($query) {
        echo "<script language='JavaScript'>
                 alert('Data Berhasil Disimpan!');
                 document.location='index.php?page=data_jurusan';
              </script>";
    } else {
        echo "<script language='JavaScript'>
                 alert('Data Gagal Disimpan: " . mysqli_error($con) . "');
              </script>";
    }
}
?>
