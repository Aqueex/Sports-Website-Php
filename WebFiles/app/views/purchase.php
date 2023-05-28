<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Sports</title>

	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	
	<link rel="icon" href="Assets/favicons/favicon.ico">

	
	<link rel="stylesheet" href="purchase.css">

</head>
<body onload="customPage()" class ="x">

	<header>

		
		<div class="container-fluid">
			
			<nav class="navbar navbar-expand-lg navbar-dark">
				<div class="container">
					<a class="navbar-brand" href="index.html"> Sports</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
      					<span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbar-content">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item ps-3">
								<a href="index.html" class="nav-link">ANASAYFA-Bizde kargolar şeffafffssssS<</a>
							</li>
							<li class="nav-item dropdown ps-3">
			          			<a class="nav-link dropdown-toggle active" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown">
					           ÜRÜNLER
					         	</a>
					         <ul class="dropdown-menu" aria-labelledby="productsDropdown">
					            <li><h3 class="dropdown-header">Cricket</h3></li>
					            <li><a onclick="loadProductsPages('C2')" class="dropdown-item" href="#">Formalar</a></li>
					            <li><a onclick="loadProductsPages('C1')" class="dropdown-item" href="#">ELDİVENLER</a></li>
					            <li><a onclick="loadProductsPages('C3')" class="dropdown-item" href="#">Bats</a></li>
					            <li><hr class="dropdown-divider"></li>
					            <li><h3 class="dropdown-header">Football</h3></li>
					            <li><a onclick="loadProductsPages('F2')" class="dropdown-item" href="#">FORMALAR</a></li>
					            <li><a onclick="loadProductsPages('F1')" class="dropdown-item" href="products.html">AYAKKABILAR</a></li>
					        </ul>
					        </li>
							<li class="nav-item ps-2">
								<a href="index.html#forms" class="nav-link">İLETİŞİM</a>
							</li>
						</ul>
					</div>
				</div>

			</nav>
		</div>
		
	</header>

	<main>	
		<div class="container-lg">

	        <div class="row">
	            <div class="col-lg-6">
	                <div class="purchase-card">
	                    <div class="d-flex justify-content-center">
	                        <div class="imgbackground">
	                            <img class="img-fluid" src="Assets/football_boots/Adidas_Ghosted/1.png">
	                        </div>
	                        <div class="img-container-width-sm">
	                        	<div class="imgbackground-sm">
		                            <img onclick="imgswap(1)" class="img-fluid" src="Assets/football_boots/Adidas_Ghosted/4.png">
	                        	</div>
	                        	<div class="imgbackground-sm">
		                            <img onclick="imgswap(2)" class="img-fluid" src="Assets/football_boots/Adidas_Ghosted/5.png">
	                        	</div>
	                        </div>
		                </div>
	                    <div class="d-flex justify-content-center hor-img">
                            <div class="img-container-width imgbackground">
                                <img onclick="imgswap(3)" class="img-fluid" src="Assets/football_boots/Adidas_Ghosted/2.png">
                            </div>
                            <div class="img-container-width imgbackground">
                                <img onclick="imgswap(4)" class="img-fluid" src="Assets/football_boots/Adidas_Ghosted/3.png">
		                    </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-1 offset">
	            	
	            </div>
	            <div class="col-lg-5">
	                <h1 id="purchase-title">Adidas X Ghosted</h1>
	                <p id="purchase-desc">Hızlı, yeterince hızlıydı. Bu adidas Ghosted ile hazırlanın ve herkesi hayalet haline getirin.</p>
	                <p class="brand"><span id="purchase-brand">adidas</span>  <img id="tick" src="Assets/landing/tick.png"/> </p>
	                <div id="purchase-price" class="d-flex">
	                    <h2>TL</h2>
	                    <h2 id="price-rupee">4,999.00</h2>
	                    <p>(incl. taxes)</p>
	                </div>
	                <div class="star-container d-flex">
	                	<i class="fas fa-star" onclick="choose_star(1)"></i>
	                	<i class="fas fa-star" onclick="choose_star(2)"></i>
	                	<i class="fas fa-star" onclick="choose_star(3)"></i>
	                	<i class="fas fa-star" onclick="choose_star(4)"></i>
	                	<i class="far fa-star" onclick="choose_star(5)"></i>
	                </div>
	                <div id="purchase-colors">
	                    <h3>Bedenler</h3>
	                    <div class="color-container d-flex">
		                    <button class="color-circle btn-product-card" onclick="choose_size(0)">S</button> 
		                    <button class="color-circle btn-product-card-outline" onclick="choose_size(1)">M</button> 
		                    <button class="color-circle btn-product-card-outline" onclick="choose_size(2)">L</button> 
		                    <button class="color-circle btn-product-card-outline" onclick="choose_size(3)">XL</button> 
	                    </div>
	                </div>
	                <div class="btns">
	                    <button class="col-6 btn-product-card-outline">SATIN AL</button>
	                    <button class="col-6 btn-product-card">SEPETE EKLE</button>
	                </div>             
	            </div>
	            </div>
	        </div>
	    </div>

	             
	</main>
	
	<footer>
		
		<div class="social-icons">
			<i class="fa-2x fab fa-facebook-f"></i>
			<i class="fa-2x fab fa-twitter"></i>
			<i class="fa-2x fab fa-instagram"></i>
			<i class="fa-2x fas fa-envelope"></i> 
		</div>
		<p>&copy; Copyright 2021 <span>Sports</span></p>
	</footer>

	
	
</body>
</html>