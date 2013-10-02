<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 */
if ( is_dynamic_sidebar( 'Primary Sidebar' ) && is_page() ) : ?>
<div class=" left column four">
	<section  class="main-content-sec row ">
			<?php dynamic_sidebar('Primary Sidebar'); ?>
	</section>
</div>
<?php endif; ?>

<?php if ( is_dynamic_sidebar( 'Primary Sidebar' ) && is_single() ) : ?>
<div class=" right column four">
	<section  class="main-content-sec row ">
			<?php dynamic_sidebar('Primary Sidebar'); ?>
	</section>
</div>
<?php endif; ?>