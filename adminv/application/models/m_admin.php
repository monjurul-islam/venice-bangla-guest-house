<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * menu model
 *
 * This model serves to calculate menu itms
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */
 
class M_admin extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
	}
	
	
	function booking_requests()
	{
		$this->db->order_by("id", "desc");
		$data['qry'] = $this->db->get("booking_request");
		
		return $data;
	}
	
	function confirm_booking($id)
	{			
		$data = array(
						'status'     => 0,
						'confirmed'  => 1
			);
		$this->db->where('id', $id);
		if($this->db->update('booking_request', $data))
		{
			echo '<script type="text/javascript">alert("Booking Confirmed"); </script>';
			
			return '<span class="btn btn-success">Booking Confirmed</span> <hr class="no_padding"><span class="btn btn-default btn-xs">at '.date("d-m-Y H:i a").'</span>';
		}
	}
	
	function cancel_booking($id)
	{			
		$data = array(
						'status'     => 0,
						'confirmed'  => 0
			);
		$this->db->where('id', $id);
		if($this->db->update('booking_request', $data))
		{
			echo '<script type="text/javascript">alert("Booking Cancelled"); </script>';
			
			return '<span class="btn btn-danger">Booking Cancelled</span> <hr class="no_padding"><span class="btn btn-default btn-xs"> at '.date("d-m-Y H:i a").'</span>';
		}
	}
	
	function pricing()
	{
		$this->db->limit(5);
		$this->db->order_by("id", "asc");
		$data['qry'] = $this->db->get_where("pricing", array('status'=>1));
		
		return $data;
	}
	
	function update_pricing()
	{
		if($this->input->post('id')!=NULL || $this->input->post('id')!="")
		{
			$data = array(
							'prize' =>  $this->input->post('prize'),
							'person' =>  $this->input->post('person'),
							'room_type' =>  $this->input->post('room_type'),
							'capacity' =>  $this->input->post('capacity'),
						);
			$this->db->where('id', $this->input->post('id'));
			if($this->db->update('pricing', $data))
			{
				echo '<script type="text/javascript">alert("Update Success"); </script>';
			}
		}
	}
	
	function facility()
	{
		$this->db->order_by("id", "asc");
		$data['qry'] = $this->db->get("facilities");
		
		return $data;
	}
	
	function add_facility()
	{
		$data = array(
						'title' =>  $this->input->post('title'),
						'desc' =>  $this->input->post('desc'),
						'icon' =>  $this->input->post('icon'),
					);
		if($this->db->insert('facilities', $data))
		{
			echo '<script type="text/javascript">alert("New Facility Added"); </script>';
		}
	}
	
	function update_facility()
	{
		if($this->input->post('id')!=NULL || $this->input->post('id')!="")
		{
			$data = array(
							'title' =>  $this->input->post('title'),
							'desc' =>  $this->input->post('desc'),
							'icon' =>  $this->input->post('icon'),
						);
			$this->db->where('id', $this->input->post('id'));
			if($this->db->update('facilities', $data))
			{
				echo '<script type="text/javascript">alert("Facility Updated"); </script>';
			}
		}
	}
	
}

/* End of file m_menu.php */
/* Location: ./application/models/public/m_menu.php */