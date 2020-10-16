<?php get_header(); ?>
<section id="home">
</section>
<?php get_template_part('about'); ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	window.addEventListener('scroll',function(){
		var header =document.querySelector('header');
		header.classList.toggle('sticky',window.scrollY>0);
	});
	$("#menu-nav li a").on("click", function (e) {
		e.preventDefault();
		const href = $(this).attr("href");
		$("html, body").animate({ scrollTop: $(href).offset().top }, 800);
	});
</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>