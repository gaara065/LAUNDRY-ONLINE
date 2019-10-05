<?php

include "../../koneksi.php";
include "../../fungsi_thumb.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from jenis_cucian where id_jenis='$_GET[id]'");




  
  header('location:../../media.php?module=daftaritem');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO jenis_cucian( nama_jenis) 

VALUES('$_POST[nama_jenis]')");

  
  header('location:../../media.php?module=daftaritem');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE jenis_cucian 
SET nama_jenis='$_POST[nama_jenis]'
 
where id_jenis='$_POST[id_jenis]'");


  
  header('location:../../media.php?module=daftaritem');
}


?>
