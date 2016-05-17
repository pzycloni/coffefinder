<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/libs/bootstrap/js/bootstrap.min.js"></script>

    <!-- Include common.css-->
    <link href="/stylesheets/common.css" rel="stylesheet"></link>

	<!-- Yandex API -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="/javascripts/ymaps.js"></script>
	
	<!-- Navigation js -->
	<script src="/javascripts/navigation.js"></script>

	<title>Coffeefinder</title>
</head>
<body>
	<div class="container-fluid">
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-open">
						<span class="sr-only">Coffeefinder</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
					</button>
					<a href="/" class="navbar-brand">Coffefinder.ru</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-open">
					<ul class="nav navbar-nav navbar-center navbar-uppercase">
						<li class="thisPageActive nav-block">
							<a href="#home" class="home nav-item">Домашняя</a>
						</li>
						<li class="nav-block">
							<a href="#info" class="info nav-item">Информация</a>
						</li>
						<li class="nav-block">
							<a href="#map" class="map nav-item">Карта</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<section class="section" data-section="home">
				<div class="pattern-image">
					<img src="/imgs/polina-girl-coffee-cafe-full.jpg" alt="">
					<div class="container">
						<div class="content">
							<h2>Быстро. Вкусно. Интересно.</h2>
						</div>
					</div>
				</div>
			</section>
			<section class="section" data-section="info">
				<div class="container-fluid">
					<h2 class="text-center text-title">Поиск кофе доверьте профи</h2>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-2">
							<img src="/imgs/wallhaven-135738.jpeg" alt="" class="img-responsive img-thumbnail">
						</div>
						<div class="col-md-2">
							<img src="/imgs/wallhaven-180536.jpeg" alt="" class="img-responsive img-thumbnail">
						</div>
						<div class="col-md-2">
							<img src="/imgs/wallhaven-257802.jpeg" alt="" class="img-responsive img-thumbnail">
						</div>
						<div class="col-md-2">
							<img src="/imgs/wallhaven-306723.jpeg" alt="" class="img-responsive img-thumbnail">
						</div>
						<div class="col-md-2"></div>
					</div>
					<div class="container-fluid">
						<h3 class="text-center text-cards">Специально для ценителей кофе, Coffee Finder проводит кропотливую работу, чтобы наши гости могли найти вкусную чашечку кофе. Создатели Coffee Finder не раз ездили по городу в поисках наилучшего кофе.</h3> 
					</div>
				</div>
			</section>
			<section class="section" data-section="map">
				<div class="container">
					<h2 class="text-center text-title">Найдите свое кофе</h2>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="block-map img-responsive img-thumbnail" id="coffee-map"></div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</section>
		</div>
	</div>
</body>
</html>