<?php


$aksi="modul/mod_daftarsif/aksi_daftarsif.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



?>


<div class="content-wrapper">
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
		  
		  
          <!-- /.box -->

          <div class="box table-responsive no-padding">
		  
            <div class="box-header">
     		       <div class="pull-right box-tools">
               <a href='media.php?module=menuadmin'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button>
				</a>
              </div>
			  
			  <a href='media.php?module=daftarsif&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
     
<th width="30%">Toko</th>   	  
<th width="30%">Nama</th> 

												 
                                                   
													 
													     
													      
														  
														   <th width="8%">Edit/Hapus</th>
                </tr>
                </thead>
                <tbody>
				
				
													<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT *
      FROM sif_petugas a, toko b
	  where a.id_toko=b.id_toko
	  order by a.id_toko asc
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
	         <tr class='gradeX' >
                                                 
													<td>$data[nama]</td>
														<td>$data[nama_petugas]</td>
												

<td align='center'>  
<a href='media.php?module=daftarsif&act=ubah&id=$data[id_petugas]'>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i></button>
													</a>
													
												
											        "; ?>
													
<a href="<?php echo "$aksi?module=daftarsif&act=hapus&id=$data[id_petugas]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus data Ini?')">
													
													<button type='button' class='btn btn-danger btn-sm'
                        title='Hapus'>
						<i class='fa fa-times'></i></button>
                                      
													<?php echo "
													</td>
                                                   
                                                </tr>
	 ";
	   $no++;
   }
   
   
			?>

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
    <?php
  
  
  
  
  break;
	

	
		
	
case "tambah":
 
 ?>


<div class="content-wrapper">
    
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
 		       <div class="pull-right box-tools">
               <a href='media.php?module=menuadmin'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';

$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=daftarsif&act=tambah"; ?>' enctype='multipart/form-data'>
	
	
	

              <!-- /.form group -->
		

<div class="form-group">
                  <label>Pilihan Toko</label>
                 <select class="form-control" name="id_toko">	  
			  <?php
$stmt = $db->query('SELECT * FROM toko');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_toko]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama_petugas" value=''>
                </div>

		
				
					

				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
		
		
		
		
		
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
	
	

    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
    <?php
 
  



  break;

 case "ubah":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
       		       <div class="pull-right box-tools">
               <a href='media.php?module=menuadmin'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';



$stmt = $db->query("SELECT * FROM sif_petugas a, toko b where a.id_petugas='$_GET[id]' and a.id_toko=b.id_toko");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=daftarsif&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_petugas" value="<?php echo $rowa['id_petugas']; ?>"/>

 <div class="form-group">
                  <label>Pilihan Toko</label>
                 <select class="form-control" name="id_toko">	
		  <?php
echo "
	     <option value='$rowa[id_toko]'>$rowa[nama]</option>
	   
	   ";				 

$stmt = $db->query('SELECT * FROM toko');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_toko]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama_petugas" value='<?php echo "$rowa[nama_petugas]";  ?>'>
                </div>

			
				
				
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
		
		
		
		
		
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
	
	

    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
    <?php
 
  



  break;

 }
 

?>
