<?php
/**
 * Theme Name: City of Casey
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<?php while( have_posts() ): the_post(); ?>

<h1 class="page-header"><?php the_title(); ?></h1>
	    	
<?php the_content(); ?>

                
	
         

        <?php endwhile; ?>

<?php get_footer(); ?>
