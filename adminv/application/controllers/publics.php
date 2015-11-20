<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Publics extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		//$this->load->library('tank_auth');
		//$this->load->model('m_admin');
		$this->load->library('email');
	}

	function index()
	{
		/*if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			echo $this->m_admin->eee();
			
			$this->load->view('welcome', $data);
		}*/
	}
	
	function request_booking()
	{
		if($this->input->post('request_submit'))
		{
			$data = array(
							'check_in' 		=> $this->input->post('check_in'),
							'check_out'		=> $this->input->post('check_out'),
							'room_type' 		=> $this->input->post('room_type'),
							'adults' 		=> $this->input->post('adults'),
							'children'		=> $this->input->post('children'),
							'parking_space' 		=> $this->input->post('parking_space'),
							'car_type' 		=> $this->input->post('car_type'),
							'last_name'		=> $this->input->post('last_name'),
							'first_name' 		=> $this->input->post('first_name'),
							'telephone' 		=> $this->input->post('telephone'),
							'email'		=> $this->input->post('email'),
							'nationality' 		=> $this->input->post('nationality'),
							'passport' 		=> $this->input->post('passport'),
							'message'		=> $this->input->post('message'),
							'created_dt'		=> date("Y-m-d H:i:s"),
							'status' 		=> 1,
							
						);
			
			if($this->db->insert('booking_request', $data))
			{
				$data['booking_id'] = $this->db->insert_id();
				$this->load->view('booking_success', $data);
			}			
		}
		else
		{
			$data['booking_id'] = 0000;
			$this->load->view('booking_success', $data);
		}
	}
	
	
	function contact_message()
	{
		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->to('srasel84@yahoo.com, venicebangla80@gmail.com');
		$this->email->cc('farukhasan@outlook.it,'.$this->input->post('email'));
		
		$this->email->subject($this->input->post('subject').' --From venicebangla.com ');
		$this->email->message('<br />'.$this->input->post('message').'<br />');
		
		$this->email->send();
		
		$data = '';
		
		$this->load->view('contact_mail_success', $data);
	}
}

/* End of file public.php */
/* Location: ./application/controllers/public.php */