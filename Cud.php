<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');
class Cud extends REST_Controller {

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
            $res=$this->Api_model->getToken($this->post('user_id'),$this->post('access_token'));
		     if(!$res){
		     	$data=array();
		     	$data['message']="user not exist";
		     	$data['status']="false";
		        echo json_encode($data);
		        exit();
		     }		    
        }
	
	public function update_user_post()
	{
		$name=$this->post('name');
		$email=$this->post('email');
		$user_id=$this->post('user_id');
		$res=$this->Api_model->updateUser($name,$email,$user_id);
		if($res)
		{
			$data=array('message'=>'user updated successfully','status'=>'true');
			echo json_encode($data);
		}
		else{
			$data=array('message'=>'error','status'=>'false');
			echo json_encode($data);
		}
	}
	public function add_points()
	{
		$points=$this->post('points');
		$type=$this->post('point_type');		
		$user_id=$this->post('user_id');
		$res=$this->Api_model->addPoints($points,$type,$user_id);
		if($res)
		{
			$data=array('message'=>'points added successfully','status'=>'true');
			echo json_encode($data);
		}
		else{
			$data=array('message'=>'error','status'=>'false');
			echo json_encode($data);
		}
	}


}