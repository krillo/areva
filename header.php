<?php
/**
 * The Header for Theme Helsingborg.
 * WordPress theme based on Bootstrap 3.0.3, http://getbootstrap.com/
 *
 * @package WordPress
 * @subpackage Helsingborg intranet
 * @since 2014-01
 */
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class('areva'); ?> >
    <div id="rep-lang">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">&nbsp;</div>
          <div class="col-sm-2">English Swedish</div>
        </div>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
              <a class="menu-logo" href="<?php bloginfo('url'); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt="" />
              </a>
          </div>
          <div class="col-sm-9">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
          </div>
        </div>
      </div>
    <div class="clearfix"></div>








