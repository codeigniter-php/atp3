<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
           'Login/check_login' => array(
					array(
							'field' => 'email',
							'label' => 'email',
							'rules' => 'required|valid_email'
						 ),
					array(
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required'
						 )
					
					),
           'Admin/add' => array(
           	        array(
							'field' => 'room',
							'label' => 'room',
							'rules' => 'required'
						 ),
           	        /*array(
							'field' => 'course_name',
							'label' => 'course_name',
							'rules' => 'callback_checkSelected'
						 ),*/
           	        array(
							'field' => 'stime',
							'label' => 'start time',
							'rules' => 'required'
						 ),
           	        array(
							'field' => 'etime',
							'label' => 'end time',
							'rules' => 'required'
						 ),
           	        array(
							'field' => 'day_of_week',
							'label' => 'select days',
							'rules' => 'callback_checkSelected1'
						 )
					


           	       ),
             'Admin/addFaculty' =>array(
           	        array(
							'field' => 'name',
							'label' => 'name',
							'rules' => 'required'
						 ),
           	        array(
							'field' => 'email',
							'label' => 'email',
							'rules' => 'required|valid_email'
						 ),
           	        array(
							'field' => 'password',
							'label' => 'password',
							'rules' => 'required|min_length[6]|alpha_numeric'
						 ),
           	        array(
							'field' => 'type',
							'label' => 'type',
							'rules' => 'callback_checkSelected2'
						 ),
           	        array(
							'field' => 'class_name',
							'label' => 'Course name',
							'rules' => 'required'
						 )

           	       ),
                'User/addMakeup' =>array(
                	array(
							'field' => 'day_of_week',
							'label' => 'select days',
							'rules' => 'callback_checkSelected1'
						 ),
           	        array(
							'field' => 'stime',
							'label' => 'start time',
							'rules' => 'required'
						 ),
           	        array(
							'field' => 'etime',
							'label' => 'end time',
							'rules' => 'required'
						 ),
           	        array(
							'field' => 'date',
							'label' => 'date',
							'rules' => 'required'
						 ),
           	        array(
							'field' => 'room',
							'label' => 'Room',
							'rules' => 'required'
						 )
					


           	       ),
                'Admin/addRoom' =>array(
           	        array(
							'field' => 'day_of_week',
							'label' => 'select days',
							'rules' => 'callback_checkSelected1'
						 ),
           	         array(
							'field' => 'room',
							'label' => 'Room',
							'rules' => 'required'
						 )
           	        

           	       ),







               );
