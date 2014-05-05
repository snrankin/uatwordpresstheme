<footer class="entry-footer">
<section class="entry-meta">
<span class="author vcard"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></span>
<?php edit_post_link(); ?>
</section>
<span class="cat-links"><i class="fa fa-folder"></i><?php the_category( ', ' ); ?></span>
<span class="tag-links"><?php
if( has_tag() ) {
echo '<i class="fa fa-tags"></i>'; the_tags(' ');
}
else {
// IF NO TAGS
}
?></span>
<?php if ( comments_open() ) { 
echo '<span class="meta-sep">|</span> <i class="fa fa-comments"></i> <span class="comments-link"><a href="' . get_comments_link() . '">' . sprintf( __( 'Comments', 'blankslate' ) ) . '</a></span>';
} ?>
</footer> 