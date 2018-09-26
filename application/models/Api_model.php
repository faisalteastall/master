<?php
class Api_model extends CI_Model {

	public function insertOtp($mobile)
	{
	  $otp=rand(1000, 9999);
	  $res=$this->db->select('*')->where('mobile_number',$mobile)->get('user_otp')->result();
	  if(empty($res)){
      $this->db->set('mobile_number',$mobile)->set('otp',$otp)->insert('user_otp');
      return $otp;
        }
      else{
           $this->db->set('otp',$otp)->where('mobile_number',$mobile)->update('user_otp');
           return $otp;
        }
      
	}
     
    public function getOtp($mobile)
	{	  
	  $res=$this->db->select('*')->where('mobile_number',$mobile)->get('user_otp')->result();	  
	  if(!empty($res)){     
      return $res[0]->otp;      
        }            
      
	}

	public function getUserExist($mobile,$email=null,$password=null)
	{ 
              $this->db->select("*,concat('".base_url()."uploads/users/',user_image) as image_url");
             if($email=='' && $password==''){
              $this->db->where('user_mobile',$mobile);
              $this->db->or_where('user_id',$mobile);
              }
              else{
              	$this->db->where('user_email',$email);
              	$this->db->where('password',$password);
              }
        $res= $this->db->get('users')->result();     
        return $res;           
	}
	public function getUserData($mobile)
	{
       return $this->db->select('*')->where('user_mobile',$mobile)->or_where('user_id',$mobile)->get('users')->result();
	}
	public function addUserData($mobile,$role)
	{
        $this->db->set('user_mobile',$mobile)->set('user_role',$role)->insert('users');
        return $this->db->insert_id();
	}
	public function addToken($user_id,$token)
	{
		$res=$this->db->select('*')->where('user_id',$user_id)->get('access_tokens')->result();
		if(empty($res)){
		 $this->db->set('token',$token)->set('user_id',$user_id)->insert('access_tokens');
	     }
	     else{
	     	 $this->db->set('token',$token)->where('user_id',$user_id)->update('access_tokens');
	     }	  
	    
	}

	public function getToken($user_id,$token)
	{		
		return $this->db->select('*')->where('user_id',$user_id)->where('token',$token)->get('access_tokens')->result();
		
	}

	public function getAllData()
	{
		$date=date('Y-m-d');
		$org_res=$this->db->where('user_role','organization')->get('users')->num_rows();
		$banners=$this->db->get('location_images')->num_rows();
		$t_org_res=$this->db->where('user_role','organization')->where('create_date >= CURDATE()')->get('users')->num_rows();
		$cust_res=$this->db->where('user_role','customer')->get('users')->num_rows();
		$t_cust_res=$this->db->where('user_role','customer')->where('create_date >= CURDATE()')->get('users')->num_rows();
		$loca_res=$this->db->get('locations')->num_rows();
		$t_loca_res=$this->db->where('create_date >= CURDATE()')->get('locations')->num_rows();
		$active_deals=$this->db->select('*')->where('start_date<=',$date)->where('end_date>=',$date)->get('deals')->num_rows();
		$data=array();
		$data['total_organizations']=$org_res;
		$data['total_customers']=$cust_res;
		$data['total_locations']=$loca_res;
		$data['todays_organizations']=$t_org_res;
		$data['todays_customer']=$t_cust_res;
		$data['todays_locations']=$t_loca_res;
		$data['active_deals']=$active_deals;
		$data['total_banners']=$banners;

		return $data;
	}

	public function updateUser($name,$email,$user_id)
	{
		$this->db->set('user_email',$email)->set('user_name',$name)->where('user_id',$user_id)->update('users');
		return  $this->db->where('user_id',$user_id)->get('users')->result();
				
	}
	public function addPoints($points,$type,$user_id){			
		if($type=='debit')
		{
			$data=array('debit_points'=>$points,'user_id'=>$user_id);			
		}
		elseif($type=='credit'){
        $data=array('credit_points'=>$points,'user_id'=>$user_id);
		}		
		 $this->db->insert('user_points',$data);	    	    
	     return true;  
	}
   public function getPoints($user_id){
		       $res_point=$this->db->select('IFNULL(sum(debit_points)-sum(credit_points),0) as total_points,IFNULL(sum(credit_points),0) as total_spend_points,IFNULL(sum(debit_points),0) as total_earn_points')->where('user_id',$user_id)->get('user_points')->result();	
		       $res=$this->db->select('*')->where('user_id',$user_id)->get('user_points')->result(); 
		       $res['total_points']=$res_point[0]->total_points;
		       $res['total_spend_points']=$res_point[0]->total_spend_points;
		       $res['total_earn_points']=$res_point[0]->total_earn_points;
	           return $res;
	}
	public function getLocations($user_id,$limit,$offset)
	{		
	 $date=date('Y-m-d');
	 $this->db->select('users.user_name as org_name,locations.*,COUNT(location_visit.review) as total_reviews,COALESCE(round(avg(location_visit.rating),1),0) as total_rating,count(deals.id) as active_deals');
	 $this->db->join('locations','locations.user_id=users.user_id','inner');
	 $this->db->join('(select * from deals where end_date>="'.$date.'"
	 	) as deals','deals.location_id=locations.id','left');
	 $this->db->join('location_visit','location_visit.location_id=locations.id','left');	 
	 $this->db->where('users.user_id',$user_id);	  	
	 $this->db->GROUP_BY('locations.id'); 
	 $res=$this->db->get('users')->result_array();
	 if($offset){
	  
             	                
		                 
     $count=$this->db->select('locations.*,COUNT(location_visit.review) as total_reviews,COALESCE(round(avg(location_visit.rating),1),0) as total_rating,count(deals.id) as active_deals')
                    ->join('locations','locations.user_id=users.user_id','inner')
                    ->join('(select * from deals where end_date>="'.$date.'") as deals','deals.location_id=locations.id','left')
                   ->join('location_visit','location_visit.location_id=locations.id','left')
                   ->where('users.user_id',$user_id)	  	
                   ->GROUP_BY('locations.id')
                   ->get('users')->num_rows(); 
                   $active_deals=array();
                   $all_reviews=array();
               foreach ($res as $key=> $value) {
               	if($value['total_reviews']!='0'){
               
                $all_reviews[]= $value['total_reviews'];
                      }  
                      if($value['active_deals']!='0')
                      {
                      		$active_deals[]=$value['active_deals'];
                      }
                   

                      $res[$key]['images']=$this->db->select("image_name,concat('".base_url()."uploads/locations/',image_name) as image_url")->where('location_id',$value['id'])->get('location_images')->result();

                                          
                                         } 
                                           
                  $newoffset=($offset-1)*$limit;         
	  $res1=array_slice($res,$newoffset,$limit);                                                      
                       
      return $data=array('data'=>$res1,'total_records'=>$count,'total_active_deals'=>array_sum($active_deals),'all_reviews'=>count($all_reviews));       

     }  
      return $res;

	}
	public function addLocations($data)
	{
		$res=$this->db->select('*')->where('name',$data['name'])->get('locations')->result();
		if(empty($res)){
		$this->db->insert('locations',$data);
		return $this->db->insert_id();		
         	}
         else{
		return $data=array('message'=>'location is exist try different','status'=>'false');
	        }
	}
	public function addReviews($data)
	{
		$this->db->insert('location_visit',$data);
		return $this->db->insert_id();
        
	}
	public function addLocationImages($data)
	{
		$this->db->insert('location_images',$data);
		return true;
	}
	public function getCategories()
	{
		return $this->db->get('location_category')->result();

	}
	public function addDeals($data)
	{
     $this->db->insert('deals',$data);
	 return $this->db->insert_id();
	}
	public function addDealImages($data)
	{
     $this->db->insert('deal_images',$data);
	 return true;
	}
	public function getOrganization($user_id)
	{
	 $date=date('Y-m-d'); 
	 $this->db->select('locations.id');
	 $this->db->join('locations','locations.user_id=users.user_id');	
	 $this->db->where('users.user_id',$user_id);
	 $this->db->GROUP_BY('locations.id');
	 $location_res=$this->db->get('users')->result();	 
	 $data=array();
	 $data['total_registered_locations']=count($location_res);
	 $rating='';
	 if(count($location_res)>0){
	 foreach ($location_res as $value) {
	 	$review_res=$this->db->select('review')->where('review!=""')->where('location_id',$value->id)->get('location_visit')->result();
	 	$rating_res=$this->db->select('round(avg(rating),1) as rating')->where('rating!=""')->where('location_id',$value->id)->get('location_visit')->result();		 	 		
	 	foreach ($rating_res as $val) {	 		
	 		$rating +=$val->rating;
	 	}	 	
	 	$visit_res=$this->db->select('id')->where('date >= CURDATE()')->where('location_id',$value->id)->get('location_visit')->result();
	 	$deal_res=$this->db->select('id')->where('end_date>=',$date)->where('location_id',$value->id)->get('deals')->result();
	 	$deal_count[]=count($deal_res);
	 	$review_count[]=count($review_res);
	 	$visit_count[]=count($visit_res);
	 }
	 $data['total_registered_reviews']=array_sum($review_count);
	 $data['total_active_deals']=array_sum($deal_count);
	 $data['todays_visitor']=array_sum($visit_count);
	 $data['todays_visitor']=array_sum($visit_count);
	 $data['total_rating']=$rating;
	 
	}
	else{
	  $data['total_registered_reviews']=0;
	 $data['total_active_deals']=0;
	 $data['todays_visitor']=0;
	 $data['todays_visitor']=0;
	 $data['total_rating']=0;
	}	
	return $data;
	}

	public function getReview($location_id,$key,$limit,$offset)
	{
	  $date=date('Y-m-d :h:i:s');     
      $loc_id=$this->db->select('id')->where('user_id','1')->get('locations')->result();
      $loc_ids=array();
      foreach ($loc_id as $value) {
      	$loc_ids[]=$value->id;
      }  

      if($key=='location')
      {
      	$l_id=$location_id;
      }
      else{
      	$l_id=$loc_ids;
      }
         
      $this->db->select("l.name as location_name,lv.id as review_id,lv.review,lv.rating,lv.date as review_date,u.user_name as review_by,CONCAT(IF(u.user_image IS NULL,'','".base_url()."uploads/users/'),u.user_image) as image_url,COUNT(CASE WHEN la.status = '1' then 1 ELSE NULL END) as 'likes',COUNT(CASE WHEN la.status = '2' then 2 ELSE NULL END) as 'dislikes',COUNT(CASE WHEN la.status = '3' then 3 ELSE NULL END) as 'helpful'")
                     ->from('location_visit as lv')
                     ->join('locations l', 'l.id=lv.location_id','left')
                     ->join('location_review_acitvity as la', 'la.visit_id=lv.id','left') 
                     ->join('users as u','u.user_id=lv.user_id','left')
                     ->where_in('lv.location_id',$l_id)
                     ->GROUP_BY('la.id,lv.id'); 
                     // if($limit!=''&&$offset!=''){
                     // $this->db->limit($limit,$offset);     
                     // }              
     $review= $this->db->get()->result_array();
     if($limit!=''){
	    	$newoffset = ($offset-1)*$limit;         
	        $reviews = array_slice($review,$newoffset,$limit);                                         
           
      	}  
      	else{
      		$reviews=$review;
      	}   
     foreach ($reviews as $key => $value) {
                        $review_images=$this->db->select("CONCAT(IF(image_name IS NULL,'','".base_url()."uploads/locations/'),image_name ) as image_url")->where('review_id',$value['review_id'])->get('review_images')->result();
		                 $reviews[$key]['images']=$review_images;
                          }   
     $data['review']=$reviews;
     $data['count']=count($reviews);                  
     $data['totdays_visitor']=$this->db->select("users.user_id,users.user_name")
		                                        ->join('users','users.user_id=location_visit.user_id','left')
		                                        ->where('date >= CURDATE()')
		                                        ->where('location_id',$location_id)
		                                        ->get('location_visit')->result();
		                     $deal_res      =    $this->db->select('*')                                        
		                                        ->where('start_date <=',$date)
		                                        ->where('end_date >=',$date)
		                                        ->where('deals.location_id',$location_id)
		                                        ->get('deals')->result_array();
		                                        foreach ($deal_res as $key=> $value) {
		                                        	$deal_image=$this->db->select('*')->where('deal_id',$value['id'])->get('deal_images')->result();
		                                        	$deal_res[$key]['images']=$deal_image;	                                        	
		                                        }
              $data['avtive_deals']=$deal_res;             
              return $data;
	}
	public function getNearLocation($user_id,$latitude,$longitude)
	{
	   $date=date('Y-m-d'); 
	   $distance='concat(round((3956 * 2 * ASIN(SQRT( POWER(SIN(('.$latitude.'- latitude) *  pi()/180 / 2), 2) +COS( latitude * pi()/180) * COS(latitude * pi()/180) * POWER(SIN(('.$longitude.'- longitude) * pi()/180 / 2), 2) ))),1)," Km") as distance';
	   $loc_res=$this->db->select('*,'.$distance)
		         ->having('distance <=5')		         
		         ->order_by('distance')
		         ->get('locations')->result();

		         $deal_res=[];
		         foreach ($loc_res as $value) {
		         	$deal_res []=$this->db->select("deals.*,concat('".base_url()."uploads/deals/',deal_images.image_name) as image_url")
		         	                   ->join('deal_images','deal_images.deal_id=deals.id','left')
		         	                   ->where('deals.end_date >=',$date)
		         	                   ->where('deals.location_id',$value->id)		         	             
		                               ->get('deals')->result();
		                      
		                      
		         }  
		         
		           $dels=$this->array_flatten($deal_res);
		      
		         $get_points=$this->getPoints($user_id); 
		         $points=array('total_spend_points'=>$get_points['total_spend_points'],'total_points'=>$get_points['total_points']);
		         return $data=array("Nearest_location"=>$loc_res,'points'=>$points,'Nearest_deals'=>$dels); 
		     
	}
	public function array_flatten($array = null) {
    $result = array();

    if (!is_array($array)) {
        $array = func_get_args();
    }

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, $this->array_flatten($value));
        } else {
            $result = array_merge($result, array($key => $value));
        }
    }

    return $result;
}
	public function getDeals($user_id,$limit,$offset, $location_id='') {
	    $date=date('Y-m-d'); 
	    $user_name = $this->db->select('user_name')->where('user_id',$user_id)->get('users')->row();
	    
	    if($location_id){
	    	$location_res =  $this->db->select('*')->where('id', $location_id)->get('locations')->result(); ;
	    } else {
	    	$location_res = $this->db->select('*')->where('user_id', $user_id)->get('locations')->result();
    	}
		$deal_res=[];
		foreach ($location_res as $value) {
         	$this->db->select('deals.*,locations.name as location_name,locations.address as location_address')
             	->join('locations','locations.id=deals.location_id')					         	          
                ->where('end_date >=',$date)
                ->where('deals.location_id',$value->id);			                    
            $dels=$this->db->get('deals')->result();
                 
            if($dels){
            	$deal_res[]=$dels;
           	}
        } 
     	$dels=$this->array_flatten($deal_res);
	    foreach ($dels as $key => $values) {
         	$deal_image_res = $this->db->select("*,concat('".base_url()."uploads/deals/',image_name) as image_url")
         	    ->where('deal_id',$values->id)->get('deal_images')->result();	
		    $deal_bought = $this->db->select("*")->where('deal_id',$values->id)->get('deal_sales')->num_rows();	         
           	$dels[$key]->deal_image = $deal_image_res;
           	$dels[$key]->deal_bought = $deal_bought;
        }   
		if($limit!=''){
	    	$newoffset = ($offset-1)*$limit;         
	        $res1 = array_slice($dels,$newoffset,$limit);                                           
            return $data = array('data'=>$res1,'total_records'=>count($dels),'total_locations'=>count($location_res),'org_name'=>$user_name->user_name);
      	}    
		return $dels;    
	}

	public function getOrganizationList($limit,$offset)
	{		
		$dates=date('Y-m-d');
		$date="$dates";
	      $this->db->select('users.*,count(Distinct(locations.id)) as total_locations,count(Distinct(deals.id)) as active_deals,COUNT(location_visit.review) as total_reviews,COALESCE(round(avg(location_visit.rating),1),0) as total_rating,count(Case when location_visit.date >= CURDATE() then 1 end) as todays_visitor')
		                ->join('locations','locations.user_id=users.user_id','left')
		                ->join('location_visit','location_visit.location_id=locations.id','left')
		                ->join('(select * from deals where end_date>="'.$date.'" 
	 	                        ) as deals','deals.location_id=locations.id','left')                		                		                
		                ->where('users.user_role','organization')		                               		               		                
		                ->GROUP_BY('users.user_id')
		                ->order_by('users.user_id','asc');              		                
		                 
		                 $res=$this->db->get('users')->result();

		                    	                
		                 
		       $count=$this->db->select('users.*,count(Distinct(locations.id)) as total_locations,count(Distinct(deals.id)) as active_deals,COUNT(location_visit.review) as total_reviews,COALESCE(round(avg(location_visit.rating),1),0) as total_rating,count(Case when location_visit.date >= CURDATE() then 1 end) as todays_visitor')
		                ->join('locations','locations.user_id=users.user_id','left')
		                ->join('location_visit','location_visit.location_id=locations.id','left')
		                ->join('(select * from deals where end_date>="'.$date.'" 
	 	                        ) as deals','deals.location_id=locations.id','left')                		                		                
		                ->having('users.user_role','organization')		                               		               		                
		                ->GROUP_BY('users.user_id')
		                ->get('users')->num_rows();
		                         
                 	       $newoffset=($offset-1)*$limit;         
		                 $res1=array_slice($res,$newoffset,$limit);

		      return $data=array('data'=>$res1,'total_records'=>$count);
		                // echo $this->db->last_query();
		                // exit();
	}

	public function updateProfile($data)
	{
		$this->db->where('user_id',$data['user_id'])->update('users',$data);
		return $this->db->select("*,concat('".base_url()."uploads/users/',user_image) as image_url")->where('user_id',$data['user_id'])->get('users')->result();
	}
	public function getVisitors($user_id,$limit,$offset){
		$res=$this->db->select('name,address,id as location_id')->where('user_id',$user_id)->get('locations')->result();
		
		foreach ($res as $key => $value) {
			$res1=$this->db->select("*,concat('".base_url()."uploads/users/',users.user_image) as image_url")
			               ->join('users','users.user_id=location_visit.user_id','left')
			               ->join('locations','locations.id=location_visit.location_id','left')
			               ->where('location_visit.id',$value->location_id)
			               ->where('location_visit.date >= CURDATE()')
			               ->get('location_visit')->result();
			if($res1!=null){
			$todays_visitor[]=$res1;
		}
		}
		                 $newoffset=($offset-1)*$limit;         
		                 $res2=array_slice($todays_visitor,$newoffset,$limit);

		      return $data=array('data'=>$res2,'total_records'=>count($todays_visitor));
	
	}

	public function getLocationDetail($location_id,$limit,$offset){
		$loc_res=$this->db->select('location_category.name as category_name,locations.*,count(location_visit.id) as review,round(avg(location_visit.rating),1) as rating')
		                   ->join('location_visit','location_visit.location_id=locations.id','left')
		                   ->join('location_category','location_category.id=locations.category','left')		                  
		                   ->where('locations.id',$location_id)			                            
		                   ->get('locations')->result();
		                  $loc_img=$this->db->select("concat('".base_url()."uploads/locations/',location_images.image_name) as image_url")->where('location_id',$location_id)->get('location_images')->result();
		                  $loc_visit=$this->db->select("users.user_name,users.user_image,concat('".base_url()."uploads/users/',users.user_image) as image_url")->join('users','users.user_id=location_visit.user_id','left')->where('location_visit.date >= CURDATE()')->where('location_id',$location_id)->get('location_visit')->result();
            $loc_res[0]->location_images=$loc_img;
            $loc_res[0]->location_visitor=$loc_visit;           
		return $loc_res;
	}

	public function getCustomers($limit,$offset)
	{
		$res=$this->db->select("user_id,user_name,user_email,user_mobile,user_image,concat('".base_url()."uploads/users/',user_image) as image_url")
			     ->where('user_role','customer')			     
			     ->get('users')->result();
			      $newoffset=($offset-1)*$limit;         
		          $res1=array_slice($res,$newoffset,$limit);
			     
	    $count=$this->db->select('*')
			     ->where('user_role','customer')			     
			     ->get('users')->num_rows();
			  return $data=array('data'=>$res1,'total_records'=>$count);

	}

	public function buyDeal($user_id,$deal_id)
	{
		$this->db->set('user_id',$user_id)->set('deal_id',$deal_id)->insert('deal_sales');
		return true;
	}
	public function getTransactions($user_id)
	{
		return $this->db->where('user_id',$user_id)->get('user_points')->result();
	}
	public function getLocationVisits($user_id)
	{
		return $this->db->select('location_visit.date,locations.name,locations.address')->join('locations','locations.id=location_visit.location_id','left')->where('location_visit.user_id',$user_id)->get('location_visit')->result();
	}

	public function addReviewImages($data)
	{
		$this->db->insert('review_images',$data);
	}
}