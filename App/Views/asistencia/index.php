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

	<img src="<?= $baseUrl ?>src/images/elementos/Portada_ELI-06.png" class="m-auto imagebg" />
	<img src="<?= $baseUrl ?>src/images/elementos/Portada_ELI-05.png" class="m-auto imagemb hidden" />

</div>



<div class="col s12 m12 l12 spacio3 text-sm md:text-base	md:text-base lg:text-base	 xl:text-base	 2xl:text-base">
	<img src="<?= $baseUrl ?>src/images/emblemas/EMBLEMA-ELIYDANIEL.png" class="m-auto lg:text-base	 xl:w-2/5		 2xl:w-2/5	" />
</div>