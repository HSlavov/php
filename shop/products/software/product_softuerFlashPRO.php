
<!DOCTYPE html>
<html>
	
	<head>
        <link rel="stylesheet" type="text/css" href="/cubicgig/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="/cubicgig/css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Adobe Flash Professional CC</title>
		
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
				<li> <a href="/cubicgig/software.php">Софтуер</a> </li>
                <li> <a href="product_softuerFlashPRO.php	"> Adobe Flash Professional CC </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

            <?php
                include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
            ?>

			 <!-- START Product description -->	
                         <div id="product_name">
                             <h2>Adobe Flash Professional CC</h2>
                         </div>
                         <div id="product_picture">
                             <img src="/cubicgig/img/products/software/flash2.png"/>
                         </div>
                         <div id="product_description">
                             <p>Анимация, близка до реалността, с инструмента Bone</p>
                          	 <p>Експортиране на спрайтов лист</p>
                             <p>Импортиране на видео в Timeline</p>
                             <p>Разделяне на аудио</p>
                             <p>Четка с произволен мащаб</p>
                             <p>Записвайте със скоростта на светлината</p>
                             <p>HTML5 оптимизация</p>
                             <p>iOS 64-битова поддръжка</p>
                                    <div id="product_price">
                                        <p>Цена: €445.00</p>
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
