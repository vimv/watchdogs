<?php get_header(); ?>

	<div id="main-content">	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_title() ?>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>