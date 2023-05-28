<?php 
$sql_check = $db->prepare("SELECT * FROM `ayar`");
$sql_check->execute();
$sonuc = $sql_check->fetch();
$ayarlar = $sql_check->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sports</title>

	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	
	<link rel="icon" href="public/default/favicons/favicon.ico">

	
	<link rel="stylesheet" href="public/default/css/index.css">

</head>
<body>

	<header>

		
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<div class="container">
					<a class="navbar-brand" href="/"> Sports</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
      					<span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbar-content">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item ps-3">
								<a href="#" class="nav-link active">ANASAYFA</a>
							</li>
							<li class="nav-item dropdown ps-3">
			          			<a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown">
					           ÜRÜNLER
					         	</a>
						        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
						            <li><h3 class="dropdown-header">KRİKET</h3></li>
						            <li><a onclick="loadProductsPages('C2')" class="dropdown-item" href="/ayakkabi">AYAKKABILAR</a></li>
						            <li><hr class="dropdown-divider"></li>
						            <li><h3 class="dropdown-header">FUTBOL</h3></li>
						            <li><a onclick="loadProductsPages('F1')" class="dropdown-item" href="/forma">Forma</a></li>

									
						        </ul>
						    </li>

							<li class="nav-item ps-2">
								<a href="#forms" class="nav-link">İLETİŞİM HATTI</a>
							</li>
							
							<li class="nav-item ps-2">

								<?php 
                                if(isset($_SESSION['uid'])){
                                    echo "<a href='/profil' class='nav-link'>HESAP AYARLARI</a>";
                                  }
                                  else{
									echo "<a href='/login' class='nav-link'>KAYIT OL</a>";
                                  }
                                ?>  
							</li>
						</ul>
					</div>
				</div>

			</nav>
		</div>
		
	</header>
