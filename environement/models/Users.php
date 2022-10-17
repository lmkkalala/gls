<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class users extends CI_Model
	{
		protected $table = 'users';
		/**
		* Ajoute une news
		*/
		public function inscription( $noms,$contacts,$password, $imagepath, $fonction , $about)
		{
			
			$this->db->set('Type', 'visitor');
			$this->db->set('Noms', $noms);
			$this->db->set('contacts', $contacts);
			$this->db->set('password',$password );

			$this->db->set('image', $imagepath);
			$this->db->set('profession', $fonction);
			$this->db->set('Apropos', $about);
			$this->db->set('validation', '0');
			$this->db->set('Date_creation', 'NOW()', false);

			$test_user=$this ->db -> select ('Noms')
						 ->from ('users')
						 ->where ('noms',$noms)
						 ->or_where('contacts',$contacts)
						 ->get ()
 						 -> first_row ();

 			if (!empty($test_user)) {
 				//utilisateur existe
 				return 'Vous avez deja  un compte, connectez vous plutot';
 				
 			}

 			else{
 				//user haiko ndani tuna mu ajouter
 				if($this->db->insert($this->table)){
 					return 'compte crée avec succès, Nous validerons le compte aussi vite que possible pour permette d\' ajouter du contenu';
 				}
 			}
			

		}

		public function suppression()
		{

		}

		public function connexion()
		{

		}

		public function editer()
		{

		}

		public function validation()
		{

		}


		public function liste_utilisateurs()
		{

		}

		public function count($where = array())

		{
			return (int) $this->db->where($where)->count_all_results($this->table);
		}
	}