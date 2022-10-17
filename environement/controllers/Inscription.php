<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class inscription extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	private $data = array();


	public function __construct(){

			parent::__construct();
			$this->load->helper('url');
			$this ->load -> helper ('form');
			$this->load->model('user_model');

			//echo "test ... test ... test..";
		}

	public function index()
	{	
		 
		 if ($this->auth->loggedin()) {
            Redirect('');
        }

		
		if( $this->input->post() )
		{
			$resultat = $this->user_model->insert($this->input->post('noms'), $this->input->post('pseudo'), $this->input->post('contacts'),$this->input->post('password'), 'avatar.png', $this->input->post('fonction'), $this->input->post('about'));
			$this->data['notification']=$resultat;

			
			if ($resultat == 'Vous avez deja un compte,connectez vous!') {
				
				$this->data['notification']='Vous avez deja un compte,connectez vous!';
				$this->data['titre']= 'Se connecter';
				$this->data['hasLogOn'] = $this->auth->loggedin();
				$this->load->view('c_login',$this->data);
			}

			else if($resultat){
				$this->data['notification']='Compte cree avec succès connectez vous ici';
				$this->data['titre']= 'connexion';
				$this->data['hasLogOn'] = false;
				$this->load->view('c_login',$this->data);
			}
			
		}
		
		else{
			$this->data['titre']= 'inscription';
			$this->data['hasLogOn'] = false;
			$this->load->view('c_inscription',$this->data);
		}
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */