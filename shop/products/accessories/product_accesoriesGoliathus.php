
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Razer Goliathus Speed</title>
		
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
				<li> <a href="/cubicgig/accessories.php">Аксесоари</a> </li>
                <li> <a href="product_accesoriesGoliathus.php"> Razer Goliathus Speed </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>Razer Goliathus Speed</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/accessories/Goliathus2.png"/>
                         </div>
                         <div id="product_description">
                             <p>Подложката е мeка и може да се навива</p>
                          	 <p>Основата е гумирана и не позволява приплъзване </p>
                             <p>Speed версията позволява бързо движение на мишката </p>
                                    <div id="product_price">
                                        <p>Цена: €19.00</p>
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
