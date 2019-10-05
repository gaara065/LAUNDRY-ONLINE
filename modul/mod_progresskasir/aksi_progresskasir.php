<?php

include "../../koneksi.php";
include "../../fungsi_thumb.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='update1'){



$affected_rows = $db->exec("UPDATE transaksi 
SET status_transaksi='1'
 
where id_transaksi='$_GET[id]'");


  
  header('location:../../media.php?module=progresskasir');
}


if ($act=='update2'){



$affected_rows = $db->exec("UPDATE transaksi 
SET status_transaksi='2'
 
where id_transaksi='$_GET[id]'");
	


?>
<script>
var myWindow;
myWindow = window.open("sms.php?id=<?php echo "$_GET[id]";?>", "_blank", "width=300, height=500");
window.location = '../../media.php?module=progresskasir&act=tab2';
</script>
<?php

//header('location:../../media.php?module=progresskasir&act=tab2'); 



}



if ($act=='update3'){



$affected_rows = $db->exec("UPDATE transaksi 
SET status_transaksi='3'
 
where id_transaksi='$_GET[id]'");


$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE a.id_toko=b.id_toko and a.id_pelanggan=c.id_pelanggan and a.id_transaksi='$_GET[id]'
	  ");
$data8 = $stmt->fetch(PDO::FETCH_ASSOC);


if ($data8['bayar']=='0')
{
	 header('location:../../media.php?module=tambahlaundry&act=bayarnanti&id='.$data8['id_transaksi'].'');
	 
}
else
{
	 header('location:../../media.php?module=progresskasir&act=tab3');
}
  

}


?>
