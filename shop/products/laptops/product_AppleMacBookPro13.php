
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Apple Mac Pro 13</title>
		
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
                <li> <a href="product_AppleMacBookPro13.php"> Apple Mac Pro 13 </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>Apple Mac Pro 13</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/laptops/AppleMacBookPro131.png"/>
                         </div>
                         <div id="product_description">
                             <p>3 кг. картонена кутия, с която си връщате моментално</p>
                          	 <p>половината инвестиция ако я занесете на вторични суровини!</p>
                             <p>Не-съразмерна клавиетура!</p>
                             <p>13 инча / лъскава ретина, супер подходящ за поставка за кафе.</p>
                                    <div id="product_price">
                                        <p>Цена: €1.99</p>
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
