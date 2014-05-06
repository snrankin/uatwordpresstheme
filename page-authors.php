<?php
/*
Template Name: Authors
*/
get_header(); ?>
    <section id="content" role="main" class="one-col">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <section id="authors" class="entry-content">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                <?php the_content(); ?>
                <div class="entry-links"><?php wp_link_pages(); ?> <?php edit_post_link(); ?></div>
            </section>
        </article>
        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        <?php endwhile; endif; ?>
    </section>
<?php get_footer(); ?>