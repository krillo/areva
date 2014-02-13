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
    <div id="hbg-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">&nbsp;</div>
          <div class="col-sm-2">English Swedish</div>
        </div>
        <div class="row">
          <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
              <div class="col-sm-3">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt="" />
                  </a>
                </div>
              </div>

              <div class="col-sm-9 areva-menu">
                <?php
                wp_nav_menu(array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker())
                );
                ?>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div id="header-puff" class="splash-puff">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 headline-img">
            <img src="http://areva.dev/wp-content/uploads/2014/02/nimis.jpg" alt="" />
          </div>
          <div class="col-sm-6 headline-txt">
            <h1>Donec id elit non mi porta </h1>
            Eelit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.at eget metus. Vestibulum id ligula porta felis euismod semper.at eget metus. Vestibulum id ligula porta felis euismod semper.
            <br>
            <a href="">READ MORE <i class="fa fa-play-circle"></i></a>
          </div>
        </div>
      </div>
    </div>







