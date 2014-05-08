<footer class="entry-footer">
<?php if ( !is_singular() ) {
	
	  echo '<section class="entry-meta">
<span class="author vcard"><i class="fa fa-user"></i>' . the_author_posts_link() . '</span> | ' . edit_post_link() . '<span class="cat-links"><i class="fa fa-folder"></i>' 			. the_category( ', ' ) . '</span><span class="tag-links">'; 

	  if( has_tag() ) {echo '<i class="fa fa-tags"></i>'; the_tags(' ');} 
	  
	  echo'</span>';
	  
	  if ( comments_open() ) { 
	  echo '<span class="meta-sep">|</span> <i class="fa fa-comments"></i> <span class="comments-link"><a href="' . get_comments_link() . '">' . sprintf( __( 'Comments', 'blankslate' ) ) . '</a></span>';
	  }
} 
	else{
		echo the_author_posts_link();
	}
?>

</footer> 