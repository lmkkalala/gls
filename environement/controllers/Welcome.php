<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html

	 */
	public function __construct(){

			parent::__construct();

            $this->load->model('post_model');

            $this->load->model('user_model');
			$this->load->helper ('form');
			//echo "test ... test ... test
			
			date_default_timezone_set("Africa/kigali");
	}

	public function index()

	{	
		$data = array();

		$data['notification'] =  false;

		if(null !== ($this->input->post('message'))){

			$this->post_model->do_comment(NOW(),'SUGGESTION ANONYME: ',$this->input->post('message'));
			$data['notification'] = 'Merci, nous sommes heureux de recevoir votre suggestion';
		}

		$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;


		$str_table_news = $this->post_model->get_news_limit();

		foreach ($str_table_news as $post => $post_meta) {
			
			$str_table_news[$post] = array_merge($post_meta, array('nombre_de_commentaire' => $this->post_model->comments_number($str_table_news[$post]['post_id']) )); #l'algo ici consiste a looper dans le 2D associative array puis append a chaque entree une meta du nombre de commentaire qui n'existe que dans la table comments
		}

		$data['news'] =$str_table_news;

		
		if($data['hasLogOn']){
			
			$data['username'] = $this->session->userdata('username');
			$data['contacts'] = $this->session->userdata('contacts');
			$data['img_profile'] = $this->session->userdata('img_profile');
			$data['type'] = $this->session->userdata('type');
		}
	
		$this->load->view('index',$data);
	}


		public function lire($post_titre = NULL)
	{	


		$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;
        
		$post_titre = urldecode($post_titre);

        if( null !== ($this->input->post('message')) AND $data['hasLogOn']){
			$admin = $this->session->userdata('type') == 'admin';
        	$str_buffer= $this->post_model->get_news($post_titre,$admin); //post titre viens en parametre a la methode *lire de la classe *news , on appel le model car on veux recuper l'id du post a commenter

			$data['notification'] = $this->post_model->do_comment($str_buffer['post_id'],$this->session->userdata('username'),$this->input->post('message'));
			flush();
		}
		
		$admin = $this->session->userdata('type') == 'admin';
		$str_table_news_item = $this->post_model->get_news($post_titre,$admin);

		if(empty($str_table_news_item)) redirect('show_404');

		if(!empty($str_table_news_item)):
			$str_table_news_item=  array_merge($str_table_news_item,  array('nombre_de_commentaire' => $this->post_model->comments_number($str_table_news_item['post_id']) )); #l'algo ici consiste a appender le nombre des comments a u tableau du post_item

		endif;
		
		$post_comment=$this->post_model->list_comments($str_table_news_item['post_id']);

		if(!empty($post_comment)):

			foreach ($post_comment as $comment => $comment_meta) {
			
				$str_temp = $this->user_model->with_validation_get('Noms', $post_comment[$comment]['comment_owner']);
				if(empty($str_temp)): $comment_owner_profile="avatar.jpg";
					else : $comment_owner_profile = $str_temp['image'];
				endif;

				$post_comment[$comment] = array_merge($post_comment[$comment], array('comment_owner_profile' => $comment_owner_profile));

			}


		endif;


		$data['post_comment']=$post_comment;

        $data['news_item'] = $str_table_news_item ;


		$str_table_news = $this->post_model->get_news();

		if(!empty($str_table_news)):

			foreach ($str_table_news as $post => $post_meta) {
				
				$str_table_news[$post] = array_merge($post_meta, array('nombre_de_commentaire' => $this->post_model->comments_number($str_table_news[$post]['post_id']) )); #l'algo ici consiste a looper dans le 2D associative array puis append a chaque entree une meta du nombre de commentaire qui n'existe que dans la table comments
			}

		endif;

		$data['news'] =$str_table_news;


        if (empty($data['news_item']))
        {
                show_404();
        }


        if($this->auth->loggedin()?TRUE:FALSE){
			
			$data['username'] = $this->session->userdata('username');
			$data['contacts'] = $this->session->userdata('contacts');
			$data['img_profile'] = $this->session->userdata('img_profile');
			$data['type'] = $this->session->userdata('type');
		}




		
        $data['titre'] = $data['news_item']['post_titre'];

        $this->load->view('c_lire_article', $data); 
	}

	public function tout(){ 

			$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;

		$data = array();

		$str_table_news = $this->post_model->get_news();

		foreach ($str_table_news as $post => $post_meta) {
			
			$str_table_news[$post] = array_merge($post_meta, array('nombre_de_commentaire' => $this->post_model->comments_number($str_table_news[$post]['post_id']) )); #l'algo ici consiste a looper dans le 2D associative array puis append a chaque entree une meta du nombre de commentaire qui n'existe que dans la table comments
		}

		$data['news'] =$str_table_news;

		$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;
		
		if($data['hasLogOn']){
			
			$data['username'] = $this->session->userdata('username');
			$data['contacts'] = $this->session->userdata('contacts');
			$data['img_profile'] = $this->session->userdata('img_profile');
			$data['type'] = $this->session->userdata('type');
		}
	


        $this->load->view('c_tout', $data);
	}

}


