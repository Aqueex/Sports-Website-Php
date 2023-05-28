
<?php 
if(isset($_POST['submit']))
{
$ad = $_POST['isim'];
$email = $_POST['eposta'];
$konu = $_POST['konu'];
$mesaj = $_POST['mesaj'];

$sorgu = $db->prepare('INSERT INTO `iletisim`(`name`,`konu`,`mesaj`,`email`) VALUES (?,?,?,?)');
$sorgu->bindParam(1,$ad,PDO::PARAM_STR);
$sorgu->bindParam(2,$konu,PDO::PARAM_STR);
$sorgu->bindParam(3,$mesaj,PDO::PARAM_STR);
$sorgu->bindParam(4,$email,PDO::PARAM_STR);

$sorgu->execute();
$lastInsertId = $db->lastInsertId();
if ($lastInsertId>0) {

echo("<script>window.location.href='/';</script>");

} else {
echo("<script>window.location.href='/';</script>");

}

}
?>

<main>

		<div class="landing-page bg-landing" style="background-image: url(public/default/img/landing/light_bg.jpeg);">

			
			<div class="container" id="toggle-switch">
				
			
				

			</div>

			<div class="container-md d-flex justify-content-end align-items-center p-0">
				<h1 class="title">%100 hassasiyet ve tutkuyla mı oynuyorsunuz?!</h1>
			</div>

		</div>

		
		<div class="container-lg">
			<div class="row">
				<div class="col-md-4">
					<div class="sport-card">
						<img src="public/default/img/landing/a1.png" alt="football-img" class="img-fluid">
						<a href="/ayakkabi" class="btn btn-sport-card col-12"> SATIN AL</a>

					</div>

				</div>
				<div class="col-md-1 offset"></div>
				<div class="col-md-7">
					<div class="sport-intro-card">
						<h1 class="sport-name">Ayakkabi</h1>
						<h3 class="sport-desc">
							ACİKLAMA AYAKKABI
						</h3>
						<h5 class="sport-quote">BUNA HAZIR MISINIZ!</h5>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="sport-intro-card">
						<h1 class="sport-name">FORMA</h1>
						<h3 class="sport-desc">SPORTS'tan Türkiye'ye tüm hayranlar ve oyuncular, en iyi aksesuarlar ve kitlerle donatın.</h3>
						<h5 class="sport-quote"></h5>
					</div>
				</div>
				<div class="col-md-1 offset"></div>
				<div class="col-md-4">
					<div class="sport-card">
						<img src="public/default/img/landing/a2.png" alt="cricket-img" class="img-fluid">
						
						<a href="/forma" class="btn btn-sport-card col-12">Hadi Başlayalım</a>

					</div>
				</div>
			</div>
		</div>
	</main>
	
	<footer>

		
		<section id="forms">
			<form action="" method="POST" class="row g-0">

				<div class="col-lg-6 d-flex align-items-center justify-content-center px-5">
					<h1>İLETŞİME GEÇ</h1>
				</div>

				<div class="col-lg-6 px-5">
					<div class="name-section mb-4">
						<div class="col-6">
						    <input type="text" placeholder="İsim" class="form-control" name="isim">
						</div>

						<div class="col-6">
						    <input type="email" placeholder="E-Posta" class="form-control" name="eposta">
						</div>
					</div>


					<div class="text-holder mb-4">
					    <input type="text" placeholder="Konu" class="form-control" name="konu" >
					</div>

					<div class="text-holder mb-4">
						<textarea class="form-control" rows="6" placeholder="Mesaj..." name="mesaj"></textarea>
					</div>

					<button class="col-12 btn mb-5 btn-form btn-sport-card" name="submit">Gönder</button>
				</div>

			</form>
			
		</section>
