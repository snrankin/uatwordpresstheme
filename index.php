<?php get_header(); ?>
<section id="content" role="main" class="main-col">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php numeric_posts_nav(); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>