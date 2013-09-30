<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 */
if ( is_dynamic_sidebar( 'Primary Sidebar' ) ) : ?>
<div class=" left column four">
	<section  class="main-content-sec row ">
			<?php dynamic_sidebar('Primary Sidebar'); ?>
	</section>
</div>
<?php endif; ?>