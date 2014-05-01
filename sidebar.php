<aside id="sidebar" role="complementary" class="sidebar">
<div id="categories" class="widget">
<h2>Categories</h2>
	<ul>
		<?php wp_list_categories('orderby=name&show_count=1&show_option_all=&title_li='); ?> 
    </ul>
</div>
<div id="quotes" >
	<h2>Why UAT?</h2>
    <p>Hear from the students themselves as to why they chose to attend UAT: </p>
    <div id="why-uat" >
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
                <li>
                    <div class="why-uat-author">
                        <?php userphoto_the_author_thumbnail() ?><br/>
                        <?php the_author(); ?>
                    </div>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">read full quote</a>
                </li>
              <?php endwhile; ?>
              <!-- end of the loop -->
            
              <!-- pagination here -->
            
              <?php wp_reset_postdata(); ?>
            
            <?php else:  ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget">
<ul>
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>