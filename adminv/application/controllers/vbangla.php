<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Vbangla extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->model('m_admin');
		
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$data['content']    = $this->load->view('booking_requests', $this->m_admin->booking_requests(), true);
			
			$this->load->view('adminv', $data);
		}
	}
	
	function confirm_booking()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
		else {
			$id = $this->uri->segment(3,0);		
			echo $this->m_admin->confirm_booking($id);		
		}
	}
	
	function cancel_booking()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
		else {
			$id = $this->uri->segment(3,0);		
			echo $this->m_admin->cancel_booking($id);
		}
	}
	
	//pricing area 
	function pricing()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$data['content']    = $this->load->view('pricing', $this->m_admin->pricing(), true);
			
			$this->load->view('adminv', $data);
		}
	}
	
	function pricing_edit()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			if($this->input->post('update_pricing'))
			{
				$this->m_admin->update_pricing();
				$data['content']    = $this->load->view('pricing', $this->m_admin->pricing(), true);
			}
			else
			{			
				$data['content']    = $this->load->view('pricing_edit', $this->db->get_where("pricing", array('id'=>$this->uri->segment(3,0)))->row(), true);
			}
			$this->load->view('adminv', $data);
		}
	}
	
	function facility()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$data['content']    = $this->load->view('facility', $this->m_admin->facility(), true);
			
			$this->load->view('adminv', $data);
		}
	}
	
	
	function add_facility()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			if($this->input->post('add_facility'))
			{
				$this->m_admin->add_facility();
				$data['content']    = $this->load->view('facility', $this->m_admin->facility(), true);
			}
			else
			{			
				$data['content']    = $this->load->view('add_facility',  $data , true);
			}
			$this->load->view('adminv', $data);
		}
	}
	
	function edit_facility()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			if($this->input->post('update_facility'))
			{
				$this->m_admin->update_facility();
				$data['content']    = $this->load->view('facility', $this->m_admin->facility(), true);
			}
			else
			{			
				$data['content']    = $this->load->view('edit_facility', $this->db->get_where("facilities", array('id'=>$this->uri->segment(3,0)))->row(), true);
			}
			$this->load->view('adminv', $data);
		}
	}
	
	

	
	
}

/* End of file public.php */
/* Location: ./application/controllers/public.php */