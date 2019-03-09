<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MCustomer extends CI_Model {
    public function __construct(){
         parent::__construct();
    }

    public function mcustomer_post($_firstname, $_lastname, $_email, $_phonenumber, $_address, $_province) {
        $insert_user_stored_proc = "CALL spV1CustomerPost('".$_firstname."', '".$_lastname."', '".$_email."', '".$_phonenumber."', '".$_address."','".$_province."');";
        // $insert_user_stored_proc = "CALL spV1CustomerPost('?','?', '?', '?', '?', '?');";
        // $data = array('_firstname' => $_firstname, '_lastname' => $_lastname, 
						// '_email' => $_email, '_address' => $_address,'_province' => $_province);
        // $result = $this->db->query($insert_user_stored_proc, $data);
        $result = $this->db->query($insert_user_stored_proc);
        if ($result !== NULL) {
            return TRUE;
        }
        return FALSE;
    }

	
    public function mcustomer_put($_customerid,$_firstname, $_lastname, $_email, $_phonenumber, $_address, $_province) {
        $insert_user_stored_proc = "CALL spV1CustomerPut(?, ?, ?, ?, ?, ?)";
        $data = array('_customerid' => $_customerid,'_firstname' => $_firstname, '_lastname' => $_lastname, 
						'_email' => $_email, '_address' => $_address,'_province' => $_province);
        $result = $this->db->query($insert_user_stored_proc, $data);
        if ($result !== NULL) {
            return $query->result_array(); 
        }
        return FALSE;
    }

	
    public function mcustomer_delete($_customerid) {
        $insert_user_stored_proc = "CALL spV1CustomerDelete(?);";
        $data = array('_customerid' => $_customerid);
        $result = $this->db->query($insert_user_stored_proc, $data);
        if ($result !== NULL) {
            return $query->result_array(); 
        }
        return FALSE;
    }

	
    public function mcustomer_getid($_customerid) {
        $insert_user_stored_proc = "CALL spV1CustomerGetId(?);";
        $data = array('_customerid' => $_customerid);
        $result = $this->db->query($insert_user_stored_proc, $data);
        if ($result !== NULL) {
            return $query->result_array(); 
        }
        return FALSE;
    }

	
    public function mcustomer_getall() {
        $insert_user_stored_proc = "CALL spV1CustomerGetAll();";
        $result = $this->db->query($insert_user_stored_proc);
        if ($result !== NULL) {
            return $query->result_array(); 
        }
        return FALSE;
    }

	
}