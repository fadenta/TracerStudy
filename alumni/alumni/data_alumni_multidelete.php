<?php
include"../koneksi.php";
    if(isset($_POST["id_alumni"])){
    	foreach($_POST["id_alumni"] as $id) {
    		$query = "DELETE from alumni where id_alumni=?";
    		$del = $con->prepare($query);
    		$del->bind_param("i", $id);
    		$del->execute();

    	}   	
    }
    echo "<script language = 'JavaScript'>
      confirm('Data Berhasil Dihapus!');
      document.location='index.php?page=data_alumni';
      </script>";
?>