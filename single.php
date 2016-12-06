<?php 
	
/**

The template for City of Casey.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Metamorph Pty. Ltd.

*/

get_header(); ?>

<?php 
 
 
  while( have_posts() ): the_post(); ?>

	<?php/**
	<h1 class="page-header"><?php //the_title(); ?></h1>
	    	
	<?php //the_content(); ?>
	
*/?>
        <?php endwhile; ?>

<?php get_footer(); ?>