<br>
<br>
<br>
<br>
<br>
<div class="container">
      <center>
      <h2>PENCARIAN</h2>
    </center>
    <hr>
      <div class="row"> <!-- pembuka row1 -->
<?php
    error_reporting(0);
    $wisata= $_POST['cari']; //get the nama value from form
    $q = "SELECT * from wisata where kota like '%$wisata%' "; //query to get the search result
    $r = mysql_query($q); //execute the query $q
    while ($data = mysql_fetch_array($r)) { 
    echo"<div class=col-md-4>
        <div class=konten>
        <div class=kotak>
        <a href=index.php?page=cari>
          <img src='".$data['foto_wisata']."' width=100% height=180>     
          <h3>".$data['nama_wisata']."</h3>
          </a> 
         </div>
        </div>
        </div>";
    }  
?>

<?php
    $event= $_POST['cari']; //get the nama value from form
    $q = "SELECT * from event where kota like '%$event%' "; //query to get the search result
    $result = mysql_query($q); //execute the query $q
    while ($data = mysql_fetch_array($result)) { 

    echo"<div class=col-md-4>
        <div class=konten>
        <div class=kotak>
        <a href=index.php?page=cari>
          <img src='".$data['foto_event']."' width=100% height=180>     
          <h3>".$data['nama_event']."</h3>
          </a> 
         </div>
        </div>
        </div>";
    }  
?>
    </div>
</div>    