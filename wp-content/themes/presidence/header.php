<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header class="top-header">
      <a href="#"><img class="img-responsive" src="<?php echo get_bloginfo("template_url"); ?>/images/logo-gris.png" alt="logo"></a>
    </header>
    <!-- Navbar -->
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse text-center">
          <ul class="nav navbar-nav menu-top">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="Blog.html">Blog</a></li>
            <li><a href="Portfolio.html">Portfolio</a></li>
            <li><a href="Propos.html">A Propos</a></li>
            <li><a href="Contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

