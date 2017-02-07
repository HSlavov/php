
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - HP 255 G4</title>
		
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
                <li> <a href="product_HP255G4.php"> HP 255 G4 </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>HP 255 G4</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/laptops/HP255G42.png"/>
                         </div>
                         <div id="product_description">
                             <p>AMD E1-6015</p>
                             <p>AMD Radeon R2</p>
                             <p>4GB DDR3L 1600 MHz</p>
                             <p>500GB HDDс</p>
                             <p>14 инча / 35.56 см 1366x768 лъскав LED</p>
                                    <div id="product_price">
                                        <p>Цена: €159.90</p>
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