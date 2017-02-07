
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Razer Naga Chroma</title>
		
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
                <li> <a href="product_accesoriesNaga.php"> Razer Naga Chroma </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>Razer Naga Chroma</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/accessories/razerNaga2.png"/>
                         </div>
                         <div id="product_description">
                             <p>Tilt-click скрол колелце</p>
                          	 <p>16000 DPI 5G лазерен сензор</p>
                             <p>1000 Hz време за реакция Ultrapolling / 1 мс</p>
                                    <div id="product_price">
                                        <p>Цена: €69.00</p>
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
