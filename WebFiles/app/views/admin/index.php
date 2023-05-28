<?php
/*function uploadPictures($inputName) {
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
}*/
?>



<!-- <script>
function counterAyarla(sayi) {
var counter = sayi;
localStorage.setItem("counter",counter);
}
counterAyarla(0);
function counterArttir() {
var counterr = parseInt(localStorage.getItem("counter"))+1;
localStorage.setItem("counter",counterr);
}
 </script> -->
 <?php 
$sql_check = $db->prepare("SELECT * FROM `ayar`");
$sql_check->execute();
$sonuc = $sql_check->fetch();

if(isset($_POST['submit']))
{
    $sql_check = $db->prepare("SELECT * FROM `ayar`");
    $sql_check->execute();
    $ayarlar = $sql_check->fetch(PDO::FETCH_ASSOC);
    
    $site_ismi = $_POST['site_ismi'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];

    $adres = $_POST['adres'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $whatsapp = $_POST['whatsapp'];

    if(uploadPictures('urunResimler')!="boş"){
        $urunResimler = uploadPictures('urunResimler');
        // $urunResimler = $ayarlar["img"];
        } else {
        $urunResimler = $ayarlar["img"];
        }

    // mysql query to Update data
    
    $query = "UPDATE `ayar` SET `site_ismi`=:site_ismi,`telefon`=:telefon,`email`=:email,`facebook`=:facebook,`twitter`=:twitter,`instagram`=:instagram,`whatsapp`=:whatsapp  WHERE `id` = :id";
    
    $pdoResult = $db->prepare($query);
    $id = 1;
    $sonuc2 = $pdoResult->execute(array(":site_ismi"=>$site_ismi,":telefon"=>$telefon,":email"=>$email,":facebook"=>$facebook,":twitter"=>$twitter,":instagram"=>$instagram,":whatsapp"=>$whatsapp,":id"=>$id));
//    $pdoResult->debugDumpParams();
    
    if($sonuc2)
    {
        echo 'Başarıyla güncellendi.';
        echo("<script>window.location.href='". $siteLinki ."admin';</script>");
    }else{
        echo 'ERROR Data Not Updated';
    }
}
?>






          

  <main id="main" class="main">

<div class="pagetitle">
  <h1><?php echo $sonuc["site_ismi"]; ?></h1>
  <nav>
    <ol class="breadcrumb"> 
      <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
      <li class="breadcrumb-item active">Sitenin Ayarlarını Düzenliyebilceginiz Sayfa</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Genel Ayarlar</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="POST"  enctype="multipart/form-data">
              



                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Site İsmi</label>
                  <input type="text" class="form-control" id="inputNanme4" name="site_ismi" value="<?php echo $sonuc["site_ismi"]; ?>">
                </div>

                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Telefon Numarası</label>
                  <input type="text" class="form-control" id="inputEmail4"  name="telefon" value="<?php echo $sonuc["telefon"]; ?>">
                </div>

                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Email Adresi</label>
                  <input type="email" class="form-control" id="inputPassword4" name="email" value="<?php echo $sonuc["email"]; ?>">
                </div>

                <div class="col-12">
                  <label for="inputAddress" class="form-label">Adres</label>
                  <input type="text" class="form-control" id="inputAddress" name="adres" value="<?php echo $sonuc["adres"]; ?>">
                </div>
                
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Facebook Adresi</label>
                  <input type="text" class="form-control" id="inputAddress" name="facebook" value="<?php echo $sonuc["facebook"]; ?>"">
                </div>

                <div class="col-12">
                  <label for="inputAddress" class="form-label">Twitter Adresi</label>
                  <input type="text" class="form-control" id="inputAddress" name="twitter" value="<?php echo $sonuc["twitter"]; ?>">
                </div>

                <div class="col-12">
                  <label for="inputAddress" class="form-label">İnstagram Adresi</label>
                  <input type="text" class="form-control" id="inputAddress" name="instagram" value="<?php echo $sonuc["instagram"]; ?>">
                </div>
                
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Whatsapp İletişim Adresi</label>
                  <input type="text" class="form-control" id="inputAddress" name="whatsapp" value="<?php echo $sonuc["whatsapp"]; ?>">
                </div>
                

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="submit">Güncelle</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>


</main><!-- End #main -->
