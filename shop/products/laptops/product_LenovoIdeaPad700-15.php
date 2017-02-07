
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Lenovo IdeaPad 700-15</title>
		
	</head>
	
	<body>
		<div id="page_wrapper">
			
		<?php  
			include  "$_SERVER[DOCUMENT_ROOT]/cubicgig/header.php";
		?>

			<!-- START breadcrumbs -->
			<ul id="breadcrumb">
				<li> <a href="/cubicgig/index.php"> Начало </a> </li>
                <li> <a href="/cubicgig/products.php"> Продукти </a> </li>
				<li> <a href="/cubicgig/laptops.php"> Лаптопи </a> </li>
                <li> <a href="product_LenovoIdeaPad700-15.php"> Lenovo IdeaPad 700-15 </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>Acer Aspire F5-573G</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/laptops/LenovoIdeaPad700-152.png"/>
                         </div>
                         <div id="product_description">
                             <p>Intel Core i7-6700HQ (4-ядрен, 2.60 -3.50 GHz, 6MB кеш)</p>
                             <p>NVIDIA GeForce GTX 950M (4GB DDR3)</p>
                             <p>1TB HDD (5400 оборотa/минута)</p>
                             <p>15.6-инчов (39.62 см.) - 1920x1080 (Full HD), IPS матов</p>
                             <p>2.30 кг</p>
                                    <div id="product_price">
                                        <p>Цена: €749.90</p>
                                    </div>
                                    <form>
                                        <input id="product_quantity" name="quantity" type="number" min="1" max="5" value="1">
                                  		<input id="product_buy" type="button" value="Купи">
                                    </form>
                         </div>
                        
                         
                         
                         <!-- END Product name -->

			</div>
			<!-- END page body -->

		<?php 
			include  "$_SERVER[DOCUMENT_ROOT]/cubicgig/footer.php";
		?>
		</div>
	</body>
	
</html>
