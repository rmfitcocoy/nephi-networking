<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainadmin extends CI_Controller
{
    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
      //todo: refactor the layout to one DRY
	  // todo: add this meta tags
	  	// <meta name="viewport" content="width=device-width, initial-scale=1">
	// <meta name="description" content="E R H I U E L e-commerce website design by scarfonictech.com" />
	// <meta name="keywords" content="scarfonictech, e-commerce, erhiuel, perfume, company website, networking" />
	// <meta name="author" content="scarfonictech.com" />
        $this->layout->add_custom_meta('meta', array(
            'charset' => 'utf-8'
        ));
 
        $this->layout->add_custom_meta('meta', array(
            'http-equiv' => 'X-UA-Compatible',
            'content' => 'IE=edge'
        ));
        
        $this->layout->add_css_files(
		array('bootstrap/css/bootstrap.min.css'
			,'animate/animate.css'
			,'css-hamburgers/hamburgers.min.css'
			,'animsition/css/animsition.min.css'
			,'select2/select2.min.css'
			,'daterangepicker/daterangepicker.css'
			,'slick/slick.css'
			,'MagnificPopup/magnific-popup.css'
			,'perfect-scrollbar/perfect-scrollbar.css'),
		base_url().'assets/themes/corastore/vendor/');
		
        $this->layout->add_css_files(
		array('font-awesome-4.7.0/css/font-awesome.min.css'
			,'iconic/css/material-design-iconic-font.min.css'
			,'linearicons-v1.0.0/icon-font.min.css'),
		base_url().'assets/themes/corastore/fonts/');

        $this->layout->add_css_files(
		array('util.css'
			,'main.css'),
		base_url().'assets/themes/corastore/css/');
		
		 
		$this->layout->add_js_files(
		array('jquery/jquery-3.2.1.min.js'
			,'animsition/js/animsition.min.js'
			,'bootstrap/js/popper.js'
			,'bootstrap/js/bootstrap.min.js'
			,'select2/select2.min.js'
			,'daterangepicker/moment.min.js'
			,'daterangepicker/daterangepicker.js'
			,'slick/slick.min.js'
			,'MagnificPopup/jquery.magnific-popup.min.js'
			,'parallax100/parallax100.js'
			,'isotope/isotope.pkgd.min.js'
			,'sweetalert/sweetalert.min.js'
			,'perfect-scrollbar/perfect-scrollbar.min.js'
			),
		base_url().'assets/themes/corastore/vendor/','footer');
		
		$this->layout->add_js_files(
		array('main.js','slick-custom.js'),
		base_url().'assets/themes/corastore/js/','footer');
        $js_text_footer = $this->load->view('themes/corastore/footer_javascript', '', true);


        $this->layout->add_js_rawtext($js_text_footer, 'footer');

    }

    /**
     * index function.
     *
     * @access public
     * @param mixed $slug (default: false)
     * @return void
     */
    public function index()
    {
		//todo: get the file name  and replace the title and the id

        // $this->layout->set_title('About Us');
        // $this->layout->set_body_attr(array('class' => 'animsition'));

        // load views and send data
        // $this->load->view('themes/corastore/navigation');
        // $this->load->view('themes/corastore/header');
        // $this->load->view('themes/corastore/about');
        // $this->load->view('themes/corastore/footer');
    }
	
	public function login()  
    {  
           //http://localhost/tutorial/codeigniter/main/login  
           $data['title'] = 'Admin login';  
           $this->load->view("login", $data);  
    }  
	public function login_validation()  
	{  
	   // $this->load->library('form_validation');  
	   $this->form_validation->set_rules('username', 'Username', 'required');  
	   $this->form_validation->set_rules('password', 'Password', 'required');  
	   if($this->form_validation->run())  
	   {  
			//true  
			$username = $this->input->post('username');  
			$password = $this->input->post('password');  
			//model function  
			$this->load->model('main_model');  
			if($this->main_model->can_login($username, $password))  
			{  
				 $session_data = array(  
					  'username'     =>     $username  
				 );  
				 $this->session->set_userdata($session_data);  
				 redirect(base_url() . 'mainadmin/enter');  
			}  
			else  
			{  
				 $this->session->set_flashdata('error', 'Invalid Username and Password');  
				 redirect(base_url() . 'mainadmin/login');  
			}  
	   }  
	   else  
	   {  
			//false  
			$this->login();  
	   }  
	} 
	  
	public function enter(){  
	   if($this->session->userdata('username') != '')  
	   {  
			echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
			echo '<label><a href="'.base_url().'mainadmin/logout">Logout</a></label>';  
	   }  
	   else  
	   {  
			redirect(base_url() . 'mainadmin/login');  
	   }  
	}  
	  
	public function logout()  
	{  
	   $this->session->unset_userdata('username');  
	   redirect(base_url() . 'mainadmin/login');  
	}  
}

