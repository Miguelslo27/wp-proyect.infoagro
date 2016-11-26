<?php get_header(); ?>
		<div id="main" class="padding-sides">
			<div id="home-banner" class="margin-bottom">
				<!-- <div id="slide-banner" class="float-left">
					<ul class="slides">
						<li class="active">
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-preview.jpg" alt="Asesoramiento que apunta a mejorar la rentabilidad.">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-preview.jpg" alt="Procampo cumplió 25 años en el negocio semillerista.">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-preview.jpg" alt="La capacidad ociosa de los frigoríficos la estamos pagando...">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-preview.jpg" alt="Monitorea para tomar decisiones correctas.">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-preview.jpg" alt="INASE apuesta a la certificación y a mantener niveles de legalidad.">
							</a>
						</li>
					</ul> end .slides
				</div> end #slide-banner.float-left
				<div id="slide-banner-sidebar-min" class="responsive res480 res640 res768">
					<ul class="slides-control">
						<li><a href="#" title="Anterior">&lt;</a></li>
						<li><a href="#" title="Asesoramiento que apunta a mejorar la rentabilidad.">1</a></li>
						<li><a href="#" title="Procampo cumplió 25 años en el negocio semillerista.">2</a></li>
						<li><a href="#" title="La capacidad ociosa de los frigoríficos la estamos pagando...">3</a></li>
						<li><a href="#" title="Monitorea para tomar decisiones correctas.">4</a></li>
						<li><a href="#" title="INASE apuesta a la certificación y a mantener niveles de legalidad.">5</a></li>
						<li><a href="#" title="Siguiente">&gt;</a></li>
					</ul> end .slides-control
				</div> end #slide-banner-sidebar-min.responsive.res480.res640.res768
				<div id="slide-banner-sidebar" class="float-right responsive res1024 res1280 res1280-more">
					<ul class="slides-control">
						<li><a href="#">Asesoramiento que apunta a mejorar la rentabilidad.</a></li>
						<li><a href="#">Procampo cumplió 25 años en el negocio semillerista.</a></li>
						<li><a href="#">La capacidad ociosa de los frigoríficos la estamos pagando...</a></li>
						<li><a href="#">Monitorea para tomar decisiones correctas.</a></li>
						<li><a href="#">INASE apuesta a la certificación y a mantener niveles de legalidad.</a></li>
					</ul> end .slides-control
				</div> end #slide-banner-sidebar.float-right.responsive.res1024.res1280.res1280-more -->
			</div> <!-- end #home-banner.margin-bottom -->

			<div id="content" class="posts-dashboard float-left margin-bottom auric-a">
				<div class="content-banner margin-bottom">
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-banner-2.jpg" alt="Asociación Nacional de Productores de Leche"></a>
				</div>
				<div class="recent-posts">
				<?php
				$args = array(
					'numberposts' => 4,
					'offset' => 0,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'publish',
					'suppress_filters' => true
				);

				$query = new WP_Query($args);
				wp_reset_query();

				if ($query->have_posts()) {
					while ($query->have_posts()) : $query->the_post();
					$category = get_the_category();
				?>
					<div class="home-post category-<?php echo esc_html($category[0]->slug); ?> margin-bottom">
						<div class="post-image float-left fifty-fifty">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('100%', array('class' => 'post-thumbnail')); ?></a>
							<a href="<?php the_permalink(); ?>" class="icon ion-plus-circled"></a>
						</div> <!-- end .post-image -->
						<div class="post-brief float-right fifty-fifty">
							<h2 class="category-title margin-title-bottom clear"><a href="#"><?php echo esc_html($category[0]->name); ?></a></h2>
							<h3 class="post-title margin-title-bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php the_content(); ?></p>
							<div class="post-info">
								<span class="post-date">
									<span class="icon ion-android-calendar"></span>
									<span class="date">4 meses atrás</span>
								</span>
								<span class="post-comments">
									<span class="icon ion-ios-chatbubble"></span>
									<span class="comments-count">0</span>
								</span>
							</div> <!-- end .post-info -->
						</div> <!-- end .post-brief -->
					</div> <!-- end .home-post.category-ganaderia -->
				<?php
					endwhile;
				} else {
				?>
					<p>No hay artículos recientes</p>
				<?php
				} 
				?>
				</div> <!-- end .recent-posts -->
			</div> <!-- end #content.post-dashboard.float-left.margin-bottom -->
			<?php get_sidebar(); ?>
		</div> <!-- end #main.padding-slides -->
		<div id="delimiter"></div>
<?php get_footer(); ?>