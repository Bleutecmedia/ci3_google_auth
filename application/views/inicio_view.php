<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
	<title>Aplicación Web Copada | Inicio</title>
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
		      		<a class="nav-link" href="<?= base_url('inicio/logout') ?>">Salir</a>
		      	</nav>
		    </div>
	  	</header>

	  	<main role="main" class="inner cover">
	    	<h1 class="cover-heading">Inicio</h1>
	    	<p class="lead">Bienvenido.</p>
	    	<h3>Datos de la sesión (Google)</h3>
	    	<p class="lead">
	    		<img class="img-responsive img-thumbnail" src="<?= $this->session->userdata('photo') ?>" width="120px">
	      		<ul>
	      			<li><b>Email:</b>&nbsp;<?= $this->session->userdata('email') ?></li>
	      			<li><b>Nombre:</b>&nbsp;<?= $this->session->userdata('first_name').' '.$this->session->userdata('last_name') ?></li>
	      			<li><b>ID:</b>&nbsp;<?= $this->session->userdata('gid') ?></li>
	      			<li><b>Lang:</b>&nbsp;<?= $this->session->userdata('lang') ?></li>
	      			<li><b>Perfil:</b>&nbsp;<?= $this->session->userdata('perfil') ?></li>
	      			<li><b>Verificado:</b>&nbsp;<?= $this->session->userdata('verified') == 1 ? 'Si' : 'No' ?></li>
	      		</ul>
	    	</p>

	    	<h3>Datos de la sesión (Adicionales)</h3>
	    	<p class="lead">
	    		<li><b>IP:</b>&nbsp;<?= $this->session->userdata('ip_address') ?></li>
	    		<li><b>Usuario:</b>&nbsp;<?= $this->session->userdata('username') ?></li>
	    		<li><b>Pass:</b>&nbsp;<?= $this->session->userdata('password') ?></li>
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