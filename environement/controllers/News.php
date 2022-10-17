<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news extends CI_Controller {

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
            $this->load->model('post_model');

            $this->load->model('user_model');
			$this->load->helper ('form');
			//echo "test ... test ... test..";
		}

	public function index()
	{	
		$data = array();
			
		$data['titre']= 'articles';

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
		
		$this->load->view('header',$data);
		$this->load->view('news');
		$this->load->view('footer');
	
	}

	public function lire($post_titre = NULL)
	{	

		$data['hasLogOn'] = $this->auth->loggedin()?TRUE:FALSE;
        
		$post_titre=str_replace('_', ' ', $post_titre );


		
		

        if( null !== ($this->input->post('message')) AND $data['hasLogOn']){

        	$str_buffer= $this->post_model->get_news($post_titre); //post titre viens en parametre a la methode *lire de la classe *news , on appel le model car on veux recuper l'id du post a commenter

			$data['notification'] = $this->post_model->do_comment($str_buffer['post_id'],$this->session->userdata('username'),$this->input->post('message'));
			flush();
		}
		
		$str_table_news_item = $this->post_model->get_news($post_titre);

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


        if($data['hasLogOn']){
			
			$data['username'] = $this->session->userdata('username');
			$data['contacts'] = $this->session->userdata('contacts');
			$data['img_profile'] = $this->session->userdata('img_profile');
			$data['type'] = $this->session->userdata('type');
		}




		
        $data['titre'] = $data['news_item']['post_titre'];

        $this->load->view('header', $data);
        $this->load->view('lire_article', $data);
        $this->load->view('footer');
	}

	public function commment(){

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */