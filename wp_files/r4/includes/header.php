<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> <?php if ( is_multisite() ): ?>data-sid="<?php echo get_current_blog_id() ?>"<?php endif ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/gitHubStyles.php">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/modals/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/modals/css/component.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/modals/js/modernizr.custom.js"></script>
</head>

<body <?php body_class(); ?> >
<div class="page--home"> 
      <div class="container-fluid global-wrap">
        <header class="global-header bg-white">
          <nav class="navbar navbar-default global-nav">
            <div class="container bg-white">
              <!-- Brand and toggle get grouped for better mobile display-->
              <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="<?php echo site_url(); ?>/" class="navbar-brand kill-text global-brand">RevUnit</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling-->
              <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo site_url(); ?>/about">About Us</a></li>
                  <li><a href="<?php echo site_url(); ?>/clients-and-partners">Clients & Partners </a></li>
                  <li><a href="<?php echo site_url(); ?>/our-services">Our Services</a></li>
                  <li><a href="<?php echo site_url(); ?>/our-process">Our Process</a></li>
                  <li><a href="<?php echo site_url(); ?>/blog">Blog</a></li>
                  <li class="btn-custom"><a href="<?php echo site_url(); ?>/">Schedule a Call</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
      </div>
    </div>