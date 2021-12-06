<?php
  include "connection/koneksi.php";
?>
<html>
	<head>
		<title>SOLOWS</title>
  <style>
    .area{
    margin:10px;
    border-radius: 10px;  
    background-color: black;
    width: 80%;
    height: 70px;
    opacity: 0.7;
    }

  </style>  
  <link href="style/css/bootstrap.min.css" rel="stylesheet">  
  <link href="style/css/style-primary.css" rel="stylesheet">   
	<link href="style/css/freelancer.min.css" rel="stylesheet">

	<script src="style/js/jquery-3.2.1.min.js"/></script>
	<script src="style/js/bootstrap.min.js"/></script>
	</head>
	<body>
 
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
  			<div class="container">
    			<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>

      			<a class="navbar-brand" href="index.php?page=home"><img style=margin-top:-35px; src="gambar/logos.png" width="100"></a>
            <a class="navbar-brand" href="index.php?page=home"> SOLOWS</a>
    			</div>
    			
    			<form class="navbar-form navbar-right" method="POST" action="index.php?page=cari">
      			<div class="form-group">
        			<input type="text" name="cari" class="form-control" placeholder="Masukkan Kota Nama Kota">
      			</div>
      			<button type="submit" name="cari" class="btn btn-default">Cari</button>
    			</form>
    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    			<ul class="nav navbar-nav navbar-right">
    				  <li class="hidden"><a href="#page-top"></a></li>
      				<li><a href="index.php?page=home">Beranda</a></li>
      				<li><a href="index.php?page=wisata">Wisata</a></li>
      				<li><a href="index.php?page=event">Acara</a></li>
    			</ul>
    		</div>
  			</div>
		</nav>

		<div class="container">
		  <?php	
        if(isset($_GET['page'])){
          $page=$_GET['page'];

          switch ($page) {
            case 'home':
              include "page/home.php";
              break;
            case 'wisata':
              include "page/wisata.php";
              break;
            case 'event':
              include "page/event.php";
              break;
            case 'detailwisata':
              include "page/detailwisata.php";
              break;
            case 'detailevent':
              include "page/detailevent.php";
              break;
            case 'cari':
              include "page/cari.php";
              break;
            /*case 's-komentarevent':
              include "page/s-komentarevent.php";
              break;
            case 's-komentarwisata':
              include "page/s-komentarwisata.php";
              break;*/               
            default:
              echo "halaman tidak ditemukan";
              break;
          }
        } else{
          include "page/home.php";
        }
		  ?>

     
		</div>

   <div class="footer">  
          <center>    
            <p {style:font-size=12;}>Copyright, 2019 SOLOWS (Solo Wisata dan Sekitarnya) by administrator</p>
          </center>
    </div>  
	</body>
</html>			