<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php bloginfo('name');  ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container-fluid">
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="navbar-brand page-scroll"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/netavantage.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a href="#services" class="page-scroll">Services</a>
                    </li>
                    <li class="">
                        <a href="#pourquoi-nous" class="page-scroll">Pourquoi nous</a>
                    </li>
                    <li class="">
                        <a href="#portfolio" class="page-scroll">Derniers projets</a>
                    </li>
                    <li class="">
                        <a href="#clients" class="page-scroll">Clients</a>
                    </li>
                    <li class="">
                        <a href="#contact" class="page-scroll">Contactez-nous</a>
                    </li>
                </ul>
                <?php wp_nav_menu( array( 'principal' => 'menu_order', 'container_class' => 'menu-header', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
</nav>

<header style="background-image:url('<?php header_image(); ?>')">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Développement et programmation web </div>
                <div class="intro-heading"><?php bloginfo('description'); ?></div>
                <a class="page-scroll btn btn-xl" href="#contact">Multipliez vos affaires</a>
            </div>
        </div>
    </header>



