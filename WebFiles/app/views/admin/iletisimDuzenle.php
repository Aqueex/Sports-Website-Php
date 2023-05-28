<?php
    $idd = $_GET["id"];

    $randevu = $db->prepare("SELECT * FROM iletisim WHERE `id` = :id");
    $randevu-> execute(array(":id"=>$idd));
    $randevucek = $randevu->fetch(PDO::FETCH_ASSOC);
?>

<?php

if(isset($_POST['sil']))
{
$delProcess = $db->prepare("DELETE FROM iletisim WHERE id=?"); 
$deleteCat = $delProcess->execute(array($idd));
echo("<script>window.location.href='". $siteLinki ."admin/iletisim';</script>");

}
?>

</main><!-- End #main -->

<main id="main" class="main">

<div class="pagetitle">
  <h1><?php echo $sonuc["site_ismi"]; ?></h1>
  <nav>
    
  </nav>
</div><!-- End Page Title -->
<div class="aquex">
                    <strong>Email:</strong>
                    <p><?php echo $randevucek["email"] ?></p>
                    <a href="mailto:<?php echo $randevucek["email"] ?>" target="_blank" class="btn btn-primary" >Mail Gönder</a>
                    <br>
                    <strong>İsim:</strong>
                    <p><?php echo $randevucek["name"] ?></p>
                    <strong>Konu:</strong>
                    <p><?php echo $randevucek["konu"] ?></p>
                    <strong>Mesajı:</strong>
                    <p><?php echo $randevucek["mesaj"] ?></p>

                    <br>
                    <form action="" method="POST">
                    <button class="btn btn-primary" name="sil">Sil</button>
                    </form>
                </div>

<style>
    .aquex{
        width: auto;
        overflow: hidden;
        word-wrap:break-word;
    }
</style>

            </div>
        </main>
    </div>


</div>
          </div>


</main><!-- End #main -->


                <!-- content -->
                <!-- breadcrumb -->

                
               
                