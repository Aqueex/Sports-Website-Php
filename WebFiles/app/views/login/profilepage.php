<?php
 
$id = $_SESSION["uid"];
if(!isset($id)){
    @header("Location: ".$siteLinki."/giris");
}

$sorgu = $db->prepare("SELECT * FROM users WHERE `id` = :id");
$sorgu-> execute(array(":id"=>$id));
$sorgucek = $sorgu->fetch(PDO::FETCH_ASSOC);


if(isset($_POST['asd']))
{
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];
    $passwordd = $_POST["passwordd"];
    $password = $_POST["password"];
    
        
        if($password == $passwordd){
            $query = "UPDATE `users` SET `nickname`=:nickname,`email`=:email,`password`=:password  WHERE `id` = :id";
            $pdoResult = $db->prepare($query);
            $sonuc2 = $pdoResult->execute(array(":nickname"=>$nickname,":email"=>$email,":password"=>$password,":id"=>$id));
            
            if($sonuc2){
            // echo("<script>window.location.href='". $siteLinki ."profil';</script>");
             echo '
             <div class="container">
    
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Dikkat!</strong> Güncelleme İşlemi Başarılı
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              </div>
              ';
            }
           
        }
        else{
            echo '
            <div class="container">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Dikkat!</strong> Şifreler Uyuşmuyor
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          </div>';
         
        }


    


}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$sql_check = $db->prepare("SELECT * FROM `ayar`");
$sql_check->execute();
$sonuc = $sql_check->fetch();
$ayarlar = $sql_check->fetch(PDO::FETCH_ASSOC);
?>


<title><?php echo $sonuc["site_ismi"] ?></title>
<link rel="shortcut icon" href="public/default/img/fastNotLogo.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
margin-top:20px;   
color: #6A797C;
background: #162427;
/* background-image: url(public/pomodoro/images/coffee.jpg) */
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}

.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
}
.account-settings .about {
    margin: 1rem 0 0 0;
    font-size: 0.8rem;
    text-align: center;
}
.card {
    background: #272E48;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
    margin-top: 40px;
}
.form-control {
    border: 1px solid #596280;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #162427;
    color: #bcd0f7;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

    </style>

</head>
<body>
      
<div class="container">
<div class="row gutters p-2">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100 ">
<div class="card-body ">
<div class="account-settings">
<div class="user-profile">
<div class="user-avatar">
<img src="public/login/profile.png" alt="">
</div>
<h5 class="user-name"><?php echo $sorgucek["nickname"] ?></h5>
<h6 class="user-email">Kayıt Tarihi: <?php echo $sorgucek["register_date"] ?></h6>
</div>

</div>
</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 ">
<div class="card h-100">
<div class="card-body">
<form action="" method="post">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<h6 class="mb-3 text-primary">Bilgilerini Güncelle</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="Street">Kullanıcı Adı</label>
<input type="text" class="form-control" id="adsoyad" name="nickname" value="<?php echo $sorgucek["nickname"] ?>">
</div>
 </div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="ciTy">E-Posta</label>
<input type="email" class="form-control" id="eposta"  name="email" value="<?php echo $sorgucek["email"] ?>">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="sTate">Şifre</label>
<input type="password" class="form-control" id="sifre"   name="password" value="<?php echo $sorgucek["password"] ?>">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="zIp">Şifre (Tekrar)</label>
<input type="password" class="form-control" id="tkrsifre"  name="passwordd" value="<?php echo $sorgucek["password"]  ?>">
</div>
</div>
</div>
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="text-right">
<button name="asd" class="btn btn-primary" >Güncelle</button>
<a type="button" class="btn btn-secondary" href="/cikis">Çıkış Yap</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>
