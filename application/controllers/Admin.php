<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function index()
	{
		$this->load->view('admin/index.php');
	}
	public function organization_list()
	{
		$this->load->view('admin/organization_list.php');
	}
	public function organization_location()
	{
		$this->load->view('admin/organization_location.php');
	}
	public function organization_deals()
	{
		$this->load->view('admin/organization_deals.php');
	}
	public function profile()
	{
		$this->load->view('admin/profile.php');
	}
	public function organization_rating()
	{
		$this->load->view('admin/organization-rating.php');
	}
	public function organization_visitor()
	{
		$this->load->view('admin/organization-visitor.php');
	}
	public function customer_list()
	{
		$this->load->view('admin/customer-list.php');
	}
	public function user_details()
	{		
		$this->load->view('admin/user-details.php');
	}
	public function location_detail()
	{		
		$this->load->view('admin/location-detail.php');
	}
	public function chats()
	{		
		$this->load->view('admin/chats.php');
	}
	public function loyalty_points()
	{		
		$this->load->view('admin/loyalty-points.php');
	}
	public function total_redeem()
	{		
		$this->load->view('admin/total-redeem.php');
	}
	public function points_generated()
	{
	  $this->load->view('admin/points-generated.php');
	}

	public function points_value()
	{
	  $this->load->view('admin/points-value.php');
	}
	public function categories()
	{
	  $this->load->view('admin/categories.php');
	}
	public function map()
	{
	  $this->load->view('admin/map.php');
	}
}
