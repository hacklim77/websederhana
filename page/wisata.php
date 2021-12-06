<br>
<br>
<br>
<br>
<br>
<div class="container">
    <center>
      <h2>Tempat Wisata</h2>
    </center>
    <hr>
      <div class="row"> <!-- pembuka row1 -->
<?php
    $wisata=mysql_query("SELECT *from wisata ORDER BY id_wisata desc");
    while ($r_wisata=mysql_fetch_assoc($wisata)){

    echo"<div class=col-md-4>
        <div class=konten>
        <div class=kotak>
        <a href=index.php?page=detailwisata&id_wisata=".$r_wisata['id_wisata'].">
          <img src='".$r_wisata['foto_wisata']."' width=100% height=200>
        </a>       
          <h3>".$r_wisata['nama_wisata']."</h3>
          <h4>".$r_wisata['kota']."</h4>
          <p>".substr($r_wisata['deskripsi_wisata'],0,25)."...<a href=index.php?page=detailwisata&id_wisata=".$r_wisata['id_wisata'].">Lihat Selengkapnya...</a><p>
         </div>
        </div>
        </div>";
    }  
?>
	</div>
</div>		