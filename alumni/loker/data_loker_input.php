<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Input Data Loker</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Loker</li>
            <li class="breadcrumb-item active" aria-current="page">Form Input Data Loker</li>
        </ol>
    </div>

    <div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="#" method="post">
                    <!-- ID Loker -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>ID Loker</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="id_loker" placeholder="Masukkan ID Loker">
                        </div>
                    </div>

                    <!-- Judul -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Judul</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
                        </div>
                    </div>

                    <!-- Perusahaan -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Perusahaan</b></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="perusahaan" placeholder="Masukkan Nama Perusahaan">
                        </div>
                    </div>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Tanggal</b></label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="tgl">
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"><b>Deskripsi</b></label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi Loker..."></textarea>
                        </div>
                    </div>

                    <br>
                    <div class="form-actions text-right">
                        <input type="submit" name="submit" class="btn btn-success" value="Simpan Data">
                        <button type="reset" class="btn btn-dark">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../koneksi.php";

    // Collect the data from the form
    $id_loker = $_POST['id_loker'];
    $judul = $_POST['judul'];
    $perusahaan = $_POST['perusahaan'];
    $tgl = $_POST['tgl'];
    $deskripsi = $_POST['deskripsi'];

    // Insert data into the loker table
    $query = mysqli_query($con, "INSERT INTO loker (id_loker, judul, perusahaan, tgl, deskripsi) VALUES ('$id_loker', '$judul', '$perusahaan', '$tgl', '$deskripsi')");

    // Check if the insert was successful
    if ($query) {
        echo "<script language='JavaScript'>
                 alert('Data Berhasil Disimpan!');
                 document.location='index.php?page=data_loker';
              </script>";
    } else {
        echo "<script language='JavaScript'>
                 alert('Data Gagal Disimpan: " . mysqli_error($con) . "');
              </script>";
    }
}
?>
