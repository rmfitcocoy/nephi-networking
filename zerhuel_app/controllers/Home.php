<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
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
      
        $this->load->helper(array('url'));

        $this->layout->add_custom_meta('meta', array(
            'charset' => 'utf-8'
        ));
        $this->layout->add_custom_meta('meta', array(
            'viewport' => 'width=device-width, initial-scale=1"'
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
/*         $css_text = <<<EOF
.text {
font-size: 12px;
background-color: #eeeeee;
}
EOF;

        $js_text = <<<EOT
alert('this is just a test');
EOT;


        $this->layout->add_css_rawtext($css_text);
        $this->layout->add_js_rawtext($js_text);
 */
        // Load view into a variable for importing javascript
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
        $this->layout->set_title('Home');
        $this->layout->set_body_attr(array('id' => 'home', 'class' => 'animsition'));
        // die(CI_head());
        // load views and send data
        // die($this->load->view('themes/default/header'));
        $this->load->view('themes/corastore/header',null);
        $this->load->view('themes/corastore/home-banner');
        $this->load->view('themes/corastore/index');
        $this->load->view('themes/corastore/footer',null);
    }
}

