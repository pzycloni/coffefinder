<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coffeefinder.ru</title>
	
	<!-- include css files -->
	<link rel="stylesheet" href="/stylesheets/styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="/jsscripts/navigation.js"></script>
	<script src="/jsscripts/ymaps.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="maincontent">
			<div class="header">
				<div class="up_border">
					<div class="turn_block">
						<h4>Coffeefinder.ru</h4>
					</div>
					<div class="up_border_content">
						<div class="search_block">
								<!--<input type="text" class="inp_search" placeholder="Поиск"/>-->
						</div>
						<div class="home_block nav thisPageActive">
							<a href="#home" class="home nav_item">Домашняя</a>
						</div>
						<div class="about_block nav">
							<a href="#info" class="info nav_item">Информация</a>
						</div>
						<div class="map_block nav">
							<a href="#map" class="map nav_item">Карта</a>
						</div>
					</div>
				</div>
			</div>
			<section class="page section-1 active" data-section="home">
				<img src="/img/polina-girl-coffee-cafe-full.jpg" alt="" class="img_section-1">
				<div class="home_text_block">
					<div class="home_text">
						Быстро. Вкусно. Интересно.
					</div>
				</div>
			</section>
			<section class="page section-2" data-section="info">
			<div class="block_section-2">
				<div class="block_title_cards">
					<div class="title_cards">Поиск кофе доверьте профи</div>
				</div>
				<div class="block_cards">
					<div class="card card-1">
						<img src="/img/wallhaven-135738.jpeg" alt="" class="card_img_1">
					</div>
					<div class="card card-2">
						<img src="img/wallhaven-180536.jpeg" alt="" class="card_img_2">
					</div>
					<div class="card card-3">
						<img src="img/wallhaven-257802.jpeg" alt="" class="card_img_3">
					</div>
					<div class="card card-4">
						<img src="/img/wallhaven-306723.jpeg" alt="" class="card_img_4">
					</div>
				</div>
				<div class="block_card_bottom">
					<div class="card_bottom_text">
						Специально для ценителей кофе, Coffee Finder проводит кропотливую работу, чтобы наши гости могли найти вкусную чашечку кофе. Создатели Coffee Finder не раз ездили по городу в поисках наилучшего кофе. 
					</div>
				</div>
			</div>
			</section>
			<section class="page section-3" data-section="map">
				<div class="block_map" id="coffie_map">
					
				</div>
			</section>
		</div>
	</div>
</body>