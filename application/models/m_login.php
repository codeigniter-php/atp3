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
		 //$sql = "select  c.class_name,c.teacher_name,ct.s_time,ct.status,ct.id,ct.e_time,ct.room_no,dt.days_in_week FROM class c,class_time ct, day_of_week dt where c.class_id=ct.class_id and ct.day_of_week=dt.days_id";
		$sql="select * from class_schedule a,day_of_week b where a.days_id=b.id";
		 $this->load->database();
		 $result = $this->db->query($sql);
		 return $result->result_array();

	}

	public function getDays()
	{
		 $sql = "SELECT id,days_id, days_in_week FROM day_of_week";
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
		$day=$data['day_of_week'];
		$room=$data['room'];
		
		
        $col=array();
        	foreach ($data['insert'] as $b) {
        		$col[]=$b;
        	}
        $count=count($col);
        //var_dump($count);die;
        if($count==2)
        {
        	$sql="UPDATE `class_schedule` SET `$col[0]` = 'R',`$col[1]` = 'R' WHERE days_id='$day' AND room='$room'";
        	$this->load->database();
		    $this->db->query($sql);
        }
        elseif ($count==3) {
        	$sql="UPDATE `class_schedule` SET `$col[0]` = 'R',`$col[1]` = 'R',`$col[2]` = 'R' WHERE days_id='$day' AND room='$room'";
        	$this->load->database();
		    $this->db->query($sql);
        }
        elseif ($count==4) {
        	$sql="UPDATE `class_schedule` SET `$col[0]` = 'R',`$col[1]` = 'R',`$col[2]` = 'R',`$col[3]` = 'R' WHERE days_id='$day' AND room='$room'";
        	$this->load->database();
		    $this->db->query($sql);
        }
        elseif ($count==5) {
        	$sql="UPDATE `class_schedule` SET `$col[0]` = 'R',`$col[1]` = 'R',`$col[2]` = 'R',`$col[3]` = 'R',`$col[4]` = 'R' WHERE days_id='$day' AND room='$room'";
        	$this->load->database();
		    $this->db->query($sql);
        }

        elseif ($count==7) {
        	$sql="UPDATE `class_schedule` SET `$col[0]` = 'R',`$col[1]` = 'R',`$col[2]` = 'R',`$col[3]` = 'R',`$col[4]` = 'R',`$col[5]` = 'R',`$col[6]` = 'R' WHERE days_id='$day' AND room='$room'";
        	$this->load->database();
		    $this->db->query($sql);
        }

		// $sql = "UPDATE $data['insert'] SET $data['insert']='R' WHERE room='401'";
		// $this->load->database();
		// $this->db->query($sql);

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
         $sql = "select d.days_in_week,c.class_name, c.teacher_name, ct.class_id,ct.id,ct.s_time,ct.booking_status , ct.e_time,ct.room_no,ct.date FROM class c,booking ct,day_of_week d where c.class_id=ct.class_id and d.id=ct.days_id";
		 $this->load->database();
		 $result = $this->db->query($sql);
		 return $result->result_array();


	}
	public function change($id)
	{  
	    $data1="";
		$datesql="select date,s_time,e_time,room_no,days_id from booking where id='$id'";
		$this->load->database();
		$result = $this->db->query($datesql);
		$data1=$result->row_array();
		//var_dump($data["date"]);
		
		        $data['stime'] = $data1["s_time"];
			    $data['etime'] = $data1["e_time"];
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
                $data['room']=$data1["room_no"];
                $data['day_of_week'] =$data1["days_id"];

		

		$val='Active('.$data1["date"].')';

		

		$sql="UPDATE booking SET booking_status='$val' WHERE id='$id'";
		$this->load->database();
		$this->db->query($sql);

				$day=$data['day_of_week'];
				$room=$data['room'];
				
				
		        $col=array();
		        	foreach ($data['insert'] as $b) {
		        		$col[]=$b;
		        	}
		        $count=count($col);
		        //var_dump($count);die;
		        if($count==2)
		        {
		        	$sql="UPDATE `class_schedule` SET `$col[0]` = 'M',`$col[1]` = 'M' WHERE days_id='$day' AND room='$room'";
		        	$this->load->database();
				    $this->db->query($sql);
		        }
		        elseif ($count==3) {
		        	$sql="UPDATE `class_schedule` SET `$col[0]` = 'M',`$col[1]` = 'M',`$col[2]` = 'M' WHERE days_id='$day' AND room='$room'";
		        	$this->load->database();
				    $this->db->query($sql);
		        }
		        elseif ($count==4) {
		        	$sql="UPDATE `class_schedule` SET `$col[0]` = 'M',`$col[1]` = 'M',`$col[2]` = 'M',`$col[3]` = 'M' WHERE days_id='$day' AND room='$room'";
		        	$this->load->database();
				    $this->db->query($sql);
		        }
		        elseif ($count==5) {
		        	$sql="UPDATE `class_schedule` SET `$col[0]` = 'M',`$col[1]` = 'M',`$col[2]` = 'M',`$col[3]` = 'M',`$col[4]` = 'M' WHERE days_id='$day' AND room='$room'";
		        	$this->load->database();
				    $this->db->query($sql);
		        }

		        elseif ($count==7) {
		        	$sql="UPDATE `class_schedule` SET `$col[0]` = 'M',`$col[1]` = 'M',`$col[2]` = 'M',`$col[3]` = 'M',`$col[4]` = 'M',`$col[5]` = 'M',`$col[6]` = 'M' WHERE days_id='$day' AND room='$room'";
		        	$this->load->database();
				    $this->db->query($sql);
		        }
                               



	}

	public function getUserBooking($data)
	{

		  $sql = "select d.days_in_week,c.class_name,c.teacher_name,ct.s_time,ct.booking_status,ct.e_time,ct.room_no,ct.date FROM class c,booking ct,users u,day_of_week d where d.id=ct.days_id and c.class_id=ct.class_id and u.id=c.class_id and c.class_id='$data[class_id]'";
		 $this->load->database();
		 $result = $this->db->query($sql);
		 return $result->result_array();
	}

	public function addMakeup($data)
	{
         
         $sql="INSERT INTO booking VALUES(null,'$data[class_id]',$data[day_of_week],'$data[stime]','$data[etime]','$data[room]','$data[status]','$data[date]')";
         $this->load->database();
		 $this->db->query($sql);


	}

	public function addRoom($data)
	{
		 $sql="INSERT INTO class_schedule VALUES(null,$data[day_of_week],'$data[room]',null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null)";
         $this->load->database();
		 $this->db->query($sql);

	}


}