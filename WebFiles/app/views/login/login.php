<?php
if(isset($_SESSION['uid'])){
  @header("Location: ".$siteLinki."profil");
}
if(isset($_POST['submit']))
{
  $email = $_POST["email"];
    
  $password = $_POST["password"];

  $kullanici = $db->prepare("SELECT * FROM users WHERE email=? and password=?");

  $kullanici->execute([$email, $password]);

  $kullanicisay = $kullanici->rowCount();

 if(!$email == "" && !$password == ""){
  if ($kullanicisay > 0){
      $_SESSION['uid'] = $kullanici->fetchAll(PDO::FETCH_ASSOC)[0]['id'];
      $_SESSION['kullanicibilgiler'] = $email;
      echo '
      <div class="">
      <div class="alert alert-success" style="margin-bottom: 0px">
      <b>Başarılı!</b> Giriş Yapıldı Yönlendiriliyorsunuz...</div>
      </div>';
  
      header("refresh:1, url=/");
  } 
  else{
      
    echo '
    <div class="">
    <div class="alert alert-warning" style="margin-bottom: 0px">
    <b>Dikkat!</b> Girdiginiz Bilgiler Uyuşmuyor</div>
    </div>';

  }
 }
 else{
  echo '
  <div class="">
  <div class="alert alert-warning" style="margin-bottom: 0px">
  <b>Dikkat!</b> Boş Bırakmayınız</div>
  </div>';

 }
}
 



if(isset($_POST['submit2']))
{
  $nickname = $_POST["nickname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $mevcutTarih = date('Y-m-d H:i:s');


            $bak=$db->prepare("SELECT * FROM users WHERE email=?"); //PDO ıle yazılan sorgulama
            $bak->execute([$email]);
            $varmi=$bak->rowCount();

if($varmi==1){
  echo '
  <div class="">
  <div class="alert alert-warning" style="margin-bottom: 0px">
  <b style="text-center">Hata! </b>Bu Mail Daha Önce Kayıt Olmuş</div>
  </div>';
}
else{
 

    $password == $password;

            if(!$nickname == "" && !$email == "" && !$password == ""){
               $Kayıtsorgu = $db->prepare("INSERT INTO users (nickname,email,password,register_date) VALUES (?,?,?,?)"); 
               $Kayıtsorgu->execute([$nickname,$email,$password,$mevcutTarih]);
               $KayıtsorguSay = $Kayıtsorgu->rowCount();



               if($KayıtsorguSay > 0){
                $kullanici = $db->prepare("SELECT * FROM users WHERE email=? and password=?");
                $kullanici->execute([$email, $password]);

                $_SESSION['uid'] = $kullanici->fetchAll(PDO::FETCH_ASSOC)[0]['id'];
                $_SESSION['kullanicibilgiler'] = $email;
                echo '
                <div class="">
                <div class="alert alert-warning" style="margin-bottom: 0px">
                <b>Tebrikler!</b> Kayıt İşlemi Başarılı  Yönlendiriliyorsunuz. Lütfen Giriş Yapın</div>
                </div>';
                
                echo('<script>
                setTimeout(function(){
                    window.location.href="/";
                },2000)
                </script>');
               
            
            }
               else{
                echo '
                <div class="">
                <div class="alert alert-warning" style="margin-bottom: 0px">
                <b>Dikkat!</b> Kayıt İşlemi Başarısız</div>
                </div>';
               }
            }
            else{
              echo '
              <div class="">
              <div class="alert alert-warning" style="margin-bottom: 0px">
              <b>Dikkat!</b> Boş Bırakmayınız</div>
              </div>';
            }
}






          
        }

    ?>


<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="public/login/style.css" />
    <link rel="shortcut icon" href="public/default/img/fastNotLogo.png" type="image/x-icon">
		<title>Berk Sports</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

                  <!-- LOGİN -->
            <form action="" method="POST" class="sign-in-form">
            <h2 class="title">Giriş Yap</h2>


            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="text" placeholder="E-mail" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Şifre" />
            
            </div>
          

            <input type="submit" name="submit" value="Giriş Yap" class="btn solid" />
            
          </form>
          <!-- LOGİN -->


          <!-- REGİSTER -->
          <form action="#" method="POST" class="sign-up-form">
            <h2 class="title">Kayıt Ol</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="nickname" type="text" placeholder="Ad, Soyad" />
            </div>
                      <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Email" />
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Şifre" />
            </div>
                  

            <input type="submit" name="submit2" class="btn" value="Kayıt Ol"/>
            
          </form>

          <!-- REGİSTER -->
        </div>
      </div>

  </body>
</html>

<style>
  body{
    
  }
</style>