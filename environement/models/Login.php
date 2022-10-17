<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class login extends CI_Model
	{
		public function get_info()
		{
		// On simule l'envoi d'une requête
		return array('auteur' => 'Chuck Norris', 'email' => 'email@ndd.fr');
		}
	}