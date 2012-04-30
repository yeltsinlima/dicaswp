<!DOCTYPE HTML>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->

<head>

	<title><?php bloginfo('name'); ?></title>

	<!-- meta -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="O DicasWP é um blog sobre WordPress, Desenvolvimento, Design e Marketing Digital">
    <meta name="keywords" content="wordpress, templates para wordpress, temas para wordpress, loja virtual wordpress, wordpress ou blogspot, temas para tumblr, marketing digital conceito, livro marketing digital, marketing digital pdf, mkt digital, marketing em redes sociais, mídias sociais, temas para wordpress grátis, tutorial, como montar um site, como criar blog">
    
    <!-- css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/foundation.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/app.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/ie.css">
	<![endif]-->
    
    <script src="<?php bloginfo('template_directory'); ?>/javascripts/modernizr.foundation.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- outros -->
    <link href="https://plus.google.com/YOUR-G+-PROFILE" rel="author" />
    
    <?php wp_head(); ?>

</head>

<body>

	<!-- container header -->
    <div class="container" id="header">
    	<div class="row">
        	<div class="four columns">
            	<a href="http://www.dicaswp.com.br" title="O DicasWP é um blog sobre WordPress, Desenvolvimento, Design e Marketing Digital"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="O DicasWP é um blog sobre WordPress, Desenvolvimento, Design e Marketing Digital"></a>
            </div>
            <?php get_search_form(); ?>
        </div>
    </div>
    <!-- container header -->
    
    <?php get_template_part('nav'); ?>
    <?php get_template_part('slider'); ?>
    
    <!-- contaner artigos e sidebar -->
    <div class="container" id="blog">
    
    	<div class="row">
        
        	<!-- artigos -->
            <div class="eight columns">