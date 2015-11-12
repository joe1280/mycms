<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{ 

   function __construct(){ 

   		parent::__construct();

   		$this->load->database();



   		$this->load->helper('captcha');

   		$this->load->library('form_validation');

         $this->lang->load('login');// 加载语言类

   }



   function index(){ 



       

       

   		$this->load->view('admin/login');
   }


   function submit(){ 

      $cap=$this->code();

      echo ($cap['word']);





   }

   // 视图调用

    function code(){

       //生成验证码

      $vals=array(
         'word'=>rand(1000,10000),
         'img_path'=>'./staticfile/captcha/',
         'img_url'=>base_url('staticfile/captcha').'/',
         'img_width'=>65,
         'expiration'=>7200

         );

      $cap=create_captcha($vals);

      //把验证码写进数据库中去

      $data=array(
         'captcha_time'=>$cap['time'],

         'ip_address'=>$this->input->ip_address(),

         'word'=>$cap['word']

         );

      $this->db->insert('captcha',$data);

      //将数据传给视图文件

      $data ['cap'] =  $cap['image'];//验证码
      $data['lang_submit'] = $this->lang->line('login_submit');
      $data['lang_username_placeholder'] = $this->lang->line('login_username_placeholder');
      $data['lang_password_placeholder'] = $this->lang->line('login_password_placeholder');
      $data['lang_captcha_placeholder'] = $this->lang->line('login_captcha_placeholder');
      $data['lang_captcha_title'] = $this->lang->line('login_captcha_title');
      $data['lang_captcha_msg'] = $this->lang->line('login_captcha_msg');
     


    }




   //表单验证

   function _validation(){





         return $login=array(
                                 array(

                                          'field'=>'username',
                                          'label'=>'lang:login_username',
                                          'rules'=>'requestd|alpha_dash|max_length[50]',
                                    ),

                                 array(

                                          'field'=>'password',
                                          'label'=>'lang:login_password',
                                          'rules'=>'requestd|alpha_dash|max_length[32]',
                                    ),

                                 array(

                                          'field'=>'captcha',
                                          'label'=>'lang:login_captcha',
                                          'rules'=>'requestd|alpha_dash|max_length[4]',
                                    ),
            );

   }




}
