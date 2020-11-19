<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Fclan</title>
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/framework.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
{{-- 	<linkhref="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"rel="stylesheet"> --}}
	<script src="https://kit.fontawesome.com/7b7b5c9ce1.js" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
	<style>
		.router-link-exact-active{
			color: #78A2D2 ;
		}

		.fade-enter-active, .fade-leave-active {
  		transition: opacity .5s;
		}
		.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  		opacity: 0;
		}
		.slide-fade-enter-active {
  		transition: all .3s ease;
		}
		.slide-fade-leave-active {
 		 transition: all .6s cubic-bezier(.17, .67, .83, .67);
		}	
		.slide-fade-enter, .slide-fade-leave-to
		/* .slide-fade-leave-active below version 2.1.8 */ {
  		transform: translateY(800px);
  		opacity: 0;
		}
	</style>
</head>
<body>
	<div id="app">
		<header class="space-inter">
			<div class=" container-flex  space-between " >
				<figure class="logo"><img src="img/logo.png" alt=""></figure>
				<nav class="custom-wrapper" id="menu">
					<div class="pure-menu"></div>
					<ul class="container-flex list-unstyled container-fluid">
						<li><router-link to="/" class="text-uppercase">Inicio</router-link></li>						
						<li><router-link to="/nosotros" class="text-uppercase">Nosotros</router-link></li>
						<li><router-link to="/contacto" class="text-uppercase">Contacto</router-link></li>
						<li><a href="/admin" class="text-uppercase">{{ auth()->user() ? 'Mi usuario': 'Ingresar' }}</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div style="min-height: 100vh">
			<transition name="fade" mode="out-in">
			<router-view></router-view>
			</transition>
		</div>
		
<section class="footer">
	<footer>

	</footer>
</section>


</div>
<script src="{{mix('js/app.js') }}"> </script>

</body>
</html>