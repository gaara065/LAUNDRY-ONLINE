<?php	
echo "jangan tutup halaman ini";
include "../../koneksi.php";

$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE a.id_toko=b.id_toko and a.id_pelanggan=c.id_pelanggan and a.id_transaksi='$_GET[id]'
	  ");
$data8 = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt5 = $db->query("SELECT * FROM format_sms a ");
$rowa5 = $stmt5->fetch(PDO::FETCH_ASSOC);


$isinya=str_replace("[nama_pelanggan]",$data8['nama_pelanggan'], $rowa5['isi']);
$isinya2=str_replace("[nota]",$data8['nota'], $isinya);
$isinya3=str_replace("[nama_toko]",$data8['nama'], $isinya2);


    include "../../vendor/autoload.php";

 $clients = new SMSGatewayMe\Client\ClientProvider("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0MzM4MDE1NCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY0NzQ0LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.PDzUPxHHTZ-MZ3-wHkLU7bCWZioWag51L_krZRFSUT4");

  $sendMessageRequest = new SMSGatewayMe\Client\Model\SendMessageRequest([
     'phoneNumber' => $data8['hp'], 'message' => $isinya3, 'deviceId' => 106894
  ]);

  $sentMessages = $clients->getMessageClient()->sendMessages([$sendMessageRequest]);
	

//echo "$data8[hp] $isinya3";

	?>
	
	<script type="text/javascript"> 

window.close();
</script>