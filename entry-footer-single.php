<footer class="entry-footer">
<section class="entry-meta">
<span class="author vcard"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></span>
<?php 
     $user_id = get_current_user_id(); 
     $key = 'degree'; 
     $single = true; 
     $user_last = get_user_meta( $user_id, $key, $single ); 
     echo $user_last; 
?>
</footer> 