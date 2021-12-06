<br>
<br>
<br>
<br>
<br>
<div class="container">
      <center>
      <h2>Acara</h2>
    </center>
    <hr>
      <div class="row"> <!-- pembuka row1 -->
<?php
    $event=mysql_query("SELECT *from event ORDER BY id_event desc");
    while ($r_event=mysql_fetch_assoc($event)){

    echo"<div class=col-md-4>
        <div class=konten>
        <div class=kotak>
        <a href=index.php?page=detailevent&id_event=".$r_event['id_event'].">
          <img src='".$r_event['foto_event']."' width=100% height=180>
         </a>     
          <h3>".$r_event['nama_event']."</h3>
          <h4>".$r_event['kota']."</h4>
          <h4>".$r_event['tanggal_event']."</h4>
          <p>".substr($r_event['deskripsi_event'],0,25)."...<a href=index.php?page=detailevent&id_event=".$r_event['id_event'].">Lihat Selengkapnya...</a></p>
         </div>
        </div>
        </div>";
    }  
?>
    </div>
</div>    