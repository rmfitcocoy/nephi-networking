<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
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
		$this->load->model('MCustomer');	

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

        $this->layout->set_title('Registration');
        $this->layout->set_body_attr(array('class' => 'animsition'));

		
		if ($this->input->post('submit_customer_post')) {
            $this->form_validation->set_rules('add_firstname', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('add_lastname', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('add_email', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('add_phonenumber', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('add_address', 'Full Name', 'trim|required');

            if ($this->form_validation->run() !== FALSE) {
                $result = $this->MCustomer->mcustomer_post(
					$this->input->post('add_firstname'), 
					$this->input->post('add_lastname'), 
					$this->input->post('add_email'), 
					$this->input->post('add_phonenumber'), 
					$this->input->post('add_address'),
					$this->input->post('add_address')
				);
                $data['success'] = $result;
				$this->load->view('themes/corastore/header');
				$this->load->view('themes/corastore/navigation');
                $this->load->view('themes/corastore/register', $data);
				$this->load->view('themes/corastore/footer');
            } else {
				$this->load->view('themes/corastore/header');
				$this->load->view('themes/corastore/navigation');
                $this->load->view('themes/corastore/register');
				$this->load->view('themes/corastore/footer');
            }
        } else {
			$this->load->view('themes/corastore/header');
			$this->load->view('themes/corastore/navigation');
			$this->load->view('themes/corastore/register');
			$this->load->view('themes/corastore/footer');
        }	
    }
	
	public function customer_post() {
		        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone No.', 'trim|required');
            $this->form_validation->set_rules('address', 'Contact Address', 'trim|required');

            if ($this->form_validation->run() !== FALSE) {
                $result = $this->usermodel->insert_user($this->input->post('user'), $this->input->post('email'), $this->input->post('phone'), $this->input->post('address'));
                $data['success'] = $result;
                $this->load->view('user', $data);
            } else {
                $this->load->view('user');
            }
        } else {
            $this->load->view('user');
        }
	}
	
	public function customer_postby() {
		//todo: get the file name  and replace the title and the id

		 // var_dump(openssl_get_cert_locations());
        $json = array();

        $this->form_validation->set_rules('addfirstname', 'Firstname Name', 'required|max_length[70]|min_length[2]');

        // $this->form_validation->set_message('required', 'You missed the input {field}!');

        if (!$this->form_validation->run()) {
            $json = json_encode(array(
                'addfirstname' => form_error('addfirstname', '<p class="mt-3 text-danger">', '</p>')
            ));
        } else{


			$data_array =  array(
				"addfirstname"        	=> trim($this->input->post('addfirstname'))
			);


			// $json = callapioriginal('POST', 'https://rafi-it-webapp-standard-apim-prod.azure-api.net/ms00003/api/v1.0/sbu/', 
			// '2239d671c47549e2b910809f96ac12d0',json_encode($data_array));
			$json = 'success';
			
		}

		$this->output
		->set_content_type('application/json')
		->set_output($json);
		// echo $json;
      
    }
}

