
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - ASUS ROG GX700VO-TRITON</title>
		
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
                <li> <a href="product_ASUSROGGX700VO.php"> ASUS ROG GX700VO-TRITON </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>ASUS ROG GX700VO-TRITON</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/laptops/AsusRogG752VS2.png"/>
                         </div>
                         <div id="product_description">
                             <p>NVIDIA GeForce GTX 980 (8GB GDDR5)</p>
                             <p>512GB SSD (2x 256GB)</p>
                             <p>17.3-инчов (43.94 см.) - 1920x1080 (Full HD), IPS матов</p>
                             <p>Тежко игрово натоварване</p>
                             <p>3.60 кг</p>
                                    <div id="product_price">
                                        <p>Цена: €3700.00</p>
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
