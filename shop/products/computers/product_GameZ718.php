
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Game Z718</title>
		
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
                <li> <a href="product_GameZ718.php"> Game Z718 </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>Game Z718</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/computers/GameZ7182.png"/>
                         </div>
                         <div id="product_description">
                             <p>Intel Core i7-5960X (8-ядрен, 3.00 - 3.50GHz, 20MB кеш)</p>
                             <p>32GB - DDR4, 2133 Mhz</p>
                             <p>1x NVIDIA GTX TITAN (12GB GDDR5) SLI</p>
                             <p>1ТB HDD</p>
                             <p>2TB PCIe SSD</p>
                                    <div id="product_price">
                                        <p>Цена: €2010.90</p>
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
