<!--
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
        <meta charset="UTF-8">
		<title>Cubicle Gigglers - Лаптопи</title>
		
	</head>
	
	<body>
-->
<?php
    $pageTitle='Лаптопи';
    include  "$_SERVER[DOCUMENT_ROOT]/cubicgig/header.php";
?>
			
			<!-- START breadcrumbs -->
			<ul id="breadcrumb">
				<li> <a href="index.php"> Начало </a> </li>
                <li> <a href="products.php"> Продукти </a> </li>
				<li> <a href="laptops.php"> Лаптопи </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			<!-- START Product tile -->
			<div class="featured_product_tile">
                <a href="./products/laptops/product_asusrogg752vs.php">
	                <img class="featured_product_image" src="img/products/laptops/AsusRogG752VS-GC118D1.png" alt=""/>
					<span class="featured_product_name">ASUS ROG G752VS</span>
					<span class="featured_product_description">Intel Core i7-6700HQ<br>
																NVIDIA GeForce GTX 1070<br>
																16GB DDR4<br>
																256GB SSD NVMe + 1TB HDD<br></span>
					<span class="featured_product_price">€2499.90</span>
				</a>
			</div>
            <form>
	            <select class="select" name="quantity">
	              <option value="1">1</option>
	              <option value="2">2</option>
	              <option value="3">3</option>
	              <option value="4">4</option>
	            </select>
   				<input type="button" value="Купи">
            </form>
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
            <form>
            <select class="select" name="quantity">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <input type="button" value="Купи">
            </form>
			<!-- END Product tile -->

			<!-- START Product tile -->
			<div class="featured_product_tile">
                <a href="./products/laptops/product_AppleMacBookPro13.php">
                    <img class="featured_product_image" src="img/products/laptops/AppleMacBookPro132.png" alt=""/>
					<span class="featured_product_name">Apple Mac Pro 13</span>
					<span class="featured_product_description">Подходящ е за фризби.</span>
					<span class="featured_product_price">€1.99</span>
				</a>
			</div>
            <form>
                <select class="select" name="quantity">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
                <input id="laptop3" type="button" value="Купи">
            </form>
			<!-- END Product tile -->
			
			<!-- START Product tile -->
			<div class="featured_product_tile">
				<a href="./products/laptops/product_acerF5-573G.php">
                    <img class="featured_product_image" src="img/products/laptops/acerF5-573G1.png" alt=""/>
					<span class="featured_product_name">Acer Aspire F5-573G</span>
					<span class="featured_product_description">Intel Core i5-7200U<br>
																NVIDIA GeForce GT 940MX<br>
																8GB DDR4<br>
																1TB HDD</span>
					<span class="featured_product_price">€599.90</span>
				</a>
			</div>
            <form>
                <select class="select" name="quantity">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
                <input type="button" value="Купи">
            </form>
			<!-- END Product tile -->

			<!-- START Product tile -->
			<div class="featured_product_tile">
				<a href="./products/laptops/product_LenovoIdeaPad700-15.php">
                    <img class="featured_product_image" src="img/products/laptops/LenovoIdeaPad700-151.png" alt=""/>
					<span class="featured_product_name">Lenovo IdeaPad 700-15</span>
					<span class="featured_product_description">4-ядрен, 2.60 -3.50 GHz<br>
																1TB HDD <br>
																Умерено игрово натоварване<br>
																2.30 кг.</span>
					<span class="featured_product_price">€749.90</span>
				</a>
			</div>
            <form>
                <select class="select" name="quantity">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
               <input type="button" value="Купи">
           </form>
			<!-- END Product tile -->

			<!-- START Product tile -->
			<div class="featured_product_tile">
				<a href="./products/laptops/product_ASUSROGGX700VO.php">
                    <img class="featured_product_image" src="img/products/laptops/AsusRogG752VS1.png" alt=""/>
					<span class="featured_product_name">ASUS ROG GX700VO-TRITON</span>
					<span class="featured_product_description">със система за течно охлаждане<br>
																	Intel Core i7-6820HK<br>
																	512GB SSD (2x 256GB)<br>
																	17.3-инчов (43.94 см.)</span>
					<span class="featured_product_price">€3700.00</span>
				</a>
			</div>
            <form>
                <select class="select" name="quantity">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
                <input id="laptop3" type="button" value="Купи">
            </form>
			<!-- END Product tile -->				

			</div>
			<!-- END page body -->

		<?php 
		include  'footer.php';
		?>
		</div>
	</body>
	
</html>