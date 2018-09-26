<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send_sms {
	var $CI;
    public function __construct($params = array())
    {
        $this->CI =& get_instance();

        $this->CI->load->helper('url');
        $this->CI->config->item('base_url');
        $this->CI->load->database();
        
    }
    public function sendSms($mobile,$otp){
	$apiKey = urlencode('z2BKhl3JM0E-RhD6H4CrGsSD6p8hK3mgaPkJD0j7tK');
	
	// Message details
	$numbers = array($mobile);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($otp);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	//echo $response;
}
}
	?>