<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        // Cargamos la Librería para autenticar al Usuario
        $this->load->library('google');

    }// End public function __construct()

	public function index()
	{

		// Si es usuario ya está logueado, saltamos hasta el inicio 
        if($this->session->userdata('login')){
            header('Location: '.base_url('inicio'), true, 302);
            exit;
        }

		// Generamos la URL de Login con Google
    	$data['loginURL'] = $this->google->loginURL();

    	// Cargamos la vista pasándole los datos
		$this->load->view('login_view',$data);
	}


	public function ingreso(){

        // Si es usuario ya está logueado, saltamos hasta el inicio 
        if($this->session->userdata('login')){
            header('Location: '.base_url(), true, 302);
            exit;
        }

        // Obtenemos el Código enviado por Google
        $code   =   $this->input->get('code');
        
        // Suponiendo que no está logueado
        if(isset($code)){
            //Intentamos authenticate al Usuario
            $this->google->getAuthenticate($code);

            // Obtenemos el Token de acceso del Usuario
            $token = $this->google->getAccessToken();
            
            // Obtenemos los datos del Usuario desde Google
            $user = $this->google->getUserInfo();

            /** 
            *   De acuerdo a los datos obtenidos del usuario 
            *   procederemos a verificar si el usuario ya está registrado,
            *   actualizamos sus datos o sólo iniciará sesión, lo que implica 
            *   autenticarlo también con nuestra librería para manejar la Autorización
            *	como Ion-Auth 
            */

            // Capturamos los datos del Usuario autenticado con google
            // Creamos el array para actualizar o insertar Usuario en nuestra DB
            $usuario    =   array(
            	'login'			=>	TRUE, // Marcamos login del Usuario
                'ip_address'    =>  $this->_prepare_ip($this->input->ip_address()),
                'email'			=>	$user['email'],
                'username'      =>  $this->awesome_data(4), // Crear username, sólo para el ejemplo
                'password'      =>  $this->awesome_data(20), // Crear pass, mala prática, sólo para el ejemplo
                'first_name'    =>  $user['given_name'],
                'last_name'     =>  $user['family_name'],
                'photo'         =>  !empty($user['picture']) ? $user['picture'] : '',
                'gid'           =>  $user['id'],
                'lang'          =>  !empty($user['locale']) ? $user['locale'] : '',
                'verified'      =>  $user['verified_email'],
                'perfil'		=>	!empty($user['link']) ? $user['link'] : ''
            );
            
            // AQUI PODRÍAMOS COMPROBAR EL USUARIO, INSERTAR O ACTUALIZAR REGISTRO CON NUESTRA DB
            // PARA ESTE EJEMPLO, SÓLO AGREGAREMOS A LA SESIÓN
			$this->session->set_userdata($usuario);
        }

        // Mandamos al Inicio
        header('Location: '.base_url(), true, 302);
	}// End ingreso


	public function awesome_data($len = 10){
	    $token = '';
	    $keys = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));

	    for ($i = 0; $i < $len; $i++) {
	        $token .= $keys[array_rand($keys)];
	    }

	    return $token;
	} // End awesome_pass

	protected function _prepare_ip($ip_address) {
        // just return the string IP address now for better compatibility
        return $ip_address;
    }

}
