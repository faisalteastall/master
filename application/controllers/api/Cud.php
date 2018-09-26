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
            $header=$this->input->request_headers();
            if($this->input->method(true)=='GET')
            {
            $method='get';
            }
            else{
            	$method='post';
            }          
            if(array_key_exists('access_token',$header)){            
              if(array_key_exists('user_id',$this->$method())){  
                if(!is_numeric($this->$method('user_id'))) {
	                $data=array();
			     	$data['message']="invalid user_id";
			     	$data['status']="false";
			        $this->response($data,401);
			        exit();
                }     
                $res=$this->Api_model->getToken($this->$method('user_id'),$header['access_token']);             
			     if(!empty($res)){
			     	$user_res=$this->Api_model->getUserExist($this->$method('user_id'));
			     	if(!empty($user_res)){		  
			        $status=$user_res[0]->user_status;
			        if($status=='1')
			        {
			        $data=array();
			     	$data['message']="user is deactivated";
			     	$data['status']="false";
			        $this->response($data,401);
			        exit();
			        }
			        }
			        else{
			     	$data=array();
			     	$data['message']="user not exist";
			     	$data['status']="false";
			        $this->response($data,404);
			        exit();
			        }
			      }
			      else{
			      	$data=array();
			     	$data['message']="invalid access_token";
			     	$data['status']="false";
			        $this->response($data,401);
			        exit();
			      }
		     }
		    else{
                $data=array();
		     	$data['message']="user_id is required";
		     	$data['status']="false";
		        $this->response($data,401);
		        exit();
		      }
		    }
		    else{
		    	$data=array();
		     	$data['message']="access_token is required";
		     	$data['status']="false";
		        $this->response($data,401);
		        exit();
		    }	    
        }
	
	public function update_user_post()
	{
		$name=$this->post('name');
		$email=$this->post('email');
		$user_id=$this->post('user_id');		
		if(!isset(($name)))
		{
			$data['message']="name is required";
			$data['status']="false";
			$this->response($data,400);
			exit();
		}
		if($name=='')
		{
			$data['message']="invalid name";
			$data['status']="false";
			$this->response($data,403);
			exit();
		}
		if(!isset(($email)))
		{
			$data['message']="email is required";
			$data['status']="false";
			$this->response($data,400);
			exit();
		}
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|xss_clean');	
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$data['message']="invalid email";
			$data['status']="false";
			$this->response($data,403);
			exit();
		}		
		$res=$this->Api_model->updateUser($name,$email,$user_id);
		if($res)
		{
			$data=array('message'=>'user updated successfully','user'=>$res[0],'status'=>'true');
			echo json_encode($data);
		}
		else{
			$data=array('message'=>'error','status'=>'false');
			$this->response($data,500);
		}
	}
	public function add_points_post()
	{
		$points=$this->post('points');
		$type=$this->post('point_type');		
		$user_id=$this->post('user_id');		
		if(!isset(($points)))
		{
			$data['message']="points is required";
			$data['status']="false";
			$this->response($data,400);
			exit();
		}
		if($points=='')
		{
			$data['message']="invalid points";
			$data['status']="false";
			$this->response($data,403);
			exit();
		}
		if(!isset(($type)))
		{
			$data['message']="point_type is required";
			$data['status']="false";
			$this->response($data,400);
			exit();
		}	
		if(($type=='')||($type!='debit')&&($type!='credit'))
		{
			$data['message']="invalid point_type";
			$data['status']="false";
			$this->response($data,403);
			exit();
		}

		$res=$this->Api_model->addPoints($points,$type,$user_id);
		if($res)
		{
			$data=array('message'=>'points added successfully','status'=>'true');
			echo json_encode($data);
		}
		else{
			$data=array('message'=>'error','status'=>'false');
			$this->response($data,500);
		}
	}

	public function get_points_post()
	{				
		$user_id=$this->post('user_id');
		$res=$this->Api_model->getPoints($user_id);
		if($res)
		{
			$data=array('message'=>$res,'status'=>'true');
			echo json_encode($data);
		}
		else{
			$data=array('message'=>'no data found','status'=>'true');
			$this->response($data,200);
		}
	}	

	public function get_locations_get()
	{	

	   if($this->get('org_id')){ 
	      $res=$this->Api_model->getLocations($this->get('org_id'),$limit=4,$this->get('page'));
	    }  
	    else{	    	
	    	   $res=$this->Api_model->getLocations($this->get('user_id'),$limit=null,$offset=null);	
	    }  
	   	       
		if($res)
		{
			if($this->get('org_id')){
			 $data=array('data'=>$res['data'],'count'=>$res['total_records'],'status'=>'true','total_active_deals'=>$res['total_active_deals'],'all_reviews'=>$res['all_reviews']);			  
			 $this->response($data,200);
			}
			else{
			$data=array('data'=>$res,'status'=>'true');
			$this->response($data,200);
		    }
		}
		else{
			$data=array('message'=>'no data found','status'=>'true');
			$this->response($data,200);
		}
	}	
    public function organzation_list_get()
    {
    	$res=$this->Api_model->getOrganizationList($limit='4',$this->get('page'));
    	if($res)
		{
			$data=array('data'=>$res['data'],'count'=>$res['total_records'],'status'=>'true');
			$this->response($data,200);
		}
		else{
			$data=array('message'=>'no data found','status'=>'true');
			$this->response($data,200);
		}
    }
	public function add_locations_post()
	{				
		$org_id=$this->post('user_id');
		$name=$this->post('name');
		$address=$this->post('address');
		$lat=$this->post('latitude');
		$long=$this->post('longitude');
		$place_id=$this->post('place_id');
		$category=$this->post('category');
		$opening_time=$this->post('opening_time');
		$closing_time=$this->post('closing_time');
		$contact=$this->post('contact_no');
		$data1=array('user_id'=>$org_id,'name'=>$name,'address'=>$address,'latitude'=>$lat,'longitude'=>$long,'place_id'=>$place_id,'category'=>$category,'contact_no'=>$contact);
		foreach ($data1 as $key=> $value) {
			if(!array_key_exists($key,$this->post())){
			$data=array('message'=>$key.' is required','status'=>'false');
			$this->response($data,400);
			exit();
		       }
		       elseif(empty($this->post($key))){
		       	$data=array('message'=>$key.' is invalid','status'=>'false');
				$this->response($data,403);
				exit();

		       }
		}
		  // $data1['organisation_id'] = $data1['user_id'];
    //       unset($data1['user_id']);
          $location_id=$this->Api_model->addLocations($data1);
          if($location_id){
           if($location_id['status']=='false')
           {
           	$this->response($location_id,500);
           }
           else{
            $data=array('message'=>'location added successfully','status'=>'true');
		         $this->response($data,200);
				exit();
			 }
			}
			else{
			$data=array('message'=>'location could not be added','status'=>'false');
		         $this->response($data,500);
				exit();	
			}

	}

	public function get_admin_dashboard_get()
	{
		$res=$this->Api_model->getAllData();
		{
			$data=array('data'=>$res,'status'=>'true');
		         $this->response($data,200);
				exit();
		}
	}

	public function add_reviews_post() {
	    $target_dir = str_replace('/application', '', APPPATH)."uploads/locations/";				
		$user_id=$this->post('user_id');
		$points='10';
		$type='debit';
		$review = $this->post('review');
		$rating = $this->post('rating');
		$visibility = $this->post('visibility');		
		$location_id=$this->post('location_id');		
		$data1 = array('user_id'=>$user_id, 'review'=>$review, 'location_id'=>$location_id, "rating"=>$rating,'visibility'=>$visibility);
		if(isset($_FILES['file']['name']))	{
		$count=count($_FILES["file"]['name']);	
		for($i=0;$i<$count; $i++){
		$temp = explode(".", $_FILES["file"]["name"][$i]);
        $file = reset($temp).'_'.$user_id.'.'.end($temp);
		$target_file =$target_dir.basename($file);
		$allowed = array('.jpg','.jpeg','.gif','.png','.flv');
        if (!in_array(strtolower(strrchr($file, '.')), $allowed)) {
           $data=array('message'=>'invalid image format','status'=>'false');
		   $this->response($data,400);
		   
         }
        }
	   }

		foreach ($data1 as $key=> $value) {
			if(!array_key_exists($key,$this->post())){
				$data=array('message'=>$key.' is required','status'=>'false');
				$this->response($data,400);
				exit();
	        } elseif(empty($this->post($key))) {
		       	$data=array('message'=>$key.' is invalid','status'=>'false');
				$this->response($data,403);
				exit();
	        }
		}		  
        $res=$this->Api_model->addReviews($data1);
        if($res) {
            $res1=$this->Api_model->addPoints($points,$type,$user_id);
           if(isset($_FILES['file']['name'])){
		     $count=count($_FILES["file"]['name']);
            for($j=0;$j<$count; $j++){
				$temp = explode(".", $_FILES["file"]["name"][$j]);
		        $file = reset($temp).'_'.$user_id.'.'.end($temp);
				$target_file =$target_dir.basename($file);		
				if(move_uploaded_file($_FILES["file"]["tmp_name"][$j],$target_file)){
				  $image_data_location=array();
		          $image_data_location['image_name']=$file;
		          $image_data_location['location_id']=$location_id;
		          $image_data_location['user_id']=$user_id;
		          $image_review_data=array();
		          $image_review_data['review_id']=$res;
		          $image_review_data['image_name']=$file;
		          $this->Api_model->addLocationImages($image_data_location);
		          $this->Api_model->addReviewImages($image_review_data);		         
				}	
			 }
			}
            if($res1) {
             	$data=array('message'=>'reviews added successfully','earn_points'=>$points,'status'=>'true');
		     	$this->response($data,200);
				exit();
            }       
		    $data=array('message'=>'error while adding points','status'=>'false');
	         $this->response($data,500);
			exit();
		} else {
			$data=array('message'=>'error while adding review','status'=>'false');
	        $this->response($data,500);
			exit();
		}
	}
	 
	public function upload_loaction_images_post()
	{ 	
		$target_dir = str_replace('/application', '', APPPATH)."uploads/locations/";              
	    $user_id=$this->post('user_id');
		$location_id=$this->post('location_id');
		$count=count($_FILES["file"]['name']);
		if($count==0){
         $data=array('message'=>'no file selected','status'=>'false');
		    $this->response($data,400);		    
		    exit();
		}
		for($i=0;$i<$count; $i++){
		$temp = explode(".", $_FILES["file"]["name"][$i]);
        $file = reset($temp).'_'.$user_id.'.'.end($temp);
		$target_file =$target_dir.basename($file);
		if($file=='')
		{
			$data=array('message'=>'invalid file','status'=>'false');
		    $this->response($data,403);		    
		  
		}
		$data1=array('user_id'=>$user_id,'location_id'=>$location_id);
		foreach ($data1 as $key=> $value) {
		if(!array_key_exists($key,$this->post())){
		$data=array('message'=>$key.' is required','status'=>'false');
		$this->response($data,400);
		
		   }
		   elseif(empty($this->post($key))){
		   	$data=array('message'=>$key.' is invalid','status'=>'false');
			$this->response($data,403);
			

		   }
		}	
		$allowed = array('.jpg','.jpeg','.gif','.png','.flv');
        if (!in_array(strtolower(strrchr($file, '.')), $allowed)) {
           $data=array('message'=>'invalid image format','status'=>'false');
		   $this->response($data,400);		    
		   
        }		
		if (file_exists($target_file)) {
			$data=array('message'=>'Sorry '.$file.' already exists','status'=>'false');
		    $this->response($data,400);	    
		  
		}
		$result[] =true;
	   }	 
		if(count($result)==$count){
		for($j=0;$j<$count; $j++){
		$temp = explode(".", $_FILES["file"]["name"][$j]);
        $file = reset($temp).'_'.$user_id.'.'.end($temp);
		$target_file =$target_dir.basename($file);		
		if(move_uploaded_file($_FILES["file"]["tmp_name"][$j],$target_file)){
          $data1['image_name']=$file;
          $res=$this->Api_model->addLocationImages($data1);
          if($res){
              $res1[]=true;  
		    
          }
		}	
	 }
	 if(count($res1)==$count)
	 {
	 		$data=array('message'=>'file has been successfully uploaded','status'=>'true');
		    $this->response($data,200);  
	 }
	}	
  }

  public function add_deals_post()
  {  
    $target_dir = str_replace('/application', '', APPPATH)."uploads/deals/";   
  	$name=$this->post('name');
  	$description=$this->post('description');
  	$location_id=$this->post('location_id');
    $start_date=date('Y-m-d',strtotime($this->post('start_date')));
  	$end_date=date('Y-m-d',strtotime($this->post('end_date')));  
  	$price=$this->post('price');
  	$user_id=$this->post('user_id');
  	$discount=$this->post('discount');
  	$redeem_points=$this->post('redeem_points');
  	    $data1=array('name'=>$name,'description'=>$description,'location_id'=>$location_id,'start_date'=>$start_date,'end_date'=>$end_date,'price'=>$price,'discount'=>$discount,'redeem_points'=>$redeem_points);
		foreach ($data1 as $key=> $value) {
		if(!array_key_exists($key,$this->post())){
		$data=array('message'=>$key.' is required','status'=>'false');
		$this->response($data,400);
		
		   }
		   elseif(empty($this->post($key))){
		   	$data=array('message'=>$key.' is invalid','status'=>'false');
			$this->response($data,403);
			

		   }
		}
		if(!isset($_FILES['file']))
		{
          $data=array('message'=>'file is required','status'=>'false');
		  $this->response($data,400);
        }
        $count=count($_FILES['file']['name']);
        if($count==0){
         $data=array('message'=>'no file selected','status'=>'false');
		    $this->response($data,400);		    
		    exit();
		}
		for($i=0;$i<$count;$i++)
		{
         $temp = explode(".", $_FILES["file"]["name"][$i]);
         $file = reset($temp).'_'.$user_id.'.'.end($temp);
		 $target_file =$target_dir.basename($file);
		 $allowed = array('.jpg','.jpeg','.gif','.png','.flv');
	       if (!in_array(strtolower(strrchr($file, '.')), $allowed)) {
	           $data=array('message'=>'invalid image format','status'=>'false');
			   $this->response($data,400);		    
			   
	         }		
			// if(file_exists($target_file)) {
			// 	$data=array('message'=>'Sorry '.$file.' already exists','status'=>'false');
			//     $this->response($data,400);	    
			  
			// }
			$result[] =true;			 
		}
		$res1 = 0;
		if(count($result)==$count){
		  	$deal_id=$this->Api_model->addDeals($data1);
				for($j=0;$j<$count; $j++){
				$temp = explode(".", $_FILES["file"]["name"][$j]);
		        $file = reset($temp).'_'.$user_id.'.'.end($temp);
				$target_file =$target_dir.basename($file);		
				if(move_uploaded_file($_FILES["file"]["tmp_name"][$j],$target_file)){
					$data2=array();
					$data2['deal_id']=$deal_id;
			        $data2['image_name']=$file;
			        $res=$this->Api_model->addDealImages($data2);
			        if($res){
			           $res1++ ;		    
			        }
				}	
			}
			if($res1 ==$count) {
		 		$data = array('message'=>'deal has been successfully added','status'=>'true');
			    $this->response($data,200);  
			}
		}

  	}

  public function get_organization_get()
  {
  	$user_id=$this->get('user_id');
  	$res=$this->Api_model->getOrganization($user_id);
  	if($res)
  	{
  		$data=array('data'=>$res,'status'=>'true');
  		$this->response($data,200);
  	}
  	else{
  		$data=array('message'=>'no data found','status'=>'true');
  		$this->response($data,200);
  	}
  }

  public function get_location_detail_get()
  {
   $location_id=$this->get('location_id');
   $limit=$this->get('perpage');
   $offset=$this->get('page');   
   if(!isset(($location_id)))
		{
			$data['message']="location_id is required";
			$data['status']="false";
			$this->response($data,400);
			exit();
		}	
	if($location_id=='')
	{
		$data['message']="invalid location_id";
		$data['status']="false";
		$this->response($data,403);
		exit();
	}
	//$res=$this->Api_model->getReview($location_id,$limit,$offset);
	$res=$this->Api_model->getLocationDetail($location_id,$limit,$offset);
  if($res)
  	{
  		$data=array('data'=>$res,'status'=>'true');
  		$this->response($data,200);
  	}
  	else{
  		$data=array('message'=>'no data found','status'=>'true');
  		$this->response($data,200);
  	}
  }
   	public function get_review_get() {
	   $location_id=$this->get('location_id');	 
	   $user_id=$this->get('user_id');
	   $limit=$this->get('perpage');
	   $offset=$this->get('page');   
		if($location_id=='') {	
		 $res=$this->Api_model->getReview($user_id,'user_id',$limit,$offset);	
	     }
	     else{	     	
	     	$res=$this->Api_model->getReview($location_id,'location',$limit,$offset);
	     }
	  if($res)
	  	{
	  		if($limit!=''){
	  		$data=array('data'=>$res['review'],'count'=>$res['count'],'status'=>'true');
	  		$this->response($data,200);
	  		}
	  		$data=array('data'=>$res['review'],'status'=>'true');
	  		$this->response($data,200);
	  	}
	  	else{
	  		$data=array('message'=>'no data found','status'=>'true');
	  		$this->response($data,200);
	  	}
	  }

  public function get_nearest_location_get()
  {
  	$user_id=$this->get('user_id');
  	$latitude=$this->get('latitude');
  	$longitude=$this->get('longitude');
  	if(!isset(($latitude)))
		{
			$data['message']="latitude is required";
			$data['status']="false";
			$this->response($data,400);
			exit();
		}	
	if($latitude=='')
	{
		$data['message']="invalid latitude";
		$data['status']="false";
		$this->response($data,403);
		exit();
	}
	if(!isset(($longitude)))
		{
			$data['message']="longitude is required";
			$data['status']="false";
			$this->response($data,400);
			exit();
		}	
	if($longitude=='')
	{
		$data['message']="invalid longitude";
		$data['status']="false";
		$this->response($data,403);
		exit();
	}
  	$res=$this->Api_model->getNearLocation($user_id,$latitude,$longitude);
  	 if($res)
  	{
  		$res['status']='true';  		
  		$this->response($res,200);
  	}
  	else{
  		$data=array('message'=>'no data found','status'=>'true');
  		$this->response($data,200);
  	}
  }
	public function get_deals_get() {   
		if($this->get('org_id')!=''){ 
	  		$user_id = $this->get('org_id');
		} else {
			$user_id = $this->get('user_id');
	   	}	   
	   	$location_id = ($this->get('location_id')>0) ? $this->get('location_id') : 0 ;
		$limit = $this->get('perpage');
	    $offset = $this->get('page');
		$res = $this->Api_model->getDeals($user_id, $limit, $offset, $location_id);
	   	if($res) {
	  		if($this->get('org_id')!='' OR $offset!=''){
	         	$data = array(
	         		'data'=>$res['data'],
	         		'status'=>'true',
	         		'count'=>$res['total_records'],
	         		'total_locations'=>$res['total_locations'],
	         		'org_name'=>$res['org_name']
	     		);
	  		 	$this->response($data,200);
	  		} else {
	  			$data=array('data'=>$res,'status'=>'true');
	  			$this->response($data,200);
	  		}
	  	
	  	} else {
	  		$data=array('data'=>[],'message'=>'no data found','status'=>'true');
	  		$this->response($data,200);
	  	}
	}

public function update_profile_post()
{    $target_dir = str_replace('/application', '', APPPATH)."uploads/users/";
	 $posts = $this->post();	
	 $res='';
	 if(isset($_FILES['user_image'])){
        $temp = explode(".", $_FILES["user_image"]["name"]);
        $file = reset($temp).'_'.$posts['user_id'].'.'.end($temp);
		$target_file =$target_dir.basename($file);		
		if(move_uploaded_file($_FILES["user_image"]["tmp_name"],$target_file)){		  
          $posts['user_image']=$file;
          $res=$this->Api_model->updateProfile($posts);          	          
		 }
		
		}
	  else{
	  	unset($posts['user_image']);
          $res=$this->Api_model->updateProfile($posts);         
		}
	if($res)
  	{
  		$data=array('user'=>$res[0],'status'=>'true');
  		$this->response($data,200);
  		exit();
  	}
  	else{
  		$data=array('user'=>[],'message'=>'no data found','status'=>'true');
  		$this->response($data,200);
  		exit();
  	}
      
}

public function get_visitors_get()
{
	$org_id=$this->get('org_id');
	$offset=$this->get('page');	
	$res=$this->Api_model->getVisitors($org_id,$limit=4,$offset);
	if($res)
  	{
  		$data=array('data'=>$res['data'],'status'=>'true','count'=>$res['total_records']);
  		$this->response($data,200);
  		exit();
  	}
  	else{
  		$data=array('data'=>[],'message'=>'no data found','status'=>'true');
  		$this->response($data,200);
  		exit();
  	}
  }

  public function get_customers_get()
  {
  	$limit=$this->get('perpage');
  	$offset=$this->get('page');
    $res=$this->Api_model->getCustomers($limit,$offset);
    if($res)
  	{
  		$data=array('data'=>$res['data'],'status'=>'true','count'=>$res['total_records']);
  		$this->response($data,200);
  		exit();
  	}
  	else{
  		$data=array('data'=>[],'message'=>'no data found','status'=>'true');
  		$this->response($data,200);
  		exit();
  	}
  }

  public function buy_deal_post()
  {
    $user_id=$this->post('user_id');
  	$deal_id =$this->post('deal_id');
  	 if(!isset(($deal_id)))
		{
			$data['message']="deal_id is required";
			$data['status']="false";
			$this->response($data,400);
			exit();
		}	
	if($deal_id=='')
	{
		$data['message']="invalid deal_id";
		$data['status']="false";
		$this->response($data,403);
		exit();
	}
	$res=$this->Api_model->buyDeal($user_id,$deal_id);
	 if($res)
  	{
  		$data=array('message'=>'deal buy successfully','status'=>'true');
  		$this->response($data,200);
  		exit();
  	}
  	else{
  		$data=array('message'=>'error deal could not buy','status'=>'false');
  		$this->response($data,500);
  		exit();
  	}
  }

  public function user_details_get()
  {
  	$user_id=$this->input->get('customer_id');
  	$res=$this->Api_model->getUserData($user_id);  	
	 if($res)
  	{
  		$points=$this->Api_model->getPoints($user_id);
  		$res[0]->total_points=$points['total_points'];
  		$res[0]->total_spend_points=$points['total_spend_points'];  
  		$res[0]->total_earn_points=$points['total_earn_points'];		
  		$data=array('data'=>$res,'status'=>'true');
  		$this->response($data,200);
  		exit();
  	}
  	else{
  		$data=array('message'=>'no data found','status'=>'false');
  		$this->response($data,500);
  		exit();
  	}
  }
  public function user_transactions_get()
  {
  	$user_id=$this->input->get('customer_id');
  	$res=$this->Api_model->getTransactions($user_id);   	
	 if($res)
  	{  						
  		$data=array('data'=>$res,'status'=>'true');
  		$this->response($data,200);
  		exit();
  	}
  	else{
  		$data=array('message'=>'no data found','status'=>'false');
  		$this->response($data,200);
  		exit();
  	}
  }
   public function location_visits_get()
  {
  	$user_id=$this->input->get('customer_id');
  	$res=$this->Api_model->getLocationVisits($user_id);   	
	 if($res)
  	{  						
  		$data=array('data'=>$res,'status'=>'true');
  		$this->response($data,200);
  		exit();
  	}
  	else{
  		$data=array('message'=>'no data found','status'=>'false');
  		$this->response($data,200);
  		exit();
  	}
  }

 
}
