<section class="entry-meta">
<h3><i class="fa fa-calendar"></i> Posted On:</h3>
<span class="entry-date-single"><?php the_time( get_option( 'date_format' ) ); ?></span>
<h3><i class="fa fa-folder"></i> Catagories</h3>
<span class="cat-links"><?php the_category( ', ' ); ?></span>
<span class="tag-links"><?php
if( has_tag() ) {
echo '<h3><i class="fa fa-tags"></i> Tags</h3>'; the_tags();
}
else {
// IF NO TAGS
}
?></span>
</section>