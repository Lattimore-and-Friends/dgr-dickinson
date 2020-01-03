<?php
/**
 * This is custom clean page template for login and logout pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
 /* Template Name: LoginTemplate */ 
 get_header(); ?>

        <?php
            while ( have_posts() ) : the_post();  ?>
    <div class="login-container body-login">
        <div class="login-logo-section">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="login-logo-section__logo" alt="Dickinson"></img>
                <p class="login-logo-section__text">Private Advisors & Fine Art Dealers</p>

        <?php the_content(); ?>     
        </div> 
    </div>
            <?php endwhile;
        ?>
    </div>

<?php get_footer(); ?>
