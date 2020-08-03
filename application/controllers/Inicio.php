<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		// Vericación de la sesión con alguna libreria copada.
		if(!$this->session->userdata('login')){
			header('Location: '.base_url(), true, 302);
			exit;
		}

    	// Cargamos la vista pasándole los datos
		$this->load->view('inicio_view');
	}

	public function logout(){
		// Destruimos la sesión
		$this->session->sess_destroy();

		// Mandamos al Inicio
        header('Location: '.base_url(), true, 302);
	}// End logout

}// End class
