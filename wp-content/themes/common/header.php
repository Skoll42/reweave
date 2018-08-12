<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,500,700,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css?ver=<?php echo time();?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css?ver=<?php echo time();?>">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target="#navbar" data-offset="30">
    <div class="header">
        <nav class="navbar navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" title="Reweave" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.svg" />
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?php wp_nav_menu( array(
                            'walker' => new Reweave_Walker_Nav_Menu,
                            'theme_location' => 'header-menu',
                            'menu_class' => 'nav navbar-nav',
                            'container' => false,
                        ) ); ?>
            </div>
        </nav>
    </div>


