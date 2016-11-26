	</div> <!-- #wrapper ends -->
	<footer>
		<div id="footer">
			<div class="footer-left float-left">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/white-logo.png" class="white-logo" alt="Info Agro">
			</div>
			<div class="footer-middle float-left">
			<?php
				$navMenuSettings = array(
					'menu' => 'paginas',
					'menu_class' => 'footer-nav nav-pages float-left',
					'container' => ''
				);

				wp_nav_menu ($navMenuSettings);
				?>
				<?php
				$catMenuSettings = array(
					'menu' => 'categorias',
					'menu_class' => 'footer-nav nav-categories float-left',
					'container' => ''
				);

				wp_nav_menu ($catMenuSettings);
				?>
				<!-- <ul class="footer-nav nav-categories float-left">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Agricultura</a></li>
					<li><a href="#">Ganadería</a></li>
					<li><a href="#">Lechería</a></li>
					<li><a href="#">Forestación</a></li>
					<li><a href="#">Internacionales</a></li>
					<li><a href="#">Empresariales</a></li>
				</ul> -->
			</div>
			<div class="footer-right float-right">
				<div class="user-access-links float-left">
					<a href="<?php echo wp_registration_url(); ?>">Registrarse</a>
					<a href="<?php echo wp_login_url( get_permalink() ); ?>">Iniciar Sesión</a>
				</div>
				<div class="wp-search-form float-left">
					<?php get_search_form() ?>
				</div>
				<!-- <div class="social-links clear float-right">
					<a href="#" class="icon ion-social-facebook"></a>
					<a href="#" class="icon ion-social-twitter"></a>
				</div> -->
			</div>
			<div class="footer-copyright clear">
				<span>Copyright 2016 © infoagro | todos los derecho reservados.</span>
			</div>
		</div> <!-- #footer ends -->
	</footer> <!-- end footer -->

	<!-- Stream Player (custom script) -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/basics.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/stream-player.js"></script>

	<?php wp_footer(); ?>
</body>
</html>