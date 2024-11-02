<?php
include "../koneksi.php";

// Ensure the ID is set and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_loker = $_GET['id'];
    $sqlloker = mysqli_query($con, "SELECT * FROM loker WHERE id_loker = '$id_loker'");
    $rloker = mysqli_fetch_array($sqlloker);
} else {
    echo "<script>alert('ID Loker tidak valid!'); window.location='index.php?page=data_loker';</script>";
    exit;
}
?>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Edit Data Loker</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Loker</li>
            <li class="breadcrumb-item">Data Loker</li>
            <li class="breadcrumb-item active" aria-current="page">Form Edit Data Loker</li>
        </ol>
    </div>

    <div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="#" method="post">
                    <div class="row mb-3">
                        <!-- ID Loker -->
                        <div class="col-md-4">
                            <label><b>ID Loker</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="hidden" class="form-control" name="id_loker" value="<?php echo htmlspecialchars($rloker['id_loker']); ?>">
                            <input type="text" readonly="readonly" class="form-control" name="id_loker" value="<?php echo htmlspecialchars($rloker['id_loker']); ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- Judul -->
                        <div class="col-md-4">
                            <label><b>Judul</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="judul" value="<?php echo htmlspecialchars($rloker['judul']); ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- Perusahaan -->
                        <div class="col-md-4">
                            <label><b>Perusahaan</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="perusahaan" value="<?php echo htmlspecialchars($rloker['perusahaan']); ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- Tanggal -->
                        <div class="col-md-4">
                            <label><b>Tanggal</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="tgl" value="<?php echo htmlspecialchars($rloker['tgl']); ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- Deskripsi -->
                        <div class="col-md-4">
                            <label><b>Deskripsi</b></label>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" name="deskripsi" rows="3"><?php echo htmlspecialchars($rloker['deskripsi']); ?></textarea>
                        </div>
                    </div>

                    <div class="form-actions text-right">
                        <input type="submit" name="submit" class="btn btn-success" value="Update Data">
                        <button type="reset" class="btn btn-dark">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $query = mysqli_query($con, "UPDATE loker SET judul='$_POST[judul]', perusahaan='$_POST[perusahaan]', tgl='$_POST[tgl]', deskripsi='$_POST[deskripsi]' WHERE id_loker='$_POST[id_loker]'");

    if ($query) {
        echo "<script language='JavaScript'>
             alert('Data Berhasil Diupdate!');
             document.location='index.php?page=data_loker';
        </script>";
    } else {
        echo "<script language='JavaScript'>
             alert('Data Gagal Diupdate!');
        </script>";
    }
}
?>
