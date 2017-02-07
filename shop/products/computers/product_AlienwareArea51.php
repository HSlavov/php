
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Alienware Area-51</title>
		
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
                <li> <a href="product_AlienwareArea51.php"> Alienware Area-51 </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>Alienware Area-51</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/computers/acercb32.png"/>
                         </div>
                         <div id="product_description">
                             <p>Intel Core i7-5960X (8-ядрен, 3.00 - 3.50GHz, 20MB кеш)</p>
                             <p>64GB (4x 16384MB) - DDR4, 2133 Mhz</p>
                             <p>2x NVIDIA GTX TITAN (12GB GDDR5) SLI</p>
                             <p>12ТB HDD</p>
                             <p>2TB PCIe SSD</p>
                                    <div id="product_price">
                                        <p>Цена: €9499.50</p>
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
