<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {
    public function __construct(){
         parent::__construct();
    }

    public function can_login($username, $password)  
      {  
           // $this->db->where('username', $username);  
           // $this->db->where('password', $password);  
           // $query = $this->db->get('users');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($username === "nephiadmin" && $password === "Abc!123admin" )  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  

}