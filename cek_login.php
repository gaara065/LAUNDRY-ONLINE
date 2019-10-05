<?php
include "koneksi.php";


$username = $_POST['username'];
$pass     = $_POST['password'];



$stmt = $db->query("SELECT * FROM user WHERE username='$username' AND password='$pass'");
$r = $stmt->fetch(PDO::FETCH_ASSOC);
$ketemu = $stmt->rowCount();


// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();




  $_SESSION['namauser']     = $r['username'];

$_SESSION['status']     = $r['status'];
$_SESSION['id_toko']     = $r['id_toko'];

  
if ($_SESSION['status']=='1' or $_SESSION['status']=='2')
{	
  header('location:media.php?module=home');
}
else if ($_SESSION['status']=='3')
{	
  header('location:media.php?module=menuadmin');
}
else if ($_SESSION['status']=='4')
{	
  header('location:media.php?module=menukasir');
}

}
else{
	
	// include "index.php";
  header('location:media.php?module=login&id=1');
}

?>
