<br>
<br>
<br>
<br>
<br>
<div class="row"><!-- pembuka row2-->
				<div class="col-lg-12"> 
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
  				<!-- Indicators -->
  				<ol class="carousel-indicators">
    				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    				<li data-target="#myCarousel" data-slide-to="1"></li>
    				<li data-target="#myCarousel" data-slide-to="2"></li>
  				</ol>

  				<!-- Wrapper for slides -->
  				<div class="carousel-inner">
   					<div class="item active">
      					<img src="gambar/gb2.png">
      					<div class="carousel-caption">
                  <center>
                  <div class="area">
        					<h3>WELCOME TO SOLO</h3>
       			 			<p>SOLO is always so much fun!</p>
      					  </div>
                  </center> 
                </div>
    				</div>

    				<div class="item">
      					<img src="gambar/gb1.png">
      					<div class="carousel-caption">
                  <center>
                  <div class="area">
        					<h3>AIR TERJUN JUMOG</h3>
        					<p>Beautiful Place!</p>
                  </div>
                  </center>  
      					</div>
    				</div>

    				<div class="item">
      					<img src="gambar/gb3.png">
      					<div class="carousel-caption">
                  <center>
                  <div class="area">
        					<h3>CANDI CETO</h3>
        					<p>The History!</p>
                  </div>
                  </center>
     				 	</div>
    				</div>
  				</div>

  				<!-- Left and right controls -->
  				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="right carousel-control" href="#myCarousel" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right"></span>
    				<span class="sr-only">Next</span>
  				</a>
			</div>
			</div>			
			</div>
      </div> <!-- penutup row2 -->
    
    <div class=container>
      <div class=row> <!-- pembuka row1 -->  
      <hr>
      <center>
        <h2>Tempat Wisata</h2>
      </center>
          
    <?php
    $wisata=mysql_query("SELECT *from wisata ORDER BY id_wisata desc limit 3");
    while ($r_wisata=mysql_fetch_assoc($wisata)){

		echo"<div class=col-md-4>
        <center>
        <div class=konten>
        <div class=kotak>
          <a href=index.php?page=detailwisata&id_wisata=".$r_wisata['id_wisata']."><img src='".$r_wisata['foto_wisata']."' width=100% height=250></a>
				  <h3>".$r_wisata['nama_wisata']."</h3>
          <h4>".$r_wisata['kota']."</h4>
          <a href=index.php?page=detailwisata&id_wisata=".$r_wisata['id_wisata'].">Lihat Selengkapnya</a>
        </div>
        </div>
        </center>
      </div>";
    }  
		?>
    </div>
    <div class=row> <!-- pembuka row1 -->
      <hr>
      <center>
        <h2>Acara</h2>
       
    <?php
    $event=mysql_query("SELECT *from event ORDER BY id_event desc limit 3");
    while ($r_event=mysql_fetch_assoc($event)){

    echo"<div class=col-md-4>
        <div class=konten>
        <div class=kotak>
          <img src='".$r_event['foto_event']."' width=100% height=200>    
          <h3>".$r_event['nama_event']."</h3>
          <h4>".$r_event['kota']."</h4>
          <h4>".$r_event['tanggal_event']."</h4>
          <a href=index.php?page=detailevent&id_event=".$r_event['id_event'].">Lihat Selengkapnya</a>
        </div>
        </div>
        </div>";
    }  
    ?>
  </div>
</div>
</div>    