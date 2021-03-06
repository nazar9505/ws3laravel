<!DOCTYPE>
<html>
<head>
	<title>Cabinet</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}">
	<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.2.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
</head>
<body class="dp">
	<div class="header">
		<div class="row grid middle between">
			<div class="logo">
				<a href="/">
					<img src="/img/logo.png">
				</a>
			</div>
			<div class="title">
				Клуб любителей творчества «ОчУмелые ручки»
			</div>
			@if(!Auth::check())
				<div class="auth">
					<a href="{{ route('auth.login') }}">Вход</a>
				</div>
			@else
				<div class="auth">
					<a href="{{ route('auth.logout') }}">Выйти</a>
				</div>	
			@endif
		</div>
	</div>
	<div class="row row--nogutter">
		<div class="menu-burger">
			<div class="burger">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>	
	</div>	


	<div class="main">
		<div class="row">
			@if(Auth::user() && Auth::user()->role->name == 'driver')
				<div class="row--small cab">
					<h1><a href="/cabinet.php">КАБИНЕТ</a></h1>
				</div>
			@endif
		</div>	
		<div class="row">
			@yield('content')	
		</div>
	</div>
	

	<div class="row row--nogutter">
		<div class="line"></div>
	</div>
	<div class="footer">
		<div class="row">
			<div class="row--small grid between">
				<div class="address">Наш адрес: ВДНХ, 120в</div>
				<div class="tel">Тел: 89123456765</div>
				<div class="copy">(с) Copyright, 2017</div>
			</div>
		</div>
	</div>
</body>
</html>