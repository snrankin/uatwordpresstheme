<?php 
/*
Template Name: Why UAT
*/
get_header(); ?>
<section id="content" role="main" class="main-col">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <section class="entry-content">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                <?php the_content(); ?>
                <div class="entry-links"><?php wp_link_pages(); ?> <?php edit_post_link(); ?></div>
            </section>
        </article>
        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        <?php endwhile; endif; ?>
        <?php $args = array( 'post_type' => 'why-uat' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
            echo '<div class="entry">';
                echo '<div class="entry-photo">';
                    userphoto_the_author_photo ();
                echo '</div>';
                echo '<div class="entry-content">';
                    the_content();
                    echo '<div class="entry-author"> &mdash; ';
                        the_author();
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        endwhile; ?>
    	<article id="UAT-Info">
        	<header class="header">
            	<h2>Thinking about joining these students at the geekiest school around?</h2>
            </header>
            <section class="entry-content">
            	<p>Then check out some of these links below to find out more information about UAT (and also apply!)</p>
                <ul id="UAT-links">
                	<li><a href="http://www.uat.edu/about_uat/default.aspx" title="About UAT" target="_blank">About UAT</a></li>
                    <li><a href="http://uat.edu/majors/" title="Degree Programs" target="_blank">Degree Programs</a></li>
                    <li><a href="http://www.uat.edu/student_services/Financial_Aid.aspx" title="Financial Aid" target="_blank">Financial Aid</a></li>
                    <li><a href="http://uat.edu/see-technology-college" title="Virtual Tour" target="_blank">Virtual Tour</a></li>
                    <li><a href="https://www.uat.edu/requestinfo/" title="Request Info" target="_blank">Request Info</a></li>
                    <li><a href="https://www.uat.edu/apply" title="Apply Now" target="_blank">Apply Now</a></li>
                </ul>
            </section>
        </article>
</section>
<?php get_footer(); ?>