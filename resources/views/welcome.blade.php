<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>Hotel Perla del Lago Bolivia: Disfruta tu viaje!</title>
	
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>


    <img src="{{ asset('img/fondo1.jpg')}}" height="100%" width="100%" alt="">


	<section class="cabecera">
		<nav>
			<div class="logo">
				<img width="170px" src="img/logo1.png" alt="">
			</div>

			<div class="login">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a  href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
			</div>
		</nav>
		<div class="presentacion">
			<div>
				<h1 style="background-color: #ED3413;"></h1>



			</div>
		</div>
	</section>
	<section class="tv">
		<div class="contenido">
			<div class="izquierda flotanteTexto">
                <h2>Disfruta en el hotel ubicado en Copacabana de los siguientes servicios!</h2>
                <p>Vista panoramica hacia el Calvario, Internet WiFi, Baño privado,
                    Smart TV, ELEVADOR, Parqueo, Desayuno americano|buffet</p>
            </div>
			<div class="derecha flotanteImagen">
				<img src="img/tv.png" alt="">

			</div>
			<div class="restaurar"></div>
		</div>
	</section>
	<section class="descarga">
		<div class="contenido">
			<div style="width: 48%" class="izquierda flotanteImagen">
				<div class="tarjeta">
					<img style="margin-bottom: -143px;
    position: relative;" src="img/mobile-0819.jpg" alt="">
					<div class="tarjetaInt">
						<div style="width: 80%;" class="portada izquierda">
							<div class="imgPortada izquierda">
								<img style="width: 57px;     margin-right: 12px;" src="img/boxshot.png" alt="">
							</div>
							<div class="textoPortada derecha">
								<p style="font-size: 17px; font-weight: 700;">Stranger Things</p>
								<p style="font-size: 17px;">Descargando...</p>
							</div>
							<div class="restaurar"></div>
						</div>
						<div style="text-align: center;" class="gif derecha">
							<img style="width: 50%" src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/download-icon.gif" alt="">
						</div>
						<div class="restaurar"></div>
					</div>
				</div>
			</div>
			<div style="width: 52%;" class="derecha flotanteTexto">
				<h2></h2>
				<p></p>
			</div>
			<div class="restaurar"></div>
		</div>
	</section>
	<section class="disfruta">
		<div class="contenido">
			<div class="izquierda flotanteTexto">
				<h2>.</h2>
				<p></p>
			</div>
			<div class="derecha flotanteImagen">
				<img src="img/device-pile.png" alt="">

			</div>
			<div class="restaurar"></div>
		</div>
	</section>
	<section class="preguntas">
		<div class="contPreguntas">
			<h2>Preguntas frecuentes</h2>
			<br>
			<div class="pregunta">
				<p>¿Donde se encuentra ubicado el hotel?</p>
				<div class="respuesta">
					<hr>
					<p>El hotel Perla del Lago se encuentra ubicado en
					<br><br></p>
				</div>
			</div>
			<div class="pregunta">
				<p></p>
				<div class="respuesta">
					<hr>
					<p></p>
				</div>
			</div>
			<div class="pregunta">
				<p></p>
				<div class="respuesta">
					<hr>
					<p></p>
				</div>
			</div>
			<div class="pregunta">
				<p>¿Cómo cancelo?</p>
				<div class="respuesta">
					<hr>
					<p></p>
				</div>
			</div>
			<div class="pregunta">
				<p></p>
				<div class="respuesta">
					<hr>
					<p></p>
				</div>
			</div>
			<input type="email" placeholder="Email">
			<span>PROBAR AHORA ></span>
			<h3></h3>
			<input type="email" placeholder="Email">
			<span>PROBAR AHORA ></span>
			<h3></h3>
		</div>

	</section>
	<section style="border-bottom:none;" class="pie">
		<div class="pieContenido">
			<div>
				<p style="font-size: 13px; color:#909090; ">Preguntas frecuentes</p>
				<p style="font-size: 13px; color:#909090; ">Relaciones con inversionistas</p>
				<p style="font-size: 13px; color:#909090; "></p>
				<p style="font-size: 13px; color:#909090; ">Información corporativa</p>
				<p style="font-size: 13px; color:#909090; "></p>
			</div>
			<div>
				<p style="font-size: 13px; color:#909090; ">Centro de ayuda</p>
				<p style="font-size: 13px; color:#909090; "></p>
				<p style="font-size: 13px; color:#909090; ">Términos de uso</p>
				<p style="font-size: 13px; color:#909090; ">Contáctanos</p>
			</div>
			<div class="espacio"></div>
			<div>
				<p style="font-size: 13px; color:#909090; ">Cuenta</p>
				<p style="font-size: 13px; color:#909090; ">Canjear tarjetas de regalo</p>
				<p style="font-size: 13px; color:#909090; ">Privacidad</p>
				<p style="font-size: 13px; color:#909090; ">Prueba de velocidad</p>
			</div>
			<div>
				<p style="font-size: 13px; color:#909090;">Prensa</p>
				<p style="font-size: 13px; color:#909090;"></p>
				<p style="font-size: 13px; color:#909090; ">Preferencias de cookies</p>
				<p style="font-size: 13px; color:#909090; ">Avisos legales</p>
			</div>
		</div>
	</section>
</body>
</html>
