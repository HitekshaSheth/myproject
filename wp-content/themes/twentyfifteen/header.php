<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->


    <!-- Custom fonts for this template -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->

    <title>Freelancer - Start Bootstrap Theme</title>
    <?php wp_head(); ?>
</head>
<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">My theme</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" id="menuUl">
                <?php
                wp_list_pages( array(
                    'title_li' => '',
                    //'sort_order' => 'desc'
                ));
                ?>
                <?php /*wp_nav_menu(
                    array(
                        'theme_location' => 'new-menu',
                        'menu_class' => false,
                        'items_wrap' => '%3$s',
                        'walker' => new Clapton_Nav_Walker
                    ) );
                */?>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/profile.png" alt="">
        <div class="intro-text">
            <span class="name">Hiteksha Sheth</span>
            <hr class="star-light">
            <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
        </div>
    </div>
</header><!-- .site-header -->

		<?php /*get_sidebar(); */?>
	<!--</div>--><!-- .sidebar -->
<div id="content" class="site-content">

