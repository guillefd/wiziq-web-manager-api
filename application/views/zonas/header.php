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
	
<title><?php echo $pg_title; ?></title>        
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<link rel="icon" type="<?php echo $path ?>" href="favicon.ico">
  
<!-- Included CSS Files -->
<?php foreach ($css as $value): ?>
    <link rel="stylesheet" href="<?php echo tpl_url()."css/".$value.'.css' ?>" type="text/css" media="screen"> 
<?php endforeach; ?>
<?php foreach ($custom_css as $value): ?>
    <link rel="stylesheet" href="<?php echo tpl_url().$value.'.css' ?>" type="text/css" media="screen"> 
<?php endforeach; ?>    
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="src/stylesheets/ie.css">
	<![endif]-->
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- JS TPL-->
<?php foreach ($js as $value): ?>
<script type="text/javascript" src="<?php echo tpl_url() ?>js/<?php echo $value.'.js' ?>"></script>
<?php endforeach; ?>  
<?php foreach ($custom_js as $value): ?>
<script type="text/javascript" src="<?php echo tpl_url().$value.'.js' ?>"></script>
<?php endforeach; ?>  

<!-- CKEDITOR -->  
<script src="<?php echo tpl_url() ?>ckeditor/ckeditor.js"></script>
  
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
