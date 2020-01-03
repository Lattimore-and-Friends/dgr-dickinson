<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no" />
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

<?php if ( !is_page_template( 'login-template.php' ) && !is_page_template( 'password-template.php' )) { ?>
<header class="roompage-header">
    <div class="roompage-container-header">
      <div class="roompage-logo-section">
      <a href="<?php echo home_url(); ?>">
          <img class="roompage-logo-section__logo" src="<?php echo get_template_directory_uri(); ?>/img/Dickinson-logo-red-and-black.png" alt="Dickinson logo">
      </a> 
        <div class="roompage-header-desktop">
          <p>Private Advisors & Fine Art Dealers</p>
        </div>
      </div>

      <?php   $current_user = wp_get_current_user();
          $current_user_id = $current_user->ID;
          $rooms = get_field('user_rooms', 'user_'.$current_user_id); ?>
          <?php if( $rooms ): ?>
      <div class="roompage-hamburger-menu">
        <input id="roompage-menu__toggle" type="checkbox" />
        <label class="roompage-menu__button" for="roompage-menu__toggle">
          <span></span>
        </label>
       
                <ul class="roompage-menu__box">
                          
                <?php foreach( $rooms as $p): ?>
                                            
                  <li>
                    <a class="roompage-menu__item" href="<?php echo get_permalink($p->ID); ?>">
                      <span class="roompage-menu__item-author"><?php echo get_the_title($p->ID); ?></span>
                      <span class="roompage-menu__item-name"><?php the_field('artwork_description', $p->ID); ?></span>
                    </a>
                  </li>
                  
                  <?php endforeach; ?>
                </ul>
            <p class="roompage-menu__rooms"> Rooms </p>
          <?php endif; ?>

      </div>
    </div>
  </header>
<?php } ?>    