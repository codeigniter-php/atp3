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

			for($i=1;$i<26;$i++)
			{
				if($d['t'.$i]=="R")
				{
					$d['t'.$i]="R";
				}
				else
				{
					$d['t'.$i]="N";

				}


			}
			array_push($list,$d);
			

			
		}

        $data['name']=$this->session->userdata('name');
        $data['info']=$list;
        
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
	                $data['name']=$this->session->userdata('name');
				    $data['title']="User";
					$this->load->view('template/header',$data);
					$this->load->view('user/v_addmakeup');
					$this->load->view('template/footer');
				
			     }
			     else
			     {
			     	$data['class_id']=$this->session->userdata('id');
			     	$data['stime'] = $this->input->get_post('stime');
				    $data['etime'] = $this->input->get_post('etime');
				    $data['room'] = $this->input->get_post('room');
				    $data['status'] = $this->input->get_post('status');
				    $data['date'] = $this->input->get_post('date');


				    $this->m_login->addMakeup($data);
				    redirect('http://localhost/atp3/User/viewHistory', 'refresh');

				    

			     }

			}

		    else
		    {
		    	//var_dump($this->session->userdata('id'));die();
			    $data['name']=$this->session->userdata('name');
			    $data['title']="User";
				$this->load->view('template/header',$data);
				$this->load->view('user/v_addmakeup');
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
}