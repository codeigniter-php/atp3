<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

   public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_login');
		$this->load->library('parser');
		$this->load->library('form_validation');
	}

	public function index()
	{

		
		

		$data=$this->m_login->getAll();
	
		$list=array();
		foreach ($data as $d) {

			for($i=0;$i<=12;$i=$i+.5)
			{
				if($d['t'.$i]=="R")
				{
					$d['t'.$i]="<div class='pius'>Regular Class</div>";
				}
				else if($d['t'.$i]=="M")
				{
					$d['t'.$i]="<div class='makeUp'>Make Up</div>";
				}
				else
				{
					$d['t'.$i]="<span>No Class</span>";

				}


			}
			array_push($list,$d);
			

			
		}

        $data['name']=$this->session->userdata('name');
        $data['info']=$list;
        $data['title']="user";
		$this->load->view('template/header',$data);
		$this->parser->parse('user/v_user',$data);
		$this->load->view('template/footer');

	}

	public function addMakeup()
	{

		if($this->input->get_post('buttonAdd'))
			{
				$this->form_validation->set_message('required', 'Please enter %s');
				
	             if($this->form_validation->run() == false)
			     {
			     	$data=$this->m_login->getAll();
		
					$list=array();
					foreach ($data as $d) {

						for($i=0;$i<=12;$i=$i+.5)
						{
							if($d['t'.$i]=="R")
							{
								$d['t'.$i]="<div class='pius'>Regular Class</div>";
							}
							else if($d['t'.$i]=="M")
							{
								$d['t'.$i]="<div class='makeUp'>Make Up</div>";
							}
							else
							{
								$d['t'.$i]="<span class='clickableandDraggable' data-cell='$i' >No Class</span>";

							}


						}
						array_push($list,$d);
						

						
					}

					$data['info']=$list;
	                $data['name']=$this->session->userdata('name');
	                $data['dayslist']=$this->m_login->getDays();
				    $data['title']="User";
					$this->load->view('template/header',$data);
					$this->parser->parse('user/v_addmakeup',$data);
					$this->load->view('template/footer');
				
			     }
			     else
			     {
			     	$data['day_of_week'] = $this->input->get_post('day_of_week');
			     	$data['class_id']=$this->session->userdata('id');
			     	$s_time  = date("H:i", strtotime($this->input->get_post('stime')));
			     	$data['stime'] = $s_time;
                    $e_time  = date("H:i", strtotime($this->input->get_post('etime')));
				    $data['etime'] = $e_time;
				    $data['room'] = $this->input->get_post('room');
				    $data['status'] = $this->input->get_post('status');
				    $data['date'] = $this->input->get_post('date');
				    //var_dump($data);die();


				    $this->m_login->addMakeup($data);
				    redirect('http://localhost/atp3/User/viewHistory', 'refresh');

				    

			     }

			}

		    else
		    {
			    	$data=$this->m_login->getAll();
		
					$list=array();
					foreach ($data as $d) {

						

						for($i=0;$i<=12;$i=$i+.5)
						{
							if($d['t'.$i]=="R")
							{
								$d['t'.$i]="<div class='pius'>Regular Class</div>";
							}
							else if($d['t'.$i]=="M")
							{
								$d['t'.$i]="<div class='makeUp'>Make Up</div>";
							}
							else
							{
								$d['t'.$i]="<span class='clickableandDraggable' data-cell='$i' >No Class</span>";

							}


						}
						array_push($list,$d);
						

						
					}

			   
			    $data['info']=$list;
		    	//var_dump($this->session->userdata('id'));die();
			    $data['name']=$this->session->userdata('name');
			    $data['dayslist']=$this->m_login->getDays();
			    $data['title']="User";
				$this->load->view('template/header',$data);
				$this->parser->parse('user/v_addmakeup',$data);
				$this->load->view('template/footer');
		   }
	}

	public function viewHistory()
	{ 
       

            $data['name']=$this->session->userdata('name');

		
            $data['class_id']=$this->session->userdata('id');
		    $data['info']=$this->m_login->getUserBooking($data);     
				
		       //var_dump($data['info']);die();
			$data['title']="User";
			$this->load->view('template/header',$data);
			$this->parser->parse('user/v_booking',$data);
			$this->load->view('template/footer');

	}
	public function checkSelected1($str)
	{ 
		//var_dump($str);
		
		if($str!=null)
		{

			return true;
		}
		else
		{
			$this->form_validation->set_message('checkSelected1', 'Please select days');
			return false;
		}
	}
}