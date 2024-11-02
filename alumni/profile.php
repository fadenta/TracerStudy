<?php
include "../koneksi.php";

$sqlal = mysqli_query($con, "SELECT * FROM alumni WHERE id_alumni = $_GET[id]");
$ral = mysqli_fetch_array($sqlal);

?>
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
             
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                      <label><b>NIM Alumni</b></label>
                      <input type="hidden" class="form-control" name="id_alumni" value="<?php echo"$ral[id_alumni]"; ?>">
                      <input type="text" readonly="readonly" class="form-control" name="nim_alumni" value="<?php echo"$ral[nim_alumni]"; ?>">
                    </div>
                   </div>

                    <div class="col-md-6">
                    <div class="form-group">
                      <label><b>Nama Alumni</b></label>
                      <input type="text" class="form-control" name="nm_alumni" value="<?php echo"$ral[nm_alumni]"; ?>">
                    </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">
                      <label><b>Angkatan</b></label>
                      <select class="form-control" name="angkatan">
                      <option selected>Pilih Angkatan</option>
                      <?php

                       if ($ral['angkatan']== "1999") echo "<option value = '1999' selected> 1999 </option>";
                       else echo "<option value='1999'>1999</option>";

                       if ($ral['angkatan']== "2000") echo "<option value = '2000' selected> 2000 </option>";
                       else echo "<option value='2000'>2000</option>";

                       if ($ral['angkatan']== "2001") echo "<option value = '2001' selected> 2001 </option>";
                       else echo "<option value='2001'>2001</option>";

                       if ($ral['angkatan']== "2018") echo "<option value = '2018' selected> 2018 </option>";
                       else echo "<option value='2018'>2018</option>";

                       ?>           
                       </select>
                    </div>
                    </div>

                   

                    <div class="col-md-6">
                    <div class="form-group">
                      <label><b>Prodi</b></label>
                      <select class="form-control" name="prodi">
                      <option selected>Pilih prodi</option>
                      <?php

                       if ($ral['prodi']== "MANAJEMEN INFORMATIKA") echo "<option value = 'MANAJEMEN INFORMATIKA' selected> MANAJEMEN INFORMATIKA </option>";
                       else echo "<option value='MANAJEMEN INFORMATIKA'>MANAJEMEN INFORMATIKA</option>";

                       if ($ral['prodi']== "TEKNIK INFORMATIKA") echo "<option value = 'TEKNIK INFORMATIKA' selected> TEKNIK INFORMATIKA </option>";
                       else echo "<option value='TEKNIK INFORMATIKA'>TEKNIK INFORMATIKA</option>";

                       if ($ral['prodi']== "SISTEM INFORMASI") echo "<option value = 'SISTEM INFORMASI' selected> SISTEM INFORMASI </option>";
                       else echo "<option value='SISTEM INFORMASI'>SISTEM INFORMASI</option>";

                       if ($ral['prodi']== "DESAIN KOMUNIKASI VISUAL") echo "<option value = 'DESAIN KOMUNIKASI VISUAL' selected> DESAIN KOMUNIKASI VISUAL </option>";
                       else echo "<option value='DESAIN KOMUNIKASI VISUAL'>DESAIN KOMUNIKASI VISUAL</option>";

                       ?>           
                       </select>
                    </div>
                    </div>
                                     
                 </div>

                 <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">
                      <label><b>Email Alumni</b></label>
                      <input type="email" class="form-control" name="email" value="<?php echo"$ral[email]"; ?>">
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="custom1" value="Laki - Laki" name="gender" <?php if($ral['gender']== 'Laki - Laki') echo "checked = 'checked'" ?>> 
                    <label class="custom-control-label" for="custom1">Laki - Laki</label>
                    </div>&nbsp;&nbsp;
                                                    
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="custom2" value="Perempuan" name="gender" <?php if($ral['gender']== 'Perempuan') echo "checked = 'checked'"  ?>> 
                    <label class="custom-control-label" for="custom2">Perempuan</label>
                    </div>
                                                    
                    </div>
                    </div>
                    </div>


                    <div class="col-md-12">
                    <div class="form-group">
                    <label><b>Alamat Alumni</b></label>
                    <textarea class="form-control" name="alamat" value="<?php echo"$ral[alamat]"; ?>"></textarea>
                    </div>
                    </div>

                  </div>
                     <br>
                    <div class="form-actions">
                    <div class="text-right">
                      <input type="submit" name="submit" class="btn btn-success" value="Update Data">
                      <button type="reset" class="btn btn-dark">Reset</button>
                    </div>
                    </div>

                  </form>
                </div>
              </div>



<?php 
if($_SERVER['REQUEST_METHOD']== "POST"){
    include"../koneksi.php";

    $query = mysqli_query($con,"UPDATE alumni SET nim_alumni='$_POST[nim_alumni]', nm_alumni='$_POST[nm_alumni]', angkatan='$_POST[angkatan]',prodi='$_POST[prodi]',email='$_POST[email]',gender='$_POST[gender]',alamat='$_POST[alamat]' where id_alumni='$_POST[id_alumni]'");


    echo"<script language = 'JavaScript'>
         confirm('Data Berhasil Diupdate!');
         document.location='index.php?page=data_alumni'
    </script>";
}
?>            