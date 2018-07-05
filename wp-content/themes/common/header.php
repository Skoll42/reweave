<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css?ver=<?php echo time();?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css?ver=<?php echo time();?>">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target="#navbar" data-offset="30">

<div class="header">
    <div class="nav-menu fixed-top">
        <div class="col-xs-12">
            <nav class="navbar navbar-dark navbar-expand-lg">
                <a class="navbar-brand" title="Reweave" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.svg" />
                </a>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <a class="nav-link" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#who">WHO WE ARE</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#methodology">OUR METHODOLOGY</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#what">WHAT WE ARE DOING</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#why">WHY IS THIS NEEDED</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#dream">OUR DREAM</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#join">JOIN US</a> </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>



