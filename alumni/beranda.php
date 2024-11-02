<?php include "../koneksi.php";
$sqla = mysqli_query($con, "SELECT * FROM alumni WHERE usern= '$_SESSION[usern]' ");
$alumnidb = mysqli_fetch_array($sqla);

?>


        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Beranda</li>
            </ol>
          </div><h5>Selamat Datang Di Tracer Study UNUSIA , <?php echo "$alumnidb[nama]" ?></h5>
       

        <p></p>

         <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">MANAJEMEN INFORMATIKA</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">68</div>
                       <div class="mt-2 mb-0 text-muted text-xs">
                        <span>Alumni</span>                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-graduation-cap fa-2x " style="color: red"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">TEKNIK INFORMATIKA</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">28</div>
                       <div class="mt-2 mb-0 text-muted text-xs">
                        <span>Alumni</span>                      
                      </div>                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-graduation-cap fa-2x " style="color: lightblue"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">SISTEM INFORMASI</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0</div>
                       <div class="mt-2 mb-0 text-muted text-xs">
                        <span>Alumni</span>                      
                      </div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-graduation-cap fa-2x " style="color: fuchsia"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">DESAIN KOMUNIKASI VISUAL</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span>Alumni</span>                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-graduation-cap fa-2x" style="color: lightgrey"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
