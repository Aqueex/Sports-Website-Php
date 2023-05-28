<?php

    function uploadPictures($inputName) {
        $counter = 0;
        $uploadedFiles = "";

foreach ($_FILES[$inputName]["tmp_name"] as $key => $tmp_name) {

/*    $extension=substr($_FILES[$inputName]["name"],strrpos($_FILES[$inputName]["name"],'.')+1);
    $dosya_adi = $_FILES[$fileName]["name"];
    $uret=array("di_","ji_","tal_","me_","di_","a_");
    $sayi_tut=rand(1,10000);
    $yeni_ad="public/default/img/cdn/".$uret[rand(0,5)]."_".$sayi_tut."_.".$extension;
    move_uploaded_file($_FILES[$fileName]["tmp_name"],$_SERVER['DOCUMENT_ROOT']."/".$yeni_ad);
    return("/".$yeni_ad);

*/

$temp = $_FILES[$inputName]["tmp_name"][$key];
$dosya_adi = $_FILES[$inputName]["name"];
    $uret=array("di_","ji_","tal_","me_","di_","a_");
    $sayi_tut=rand(1,10000);
    $yeni_ad="/public/default/img/cdn/".$uret[rand(0,5)]."_".$sayi_tut."_.".$dosya_adi[$key];     

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
  }
?>




 <?php 


if(isset($_POST['submit']))
{


    $urunResimler = uploadPictures('urunResimler');
    $baslik = $_POST["text"];
    $aciklama = $_POST["aciklama"];
    $fiyat = $_POST["fiyat"];

    $sorgu = $db->prepare('INSERT INTO `forma`(`img`,`text`,`aciklama`,`fiyat`) VALUES (?,?,?,?)');
    $sorgu->bindParam(1,$urunResimler,PDO::PARAM_STR);
    $sorgu->bindParam(2,$baslik,PDO::PARAM_STR);
    $sorgu->bindParam(3,$aciklama,PDO::PARAM_STR);
    $sorgu->bindParam(4,$fiyat,PDO::PARAM_STR);

    $sorgu->execute();
//    $pdoResult->debugDumpParams();
$lastInsertId = $db->lastInsertId();
if ($lastInsertId>0) {
//echo "<script>location.href='$siteLinki/admin/manage/projects?islem=basarili';</script>";
echo("<script>window.location.href='". $siteLinki ."admin/forma';</script>");

} else {
//echo "<script>location.href='$siteLinki/admin/manage/projects?islem=hatali';</script>";
echo("<script>window.location.href='". $siteLinki ."admin/forma';</script>");

}

}
?>



<main id="main" class="main">

<div class="pagetitle">
  <h1><?php echo $sonuc["site_ismi"]; ?></h1>
  <nav>
   
  </nav>
</div><!-- End Page Title -->
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Forma</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="POST"  enctype="multipart/form-data">
              <div class="col-12">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Lütfen Foto</label>
                  <div class="col-sm-10">
                    <input name="urunResimler[]"  class="form-control" type="file" id="formFile">
                  </div>
              </div>
                
              <div class="col-12">
                  <label for="inputEmail4" class="form-label">Başlık</label>
                  <input type="text" class="form-control" id="inputEmail4"  name="text" >
              </div>

              <div class="col-12">
                  <label for="inputEmail4" class="form-label">Aciklama</label>
                  <input type="text" class="form-control" id="inputEmail4"  name="aciklama" >
              </div>



              <div class="col-12">
                  <label for="inputEmail4" class="form-label">Fiyat</label>
                  <input type="text" class="form-control" id="inputEmail4"  name="fiyat" >
              </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="submit">Ekle</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>


