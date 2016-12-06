<?php
/**
 * Theme Name: City of Casey
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CityofCasey
 *
 */

get_header(); ?>


		

		<?php while( have_posts() ): the_post(); ?>

<h1 class="page-header"><?php the_title(); ?></h1>
	    	
<?php the_content(); ?>

                
	
         

        <?php endwhile; ?>

			
			

		



<?php get_footer(); ?>
