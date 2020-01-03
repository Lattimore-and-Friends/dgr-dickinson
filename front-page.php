<?php
/**
 * The template for displaying the front-page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header();

  if (is_user_logged_in()) {
    wp_redirect( home_url('/member/') );
    exit;
  } else {
    wp_redirect( home_url('/login/') );
    exit;
  }


get_footer(); ?>
