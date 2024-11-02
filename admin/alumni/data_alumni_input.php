<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Input Data Alumni</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Alumni</li>
            <li class="breadcrumb-item">Data Alumni</li>
            <li class="breadcrumb-item active" aria-current="page">Form Input Data Alumni</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body" style="max-height: 75vh; overflow-y: auto;">
                    <form action="#" method="post">
                        <!-- Alumni ID -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>ID Alumni</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="id_alumni" placeholder="Masukkan ID Alumni">
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Nama Alumni</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Jenis Kelamin</b></label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="custom1" value="Laki-Laki" name="jenis_klmin">
                                        <label class="custom-control-label" for="custom1">Laki-Laki</label>
                                    </div>&nbsp;&nbsp;
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="custom2" value="Perempuan" name="jenis_klmin">
                                        <label class="custom-control-label" for="custom2">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Birthplace -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Tempat Lahir</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                            </div>
                        </div>

                        <!-- Birth Date -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Tanggal Lahir</b></label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                        </div>


                        <!-- Address -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Alamat Alumni</b></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat Alumni..."></textarea>
                            </div>
                        </div>
                        <!-- Birth Date -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Tanggal Lulus</b></label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tgl_lulus">
                            </div>
                        </div>
                        <!-- Jurusan ID -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>ID Jurusan</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="id_jrsn" placeholder="Masukkan ID Jurusan">
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>No Telepon</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="no_tlp" placeholder="Masukkan No Telepon">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Email Alumni</b></label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Username Alumni</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="usern" placeholder="Masukkan Username ">
                            </div>
                        </div>
                         <!-- Email -->
                         <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Password Alumni</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="pass" placeholder="Masukkan Password ">
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

    // Collect the data from the form
    $id_alumni = $_POST['id_alumni'];
    $nama = $_POST['nama'];
    $jenis_klmin = $_POST['jenis_klmin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $tgl_lulus = $_POST['tgl_lulus'];
    $id_jrsn = $_POST['id_jrsn'];
    $no_tlp = $_POST['no_tlp'];
    $email = $_POST['email'];
    $usern = $_POST['usern'];
    $pass = $_POST['pass'];

    // Insert data into the alumni table
    $query = mysqli_query($con, "INSERT INTO alumni (id_alumni, nama, jenis_klmin, tempat_lahir, tgl_lahir, alamat, tgl_lulus, id_jrsn, no_tlp, email, usern, pass) 
                                  VALUES ('$id_alumni', '$nama', '$jenis_klmin', '$tempat_lahir', '$tgl_lahir', '$alamat', '$tgl_lulus', '$id_jrsn', '$no_tlp', '$email', '$usern','$pass')");

    // Check if the insert was successful
    if ($query) {
        echo "<script language='JavaScript'>
                 alert('Data Berhasil Disimpan!');
                 document.location='index.php?page=data_alumni';
              </script>";
    } else {
        echo "<script language='JavaScript'>
                 alert('Data Gagal Disimpan: " . mysqli_error($con) . "');
              </script>";
    }

    // Close the database connection
    mysqli_close($con);
}
?>
