<?php
session_start();
$_SESSION['user'] = '';
unset($_SESSION['user']);
session_unset();
session_destroy();
echo "  <script>
            alert('Anda Berhasil Keluar Dari Sistem')
            document.location='../';
        </script> ";
?>