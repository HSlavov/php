<!--
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Продукти</title>
		
	</head>
	
	<body>
-->
		
			
		<?php
                        $pageTitle='Продукти';
			include  'header.php';
		?>

			<!-- START breadcrumbs -->
			<ul id="breadcrumb">
				<li> <a href="index.php"> Начало </a> </li>
				<li> <a href="products.php"> Продукти </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			<!-- START Product tile -->
			<div class="featured_product_tile">
                    <a href="./products/softwre/product_softuerАЕ.php">
                    <img class="featured_product_image" src="img/products/software/ае1.png" alt=""/>
					<span class="featured_product_name">Adobe After Effects</span>
					<span class="featured_product_description">Създайте повече за по-кратко време<br>
					пренасяне позволява да предоставите кино<br>
					визуални ефекти и графики в движение</span>
					<span class="featured_product_price">€1270.00</span>
				</a>
			</div>
			<!-- END Product tile -->

			<!-- START Product tile -->
			<div class="featured_product_tile">
				<a href="./products/monitors/product_monitorEizoColorEdge.php">
                    <img class="featured_product_image" src="img/products/monitors/EizoColorEdgeCG3181.png" alt=""/>
					<span class="featured_product_name">Eizo ColorEdge CG318</span>
					<span class="featured_product_description">31.1" IPS<br>
													4K DCI (4096 x 2160)<br>
													3-портов USB хъб<br>
													HDMI</span>
					<span class="featured_product_price">€5025.00</span>
				</a>
			</div>
			<!-- END Product tile -->

			<!-- START Product tile -->
			<div class="featured_product_tile">
				<a href="./products/monitors/product_monitorAsusMX279.php">
                    <img class="featured_product_image" src="img/products/monitors/MX279H1.png" alt=""/>
					<span class="featured_product_name">Asus MX279H</span>
					<span class="featured_product_description">27" IPS<br>
															Full HD<br>
															вградени говорители<br>
															2x HDMI</span>
					<span class="featured_product_price">€259.00</span>
				</a>
			</div>
			<!-- END Product tile -->
						
			<!-- START Product tile -->
			<div class="featured_product_tile">
                <a href="./products/laptops/product_HP255G4.php">
                    <img class="featured_product_image" src="img/products/laptops/HP255G41.png" alt=""/>
					<span class="featured_product_name">HP 255 G4</span>
					<span class="featured_product_description">AMD E1-6015<br>
																AMD Radeon R2<br>
																4GB DDR3<br>
																500GB HDDс</span>
					<span class="featured_product_price">€159.90</span>
				</a>
			</div>
			<!-- END Product tile -->

			<!-- START Product tile -->
			<div class="featured_product_tile">
				<a href="./products/accessories/product_accesoriesTaipan.php">
                    <img class="featured_product_image" src="img/products/accessories/taipan1.png" alt=""/>
					<span class="featured_product_name">Razer Taipan</span>
					<span class="featured_product_description">4G Dual Sensor система<br>
						Razer Synapse 2.0 активирана<br>
						9 Hyperesponse програмируеми бутона<br>
						1000Hz Ultrapolling / 1ms време за реакция</span>
					<span class="featured_product_price">€99.00</span>
				</a>
			</div>
			<!-- END Product tile -->				

			</div>
			<!-- END page body -->

		<?php 
		include  'footer.php';
		?>
		</div>
	</body>
	
</html>