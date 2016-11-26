<?php get_header(); ?>
		<div id="main" class="padding-sides">
			<div id="content" class="posts-dashboard float-left margin-bottom auric-a">
				<h2 class="category-title margin-title-bottom clear"><span><?php the_title(); ?></span></h2>
				<?php
				// paginar posts de la categoría
				if (have_posts()) {
				  while (have_posts()) {
				    the_post();
				    $content = get_the_content();
					// print $content;
				    echo wpautop($content);
				  }
				}
				?>
			</div> <!-- end #content.post-dashboard.float-left.margin-bottom -->
			<?php get_sidebar(); ?>
		</div> <!-- end #main.padding-slides -->
		<div id="delimiter"></div>
<?php get_footer(); ?>