<?php get_header(); ?>
<section id="home">
</section>
<div id="aboutt"><?php get_template_part('about'); ?></div>
<div id="container">
	<main id="content">
		<div class="heading">
			<h2>Event</h2>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
	</main>
	<?php get_template_part('sponsor') ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>