<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{ 

   function __construct(){ 

   		parent::__construct();

   		//$this->load->database();

   		$this->load->helper('captcha');

   		$this->load->library('form_validation');

   }

   function index(){ 

   		$this->load->view('admin/login');
   }


   function code(){ 

   			$vals=array(

   				'word'=>rand(1000,10000),
   				'img_path'=>'./staticfile/captcha',
   				'img_url'=>base_url('staticfile/captcha'),	
   				'img_width'=>'65',
   				'expiration'=>7200

   				);

   			$cap=create_captcha($vals);

   			var_dump($cap);


   }
}
