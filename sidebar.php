<aside id="sidebar" role="complementary" class="sidebar">
<div id="why-uat" class="widget-area">
	<ul class="bjqs">
		<?php 
        $args = array(
            'post_type' => 'why-uat',
            'post_count' => '5'
        );
        $the_query = new WP_Query( $args ); ?>
        
        <?php if ( $the_query->have_posts() ) : ?>
        
          <!-- pagination here -->
        
          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li><?php the_excerpt(); ?><?php the_author(); ?></li>
          <?php endwhile; ?>
          <!-- end of the loop -->
        
          <!-- pagination here -->
        
          <?php wp_reset_postdata(); ?>
        
        <?php else:  ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </ul>
</div>
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>