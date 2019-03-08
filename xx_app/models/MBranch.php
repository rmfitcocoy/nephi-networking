<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MBranch extends CI_Model {
    public function __construct(){
         parent::__construct();
    }

    public function set_branch($param){
       $query = $this->db->query(" EXEC set_BRANCH_i 
                                                       ".$param['user_id'].",
                                                      '".$param['branch_code']."',
                                                      '".$param['branch_description']."'
                                                      
                                  ");
       return $query->result_array();           
    }

    public function get_branchlist($param){
       $query = $this->db->query(" EXEC get_BRANCHLIST_s '".$param."' ");
       // echo $this->db->last_query();
       return $query->result_array();           
    }

}