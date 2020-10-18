<div class="entry-meta">
	<span class="author vcard">	
		<i class="fa fa-user" aria-hidden="true"></i>
		<?php the_author_posts_link(); ?>
	</span>
	<span class="meta-sep"> | </span>
	<span class="entry-date">
		<i class="fa fa-calendar-o" aria-hidden="true"></i>
		<?php the_time( get_option( 'date_format' ) ); ?>
	</span>
	<span class="meta-sep"> | </span>
	<span class="cat-links">
		<i class="fa fa-folder-o" aria-hidden="true"></i>
		<?php esc_html_e( 'Categories: ', 'blankslate' ); ?><?php the_category( ', ' ); ?></span>
	<!-- <span class="tag-links"><?php the_tags(); ?></span>
	<?php if ( comments_open() ) { echo '<span class="meta-sep">|</span> <span class="comments-link"><a href="' . esc_url( get_comments_link() ) . '">' . sprintf( esc_html__( 'Comments', 'blankslate' ) ) . '</a></span>'; } ?> -->
</div>