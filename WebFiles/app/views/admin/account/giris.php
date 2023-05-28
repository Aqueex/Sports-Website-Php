<?php
if(isset($_SESSION['uidd'])){
    @header("location:/admin");
}
    if($_POST){
            $email = $_POST["email"];
    
            $password = $_POST["sifre"];
    
            $kullanici = $db->prepare("SELECT * FROM yoneticiler WHERE mail=? and sifre=?");
    
            $kullanici->execute([$email, $password]);
    
            $kullanicisay = $kullanici->rowCount();
			
           if(!$email == "" && !$password == ""){
            if ($kullanicisay > 0){
                $_SESSION['uidd'] = $kullanici->fetchAll(PDO::FETCH_ASSOC)[0]['id'];
                $_SESSION['kullanicibilgiler'] = $email;
                echo '<div class="alert alert-success"> 
                <b>Tebrikler!</b> Giriş İşlemi Başarılı 1 Saniye İçinde Yönlendirilceksiniz</div>';
                echo('<script>window.location.href="'.$siteLinki.'admin/";</script>');
            } 
            else{
                echo '<div class="alert alert-danger">
                <b>Dikkat!</b> Girdiginiz Bilgiler Yanlış Tekrar Deneyiniz</div>';
    
            }
           }
           else{
            echo '<div class="alert alert-warning">
            <b>Dikkat!</b> Boş Bırakmayınız</div>';
           }
        }
    ?>





    <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                  <img width="400px" src="/public/default/img/fastnot_arkabeyazli.png" alt="">
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <form method="POST" class="row g-3 needs-validation" novalidate >

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Lütfen Email Giriniz</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Şifre</label>
                      <input type="password" name="sifre" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Lütfen Şifre Giriniz</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                      </div>
                    </div>
                    <div class="col-12">
                      <button name="submit" class="btn btn-primary w-100" type="submit">Giriş Yap</button>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->