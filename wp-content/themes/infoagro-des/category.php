<?php get_header(); ?>
		<div id="main" class="padding-sides">
			<div id="content" class="posts-dashboard float-left margin-bottom auric-a">
				<h2 class="category-title margin-title-bottom clear"><span><?php single_cat_title(); ?></span></h2>
				<div class="category-posts">
				<?php

				$args = array(
					'category_name' => get_the_category()[0]->slug,
					// 'offset' => 0,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'publish',
					// 'suppress_filters' => true
				);
				
				$query = new WP_Query($args);

				if ($query->have_posts() && get_the_category()) {
					?>
					<div class="recent-posts">
					<?php
					while ($query->have_posts()) : $query->the_post();
					$category = get_the_category();
				?>
					<div class="home-post category-<?php echo esc_html($category[0]->slug); ?> margin-bottom">
						<div class="post-image float-left fifty-fifty">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('100%', array('class' => 'post-thumbnail')); ?></a>
							<a href="<?php the_permalink(); ?>" class="icon ion-plus-circled"></a>
						</div> <!-- end .post-image -->
						<div class="post-brief float-right fifty-fifty">
							<!-- <h2 class="category-title margin-title-bottom clear"><a href="#"><?php echo esc_html($category[0]->name); ?></a></h2> -->
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
					wp_reset_query();
					?>
					</div>
					<?php
				} else {
				?>
					<p>No hay artículos recientes</p>
				<?php
				} 
				?>
				</div>
			</div> <!-- end #content.post-dashboard.float-left.margin-bottom -->
			<?php get_sidebar(); ?>
		</div> <!-- end #main.padding-slides -->
		<div id="delimiter"></div>
<?php get_footer(); ?>