<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
	<title>Aplicación Web Copada | Login</title>
 	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css" >
</head>
<body>

	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
	  	<header class="masthead mb-auto">
		    <div class="inner">
		      	<h3 class="masthead-brand"><a href="<?= base_url() ?>">Aplicación Web Copada</a></h3>
		      	<nav class="nav nav-masthead justify-content-center">
		        	<a class="nav-link active" href="https://github.com/Bleutecmedia/ci3_google_auth" target="_blank">GitHub</a>
		        	<a class="nav-link" href="https://bleutecmedia.com/" target="_blank">Bleutecmedia</a>
		      	</nav>
		    </div>
	  	</header>

	  	<main role="main" class="inner cover">
	    	<h1 class="cover-heading">Login</h1>
	    	<p class="lead">Entrar con mi cuenta de Google.</p>
	    	<p class="lead">
	      		<a href="<?= $loginURL ?>"><img src="<?= base_url('assets/img/btn_google_signin_dark_normal_web.png') ?>"></a>
	    	</p>
	  	</main>

	  	<footer class="mastfoot mt-auto">
	  		<?php 
		    	$fromYear = 2020; 
		    	$thisYear = (int)date('Y'); 
		    ?>
	    	<div class="inner">
	      		<strong>Copyright &copy;&nbsp;<a href="#">Aplicación Web Copada</a></strong>&nbsp;<?php echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : ''); ?>
	    	</div>
	  	</footer>

	</div><!-- ./cover-container -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>