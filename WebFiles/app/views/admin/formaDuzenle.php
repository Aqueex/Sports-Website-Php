<?php
function uploadPictures($inputName) {
    $counter = 0;
    $uploadedFiles = "";
if($_FILES[$inputName]["size"][0] != 0){
foreach ($_FILES[$inputName]["tmp_name"] as $key => $tmp_name) {

$temp = $_FILES[$inputName]["tmp_name"][$key];
$dosya_adi = $_FILES[$inputName]["name"];
$uret=array("di_","ji_","tal_","me_","di_","a_");
$sayi_tut=rand(1,10000);
$yeni_ad="/public/default/img/cdn/".basename($dosya_adi[$key]);

if(empty($temp))
{
break;
}

$counter++;
$UploadOk = true;

if($UploadOk == true){
move_uploaded_file($temp,$_SERVER['DOCUMENT_ROOT']."/".$yeni_ad);
$uploadedFiles = $uploadedFiles.";".$yeni_ad;
}
}
$uploadedFiles=substr($uploadedFiles, 1);
return($uploadedFiles);
} else {
return("boş");
}
}
?>

<?php

if(isset($_POST['sil']))
{
    $idd = $_GET["id"];

$delProcess = $db->prepare("DELETE FROM forma WHERE id=?"); 
$deleteCat = $delProcess->execute(array($idd));
echo("<script>window.location.href='". $siteLinki ."admin/forma';</script>");

}
?>



<?php
    $idd = $_GET["id"];

    $kategoriler = $db->prepare("SELECT * FROM forma WHERE `id` = :id");
    $kategoriler-> execute(array(":id"=>$idd));
    $kategorilercek = $kategoriler->fetch(PDO::FETCH_ASSOC);
?>


<?php
if(isset($_POST['submit']))
{
  
    
    $ders_adi = $_POST['ders_adi'];
    $ders_aciklamasi = $_POST['ders_aciklamasi'];
    $fiyat = $_POST['fiyat'];

    if(uploadPictures('urunResimler')!="boş"){
        $urunResimler = uploadPictures('urunResimler');
        // $urunResimler = $ayarlar["img"];
        } else {
        $urunResimler = $kategorilercek["img"];
        }

    // mysql query to Update data
    
    $query = "UPDATE `forma` SET `text`=:textt,`aciklama`=:aciklama,`img`=:img,`fiyat`=:fiyat   WHERE `id` = :id";
    
    $pdoResult = $db->prepare($query);
    
    $sonuc = $pdoResult->execute(array(":textt"=>$ders_adi,":aciklama"=>$ders_aciklamasi,":img"=>$urunResimler,":fiyat"=>$fiyat,":id"=>$idd));
    
    if($sonuc)
    {        echo("<script>window.location.href='". $siteLinki ."admin/forma';</script>");
    }else{
      echo("<script>window.location.href='". $siteLinki ."admin/forma';</script>");
    }
}
?>






          

  <main id="main" class="main">

<div class="pagetitle">
  
  <nav>
  </nav>
</div><!-- End Page Title -->
<div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="POST"  enctype="multipart/form-data">

              <div class="col-12">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Lütfen Logo Seçiniz</label>
                  <div class="col-sm-10">
                    <input name="urunResimler[]"  class="form-control" type="file" id="formFile">
                  </div>
              </div>


          

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Adı:</label>
                  <input type="text" class="form-control" id="inputNanme4" name="ders_adi" value="<?php echo $kategorilercek["text"]; ?>">
                </div>

                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Aciklama</label>
                  <input type="text" class="form-control" id="inputEmail4"  name="ders_aciklamasi" value="<?php echo $kategorilercek["aciklama"]; ?>"">
                </div>


                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Fiyat</label>
                  <input type="text" class="form-control" id="inputEmail4"  name="fiyat" value="<?php echo $kategorilercek["fiyat"]; ?>"">
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="submit">Güncelle</button>
                  <button type="submit" class="btn btn-primary" name="sil">Sil</button>
                </div>
              </form><!-- Vertical Form -->
              
            </div>
          </div>


</main><!-- End #main -->
