<?php
// if (!isset($_GET['invitado'])) {
// 	echo '<meta http-equiv="refresh" content="0; url=' . $baseUrl . 'Home/login">';
// 	return false;
// }

?>
<!--CSS: Importar Fuente de iconos google-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--CSS: Importar materialize.css-->
<link type="text/css" rel="stylesheet" href="<?= $baseUrl ?>src/css/materialize.min.css" media="screen,projection">
<!--  CSS: AOS Animated -->
<link type="text/css" rel="stylesheet" href="<?= $baseUrl ?>src/css/aos.css">
<!-- CSS: Importar css personalizado -->
<link rel="stylesheet" type="text/css" href="<?= $baseUrl ?>src/css/styles.css?v=1.0.1">
<!-- CSS: Importar css personalizado -->
<link rel="stylesheet" href="<?= $baseUrl ?>src/css/jquery.bxslider.css">


<!-- CSS: Iconos font awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<!--Shortcut icon: Favicon -->
<link rel="icon" href="<?= $baseUrl ?>src/images/emblemas/emblema.png" sizes="32x32">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.10/tailwind.min.css">
</head>

<body class="">
    
    <main role="main" class="">
<!--PRECARGA LOADING -->
<div class="preloader-background">
	<div class="lds-heart">
		<div></div>
	</div>
</div>

<!-- FLOATING BUTTON TOP BUTTON -->
<div class="fixed-action-btn">
	<a class="btn-floating btn-large" id="top_body">
		<i class="fas fa-chevron-up"></i>
	</a>
</div>

<!-- FLOATING BUTTON MUSIC -->
<div class="fixed-action-btn audio-floating-btn">
	<a class="btn-floating btn-large">
		<i class="fas fa-music"></i>
	</a>
	<ul>
		<li>
			<a title="Silenciar" class="btn-floating pausarAudio">
				<i class="material-icons">volume_off</i>
			</a>
		</li>
		<li>
			<a title="Reproducir" class="btn-floating playAudio ">
				<i class="material-icons">volume_up</i>
			</a>
		</li>
	</ul>
</div>
<!-- Begin page content -->
<div class="" style="width: 1px; position: fixed;z-index:998;">
        
		<!-- SIDEBAR -->
	   <ul class="sidenav sidenav-close text-xs		 sm:text-xl		  md:text-xl		lg:text-xl		 xl:text-3xl	 2xl:text-3xl" style="position: relative; z-index:11;"  id="mobile-demo">
		 <li class="li_inicio"><a href="#">INICIO</a></li>
		 <li class="li_cont">
		   <a href="#" class="linkdata" data-enlace="DE_LAS_MANOS_DE_NUESTROS_PADRES" 
			 >DE LAS MANOS DE NUESTROS PADRES</a
		   >
		 </li>
		 <li class="li_cont">
		   <a href="#" class="linkdata" data-enlace="CELEBRAMOS_NUESTRO_AMOR"
			 >CELEBRAMOS NUESTRO AMOR</a
		   >
		 </li>
		 <li class="li_cont">
		   <a href="#" class="linkdata" data-enlace="AGRADECIMIENTO"
			 >AGRADECIMIENTO</a
		   >
		 </li>
		 <li class="li_cont">
		   <a href="#" class="linkdata" data-enlace="CRONOGRAMA"
			 >CRONOGRAMA</a
		   >
		 </li>
		 <li class="li_cont">
		   <a href="#" class="linkdata" data-enlace="CÓDIGO_DE_VESTIMENTA">CÓDIGO DE VESTIMENTA</a>
		 </li>
		 <li class="li_cont">
		   <a href="#" class="linkdata" data-enlace="LIBRO_DE_FIRMAS"
			 >LIBRO DE FIRMAS</a
		   >
		 </li>
		 <li class="li_cont">
		   <a href="#" class="linkdata" data-enlace="asistencia">ASISTENCIA</a>
		 </li>
	   </ul>
   
	   <a
		 href="#"
		 id="iconHamburguer"
		 data-target="mobile-demo"
		 class="sidenav-trigger hide-on-large-only"
	   >
		 <i class="fas fa-bars"></i>
	   </a>
   
	   <a
		 href="#"
		 id="iconArrow"
		 data-target="mobile-demo"
		 class="sidenav-trigger hide-on-med-and-down btn-floating pulse absolute z-10 "
	   >
		 <i class="fas fa-chevron-circle-right absolute z-10"></i>
	   </a>
		</div>


<audio id="background_music" class="d-none" preload="auto" autoplay loop>
	<source src="<?= $baseUrl ?>src/audio/Michael_Buble.mp3" type="audio/mp3">
</audio>

<!---- MODAL PARA CEREMONIA ---->
<div id="modal_ceremonia" class="modal">
	<div class="modal-content">
		<!-- Titulo del modal -->
		<div class="center-align">
			<h4 class="title_cards_modales"> Ceremonia </h4>
		</div>
		<!-- Mapa -->
		<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d793.1751546279878!2d-99.08717486295761!3d18.975689137439467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0cbb18a44899%3A0x6435bd6c8f68349f!2sPosada%20La%20Presa%20-%20Tepoztl%C3%A1n!5e0!3m2!1ses-419!2smx!4v1722095615890!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<span class="font1 body_text_modal"><b>Dirección:</b> <br><span class="modal_text_texto"> Hotel Posada la Presa, La Presa 22, La Presa, 62520 Tepoztlán, Mor.</span>
			<br><b>Fecha y hora ceremonia:</b> <br> <span class="modal_text_texto">29 de marzo 2025, 03:00 pm<br></span>
		</span>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect bg-buttons btn-small">Cerrar</a>
	</div>
</div>

<!-- MENÚ SIDENAV LEFT -->
<!-- <ul class="sidenav sidenav-close" id="mobile-demo">
			<a class="sidenav-close close_icon_sidenav" href="#!"><i class="fas fa-chevron-circle-left"></i></a>
			<li class="li_inicio"><a href="#">INICIO</a></li>
			<li class="li_cont"><a href="#" class="linkdata" data-enlace="section_ubication">CEREMONIA</a></li>
			<li class="li_cont"><a href="#" class="linkdata" data-enlace="section_hospedaje">HOSPEDAJE</a></li>
			<li class="li_cont"><a href="#" class="linkdata" data-enlace="section_cronograma">CRONOGRAMA</a></li>
			<li class="li_cont"><a href="#" class="linkdata" data-enlace="section_savedate">GALERÍA</a></li>
			<li class="li_cont"><a href="#" class="linkdata" data-enlace="section_hashtag">HASHTAG DE BODA</a></li>
			<li class="li_cont"><a href="#" class="linkdata" data-enlace="section_dresscode">CÓDIGO DE VESTIMENTA</a></li>
			<li class="li_cont"><a href="#" class="linkdata" data-enlace="section_otros">MESA DE REGALOS</a></li>
			<li class="li_cont"><a href="#" class="linkdata" data-enlace="section_salud">ASISTENCIA</a></li>
		</ul> -->

<!-- <a href="#!" id="iconHamburguer" data-target="mobile-demo" class="sidenav-trigger hide-on-large-only"> <i class="fas fa-bars"></i>
		</a> -->

<!-- <a href="#!" id="iconArrow" data-target="mobile-demo" class="sidenav-trigger hide-on-med-and-down btn-floating pulse">
			<i class="fas fa-chevron-circle-right"></i>
		</a> -->

<!-- PORTADA PRINCIPAL -->
<div>
	<img src="<?= $baseUrl ?>src/images/elementos/Portada_ELI-06.png" class="m-auto imagebg" />
	<img src="<?= $baseUrl ?>src/images/elementos/Portada_ELI-05.png" class="m-auto imagemb hidden" />

</div>


<div id="DE_LAS_MANOS_DE_NUESTROS_PADRES" class="flex justify-center pt-0.5	 md:pt-20 md:pt-20	 lg:pt-24 xl:pt-24	 2xl:pt-28	 lg:justify-center xl:justify-center 2xl:justify-center	col s12 m12 l12" data-aos="fade-up" data-aos-duration="1500">
	<h1 class="title_cards text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl		 azul text-center	">
		DE LAS MANOS DE <br />NUESTROS PADRES
	</h1>
</div>
<div class="col s12 m12 l12 spacio3 text-center	 text-sm md:text-base	md:text-base lg:text-base	 xl:text-base	 2xl:text-base" data-aos="fade-up" data-aos-duration="1500">
	<p class="flex justify-center ">
		Alejandra Estrada Rodriguez<br />
		Ricardo Ayuso Vazquez
	</p>
	<p class="flex justify-center azul">y</p>
	<p class="flex justify-center">
		Graciela Taiano<br />
		Omar Escolá</p>
</div>
<div id="CELEBRAMOS_NUESTRO_AMOR" class="col s12 m12 l12 spacio3" data-aos="fade-up" data-aos-duration="1500">
	<h1 class="title_cards text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl		 azul text-center	">
		CELEBRAMOS NUESTRO AMOR<br />EN:
	</h1>
</div>

<div class="col s12 m12 l12 spacio3" data-aos="fade-up" data-aos-duration="1500">
	<div class="flex justify-center md:font5 md:font5 lg:font8 xl:w-1/2 2xl:w-1/2 m-auto">
		<div class="w-1/2 flex justify-center">
			<img src="<?= $baseUrl ?>src/images/elementos/Polaroid_04_E_D_02.png" class="shadow-xl w-1/2 m-auto" style=" transform: rotate(-0.1turn); " />
		</div>

		<div class="w-1/2 flex justify-center text-center text-sm md:text-base	md:text-base lg:text-base	 xl:text-base	 2xl:text-base">
			<div>
				<img src="<?= $baseUrl ?>src/images/elementos/iglesia-amarilla.png" class="m-auto" /><br />
				<p class="text-center	">
					Hacienda San Gabriel<br />
					Las Palmas<br />
					<span class="azul">EL DÍA</span><br />
					22 febrero 25
				</p>
			</div>
		</div>

	</div>
</div>


<div class="col s12 m12 l12 spacio3" id="AGRADECIMIENTO" data-aos="fade-up" data-aos-duration="1500">
	<h1 class="title_cards text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl xl:text-6xl 2xl:text-6xl		 azul text-center	">
		AGRADECIMIENTO
	</h1>
</div>

<div class="flex justify-center spacio3" data-aos="fade-up" data-aos-duration="1500">

	<div class="flex justify-center md:font5 md:font5 lg:font8 xl:w-1/2 2xl:w-1/2 m-auto contentimgagradece">

		<div class="w-1/2 flex justify-center imgagradecertop">
			<img src="<?= $baseUrl ?>src/images/elementos/Polaroid_02_E_D.png" class="m-auto" />
		</div>

		<div class="w-full sm:w-full md:w-full lg:w-1/2 xl:w-1/2 2xl:w-1/2 px-3 sm:px-3 md:px-3 lg:px-0 xl:px-0 2xl:px-0  m-auto">
			<div>
				<p class="text-center	 text-sm md:text-base	md:text-base lg:text-base	 xl:text-base	 2xl:text-base text-justify	">
					A nuestros padres Alejandra, Ricardo, Graciela y Omar
					que nos dieron la vida y nos trajeron de la mano hasta este día.
					A nuestras familias que nos acompañaron siempre en este camino.
					A nuestros amigos que estuvieron y están en las buenas y en las otras.
					A nuestra Domi y nuestro Whisky que son la alegría de cada día;
					y a los que nos siguen guiando desde el cielo y desde el corazón

				</p>
				<br />
				<p class="text-center	 text-sm md:text-base	md:text-base lg:text-base	 xl:text-base	 2xl:text-base">
					¡¡Muchas Gracias!!
				</p>
			</div>
		</div>

		<div class="w-full sm:w-full md:w-full lg:w-1/2 xl:w-1/2 2xl:w-1/2 px-3 sm:px-3 md:px-3 lg:px-0 xl:px-0 2xl:px-0 flex justify-center imgagradecerbott m-auto">
			<img src="<?= $baseUrl ?>src/images/elementos/Polaroid_02_E_D.png" class="m-auto" />
		</div>

	</div>
</div>


<div id="CRONOGRAMA" class="spacio3 flex justify-center md:pt-20 md:pt-20	 lg:pt-24 xl:pt-24	 2xl:pt-28	 lg:justify-center xl:justify-center 2xl:justify-center	col s12 m12 l12" data-aos="fade-up" data-aos-duration="1500">
	<h1 class="title_cards text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl		 azul text-center	">
		CRONOGRAMA
	</h1>
</div>
<div class="col s12 m12 l12 spacio3 text-sm md:text-base	md:text-base lg:text-base	 xl:text-base	 2xl:text-base" data-aos="fade-up" data-aos-duration="1500">
	<img src="<?= $baseUrl ?>src/images/elementos/Cronograma_E_D.png" class="m-auto" />
</div>


<div id="CÓDIGO_DE_VESTIMENTA" class="bgazul" data-aos="fade-up" data-aos-duration="1500">
	<div class="flex justify-center md:pt-20 md:pt-20	 lg:pt-24 xl:pt-24	 2xl:pt-28	 lg:justify-center xl:justify-center 2xl:justify-center	col s12 m12 l12">
		<h1 class="title_cards text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl text-white text-center	">
			CÓDIGO DE VESTIMENTA
		</h1>
	</div>
	<div class=" flex justify-center pt-3 pb-10 text-sm md:text-base	md:text-base lg:text-base	 xl:text-base	 2xl:text-base">
		<p>
			<a class=" waves-effect waves-dark btn-small bg-buttons" target="_blank" href="https://pin.it/4yHsaXl2P">Ver</a>
		</p>
	</div>
</div>

<div id="LIBRO_DE_FIRMAS" class="spacio3 flex justify-center md:pt-20 md:pt-20	 lg:pt-24 xl:pt-24	 2xl:pt-28	 lg:justify-center xl:justify-center 2xl:justify-center	col s12 m12 l12" data-aos="fade-up" data-aos-duration="1500">
	<h1 class="title_cards text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl		 azul text-center	">
		LIBRO DE FIRMAS
	</h1>
</div>
<div class="col s12 m12 l12 text-sm md:text-base	md:text-base lg:text-base	 xl:text-base	 2xl:text-base" data-aos="fade-up" data-aos-duration="1500">
	<!--Inicio carroucel!-->
	<div class="max-w-md mx-auto spacio3 divcarro h-fit" style=" border:solid 1px #676767; background-color: #676767; -webkit-border-radius: 3px!important;  -moz-border-radius: 3px!important;  border-radius: 3px!important; margin-top:50px; margin-bottom: 50px;">

		<div class="slider" style="box-shadow:none!important ;border:none!important; ">
			<?php foreach ($deseos as $deseo) { ?>
				<div class="text-center text-white">
					<p>"<?php echo $deseo->nombre; ?>"</p><br /><br />

					<p>
						-<?php echo $deseo->ffirma; ?> |<br />
					</p>
					<div class="flex justify-center">
						<p><?php echo $deseo->deseo; ?></p>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FF3D34" class="w-5">
							<path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
						</svg>


					</div>

				</div>
			<?php } ?>



		</div>


	</div>



	<!--Fin carroucel!-->
	<form class="max-w-md mx-auto px-5" action="<?= $baseUrl ?>Deseos/store" method="POST" autocomplete="off" name="buenosdeseos" id="buenosdeseos">

		<div class="relative z-0 w-full mb-5 group">
			<label for="Firstname" class="">Nombre</label><br />
			<input type="text" name="nombre" id="Firstname" class="pl-1 block py-2.5 px-0 w-full text-base text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />

		</div>


		<div class="relative z-0 w-full mb-5 group">
			<label for="dance" class="">Deseos</label><br />
			<textarea name="deseos" id="" rows="4" required class="pl-1 block py-2.5 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"></textarea>

		</div>
		<button type="submit" style="background-color: #FFE983; height: 45px;" class="azul  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Firmar</button>
	</form>
</div>



<div data-aos="fade-up" data-aos-duration="1500">
	<div class="spacio3 flex justify-center md:pt-20 md:pt-20	 lg:pt-24 xl:pt-24	 2xl:pt-28	 lg:justify-center xl:justify-center 2xl:justify-center	col s12 m12 l12">
		<h1 class="title_cards text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl		 azul text-center	">
			SUGERENCIA DE HOSPEDAJE
		</h1>
	</div>

	<div class=" flex justify-center pt-3 pb-10 text-sm md:text-base	md:text-base lg:text-base	 xl:text-base	 2xl:text-base"">
	<p>
		<a class=" waves-effect waves-dark btn-small bg-buttons" target="_blank" href="<?= $baseUrl ?>src/doc/LISTA_DE_HOTELES_CERCANOS_A_HACIENDA_SAN_GABRIEL_DE_LAS_PALMAS.pdf">Ver</a>
		</p>
	</div>
</div>
<!-- CONTADOR -->
<div class="" data-aos="fade-up" data-aos-duration="1500">
	<div class="container">
		<div class="row">
			<div class="center-align">
				<div class="row" id="timerCont">
					<div class="col s12 hide-on-med-and-up"></div>
					<div class="col s3 m3 l3">
						<span class="texto-imagenes" id="timerCont_dias"></span>
					</div>
					<div class="col s3 m3 l3">
						<span class="texto-imagenes" id="timerCont_horas"></span>
					</div>
					<div class="col s3 m3 l3">
						<span class="texto-imagenes" id="timerCont_minutos"></span>
					</div>
					<div class="col s3 m3 l3">
						<span class="texto-imagenes" id="timerCont_segundos"></span>
					</div>
					<div class="col s12 hide-on-med-and-up"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Asistencia !-->
<div class="col s12 m12 l12 spacio3" id="asistencia" data-aos="fade-up" data-aos-duration="1500">
	<h1 class="title_cards text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl		 azul text-center	">
		CONFIRMACIÓN DE ASISTENCIA
	</h1>
</div>

<div class=" spacio3" data-aos="fade-up" data-aos-duration="1500">

	<div class=" md:font5 md:font5 lg:font8 xl:w-1/2 2xl:w-1/2 m-auto ">
		<p class="text-center"><?php echo isset($_GET['invitado']) ? ($invitado ? $invitado->Nombre : '') : '' ?></p>
	</div>

	<div class=" flex justify-content-center text-xs sm:text-xs  md:text-sm lg:text-lg xl:text-xl	 2xl:text-2xl  xl:w-1/2 2xl:w-1/2 m-auto ">
		<form class="w-full" action="<?= $baseUrl ?>ControllerXv/store" method="POST" autocomplete="off" name="formAsistencia" id="formAsistencia">
			<!--Fin checkbox!-->
			<div class=" w-full flex justify-center gap-1 sm:gap-3  md:gap-4 lg:gap-8 xl:gap-8	 2xl:gap-8  pt-10">
				<div>
					<input class="hidden" id="radio_1" type="radio" name="pases" value="1">
					<label
						class="azul  flex justify-center   w-8 h-8  sm:w-10 sm:h-10  md:w-10 md:h-10 lg:w-10 lg:h-10 xl:w-10 xl:h-10	 2xl:w-10  2xl:h-10  border-2 border-gray-400 cursor-pointer rounded-full "
						style="background-color: #FFE983;"
						for="radio_1">
						<span class=" font-semibold textcheckbox sm:pt-2  md:pt-1 lg:pt-1 xl:pt-0	 2xl:pt-0 text-xl	 sm:text-xl		  md:text-xl		lg:text-xl		 xl:text-3xl	 2xl:text-3xl">1</span>
					</label>
				</div>

				<div>
					<input class="hidden" id="radio_2" type="radio" name="pases" value="2">
					<label
						class="azul flex justify-center   w-8 h-8  sm:w-10 sm:h-10  md:w-10 md:h-10 lg:w-10 lg:h-10 xl:w-10 xl:h-10	 2xl:w-10  2xl:h-10    border-2 border-gray-400 cursor-pointer rounded-full "
						style="background-color: #FFE983;"
						for="radio_2">
						<span class=" font-semibold textcheckbox  sm:pt-2  md:pt-1 lg:pt-1 xl:pt-0	 2xl:pt-0 text-xl	 sm:text-xl		  md:text-xl		lg:text-xl		 xl:text-3xl	 2xl:text-3xl">2</span>
					</label>
				</div>

				<div>
					<input class="hidden" id="radio_3" type="radio" name="pases" value="3">
					<label
						class="azul flex justify-center  w-8 h-8  sm:w-10 sm:h-10  md:w-10 md:h-10 lg:w-10 lg:h-10 xl:w-10 xl:h-10	 2xl:w-10  2xl:h-10 border-2 border-gray-400 cursor-pointer rounded-full "
						style="background-color: #FFE983;"
						for="radio_3">
						<span class="font-semibold textcheckbox sm:pt-2  md:pt-1 lg:pt-1 xl:pt-0	 2xl:pt-0 text-xl	 sm:text-xl		  md:text-xl		lg:text-xl		 xl:text-3xl	 2xl:text-3xl">3</span>
					</label>
				</div>

				<div>
					<input class="hidden" id="radio_4" type="radio" name="pases" value="4">
					<label
						class="azul flex justify-center   w-8 h-8  sm:w-10 sm:h-10  md:w-10 md:h-10 lg:w-10 lg:h-10 xl:w-10 xl:h-10	 2xl:w-10  2xl:h-10 border-2 border-gray-400 cursor-pointer rounded-full "
						style="background-color: #FFE983;"
						for="radio_4">
						<span class=" font-semibold textcheckbox sm:pt-2  md:pt-1 lg:pt-1 xl:pt-0	 2xl:pt-0 text-xl	 sm:text-xl		  md:text-xl		lg:text-xl		 xl:text-3xl	 2xl:text-3xl">4</span>
					</label>
				</div>

				<div>
					<input class="hidden" id="radio_5" type="radio" name="pases" value="5">
					<label
						class="azul flex justify-center   w-8 h-8  sm:w-10 sm:h-10  md:w-10 md:h-10 lg:w-10 lg:h-10 xl:w-10 xl:h-10	 2xl:w-10  2xl:h-10 border-2 border-gray-400 cursor-pointer rounded-full "
						style="background-color: #FFE983;"
						for="radio_5">
						<span class=" font-semibold textcheckbox sm:pt-2  md:pt-1 lg:pt-1 xl:pt-0	 2xl:pt-0 text-xl	 sm:text-xl		  md:text-xl		lg:text-xl		 xl:text-3xl	 2xl:text-3xl">5</span>
					</label>
				</div>

				<div>
					<input class="hidden" id="radio_6" type="radio" name="pases" value="6">
					<label
						class="azul flex justify-center   w-8 h-8  sm:w-10 sm:h-10  md:w-10 md:h-10 lg:w-10 lg:h-10 xl:w-10 xl:h-10	 2xl:w-10  2xl:h-10 border-2 border-gray-400 cursor-pointer rounded-full "
						style="background-color: #FFE983;"
						for="radio_6">
						<span class=" font-semibold textcheckbox sm:pt-2  md:pt-1 lg:pt-1 xl:pt-0	 2xl:-pt-2 text-xl	 sm:text-xl		  md:text-xl		lg:text-xl		 xl:text-3xl	 2xl:text-3xl">6</span>
					</label>
				</div>
			</div>
			<!--Fin checkbox!-->
			<input type="hidden" name="huid" value="<?php echo isset($_GET['invitado']) ? $invitado->uid : '' ?>">
									<input type="hidden" name="nombre" id="Firstname"
										value="<?php echo isset($_GET['invitado']) ? ($invitado ? $invitado->Nombre : '') : '' ?>" />
			<div class="flex justify-center pt-10">
				<div class="relative z-0 w-full mb-5 group">
					<label for="vegaveg" class="flex justify-center">Eres vegetariano o vegano?</label><br />
					<select id='vegaveg' name="vegaveg"
						class="browser-default w-1/2 m-auto">
						<option selected value=""></option>
						<option value="SI">SI</option>
						<option value="NO">NO</option>
					</select>
				</div>
			</div>
			<div class="flex justify-center pt-10">
				<button type="submit" style="height: 45px;  background-color: #FFE983;" class="azul  font-medium rounded-lg text-sm  w-full sm:w-auto px-5 py-2.5 text-center browser-default ">Confirmar asistencia </button>
			</div>
		</form>

	</div>
</div>


<!-- FIN Asistencia !-->

<div class="relative flex justify-center lg:justify-center xl:justify-center 2xl:justify-center	col s12 m12 l12" data-aos="fade-up" data-aos-duration="1500" style="background-color: #f5e7d3; margin-top:10rem; padding-bottom:5rem;">
	<img src="<?= $baseUrl ?>src/images/elementos/Polaroid_03_E_D.png" class="m-auto relative" style="margin-top:-10rem;" />
</div>


<div class="col s12 m12 l12 spacio3 text-sm md:text-base	md:text-base lg:text-base	 xl:text-base	 2xl:text-base">
	<img src="<?= $baseUrl ?>src/images/emblemas/EMBLEMA-ELIYDANIEL.png" class="m-auto lg:text-base	 xl:w-2/5		 2xl:w-2/5	" />
</div>

</main>

<script src="<?= $baseUrl ?>js/jquery-3.5.1.slim.min.js"></script>
<!--Carga JS al final-->
<script type="text/javascript" src="<?= $baseUrl ?>src/js/jquery_3.4.1.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>src/js/materialize.min.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>src/js/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>src/js/scripts.js?v=1.0.1"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.3/axios.min.js"></script>


<script type="text/javascript" src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>src/js/proyecto/actions.js"></script>

<script>
    $(document).ready(function() {
        $('.slider').bxSlider({
            controls: false,
            pager:false,
            infiniteLoop:true,
            responsive:true,
            auto:true,
            autoStart:true,
            pause:5000,

         });

        let h = $(window).height();
        let hif = h - 100;
        let w = $(window).width();

        if (w <= 999) {
            $('.imagebg').addClass("hidden")
            $('.imagemb').removeClass("hidden")
            $('.imagemb').css({
                'height': h + 'px'
            })

            $('.imgagradecertop').addClass("hidden")
            $('.imgagradecerbott').removeClass("hidden")

            $('.contentimgagradece').removeClass("justify-center ")
            $('.contentimgagradece').removeClass("flex")

             
        } else if (w >= 1000) {
            $('.imagebg').removeClass("hidden")
            $('.imagemb').addClass("hidden")
            $('.imagebg').css({
                'height': h + 'px'
            })
            $('.imgagradecertop').removeClass("hidden")
            $('.imgagradecerbott').addClass("hidden")

            $('.contentimgagradece').addClass("justify-center ")
            $('.contentimgagradece').addClass("flex")
           
        }



        $(window).on('resize', function() {
            let win = $(this);

            if (win.height() <= 999) {
                $('.imagebg').addClass("hidden")
                $('.imagemb').removeClass("hidden")
                $('.imagemb').css({
                    'height': h + 'px'
                })

                $('.imgagradecertop').addClass("hidden")
                $('.imgagradecerbott').removeClass("hidden")
                
                $('.contentimgagradece').removeClass("justify-center ")
                $('.contentimgagradece').removeClass("flex")
            }
            if (win.width() >= 1000) {
                $('.imagebg').removeClass("hidden")
                $('.imagemb').addClass("hidden")
                $('.imagebg').height = win.height()

                $('.imgagradecertop').removeClass("hidden")
                $('.imgagradecerbott').addClass("hidden")
                $('.contentimgagradece').addClass("justify-center ")
                $('.contentimgagradece').addClass("flex")

            }

        });
    });

   
</script>
</body>

</html>