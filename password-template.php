<?php
/**
 * This is custom clean page template for login and logout pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
 /* Template Name: Password Template */ 
 get_header(); ?>

        <?php
            while ( have_posts() ) : the_post();  ?>
    <div class="login-container body-login">
        <div class="login-logo-section">
              

        <?php the_content(); ?>     
        </div> 
    </div>
            <?php endwhile;
        ?>
    </div>

<?php get_footer(); ?>
