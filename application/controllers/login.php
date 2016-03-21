<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
   
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function index()
	{

		$data['error']="";
		$data['title']="Login";
		$this->load->view('template/header', $data);
		$this->load->view('login/v_login');
		$this->load->view('template/footer');
	}
	public function check_login()
	{
		
		$this->form_validation->set_message('required', 'Please enter your %s');
		if($this->form_validation->run() == false)
		{
			$this->index();
			
		}
		else
		{
			 $errorUser="";
			 $email= $this->input->post('email');
			 $password= $this->input->post('password');
			 $info=$this->m_login->logininfo($email,$password);
			 if($info!=null)
			 {
				 if($info['type']=='admin')
				 {
				 	// $this->load->library('../controllers/admin');
		            //$this->admin->index();
                    $userSession = array(
                  
	                   'name'     => $info['name'],
	                   'logged_in' => TRUE,
	                   'type' =>'admin'
                     );

                    $this->session->set_userdata($userSession);
				 	redirect('admin');

				 }
				 elseif($info['type']=='teacher')
				 {
				 	$userSession = array(
                  
	                   'name'     => $info['name'],
	                   'id'       => $info['id'],
	                   'logged_in' => TRUE,
	                   'type' =>'teacher'
                     );

                    $this->session->set_userdata($userSession);
				 	redirect('user');
				 }
			 }
			 else
			 {
			 	$data['error']="Email/Password Incorrect";
			 	$data['title']="Login";
		        $this->load->view('template/header', $data);
		        $this->load->view('login/v_login');
		        $this->load->view('template/footer');
			 }
		}

	}

	function logout()
	{

      $this->session->sess_destroy();
      $this->index();
	}
	
}

