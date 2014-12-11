<?php get_header(); ?>
		
	<div id="main-content">
		<div id="slider" >
			<div class="container">
				<div class="row ">
					<div class="col-sm-12">		
						
					</div>
				</div>
			</div>
		</div>
		<?php 
			query_posts(array(
				'posts_per_page' => -1,
				'meta_key' => 'weight',
				'orderby' => 'meta_value',
				'order' => 'ASC'
			));
			$i = 0;
		?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php $image = (has_post_thumbnail( get_the_ID() )) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ) : ''?>
			<section style="background:url('<?php echo $image[0]; ?>'); background-size: cover;" class="<?php echo ($i % 2 == 0) ? '' : 'odd'?>">
				<header>
					<h1><?php the_title() ?></h1>
					<h2><?php echo get_post_meta(get_the_ID(), 'subtitle', true);?></h2>
				</header>
				<article>
					<?php the_content() ?>
				</article>
			</section>
			<?php $i++;?>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>