<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MRegister extends CI_Model {
    public function __construct(){
         parent::__construct();
    }

    public function mcustomer_post($_firstname, $_lastname, $_email, $_phonenumber, $_address, $_province) {
        $insert_user_stored_proc = "CALL spV1CustomerPost(?, ?, ?, ?, ?, ?)";
        $data = array('_firstname' => $_firstname, '_lastname' => $_lastname, 
						'_email' => $_email, '_address' => $_address,'_province' => $_province);
        $result = $this->db->query($insert_user_stored_proc, $data);
        if ($result !== NULL) {
            return TRUE;
        }
        return FALSE;
    }
    public function get_branchlist($param){
       $query = $this->db->query(" EXEC get_BRANCHLIST_s '".$param."' ");
       // echo $this->db->last_query();
       return $query->result_array();           
    }

}