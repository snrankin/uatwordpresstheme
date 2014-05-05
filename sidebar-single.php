<aside id="sidebar" role="complementary" class="sidebar">
	<div class="widget-container">
	<?php get_template_part( 'entry' , 'meta' ); ?>
    </div>
      <div class="widget-container">
  	  <?php display_related_posts_via_taxonomies(); ?>
      </div>
</aside>