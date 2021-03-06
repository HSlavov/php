
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
        <meta charset="UTF-8">
		<title>Cubicle Gigglers - Acer Extensa X2610G</title>
		
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
				<li> <a href="/cubicgig/computers.php"> Компютри </a> </li>
                <li> <a href="product_AcerExtensaX2610G.php"> Acer Extensa X2610G </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>Acer Extensa X2610G</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/computers/AcerExtensaX2610G2.png"/>
                         </div>
                         <div id="product_description">
                             <p>Intel Celeron J3060 (2-ядрен, 1.60 - 2.48 GHz, 2MB кеш)</p>
                             <p>4GB (1x 4096MB) - DDR3, 1600MHz</p>
                             <p>500GB HDD 2.5" (5400 оборота/минута)</p>
                             <p>без SSD</p>
                             <p>без оптично устройство</p>
                                    <div id="product_price">
                                        <p>Цена: €149.00</p>
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
