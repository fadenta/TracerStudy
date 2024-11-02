<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['usern'])) {
    header('Location: ../'); // Redirect to the login page if not logged in
    exit();
}

include "../koneksi.php";

// Fetch user information from the alumni table
$sqla = mysqli_query($con, "SELECT * FROM alumni WHERE usern= '$_SESSION[usern]' ");
$alumnidb = mysqli_fetch_array($sqla);

// Check if user exists
if (!$alumnidb) {
    echo "User not found!";
    exit();
}

// Example function to check if user has access rights
function hasAccess($alumnidb) {
    // You can implement your own logic here based on user role or attributes
    // For example, you might check for specific roles or permissions
    // return $alumnidb['role'] === 'alumni'; // Example check
    return true; // Allow access by default, adjust as needed
}

if (!hasAccess($alumnidb)) {
    echo "You do not have access to this page.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../assets/img/logo/logo.png" rel="icon">
    <title>Universitas Nahdlatul Ulama Indonesia - Tracer Study</title>
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/ruang-admin.min.css" rel="stylesheet">
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/logo/ucic.png">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <img src="../assets/img/logo/ucic3.png">
                </div>
                <div class="sidebar-brand-text mx-1">Tracer Study</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=beranda">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Master Data
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
                    <i class="fas fa-user-graduate"></i>
                    <span>Alumni</span>
                </a>
                <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-4 collapse-inner rounded">
                        <h6 class="collapse-header">Data Alumni</h6>
                        <a class="collapse-item" href="index.php?page=data_alumni">Data Keseluruhan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Pekerjaan</span>
                </a>
                <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Pekerjaan</h6>
                        <a class="collapse-item" href="index.php?page=data_pekerjaan">Data Pekerjaan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-graduation-cap"></i>
          <span>Loker</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Loker</h6>
            <a class="collapse-item" href="index.php?page=data_loker">Data Loker</a>
          </div>
        </div>
      </li>
      </li>
            <hr class="sidebar-divider">
        </ul>
        <!-- Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <!-- Topbar alerts, messages, and user dropdown -->
                        <!-- Same as in your original code -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="../assets/img/boy.png" style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small"><?php echo htmlspecialchars($alumnidb['usern']); ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];

                    switch ($page) {
                        case 'beranda':
                            include "beranda.php";
                            break;
                        case 'data_alumni':
                            include "alumni/data_alumni.php";
                            break;
                        case 'data_alumni_input':
                            include "alumni/data_alumni_input.php";
                            break;
                        case 'data_alumni_edit':
                            include "alumni/data_alumni_edit.php";
                            break;
                        case 'data_alumni_delete':
                            include "alumni/data_alumni_delete.php";
                            break;
                        case 'data_alumni_multidelete':
                            include "alumni/data_alumni_multidelete.php";
                            break;
                        case 'data_alumni_detail':
                            include "alumni/data_alumni_detail.php";
                            break;
                        case 'data_alumni_import':
                            include "alumni/data_alumni_import.php";
                            break;
                        case 'data_pekerjaan':
                            include "pekerjaan/data_pekerjaan.php";
                            break;
                        case 'data_pekerjaan_input':
                            include "pekerjaan/data_pekerjaan_input.php";
                            break;
                        case 'data_pekerjaan_edit':
                            include "pekerjaan/data_pekerjaan_edit.php";
                            break;
                        case 'data_pekerjaan_delete':
                            include "pekerjaan/data_pekerjaan_delete.php";
                            break;
                        case 'data_pekerjaan_multidelete':
                            include "pekerjaan/data_pekerjaan_multidelete.php";
                            break;
                        case 'data_pekerjaan_view':
                            include "pekerjaan/data_pekerjaan_view.php";
                            break;
                        case 'ganti_password':
                            include "ganti_password.php";
                            break;
                        case 'profile':
                            include "profile.php";
                            break;
                            case 'data_loker';
 include "loker/data_loker.php";
 break;

 case 'data_loker_input';
 include "loker/data_loker_input.php";
 break;

 case 'data_loker_edit';
 include "loker/data_loker_edit.php";
 break;

 case 'data_loker_delete';
 include "loker/data_loker_delete.php";
 break;

 case 'data_loker_multidelete';
 include "loker/data_loker_multidelete.php";
 break;

 case 'data_loker_detail';
 include "loker/data_loker_detail.php";
 break;

 case 'data_loker_import';
 include "loker/data_loker_import.php";
 break;

                        default:
                            echo "Maaf, Halaman Tidak Ditemukan";
                    }
                } else {
                    include "beranda.php"; 
                }
                ?>   

                <!-- Modal Logout -->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Logout!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Anda Yakin Ingin Keluar Dari Sistem?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
                                <a href="logout.php" class="btn btn-primary">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Logout -->

            </div>
            <!-- End of Content Wrapper -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../assets/js/ruang-admin.min.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/demo/datatables-demo.js"></script>
</body>
</html>
