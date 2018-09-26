<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');
class Login extends REST_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
        {
            parent::__construct(); 
            $static_token='8f3a07f4b8575c447078a203ff97d21806384458f8cfb3e4def94773dfc6077f62588383408be7c2'; 
            $header=$this->input->request_headers();             
              if(array_key_exists('access_token',$header)){                
		         if($static_token!=$header['access_token']){
			     	$data=array();
			     	$data['message']="invalid access_token";
			     	$data['status']="false";
			        $this->response($data,400);
			        exit();
			     }		       
		    }
		    else{		    	 
		    	$data['message']="access_token is required";
		     	$data['status']="false";
		     	$this->response($data,401);		      
		        exit();
		      }		  
		        
        }
    public function login_post()
    {
    	$email=$this->post('email');
    	$password=$this->post('password');
    	$mobile='';
    	$exist=$this->Api_model->getUserExist($mobile,$email,$password);
    	if($exist)
    	{
    	  $generated_token=bin2hex(openssl_random_pseudo_bytes('40'));
    	  $userid=$exist[0]->user_id;
		  $status=$exist[0]->user_status;
		 if($userid && $status=='0'){
		 $this->Api_model->addToken($userid,$generated_token);                 
         $data=array('user'=>$exist[0],'status'=>'true','access_token'=>$generated_token);
         $this->response($data,200);
			exit();          
		 }
		 elseif ($userid && $status=='1') {
		 	$data=array('message'=>'user is deactivated','status'=>'false');
		 	$this->response($data,400);
			exit();
		 }
		 else{         
         $this->Api_model->addToken($userid,$generated_token);        
         $data=array('user'=>$exist[0],'status'=>'true','access_token'=>$generated_token);
         $this->response($data,200);
         exit();    		
    	 }
    	}
    	else{
    		    $data['message']="no data found";
		     	$data['status']="false";		     	
		        $this->response($data,404);
		        exit();	
    	}
    }
	
	public function sendOtp_post()
	{	
	  if(array_key_exists('mobile_number', $this->post())){		
		if(preg_match('/^[0-9]{9,10}+$/', $this->post('mobile_number')) == true){
		$otp= $this->Api_model->insertOtp($this->post('mobile_number'));
		//$this->send_sms->sendSms($this->post('mobile_number'),$otp);       
		$data=array('otp'=>$otp,'status'=>'true');
		 echo json_encode($data);
		 exit();
	     }
	     else{
		    	$data['message']="invalid mobile_number";
		     	$data['status']="false";		     	
		        $this->response($data,403);
		        exit();		      
		    }	  
	  }
	     else{
		    	$data['message']="mobile_number is required";
		     	$data['status']="false";		     	
		        $this->response($data,400);
		        exit();		      
		    }	   

	}	
	public function verify_post()
	{
		$userOtp=$this->post('otp');
		$mobile_number=$this->post('mobile_number');
		$role=$this->post('role');		
		if(array_key_exists('mobile_number', $this->post())){		
		 if(preg_match('/^[0-9]{9,10}+$/', $mobile_number) == false){
			$data['message']="invalid mobile_number";
			$data['status']="false";
			$this->response($data,403);
			exit();
		}
	     }
	    else{
	    	$data['message']="mobile_number is required";
			$data['status']="false";
			$this->response($data,400);
			exit();
	    }
		if(array_key_exists('role', $this->post())){
		 if($role=='')
		{
			$data['message']="invalid role";
			$data['status']="false";
			$this->response($data,403);
			exit();
		}
	   }
	   else{
	   	   $data['message']="role is required";
			$data['status']="false";
			$this->response($data,403);
			exit();
	   }
		if(array_key_exists('otp', $this->post())){
		 if($userOtp=='')
		{
			$data['message']="invalid otp";
			$data['status']="false";
			$this->response($data,403);
			exit();
		}
	   }
	   else{
            $data['message']="otp is required";
			$data['status']="false";
			$this->response($data,400);
			exit();
	   }
	    $otp=$this->Api_model->getOtp($mobile_number);		
		$generated_token=bin2hex(openssl_random_pseudo_bytes('40'));				
		if($userOtp==$otp)
		{
		  $user_res=$this->Api_model->getUserExist($mobile_number);
		  if($user_res){		  
		  $userid=$user_res[0]->user_id;
		  $status=$user_res[0]->user_status;
		 if($userid && $status=='0'){
		 $this->Api_model->addToken($userid,$generated_token);		
         $res= $this->Api_model->getUserData($mobile_number);        
         $data=array('user'=>$res[0],'status'=>'true','access_token'=>$generated_token);
         $this->response($data,200);
			exit();          
		 }
		 elseif ($userid && $status=='1') {
		 	$data=array('message'=>'user is deactivated','status'=>'false');
		 	$this->response($data,400);
			exit();
		 }
		 }
		 else{		 	
         $userid= $this->Api_model->addUserData($mobile_number,$role);
         $this->Api_model->addToken($userid,$generated_token);	
         $res= $this->Api_model->getUserData($mobile_number);
         $data=array('user'=>$res[0],'status'=>'true','access_token'=>$generated_token);
         $this->response($data,200);
         exit();
		 }
		}
		else{
			$data['message']="otp does not match";
			$data['status']="false";
			$this->response($data,400);
			exit();
		}
		
		
	}
	public function get_category_get()
	{				
		$res=$this->Api_model->getCategories();
		if($res)
		{
			$data=array('category'=>$res,'status'=>'true');
			echo json_encode($data);
		}
		else{
			$data=array('message'=>'no data found','status'=>'false');
			$this->response($data,404);
		}
	}
	
}
