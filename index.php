<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

// get_header(); ?>

<body class="body-login">
  <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

  <div class="login-logo-section">
    <h2 class="login-logo-section__logo">Dickinson</h2>
    <p class="login-logo-section__text">Private Advisors & Fine Art Dealers</p>
  </div>

  <div class="login-form">
    <form class="login-form" id="form" action="" method="post">
      <input class="login-form__input" type="text" name="name" placeholder="Username" required />
      <input class="login-form__input" type="password" name="password" placeholder="Password" required/>
      <button class="login-form__button" type="button" form="login-form" value="Enter" class="submit" />Enter</button>
    </form>
  </div>

  <script src="./js/main.min.js"></script>
</body>

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

			the_content();

			endwhile;

		else :

			echo "No posts found.";

		endif; ?>

<!-- <?php get_footer(); ?> -->
