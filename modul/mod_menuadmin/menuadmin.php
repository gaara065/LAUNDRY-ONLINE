<?php


$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';


switch($_GET['act']){
  // Tampil Banner
  default:

 



?>

<div class="content-wrapper">

       <section class="content">
	   
	   
	<div class="row">
	
	

		  <a href="media.php?module=daydata">
		  <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><i class="fa fa-file-text-o"></i></h4>

              <p>Laporan </p>
            </div>
    
            
          </div>
        </div>
		</a>
	
	
	
	   <!-- ./col -->
	     <a href="media.php?module=menuadmin&act=master">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
             <h4><i class="fa fa-list-ol"></i></h4>

              <p>Master </p>
            </div>
     
           
          </div>
        </div>
			</a>

      </div>

	
  </div>
  
  
  
  
  
      <?php
  
  
  
  
  break;
	

	
		
	
case "master":
 
 ?>
 
 
 
 <div class="content-wrapper">

       <section class="content">
	   
	   
	<div class="row">
	
	

		  <a href="media.php?module=daftaritem">
		  <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><i class="fa fa-file-text-o"></i></h4>

              <p>Item </p>
            </div>
    
            
          </div>
        </div>
		</a>
	
	
	
	   <!-- ./col -->
	     <a href="media.php?module=daftarharga">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
             <h4><i class="fa fa-pencil-square-o"></i></h4>

              <p>Paket </p>
            </div>
     
           
          </div>
        </div>
		</a>
		
		
			  <a href="media.php?module=daftaruser"><div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h4><i class="fa fa-user-plus"></i></h4>

              <p>Kasir</p>
            </div>
    
            
          </div>
        </div>
		</a>
		
		
				  <a href="media.php?module=smsnya"><div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h4><i class="fa fa-envelope-o"></i></h4>

              <p>SMS</p>
            </div>
    
            
          </div>
        </div>
		</a>
		
		
		
	<a href="media.php?module=daftartoko"><div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h4><i class="fa fa-home"></i></h4>

              <p>Toko</p>
            </div>

          </div>
        </div>
		</a>
		


	<a href="media.php?module=daftarsif"><div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h4><i class="fa fa-male"></i></h4>

              <p>Sif</p>
            </div>

          </div>
        </div>
		</a>		
		
		

      </div>

	
  </div>
 
 
 
 
 
  <?php
 
  



  break;
  
  
  
  
 }
 

?>


  