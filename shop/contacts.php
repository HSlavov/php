<!-- 
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - Контакти</title>
		
	</head>
	
	<body>
-->
		
			
		<?php
                $pageTitle='Контакти';
		include  'header.php';
		?>	

			<!-- END PAGE BODY.-->
			<div id="page_body">                            
                <!-- START Contact Information -->
                <div id="contacts">
                    <span id="body_contact_phone">ТЕЛ: +359 878 699 663<br></span>
					<span id="body_contact_mail">E-MAIL: office@pragmatic.bg<br></span>
					<span id="body_contact_mailing">АДРЕС: ул. „Проф. д-р Иван Странски“ 3Б, София, България<br></span>
                </div>
                <!-- END Contact Information -->
			</div>
			<!-- START Google map -->
			<div id="googleMap">

			<script>
			function myMap() {
			  var mapCanvas = document.getElementById("googleMap");
			  var mapOptions = {
			    center: new google.maps.LatLng(42.643753, 23.340237), zoom: 18
			  };
			  var map = new google.maps.Map(mapCanvas, mapOptions);
			}
			</script>

			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzLs-3WWcDOI7-zb4MLjGjDuPmP1FuF0w	&callback=myMap"></script></div>
			<!-- END Google map -->



			<!-- END page body -->

		<?php 
		include  'footer.php';
		?>
		</div>
	</body>
	
</html>