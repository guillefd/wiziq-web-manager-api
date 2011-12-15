<!DOCTYPE html>	

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
<title><?=$pg_title; ?></title>        
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<link rel="icon" type="<?=$path ?>" href="favicon.ico">
  
<!-- Included CSS Files -->
<? foreach ($css as $value): ?>
    <link rel="stylesheet" href="<?=tpl_url()."css/".$value.'.css' ?>" type="text/css" media="screen"> 
<? endforeach; ?>
<? foreach ($custom_css as $value): ?>
    <link rel="stylesheet" href="<?=tpl_url().$value.'.css' ?>" type="text/css" media="screen"> 
<? endforeach; ?>    
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="src/stylesheets/ie.css">
	<![endif]-->
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- JS TPL-->
<? foreach ($js as $value): ?>
<script type="text/javascript" src="<?=tpl_url() ?>js/<?=$value.'.js' ?>"></script>
<? endforeach; ?>  
<? foreach ($custom_js as $value): ?>
<script type="text/javascript" src="<?=tpl_url().$value.'.js' ?>"></script>
<? endforeach; ?>  
  
  
  <script>
  $(window).load(function() {
     $('#featured').orbit({
       animation: 'fade',
       animationSpeed: 800,
       timer: true,
       advanceSpeed: 12000,
       captionAnimation: "fade",
       captionAnimationSpeed: 800
     });
  });
  </script>


</head>
<body>

	  




<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
