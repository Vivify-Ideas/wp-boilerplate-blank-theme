<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><a href="<?php the_permalink(); ?>" title="Permanent link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

			<div class="entry">
				<?php the_content(); ?>	
			</div>
		</div>

		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part('inc/gone'); ?>
	<?php endif; ?>

	</div>

<?php get_footer(); ?>
