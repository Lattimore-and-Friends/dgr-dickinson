<?php
/**
* Customise the log-in page
*/

function my_login_logo() { ?>
  <style type="text/css">
  #login h1 a, .login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
    height: auto;
    width: 272px;
    background-size: contain;
    background-repeat: no-repeat;
  }

  body.login {
    background: #303030;
  }

  body.login form {
    background-color: #303030;
  }

  .login form {
    border: none !important;
  }

 


  body.login form input[type="text"],
  body.login form input[type="password"],
  body.login form input[type="checkbox"] {
    margin-bottom: 53px;
    font-size: 1rem;
    border: none !important;
    font-family: Cinzel;
    border-bottom: 1px solid #fff !important;
    color: #fff !important;
    background: #303030 !important;
  }

  body.login form input[type="checkbox"] {
    color: red;
  }

  body.login form input[type="text"]::placeholder {
    content: "Username" !important;
    font-family: Cardo;
    font-size: 16px;
    color:#fff;
  }

  body.login form input[type="submit"] {
    width: 100%;
    height: 30px;
    background-color: #af1a18;
    color: #fff;
    border: none;
    font-family: Cinzel;
    font-size: 1rem;
    text-transform: uppercase;
    transition: all 0.4s ease !important;
    text-shadow: none !important;
    box-shadow: none !important;
    border-radius: 0 !important;
  }

  input[type=color], input[type=date],
  input[type=datetime-local], input[type=datetime],
  input[type=email], input[type=month],
  input[type=number], input[type=password],
  input[type=search], input[type=tel],
  input[type=text], input[type=time],
  input[type=url], input[type=week],
  select, textarea {
    border-radius: 0 !important;
  }

  body.login form input[type="submit"]:hover {
    background: #fff !important;
    color: #000 !important;
    text-shadow: none !important;
  }

  .wp-core-ui .button, .wp-core-ui .button-secondary {
    color: #fff !important;
  }

.login #login_error, .login .message, .login .success {
  border: none !important;
  background-color:  #303030 !important;
  box-shadow: none !important;
  color: #fff;
  text-align: center;
  font-family: Cardo,serif;
  font-style: italic;
  font-size: 1.125rem;
}

.login #backtoblog, .login #nav {
  text-align: center;
}

  .login #backtoblog a, .login #nav a {
    color: #fff !important;
    font-family: Cardo,serif;
    font-style: italic;
    font-size: 1rem;
    transition: color 0.4s ease;
  }

  .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
    color: #fff !important;
  }

  .login form .forgetmenot {
    font-weight: 400;
    float: left;
    margin-bottom: 20px !important;
  }

  #rememberme {
    background: #fff !important;
    margin-bottom: 0;
  }

.login .forgetmenot label, .login .pw-weak label {
  display: inline-block;
  float: right;
  margin-left: 20px;
  color: #fff !important;
  font-family: Cardo,serif;
}

#loginform label {
  color: #fff;
  font-family: Cardo,serif;
  letter-spacing: 1px;
}

  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


?>




