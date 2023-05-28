




<main id="main" class="main">

<div class="pagetitle">
  <h1><?php echo $sonuc["site_ismi"]; ?></h1>
  <nav>
 
  </nav>
</div>
<div class="row">


       
        


            <?php
            $kategoriler = $db->prepare("SELECT * FROM forma");
            $kategoriler->execute();
            $kategorilercek = $kategoriler->fetchAll(PDO::FETCH_ASSOC);
            foreach ($kategorilercek as $row) {                 
                
            ?>
               
               <div class="col col-xl-3 col-md-6 col-sm-12 p-2">
                    <div class="card shade outlined o-main">
                    <img class="img-fluid img-width" src="<?php echo $row["img"] ?>">

                        <div class="text-center">Başlik: <?php echo $row["text"] ?></div>
                        <div class="text-center">Aciklama: <?php echo $row["aciklama"] ?></div>

                        <div class="card-body ">
                            <a href="/admin/form/edit/<?php echo $row["id"] ?>" class="btn text-center  m-1">Düzenle</a>
                        </div>
                    </div>
            </div>
            
            <?php } 
?>
    </div>


</main><!-- End #main -->
