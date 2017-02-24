<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> <?php if ( is_multisite() ): ?>data-sid="<?php echo get_current_blog_id() ?>"<?php endif ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/gitHubStyles.php">
</head>

<body <?php body_class(); ?> >
<div class="page--home"> 
      <div class="container-fluid global-wrap">
        <header class="global-header bg-white">
          <nav class="navbar navbar-default global-nav">
            <div class="container bg-white">
              <!-- Brand and toggle get grouped for better mobile display-->
              <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand kill-text global-brand">RevUnit</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling-->
              <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="clients-and-partners.html">Clients & Partners </a></li>
                  <li><a href="process.html">Our Process</a></li>
                  <li class="btn-custom"><a href="#">Schedule a Call</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
      </div>
    </div>