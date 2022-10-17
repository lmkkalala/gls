<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile extends CI_Controller {

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
	
	var $data = array();
	
	public function __construct(){

			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('assets');
			$this->load->helper ('form');
			$this->load->model('users');
			$this->load->model('user_model');
			$this->load->model('post_model');
			//echo "test ... test ... test..";

		}

	public function index()
	{	
			
		$data['titre']= 'profile';
		
        
        $data['notification'] = false;
        // user is already logged in
        if (!$this->auth->loggedin()?TRUE:FALSE) {
            Redirect('');
        }

		$data['username'] = $this->session->userdata('username');
		$data['contacts'] = $this->session->userdata('contacts');
		$data['img_profile'] = $this->session->userdata('img_profile');
		$data['type'] = $this->session->userdata('type');
        $data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

        $this->db->select('Noms, pseudo, contacts, image, profession, Apropos, Date_creation, validation');
        
		$y=$this->db->get_where("users", ['user_id' => $this->session->userdata('auth_user')]) ->row_array();
			
		$x=json_encode($y);

		$data['user_info']=$x;
		$data2 = $this->data;

		$this->load->view('profile', $data);
	}

		public function mettre_ajour(){

        $data['notification'] = false;
		
		if (!$this->auth->loggedin()) {
            Redirect('');
        }



        if( $this->input->post()  )
		{
			$config['upload_path'] = './images/profiles/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = TRUE;
			$config['remove_spaces'] = TRUE;
			$config['file_name'] = $this->session->userdata('username');

			$this->load->library('upload', $config);

			$x = $this->upload->do_upload('profile_pic');
			
				if (!$x)
                {
                	 
                        #$error = array('error' => $this->upload->display_errors());
                	
                	$resultat = $this->user_model->update($this->auth->userid(), $this->input->post('noms'), $this->input->post('pseudo'), $this->input->post('contacts'),$this->session->userdata('img_profile'), $this->input->post('fonction') ,$this->input->post('Apropos'));
					
					$data['notification'] = "les champs valides ont été mis à jour";
					
						$data['titre']= 'profile';
		
        
        				// simulate the index page
				        
				        if (!$this->auth->loggedin()?TRUE:FALSE) {
				            Redirect('');
				        }

						$data['username'] = $this->session->userdata('username');
						$data['contacts'] = $this->session->userdata('contacts');
						$data['img_profile'] = $this->session->userdata('img_profile');
						$data['type'] = $this->session->userdata('type');
				        $data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

				        $this->db->select('Noms, pseudo, contacts, image, profession, Apropos, Date_creation, validation');
				        
						$y=$this->db->get_where("users", ['user_id' => $this->session->userdata('auth_user')]) ->row_array();
						
							
						$x=json_encode($y);

						$data['user_info']=$x;
						$data2 = $this->data;

						$this->load->view('profile', $data);

                }
                else
                {	
                	$resultat = $this->user_model->update($this->auth->userid(), $this->input->post('noms'), $this->input->post('pseudo'), $this->input->post('contacts'),$this->upload->data('file_name'), $this->input->post('fonction') ,$this->input->post('Apropos'));
							$data['notification'] = $resultat;
								$data['titre']= 'profile';
		
        					        $this->session->set_userdata(array('img_profile' => $this->upload->data('file_name')));
        					        $this->session->set_userdata(array('contacts' => $this->input->post('contacts')));
        					             

							        if (!$this->auth->loggedin()?TRUE:FALSE) {
							            Redirect('');
							        }

									$data['username'] = $this->session->userdata('username');
									$data['contacts'] = $this->session->userdata('contacts');
									$data['img_profile'] = $this->session->userdata('img_profile');
									$data['type'] = $this->session->userdata('type');
							        $data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

							        $this->db->select('Noms, pseudo, contacts, image, profession, Apropos, Date_creation, validation');
							        
									$y=$this->db->get_where("users", ['user_id' => $this->session->userdata('auth_user')]) ->row_array();
									
										
									$x=json_encode($y);

									$data['user_info']=$x;
									$data2 = $this->data;
									$this->load->view('profile', $data);
									

                }
		}

		else{
			$this->index();
		}

		
	}


		public function post_update(){
		
		if (!$this->auth->loggedin()) {
            Redirect('');
        }

        $data['notification'] = false;

        if( $this->input->post() )
		{
			$config['upload_path'] = './images/news-pic/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']     = '2048'; //change max size
			$config['overwrite'] = TRUE;
			$config['remove_spaces'] = TRUE;
			$post_id = now().rand(17488,88877);           
			$config['file_name'] ='_news'.$post_id;

			$this->load->library('upload', $config);
			$ir=$this->upload->do_upload('illustration');

			if (!$ir)
                {
                	$data['notification'] = str_replace('<p>', ' ', $this->upload->display_errors()); 
                	$data['notification'] = str_replace('</p>', ' ', $this->upload->display_errors()); 
                        #$error = array('error' => $this->upload->display_errors());
                	$data['username'] = $this->session->userdata('username');
					$data['contacts'] = $this->session->userdata('contacts');
					$data['img_profile'] = $this->session->userdata('img_profile');
					$data['type'] = $this->session->userdata('type');
			        $data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

			        $this->db->select('Noms, pseudo, contacts, image, profession, Apropos, Date_creation, validation');
			        
					$y=$this->db->get_where("users", ['user_id' => $this->session->userdata('auth_user')]) ->row_array();
					if($y['Noms'] == $this->session->userdata('username')){
						
						$x=json_encode($y);

						$data['user_info']=$x;
						$data2 = $this->data;

						$this->load->view('profile', $data);
					}
					else{
						Redirect('');	
					}
                }

             else
                {
                       # $data = array('upload_data' => $this->upload->data());
                		

							
							$d= $this->input->post('titre');

							$d=trim($d);


               
						$resultat = $this->post_model->insert($post_id, $this->session->userdata('username'), $this->input->post('post_caption'), $_POST['contenu'], $d, $this->upload->data('file_name'), '0');
						
						


						if ($resultat == 'Poste mis a jours avec successs!, nous le validerons dans le bref delais') {
							
							$data['notification'] = $resultat;
							
							     // simulate the index funtion

							        if (!$this->auth->loggedin()?TRUE:FALSE) {
							            Redirect('');
							        }

									$data['username'] = $this->session->userdata('username');
									$data['contacts'] = $this->session->userdata('contacts');
									$data['img_profile'] = $this->session->userdata('img_profile');
									$data['type'] = $this->session->userdata('type');
							        $data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

							        $this->db->select('Noms, pseudo, contacts, image, profession, Apropos, Date_creation, validation');
							        
									$y=$this->db->get_where("users", ['user_id' => $this->session->userdata('auth_user')]) ->row_array();
									if($y['Noms'] == $this->session->userdata('username')){
										
										$x=json_encode($y);

										$data['user_info']=$x;
										$data2 = $this->data;

										$this->load->view('profile', $data);
									}
									else{
										Redirect('');	
									}
						}

							else{
								
								$data['notification'] = $resultat;
							
							     // simulate the index funtion

							        if (!$this->auth->loggedin()?TRUE:FALSE) {
							            Redirect('');
							        }

									$data['username'] = $this->session->userdata('username');
									$data['contacts'] = $this->session->userdata('contacts');
									$data['img_profile'] = $this->session->userdata('img_profile');
									$data['type'] = $this->session->userdata('type');
							        $data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

							        $this->db->select('Noms, pseudo, contacts, image, profession, Apropos, Date_creation, validation');
							        
									$y=$this->db->get_where("users", ['user_id' => $this->session->userdata('auth_user')]) ->row_array();
									if($y['Noms'] == $this->session->userdata('username')){
										
										$x=json_encode($y);

										$data['user_info']=$x;
										$data2 = $this->data;

										$this->load->view('profile', $data);
									}
									else{
										Redirect('');	
									}
							}
					}
		}

		else{
			$this->index();
		}

		
	}



}