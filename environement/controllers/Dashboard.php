
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

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
			$this->load->helper('assets');
			$this->load->helper('assets');

            $this->load->model('post_model');
			$this->load->model('user_model');

			$this->load->helper ('form');
			//echo "test ... test ... test..";
		}

	public function index()
	{	
		$data = array();
			
		$data['titre']= 'dashboard';
		
		$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

		if($data['hasLogOn'] AND $this->session->userdata('type') == 'admin'){

			$data['username'] = $this->session->userdata('username');
			$data['contacts'] = $this->session->userdata('contacts');
			$data['type'] = $this->session->userdata('img_profile');
			$data['type'] = $this->session->userdata('type');

			$data['post_number'] = $this->post_model->count_post();
			$data['new_post_number'] = $this->post_model->count_new_post();


			$data['users_number'] = $this->user_model->count_users();
			$data['new_users_number'] = $this->user_model->count_new_users();

			$this->load->view('dashboard',$data);
		}
		
		else{
			Redirect('profile');
		}
	}

	public function cpan_articles($action=FALSE, $id=FALSE)
	{	

		
		if ($action !==FALSE AND $id !== FALSE) {

			$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

			if($data['hasLogOn'] AND $this->session->userdata('type') != 'admin'){
				Redirect('');
			}

			if ($action == 'Supprimer') {
				 $this->post_model->delete_news($id);

			}

			else if ($action == "valider") {

				 $this->post_model->validate_news($id);
			}

			}
			
		
			$data = array();
				
			$data['titre']= 'cpan_articles';
			
			$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

			if($data['hasLogOn'] AND $this->session->userdata('type') == 'admin'){

				$str_table_news = $this->post_model->dump_news();

				if(!empty($str_table_news)):

					foreach ($str_table_news as $post => $post_meta) {
						
						$str_table_news[$post] = array_merge($post_meta, array('nombre_de_commentaire' => $this->post_model->comments_number($str_table_news[$post]['post_id']) )); #l'algo ici consiste a looper dans le 2D associative array puis append a chaque entree une meta du nombre de commentaire qui n'existe que dans la table comments
					}

				endif;

				$data['news'] =$str_table_news;


				$data['username'] = $this->session->userdata('username');
				$data['contacts'] = $this->session->userdata('contacts');
				$data['type'] = $this->session->userdata('img_profile');
				$data['type'] = $this->session->userdata('type');


				$data['post_number'] = $this->post_model->count_post();
				$data['new_post_number'] = $this->post_model->count_new_post();


				$data['users_number'] = $this->user_model->count_users();
				$data['new_users_number'] = $this->user_model->count_new_users();

				$this->load->view('cpan_articles',$data);
			}
			
			else{
				Redirect('');
			}
	}

	public function cpan_profiles($action=FALSE, $user_id=FALSE)
	{	

		
		if ($action !==FALSE AND $user_id !== FALSE) {

			$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

			if($data['hasLogOn'] AND $this->session->userdata('type') != 'admin'){
				Redirect('');
			}

			if ($action == 'Supprimer') {
				 $this->user_model->delete_user($user_id);

			}

			else if ($action == "valider") {

				 $this->user_model->validate_user($user_id);
			}

		}
			
		
			$data = array();
				
			$data['titre']= 'cpan_profile';
			
			$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

			if($data['hasLogOn'] AND $this->session->userdata('type') == 'admin'){

				$str_table_users = $this->user_model->dump_users();

				if(!empty($str_table_users)):

					foreach ($str_table_users as $user => $user_meta) {
						
						$str_table_users[$user] = array_merge($user_meta, array('nombre_de_post_par' => $this->post_model->post_number_by($str_table_users[$user]['Noms']) )); #l'algo ici consiste a looper dans le 2D associative array puis append a chaque entree une meta du nombre de post qua fait monsieur X
					}

				endif;

				$data['users'] =$str_table_users;


				$data['username'] = $this->session->userdata('username');
				$data['contacts'] = $this->session->userdata('contacts');
				$data['type'] = $this->session->userdata('img_profile');
				$data['type'] = $this->session->userdata('type');

					
				$data['post_number'] = $this->post_model->count_post();
				$data['new_post_number'] = $this->post_model->count_new_post();


				$data['users_number'] = $this->user_model->count_users();
				$data['new_users_number'] = $this->user_model->count_new_users();

				$this->load->view('cpan_profiles',$data);
			}
			
			else{
				Redirect('');
			}
	}

	public function cpan_commentaire($action=FALSE, $comment_id=FALSE)
	{	

		
		if ($action !==FALSE AND $comment_id !== FALSE) {

			$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

			if($data['hasLogOn'] AND $this->session->userdata('type') != 'admin'){
				Redirect('');
			}

			if ($action == 'Supprimer') {
				 $this->post_model->delete_comment($comment_id);

			}

			else if ($action == "valider") {

				 $this->post_model->validate_comment($comment_id);
			}

		}
			
		
			$data = array();
				
			$data['titre']= 'cpan_commentaires';
			
			$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

			if($data['hasLogOn'] AND $this->session->userdata('type') == 'admin'){

				$str_table_comments = $this->post_model->dump_comment();


				$data['comment'] =$str_table_comments;


				$data['username'] = $this->session->userdata('username');
				$data['contacts'] = $this->session->userdata('contacts');
				$data['type'] = $this->session->userdata('img_profile');
				$data['type'] = $this->session->userdata('type');

					
				$data['post_number'] = $this->post_model->count_post();
				$data['new_post_number'] = $this->post_model->count_new_post();


				$data['users_number'] = $this->user_model->count_users();
				$data['new_users_number'] = $this->user_model->count_new_users();

				$this->load->view('cpan_commentaire',$data);
			}
			
			else{
				Redirect('');
			}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */