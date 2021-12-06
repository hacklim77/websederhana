<br>
<br>
<br>
<br>
<br>
      <div class="row"> <!-- pembuka row1 -->
<?php
  
    $event=mysql_query("SELECT *from event where id_event='$_GET[id_event]'");
    while ($r_event=mysql_fetch_assoc($event)):?>

    <div class=col-md-12>
        <div class=thumbnail>
         <a href= >
          <img src="<?php echo $r_event['foto_event'] ?>" width=576>
         </a> 
         <div class=caption>     
          <h3><?php echo $r_event['nama_event'] ?></h3>
          <h4><?php echo $r_event['kota'] ?></h4>
          <h4><?php echo $r_event['tanggal_event'] ?></h4>
          <div class=paragraph>
          <p align=justify><?php echo $r_event['deskripsi_event'] ?></p>
          </div>
         </div>
        </div>
        </div>
    </div>
  
    <div class="row">
      <div class="col-md-6">
        <h3>Penilaian Event</h3>  
        <form method="post" action="">
        <input type="hidden" name="id_event" value="<?php echo $r_event['id_event'] ?>">  
        <h5>Beri Penilaian untuk Event ini! tinggal di geser saja!</h5>
        <input type="range" name="rate" min="0" max="10" id="myRange">
        <p align="center" style=color:red>NILAI: <span id="demo"></span></p>
        <p align="center">Min 0 ---------------------- Max 10</p>
        <script>
          var slider = document.getElementById("myRange");
          var output = document.getElementById("demo");
          output.innerHTML = slider.value;

          slider.oninput = function() {
          output.innerHTML = this.value;
        }
        </script>
        <h5>Komentar</h5>
        <textarea name="komentar" id="komentar" cols="65" rows="5"></textarea>
        <br><br>
        <input type="submit" class="btn btn-default" name="kirim" value="Kirim">
        </form>
    </div>
    <?php
    if(isset($_POST['kirim']))
    mysql_query("INSERT INTO t_komen(rate,komentar,id_event) VALUES ('".$_POST['rate']."','".$_POST['komentar']."','".$_POST['id_event']."')"); 
    ?>
    <div class="col-md-6">
        <h3>Komentar Pengunjung</h3>            
        <?php
         $r=mysql_query("SELECT * from t_komen where id_event = ".$r_event['id_event']." ");
        while ($r_komen=mysql_fetch_assoc($r)){

        echo "
      <div class=media>
        <div class=media-left media-top>
          <img src=./gambar/anonymus.png class=media-object style=width:60px>
        </div>
        <div class=media-body>
        <h6 class=media-heading>Anonymus</h6>    
        <h4>Rate <b style=color:red>".$r_komen['rate']."</b>/10</h4>
        <p font-size=14>".$r_komen['komentar']."</p>
        </div>
    </div>";
  }
      ?>
<?php endwhile; ?>
    
  </div>
</div>

<hr>
  <center>
    <h4>Konten Lainnya</h4>
  </center>
  <div class="row">
    <div class="col-md-6">
      <?php
    $wisata=mysql_query("SELECT *from wisata ORDER BY id_wisata desc limit 2");
    while ($r_wisata=mysql_fetch_assoc($wisata)){

    echo"<div class=col-xs-6>
        <center>
        <div class=konten>
        <div class=kotak>
          <a href=index.php?page=detailwisata&id_wisata=".$r_wisata['id_wisata']."><img src='".$r_wisata['foto_wisata']."' width=100% height=180></a>
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

    <div class="col-md-6">
      <?php
    $event=mysql_query("SELECT *from event ORDER BY id_event desc limit 2");
    while ($r_event=mysql_fetch_assoc($event)){

    echo"<div class=col-xs-6>
       <center>
        <div class=konten>
        <div class=kotak>
        <a href=index.php?page=detailevent&id_event=".$r_event['id_event'].">
          <img src='".$r_event['foto_event']."' width=100% height=180>
         </a>     
          <h3>".$r_event['nama_event']."</h3>
          <h4>".$r_event['kota']."</h4>
          <h4>".$r_event['tanggal_event']."</h4>
         <a href=index.php?page=detailevent&id_event=".$r_event['id_event'].">Lihat Selengkapnya...</a>
         </div>
        </div>
         </center>
        </div>";
    }  
    ?>
    </div>    
  </div>   