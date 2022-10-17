<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * This is an EXAMPLE user model, edit to match your implementation
 * OR use the adapter model for easy integration with an existing model
 */
class User_model extends CI_Model {
    
    // database table name
    var $table = 'users';
    
    /**
     * Add a user, password will be hashed
     * 
     * @param array user
     * @return int id
     */
    public function insert($noms, $pseudo, $contacts,$password, $imagepath, $fonction , $about) {
        // need the library for hashing the password
        $this->load->library("auth");
        
        
        $this->db->set('Type', 'visitor');
        $this->db->set('Noms', $noms);
        $this->db->set('pseudo', $pseudo);
        $this->db->set('contacts', $contacts);
        $this->db->set('password',$this->hash($password));

        $this->db->set('image', $imagepath);
        $this->db->set('profession', $fonction);
        $this->db->set('Apropos', $about);
        $this->db->set('validation', '0');
        $this->db->set('Date_creation', date("F j, Y à H:i"));
    

        if($this->exists('Noms',$noms) OR $this->exists('contacts',$contacts)){
            return 'Vous avez deja un compte,connectez vous!';
        }
        else{

            $this->db->insert($this->table);
            return $this->db->insert_id();
        }
    }
    
    /**
     * Update a user, password will be hashed
     * 
     * @param int id
     * @param array user
     * @return int id
     */
    public function update($id, $noms, $pseudo, $contacts,$imagepath, $fonction , $about) {
        // prevent overwriting with a blank password
       $insert_data=array(
        'Noms' => $noms,
        'pseudo' => $pseudo , 
        'contacts' => $contacts,
        'image' => $imagepath,
        'profession' => $fonction,
        'Apropos' => $about
    );
         # l'array que je pensais utiliser avc la methode ci-bas

       $query = $this->db->where('user_id', $id)->set($insert_data)->get_compiled_update($this->table); //get_compiled_insert
       #permet de faire une query puis sans envoyer ledit query, il va returner le string du query
       #Cette methode je ne la prefere pas d'autant plus qu'elle n'est pas trop explicative a celui qui sait pas bcp de codeigniter
    
            
        #$query= 'INSERT IGNORE INTO '.$this->table.'   (`Noms`, `pseudo`, `contacts`, `image`, `profession`, `section`, `promotion`, `Apropos`, `notesSurItig`) VALUES ('.$this->db->escape($noms).', '.$this->db->escape($pseudo).', '.$this->db->escape($contacts).', '.$this->db->escape($imagepath).', '.$this->db->escape($fonction).', '.$this->db->escape($section).', '.$this->db->escape($promotion).', '.$this->db->escape($about).', '.$this->db->escape($notesSurITIG).')';
       
        # $this->db->simple_query($query); simple_query ina retournaka true ao false tandis que query() ina retournaka response ya #sql genre, db select error bya vile, simple query iko avantageux ici 
        $i = $this->db->simple_query($query);
        
        if($i) 
            return 'Donnees mis a jours avec successs!';
        else 
            return 'veuillez reverifier les donnees saisies';
        
    }
    
    /**
     * Delete a user
     * 
     * @param string where
     * @param int value
     * @param string identification field
     */
    public function delete($where, $value = FALSE) {
        if (!$value) {
            $value = $where;
            $where = 'id';
        }
        
        $this->db->where($where, $value)->delete($this->table);
    }
    
    /**
     * Retrieve a user
     * 
     * @param string where
     * @param int value
     * @param string identification field
     */
    public function get($where, $value = FALSE) {
        if (!$value) {
            $value = $where;
            $where = 'user_id';
        }
       
        $user = $this->db->where($where, $value)->get($this->table)->row_array();
       

            return $user;
    }

     public function with_validation_get($where, $value = FALSE) {
        if (!$value) {
            $value = $where;
            $where = 'user_id';
        }
        
        $user = $this->db->where($where, $value)->get($this->table)->row_array();

        if($user['validation'] !== '0'):
            return $user;
        else :
            return array();
        endif;
    }


     public function dump_users(){

         $query = $this->db->get($this->table);

        return $query->result_array(); //loopale en utilisant foreach donc l'array retourne est un associative 

    }

    public function delete_user($user_id){
        if ($user_id) {
            $user = $this->db->where('user_id', $user_id)->get($this->table)->row_array();

            if ($user['Type'] == 'visitor') {
              $this->db->delete($this->table, array('user_id' => $user_id)); 
            }
           
        }
    }



    public function validate_user($user_id){
        if ($user_id) {
        $this->db->set('validation', '1');
        $this->db->where('user_id', $user_id);
        $this->db->update($this->table); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
        }
    }

    
    /**
     * Get a list of users with pagination options
     * 
     * @param int limit
     * @param int offset
     * @return array users
     */
    public function get_list($limit = FALSE, $offset = FALSE) {
        if ($limit) {
            return $this->db->order_by("noms")->limit($limit, $offset)->get($this->table)->result_array();
        } else {
            return $this->db->order_by("noms")->get($this->table)->result_array();
        }
    }
    
    /**
     * Check if a user exists
     * 
     * @param string where
     * @param int value
     * @param string identification field
     */
    
    public function exists($where, $value = FALSE) {
        if (!$value) {
            $value = $where;
            $where = 'user_id';
        }
        
        return $this->db->where($where, $value)->count_all_results($this->table);
    }
    
    /**
     * Password hashing function
     * 
     * @param string $password
     */
    public function hash($password) {
        $this->load->library('PasswordHash', array('iteration_count_log2' => 8, 'portable_hashes' => FALSE));
        
        // hash password
        return $this->passwordhash->HashPassword($password);
    }
    
    /**
     * Compare user input password to stored hash
     * 
     * @param string $password
     * @param string $stored_hash
     */
    public function check_password($password, $stored_hash) {
        $this->load->library('PasswordHash', array('iteration_count_log2' => 8, 'portable_hashes' => FALSE));
        
        // check password
        return $this->passwordhash->CheckPassword($password, $stored_hash);
    }

    public function count_users(){
        return $this->db->order_by("Date_creation")->get($this->table)->num_rows();
    }

    public function count_new_users(){
       return $this->db->where('validation', '0')->order_by("Date_creation")->get($this->table)->num_rows();
    }
}