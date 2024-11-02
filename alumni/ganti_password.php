<?php
include "../koneksi.php";

$sqlal = mysqli_query($con, "SELECT * FROM alumni WHERE pass = $_GET[pass]");
$alumnidbl = mysqli_fetch_array($sqlal);

?>

<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Settings</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Settings</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
             
              <div class="card mb-4">
              
                <div class="card-body">
                  <form action="#" method="post">

                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                      <label><b>Password Lama</b></label>
                       <input type="hidden" class="form-control" name="pass" value="<?php echo"$ral[pass]"; ?>">
                      <input type="text" readonly="readonly" class="form-control" name="password" value="<?php echo"$ral[pass]"; ?>">
                    </div>
                   </div>
                 </div>

                  <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                      <label><b>Password Baru</b></label>
                      <input type="text" class="form-control" name="pass" placeholder="Masukkan Kode Password Baru">
                    </div>
                   </div>

                  
                    <div class="col-md-6">
                    <div class="form-group">
                      <label><b>Ulangin Password Baru</b></label>
                      <input type="text" class="form-control" name="pass" placeholder="Masukkan Ulangin Password Baru">
                    </div>
                   </div>

                                  
                 </div>               
                     
                    <div class="form-actions">
                    <div class="text-right">
                      <input type="submit" name="submit" class="btn btn-success" value="Simpan Data">
                      <button type="reset" class="btn btn-dark">Reset</button>
                    </div>
                    </div>

                  </form>   
                </div>
                </div>
              </div>
</div>


<?php 
if($_SERVER['REQUEST_METHOD']== "POST"){
    include"../koneksi.php";

    $query = mysqli_query($con,"UPDATE alumni SET password='$_POST[pass]' where id_alumni='$_POST[id_alumni]'");


    echo"<script language = 'JavaScript'>
         confirm('Data Berhasil Diupdate!');
         document.location='index.php?page=ganti_password'
    </script>";
}
?>            