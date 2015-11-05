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


   function submit(){ 



   }




   //表单验证

   function _validation(){



         return $login=array(
                                 array(

                                          'field'=>'username',
                                          'label'=>'用户名',
                                          'rules'=>'requestd|alpha_dash|max_length[50]',
                                    ),

                                 array(

                                          'field'=>'password',
                                          'label'=>'用户密码',
                                          'rules'=>'requestd|alpha_dash|max_length[32]',
                                    ),

                                 array(

                                          'field'=>'captcha',
                                          'label'=>'验证码',
                                          'rules'=>'requestd|alpha_dash|max_length[4]',
                                    ),
            );

   }

//生成验证码
   function code(){ 

   			$vals=array(

   				'word'=>rand(1000,10000),
   				
   				
   				'img_width'=>'80',
   				'expiration'=>7200

   				);


           
   			$cap=create_captcha($vals);

            echo $cap['image'];

   			


   }
}
