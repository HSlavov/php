<!--
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Количка</title>
		
	</head>
	
	<body>
-->
		

		<?php
                $pageTitle='Количка';
		include  'header.php';
		?>


			<!-- START breadcrumbs -->
			<ul id="breadcrumb">
				<li> <a href="index.php"> Начало </a> </li>
                                <li> <a href="account.php"> Профил </a> </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">

			<?php
				include "$_SERVER[DOCUMENT_ROOT]/cubicgig/leftMenu.php"
			?>

				<!-- START Profile tile -->
 			 <div id="product_name">
                 <h2>User: Go6o Геоrgiev</h2>
             </div>
	         <div id="profile_pic">
	             <img src="/cubicgig/img/profiles/id2155.png"/>
	         </div>
	         <div id="product_description">
	             <p>Име: Гошо Георгиев</p>
	          	 <p>E-mail: go6o@abv.bg</p>
	             <p>Адрес: гр. София, кв. Гео Милев, бл 22</p>
      			 <p>Регистриран на: 10.05.2015г</p>
             </div>

					 

										
				
				
				
				<?php 
				include  'footer.php';
				?>
		</div>
	</body>
	
</html>