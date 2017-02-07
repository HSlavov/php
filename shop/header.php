<?php
session_start();
if(!array_key_exists('username', $_SESSION) && $pageTitle!='Начало' && $pageTitle!='Вход'){
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
                <meta charset="UTF-8">
		<title>Cubicle Gigglers - <?=$pageTitle?> </title>
		
	</head>
	
	<body>

<div id="page_wrapper">
<!-- START top header -->
			<div id="top_header" >
                <a href="/cubicgig/index.php"><img src="/cubicgig/img/header_background.png" alt=""/></a>
				<div id="top_logo">
					
				</div>
				<div id="company_name"></div>
				<div id="slogan"></div>
			</div>
			<!-- END top header -->

			<!-- START top menu -->
			<nav id="top_menu_nav">
				<ul id="top_menu_list">
					<li class="active"> <a href="/cubicgig/index.php"> Начало </a> </li>
					<li> 
						<a href="/cubicgig/products.php"> Продукти </a> 
						<ul class="top_menu_submenu">
							<li> <a href="/cubicgig/laptops.php">Лаптопи</a> </li>
							<li> <a href="/cubicgig/computers.php">Компютри</a> </li>
							<li> <a href="/cubicgig/monitors.php">Монитори</a> </li>
							<li> <a href="/cubicgig/software.php">Софтуер</a> </li>
							<li> <a href="/cubicgig/accessories.php">Аксесоари</a> </li>
						</ul>
					</li>
					<li> <a href="/cubicgig/cart.php"> Количка </a> </li>
					<li> <a href="/cubicgig/account.php"> Профил </a> </li>
					<li> <a href="/cubicgig/contacts.php"> Контакти </a> </li>
				</ul>
			</nav>

			<body background="wallpaper.png"> </body>
			<!-- END top menu -->