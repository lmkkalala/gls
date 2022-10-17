<?php
defined('BASEPATH') or exit('No direct script access allowed');


class post_model extends CI_Model {
    
    // database table name
    var $table = 'posts';
    var $table_comments = 'post_comments';

    public function insert($post_id, $post_owner, $post_caption, $post_content, $post_titre,$post_illustration, $validation) {
       
        
        $this->db->set('post_id', $post_id);
        $this->db->set('post_date', date("F j, Y à H:i"));
        $this->db->set('post_owner', $post_owner);
        $this->db->set('post_caption',$post_caption);

        $this->db->set('post_content', $post_content);
        $this->db->set('post_titre', $post_titre);

        $this->db->set('post_illustration', $post_illustration);
        $this->db->set('validation', $validation);
    

        if($this->exists('post_titre',$post_titre)){
            return 'ce post existe deja!!';
        }
        else{

            $this->db->insert($this->table);
            return 'Poste mis a jours avec successs!, nous le validerons dans le bref delais';
        }
    }

     public function get_news_limit($post_titre = FALSE)
    {


            if ($post_titre === FALSE)
            {
                    $query = $this->db->order_by('post_date DESC')->limit(3)->where('validation !=' , '0')->get($this->table);

                    return $query->result_array(); //loopale en utilisant foreach donc l'array retourne est un associative 
            }

    }



    public function get_news($post_titre = FALSE,$admin=FALSE)
    {


            if ($post_titre === FALSE)
            {
                    $query = $this->db->where('validation !=' , '0')->get($this->table);

                    return $query->result_array(); //loopale en utilisant foreach donc l'array retourne est un associative 
            }
            if(!$admin)
            $query = $this->db->where(array('validation !=' => '0' , 'post_titre' => $post_titre))->get($this->table);
            else 
            $query = $this->db->where(array('post_titre' => $post_titre))->get($this->table);

            return $query->row_array();
    }

    public function dump_news(){

         $query = $this->db->get($this->table);

        return $query->result_array(); //loopale en utilisant foreach donc l'array retourne est un associative 

    }

    public function delete_news($id){
        if ($id) {
            $this->db->delete($this->table, array('post_id' => $id)); 
        }
    }

    public function validate_news($id){
        if ($id) {
        $this->db->set('validation', '1');
        $this->db->where('post_id', $id);
        $this->db->update($this->table); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
        }
    }

    public function list_comments($post_id = FALSE){
        
        $query = $this->db->get_where($this->table_comments, array('post_id' => $post_id, 'validation !=' => '0'));

        $query_result = $query->result_array(); #donees en array simple sans associativite! row(5)

        return $query_result;

    }

    public function dump_comment(){
      return $this->db->get($this->table_comments)->result_array();
    }

    public function delete_comment($comment_id){
        $this->db->where('comment_id', $comment_id)->delete($this->table_comments);
    }

     public function validate_comment($comment_id){
        $this->db->set('validation','1')->where('comment_id', $comment_id)->update($this->table_comments);
    }


    public function comments_number($post_id){
        
        $query = $this->db->get_where($this->table_comments, array('post_id' => $post_id));

        return $query->num_rows(); #le nombre d'entree mu table kwenye id ni post_id

    }

    public function do_comment($post_id, $comment_owner,$comment_content){



        $this->db->set('post_id', $post_id);
        $this->db->set('comment_date', date("F j, Y à H:i"));
        $this->db->set('comment_owner', $comment_owner);
        $this->db->set('comment_content',$comment_content);
        $this->db->set('validation','0');

       $isValidate = $this->db->where('Noms', $comment_owner)->get('users')->row_array();
       $isValidate = $isValidate['validation']??0;

       $isValidate = $isValidate == '0' ? FALSE : TRUE;

        if($isValidate):
            $this->db->insert($this->table_comments); 
            return 'Vous venez de commenter ce post!';
        else: 
            return 'Vous pouvez commenter seulement en ayant un compte avec validation de l\'admin';
        endif;
    }


    public function delete($where, $value = FALSE) {
        if (!$value) {
            $value = $where;
            $where = 'id';
        }
        
        $this->db->where($where, $value)->delete($this->table);
    }
    
    
    

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
            $where = 'post_id';
        }
        
        return $this->db->where($where, $value)->count_all_results($this->table);
    }

    public function count_post(){
        return $this->db->order_by("post_date")->get($this->table)->num_rows();
    }

    public function count_new_post(){
       return $this->db->where('validation', '0')->get($this->table)->num_rows();
    }

    public function post_number_by($names){
        return  $this->db->where('post_owner', $names)->get($this->table)->num_rows();
    }

}