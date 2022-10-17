<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

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
	

	public function __construct(){

			parent::__construct();
			$this->load->helper('url');
			$this ->load -> helper ('form');
			$this->load->model('users');
			//echo "test ... test ... test..";
			date_default_timezone_set("Africa/kigali");
		}

	public function index()
	{	
		
		$data = array();
			
		$data['titre']= 'Se connecter';

		$this->load->library('auth');
        
        // user is already logged in
        if ($this->auth->loggedin()) {
            Redirect('dashboard');
        }

		$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;
        
        $error = '';
        
        // form submitted
        if ($this->input->post('contacts') && $this->input->post('password')) {
            $remember = $this->input->post('remember') ? TRUE : FALSE;
            
            // get user from database
            $this->load->model('user_model');
            $user = $this->user_model->get('contacts', $this->input->post('contacts'));
            
            if ($user) {
                // compare passwords
                if ($this->user_model->check_password($this->input->post('password'), $user['password'])) {
                    // mark user as logged in
                    $this->auth->login($user['user_id'], $remember);
                    $newdata = array(
				        'username'  => $user['Noms'],
				        'contacts'     => $user['contacts'],
				        'img_profile'     => $user['image'],
				        'type'     => $user['Type']
					);

					$this->session->set_userdata($newdata);

					$data['username'] = $this->session->userdata('username');
					$data['contacts'] = $this->session->userdata('contacts');
					$data['img_profile'] = $this->session->userdata('img_profile');
					$data['type'] = $this->session->userdata('type');

					if( $this->session->userdata('type') == 'admin'){
                    	redirect('dashboard');}
                    else{
                    	redirect('profile');
                    }

                } else {
                    $error = 'Password incorrect';
                    $data['notification'] = 'Password incorrect';
                }
            } else {
                $error = 'adress email incorrect';
                $data['notification'] = 'adress email incorrect';
            }

        }
        
		$this->load->view('c_login',$data);


	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */