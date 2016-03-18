<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
   
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
				else
				{
					$d['t'.$i]="No Class";

				}


			}
			array_push($list,$d);
			

			
		}

       $data['name']=$this->session->userdata('name');
       $data['info']=$list;
        
	 
        //var_dump($data);die();
		$data['title']="Admin";
		$this->load->view('template/header',$data);
		$this->parser->parse('admin/v_admin',$data);
		$this->load->view('template/footer');
	}
	public function add()
	{
		if($this->input->get_post('buttonSave'))
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
							else
							{
								$d['t'.$i]="No Class";

							}


						}
						array_push($list,$d);
						

						
					}

			       $data['name']=$this->session->userdata('name');
			       $data['info']=$list;
				   $data['dayslist']=$this->m_login->getDays();
					//$data['courselist']=$this->m_login->getCourse();
					//var_dump($data['dayslist']);die();
				   $data['title']="Admin";
				   $this->load->view('template/header',$data);
				   $this->parser->parse('admin/v_add_schedule',$data);
				   $this->load->view('template/footer');
			
		     }
		     else
		     {
		     	//$data['course_name'] = $this->input->get_post('course_name');
		     	//$data['day_of_week'] = $this->input->get_post('day_of_week');
			    $data['stime'] = $this->input->get_post('stime');
			    $data['etime'] = $this->input->get_post('etime');
			    $start_time=date("H:i", strtotime($data['stime']));
			    $end_time=date("H:i", strtotime($data['etime']));
			    $num1=(float)str_replace(':','.',$start_time);
			    $num2=(float)str_replace(':','.',$end_time);
			    $reminder1=fmod($num1,.5);
			    $reminder2=fmod($num2,.5);
			    if($reminder1!=0)
			    {
			    	$num1+=.20;
			    }
			    elseif ($reminder2!=0) {
			    	$num2+=.20;
			    }
			    $s_time=$num1-8;
			    $e_time=$num2-8;
                $list=array();
                
			    for($i=$s_time;$i<=$e_time;$i=$i+.5)
			    {
			    	$list[]="T$i";
			    	
			    }
             
                $data['insert']=$list;
                $data['room']=$this->input->get_post('room');
                $data['day_of_week'] = $this->input->get_post('day_of_week');

                

			    
			    

			    
			    
			    $this->m_login->insertCourse($data);
			    redirect('http://localhost/atp3/Admin/add', 'refresh');
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
						else
						{
							$d['t'.$i]="No Class";

						}


					}
					array_push($list,$d);
					

					
				}

		    $data['name']=$this->session->userdata('name');
		    $data['info']=$list;
			$data['dayslist']=$this->m_login->getDays();

			$data['courselist']=$this->m_login->getCourse();
			//var_dump($data['dayslist']);die();
			$data['title']="Admin";
			$this->load->view('template/header',$data);
			$this->parser->parse('admin/v_add_schedule',$data);
			$this->load->view('template/footer');
	   }
	}
	public function addFaculty()
	{
			if($this->input->get_post('buttonAdd'))
			{
				$this->form_validation->set_message('required', 'Please enter %s');
				
	             if($this->form_validation->run() == false)
			     {
	                $data['name']=$this->session->userdata('name');
				    $data['title']="Admin";
					$this->load->view('template/header',$data);
					$this->load->view('admin/v_add_faculty');
					$this->load->view('template/footer');
				
			     }
			     else
			     {
			     	$data['name'] = $this->input->get_post('name');
				    $data['email'] = $this->input->get_post('email');
				    $data['password'] = $this->input->get_post('password');
				    $data['type'] = $this->input->get_post('type');
				    $data['class_name'] = $this->input->get_post('class_name');
				    $this->m_login->addFaculty($data);
				    redirect('http://localhost/atp3/Admin/add', 'refresh');

			     }

			}

		    else
		    {
			    $data['name']=$this->session->userdata('name');
			    $data['title']="Admin";
				$this->load->view('template/header',$data);
				$this->load->view('admin/v_add_faculty');
				$this->load->view('template/footer');
		   }
	}

	public function delete($id)
	{
		$this->m_login->delete($id);
		redirect('http://localhost/atp3/Admin/index', 'refresh');


	}
	public function checkSelected($str)
	{ 
		//var_dump($str);
		
		if($str!=null)
		{

			return true;
		}
		else
		{
			$this->form_validation->set_message('checkSelected', 'Please select course');
			return false;
		}
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
	public function checkSelected2($str)
	{ 
		//var_dump($str);
		
		if($str!=null)
		{

			return true;
		}
		else
		{
			$this->form_validation->set_message('checkSelected2', 'Please select type');
			return false;
		}
	}
	public function booking()
	{
           $data['name']=$this->session->userdata('name');
		

			$data['info']=$this->m_login->getBooking();
	       
	        
			
	        //var_dump($data['info']);die();
			$data['title']="Admin";
			$this->load->view('template/header',$data);
			$this->parser->parse('admin/v_booking',$data);
			$this->load->view('template/footer');


	}

	public function change($class_id)
	{
		//var_dump($class_id);die();

       $this->m_login->change($class_id);
       redirect('http://localhost/atp3/Admin/booking', 'refresh');

	}


	
	
}

