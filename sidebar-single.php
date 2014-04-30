<aside id="sidebar" role="complementary" class="sidebar">
	<?php get_template_part( 'entry' , 'meta' ); ?>
	<ul>
      <?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('single-sidebar') ) :
      endif; ?>
   </ul>
   <?php display_related_posts_via_taxonomies(); ?>
</aside>