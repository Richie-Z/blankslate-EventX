<aside id="sidebar">
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div id="mySidebar" class="sidebar">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		</div>
	<?php endif; ?>
</aside>