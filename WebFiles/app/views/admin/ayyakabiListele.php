
<main id="main" class="main">

<div class="pagetitle">
  <h1><?php echo $sonuc["site_ismi"]; ?></h1>
  <nav>
    <ol class="breadcrumb"> 
      <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
      <li class="breadcrumb-item active">Ayakkabı</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="col-lg-15">
<?php

if(isset($_POST['sil']))
{
  $idd = $_POST['sil'];
$delProcess = $db->prepare("DELETE FROM ayakkabilar WHERE id=?"); 
$deleteCat = $delProcess->execute(array($idd));
echo("<script>window.location.href='". $siteLinki ."admin/ayyakabi';</script>");


}
?>


<?php 
               $yazılar = $db->prepare("SELECT * FROM ayakkabilar");
               $yazılar->execute();
               $yazıcek = $yazılar->fetchAll(PDO::FETCH_ASSOC);
               $yazı_say = $yazılar->rowCount();

               if($yazı_say){
                foreach ($yazıcek as $row) {
                $resimlerExp = explode(";",$row["img"]);
?>

            <div class="card">
  <img src="<?php echo($resimlerExp[0]); ?> "  class="card-img-top" alt="...">


  <form action="" method="POST"  class="btn btn-danger">
                    <button class="btn btn-primary" value="<?php echo $row['id'] ?>" class="btn btn-danger" name="sil"><i class="ri-delete-bin-2-fill "></i> </button>
                    </form>
            </div>


            <?php
            }
        }
        ?>





</div>


</main><!-- End #main -->


