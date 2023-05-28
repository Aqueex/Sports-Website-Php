
<link rel="stylesheet" href="public/default/css/sportkit.css">

	

	<main>	
		<div class="container-lg">
	        <h1 class="title">Forma </h1>

	        <div class="row">
			<?php
            $dersler = $db->prepare("SELECT * FROM forma");
            $dersler->execute();
            $derslercek = $dersler->fetchAll(PDO::FETCH_ASSOC);
            foreach ($derslercek as $row) {                 
            ?>

	            <div class="cricket-card col-lg-6 col-md-6">
	                <div class="kit-card">
	                    <div class="img-background">
						<img class="img-fluid img-width" src="<?php echo $row["img"] ?>">
	                    </div>
	                    <div class="kit">
		                    <div class="kit-name">Başlık: <?php echo $row["text"] ?></div>
	                    </div>
	                    <div class="kit-desc">Aciklama: <?php echo $row["aciklama"] ?></div><br>
						<div class="kit-desc">Fiyat: <?php echo $row["fiyat"] ?></div>
	                    
	                </div>
	            </div>
	          <?php } 
?>
	        </div>
		</div>
	</main>
	
	