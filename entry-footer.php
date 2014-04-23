<footer class="entry-footer">
<section class="entry-meta">
<span class="author vcard"><?php the_author_posts_link(); ?></span>
<span class="meta-sep"> | </span>
<?php edit_post_link(); ?>
</section>
<span class="cat-links"><?php _e( 'Categories: ', 'blankslate' ); ?><?php the_category( ', ' ); ?></span>
<span class="tag-links"><?php the_tags(); ?></span>
<?php if ( comments_open() ) { 
echo '<span class="meta-sep">|</span> <span class="comments-link"><a href="' . get_comments_link() . '">' . sprintf( __( 'Comments', 'blankslate' ) ) . '</a></span>';
} ?>
</footer> 