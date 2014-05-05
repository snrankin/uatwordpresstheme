<aside id="sidebar" role="complementary" class="sidebar">
	<div class="widget-container">
	<?php get_template_part( 'entry' , 'meta' ); ?>
    </div>
    <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
      <div class="widget-container">
  	  <?php display_related_posts_via_taxonomies(); ?>
      </div>
</aside>