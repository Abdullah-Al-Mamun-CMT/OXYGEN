<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta <?php bloginfo("charset"); ?> >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

<!--  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">-->
  
  <?php wp_head(); ?>
  
</head><!--/head-->
<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">

    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">

<?php

	global $header_slider;

	$args = array(

			'post_type'		=>		'header_slider',
			'posts_per_page'	=>		-1

		);

	$posts = get_posts( $args );

	foreach ( $posts as $post ) : setup_postdata( $header_slider );

	$big_title 			= get_post_meta( $header_slider->ID, 'big_title', true );
	$big_title_color 	= get_post_meta( $header_slider->ID, 'big_title_color', true );
	$button_text 		= get_post_meta( $header_slider->ID, 'button_text', true );
	$button_text_link 	= get_post_meta( $header_slider->ID, 'button_text_link', true );

?>


        <div class="item active" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"> <?php echo $big_title; ?> <span> <?php echo $big_title_color; ?> </span></h1>
            <p class="animated fadeInRightBig"> <?php the_title(); ?> </p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href=" <?php echo esc_url( $button_text_link ); ?> "> <?php echo $button_text; ?> </a>
          </div>
        </div>

<?php endforeach; ?>

      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Service</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#blog">Blog</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
