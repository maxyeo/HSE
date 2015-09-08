<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>

<div id="primary" class="site-content container">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile;

		/* Display sub-pages */
		$children = get_pages( array( 'child_of' => $post->ID));
		foreach ($children as $child) { 
		?>
			<div class="subpage">
			<h2><a name="<?php echo $child->post_title?>"><?php echo $child->post_title; ?></a></h2>
			<?php echo $child->post_content; ?>
			</div>
    	<?php } ?>
		</div>


	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>