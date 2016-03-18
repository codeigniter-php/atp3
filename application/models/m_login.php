<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

   public function logininfo($email,$password){
        $sql = "SELECT email, password,name,type,id FROM users WHERE email='$email' AND password='$password'";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->row_array();

	}
	public function getAll()
	{
		 $sql = "select  c.class_name,c.teacher_name,ct.s_time,ct.status,ct.id,ct.e_time,ct.room_no,dt.days_in_week FROM class c,class_time ct, day_of_week dt where c.class_id=ct.class_id and ct.day_of_week=dt.days_id";
		 $this->load->database();
		 $result = $this->db->query($sql);
		 return $result->result_array();

	}

	public function getDays()
	{
		 $sql = "SELECT days_id, days_in_week FROM day_of_week";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getCourse()
	{
		$sql = "SELECT * FROM class";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->result_array();

	}
	public function insertCourse($data)
	{
		$sql = "INSERT INTO class_time VALUES (null, '$data[stime]', '$data[etime]', '$data[day_of_week]','$data[room]','$data[course_name]','$data[status]')";
		$this->load->database();
		$this->db->query($sql);

	}
	public function delete($id)
	{
		$sql = "DELETE FROM class_time WHERE id='$id'";
		$this->load->database();
		$this->db->query($sql);
	}
	public function addFaculty($data)
	{
		$sql="INSERT INTO class VALUES(null,'$data[name]','$data[class_name]')";
		$sql1="INSERT INTO users VALUES(null,'$data[email]','$data[password]','$data[name]','$data[type]')";
		$this->load->database();
		$this->db->query($sql);
		$this->db->query($sql1);

	}


	public function getBooking()
	{
         $sql = "select c.class_name,c.teacher_name,ct.class_id,ct.s_time,ct.booking_status,ct.e_time,ct.room_no,ct.date FROM class c,booking ct where c.class_id=ct.class_id";
		 $this->load->database();
		 $result = $this->db->query($sql);
		 return $result->result_array();


	}
	public function change($class_id)
	{  
	    $data="";
		$datesql="select date from booking where class_id='$class_id'";
		$this->load->database();
		$result = $this->db->query($datesql);
		$result->row_array();
		foreach ($result->row_array() as $date)
		{
			$data=$date;
		}

		$val='Active('.$data.')';

		

		$sql="UPDATE booking SET booking_status='$val' WHERE class_id='$class_id'";
		$this->load->database();
		$this->db->query($sql);

	}

	public function getUserBooking($data)
	{

		  $sql = "select DISTINCT c.class_name,c.teacher_name,ct.class_id,ct.s_time,ct.booking_status,ct.e_time,ct.room_no,ct.date FROM class c,booking ct,users u where c.class_id=ct.class_id and c.class_id='$data[class_id]'";
		 $this->load->database();
		 $result = $this->db->query($sql);
		 return $result->result_array();
	}

	public function addMakeup($data)
	{
         
         $sql="INSERT INTO booking VALUES(null,'$data[class_id]','$data[stime]','$data[etime]','$data[room]','$data[status]','$data[date]')";
         $this->load->database();
		 $this->db->query($sql);


	}


}