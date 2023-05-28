
<main id="main" class="main">

<div class="pagetitle">
  <h1><?php echo $sonuc["site_ismi"]; ?></h1>
  <nav>
    <ol class="breadcrumb"> 
      <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
      <li class="breadcrumb-item active">Gelen Randevu İstekleri</li>
    </ol>
  </nav>
  <p><strong> Mesajlar 20 Harf İle Sınırlandırılmıştır Tümünü Görmek İçin Daha Fazlası Butonuna Tıklayınız</p></strong>
</div><!-- End Page Title -->
<div class="row">


<?php
            $iletisim = $db->prepare("SELECT * FROM iletisim");
            $iletisim->execute();
            $iletisimcek = $iletisim->fetchAll(PDO::FETCH_ASSOC);
            foreach ($iletisimcek as $row) {                 
                
            ?>
               
               <div class="col col-xl-3 col-md-6 col-sm-12 p-2">
                    <div class="card shade outlined o-main">
                        <div class="text-center"><?php echo $row["email"] ?></div>
                        <hr>
                        <div class="text-center"><?php echo mb_strimwidth( $row["mesaj"],0,20, "...") ?></div>
                        <hr>
                        <div class="card-body ">
                        <a href="/admin/iletisim/edit/<?php echo $row["id"] ?>" class="btn text-center  m-1">Daha Fazlası</a>
                        </div>
                    </div>
            </div>
            
            <?php } 
?>




</div>


</main><!-- End #main -->


<script>
                function kategoriSil(id) {                    
                $.ajax({
                url: '/app/main/api/post/deleteRan.php',
                type: 'POST',
                dataType: 'json',
                data: { id: id },
                success: function (gelenveri) {
                    window.location.reload();
                },
                error: function (hata) {
                    alert("Bir hata oluştu")
                    window.location.reload();
                }

                });
            }
    </script>