<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<div id="sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
<?php } else{ ?>
<div id="sidebar">
		Aktifkan dulu sidebar lewat themes
	</div><!-- #primary-sidebar -->
<?php }?>