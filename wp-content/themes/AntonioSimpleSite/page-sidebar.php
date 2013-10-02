<?php
/*
* Template Name: Page with sidebar 
*/
?>
<?php get_header(); ?>
<!-- Hero -->
<?php
	global $wp_query;
	$postid = $wp_query->post->ID;	
?>
<?php if ( get_post_meta($postid, 'hero', true) ) : ?>
	<div id="hero-pic" class="container">
		<div class="wrapper">
			<div id="hero-text">
				<?php  echo '<h3>'.get_post_meta($postid, 'hero', true).'</h3>';?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php wp_reset_query(); ?>
<!-- Heror -->
<!-- Main Content & Nav container -->
<div id="content-container" class="container p40TB">
	
	<!-- Main Content & Nav wrapper -->
	<div id="conten-wrapper" class="wrapper ">
		<!-- Main Content -->
		<div class="right" id="main-content-wrapper" class="wrapper">
			<?php 
						if(!is_page('Home')){
							echo '<h3 class="title">'.get_the_title().'</h3>';
						}
					 ?>
			<article>
				<!-- id="first-half-body"  id="second-half-body"-->
				<?php get_sidebar(); ?>
				<div class="container right column eight">
					<?php if ( have_posts() ) : while ( have_posts() ) : 
						the_post();
						the_content();
					endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
				</div>
			</article>
		</div>	
		<!-- Main Content END -->
		

		<div class="clear"></div>	
		<!-- Secondary Nav END -->
	</div>
	<!-- Main Content & Nav wrapper END -->
</div>
<!-- Main Content & Nav container END-->
<?php get_footer(); ?>