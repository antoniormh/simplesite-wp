<?php
function simplesitewp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'simplesitewp' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the page sidebar template.', 'simplesitewp' ),
		 'before_widget' => '<div id="%1$s" class="widget %2$s">',
		 'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'simplesitewp_widgets_init' );
?>