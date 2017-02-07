
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Eizo ColorEdge CG318</title>
		
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
				<li> <a href="/cubicgig/monitors.php">Монитори</a> </li>
                <li> <a href="product_monitorEizoColorEdge.php"> Eizo ColorEdge CG318 </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>Eizo ColorEdge CG318</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/monitors/EizoColorEdgeCG3182.png"/>
                         </div>
                         <div id="product_description">
                             <p>4096 x 2160</p>
                          	 <p>Съотношение: 1.9:1</p>
                             <p>Плътност на пикселите: 149ppi</p>
                             <p>Наклон: 35° нагоре, 5° надолу</p>
                                    <div id="product_price">
                                        <p>Цена: €5025.00</p>
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
