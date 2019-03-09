<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MProducts extends CI_Model {
    public function __construct(){
         parent::__construct();
    }


    public function mproducts_post($_productname, $_productdescription, $_currentprice, $_currentquantity, $_supplierid, $_categoryid,$_picture) {
        $insert_user_stored_proc = "CALL spV1ProductsPost('".$_productname."', '".$_productdescription."', ".$_currentprice.", ".$_currentquantity.", ".$_supplierid.",".$_categoryid.",'".$_picture."');";
        $result = $this->db->query($insert_user_stored_proc);
        if ($result !== NULL) {
            return TRUE;
        }
        return FALSE;
    }

	
    public function mproducts_put($_productid,$_productname, $_productdescription, $_currentprice, $_currentquantity, $_supplierid, $_categoryid,$_picture) {
        $insert_user_stored_proc = "CALL spV1ProductsPut(".$_productsid.",'".$_productname."', '".$_productdescription."', ".$_currentprice.", ".$_currentquantity.", ".$_supplierid.",".$_categoryid.",'".$_picture."');";
        $result = $this->db->query($insert_user_stored_proc);
        if ($result !== NULL) {
            return TRUE;
        }
        return FALSE;
    }

	
    public function mproducts_delete($_productid) {
        $insert_user_stored_proc = "CALL spV1ProductsDelete(?);";
        $data = array('_productid' => $_productid);
        $result = $this->db->query($insert_user_stored_proc, $data);
        if ($result !== NULL) {
            return $query->result_array(); 
        }
        return FALSE;
    }

	
    public function mproducts_getid($_customerid) {
        $insert_user_stored_proc = "CALL asfasf(?);";
        $data = array('_customerid' => $_customerid);
        $result = $this->db->query($insert_user_stored_proc, $data);
        if ($result !== NULL) {
            return $query->result_array(); 
        }
        return FALSE;
    }

	
    public function mproducts_getall() {
		$result = array();
        $insert_user_stored_proc = "CALL spV1ProductsGetAll();";
        $result = $this->db->query($insert_user_stored_proc);
		
         if ($result !== NULL) {
            return json_encode($result->result_array()); 
        }
        return FALSE; 
    }


}