<div class="container">
	<div class="row">
	       <div class="col-lg-8">
	       	<img class="banner-img" src="<?php echo base_url();?>assets/img/aiub1.png?sz=12"
                    alt="">
	       </div>
	       <div class="col-lg-4">
				
			</div>
	</div>
	<div class="row" style="margin-top: 10px;">
		<div class="col-lg-2">
			<ul class="nav nav-pills nav-stacked">
		      <li role="presentation" ><a href="<?php echo base_url();?>Admin/index">Class Schedule</a></li>
		      <li role="presentation" class="active"><a href="<?php echo base_url();?>Admin/add">Add Schedule</a></li>
		      <li role="presentation"><a href="<?php echo base_url();?>Admin/addFaculty">Add Faculty</a></li>
		      <li role="presentation"><a href="<?php echo base_url();?>Admin/booking">View Booking</a></li>
		    </ul>
		</div>
		<div class="col-lg-10">
			<div class="row">
				<div class="col-lg-10">
				<div class="row">
					<table class="table" id="myTable">
				            <thead>
				                   <tr>
				                   		
				                   		<th>Day</th>
				                   		<th>Room</th>
				                   		<th>8:00</th>
				                   		<th>8:30</th>
				                   		<th>9:00</th>
				                   		<th>9:30</th>
				                   		<th>10:00</th>
				                   		<th>10:30</th>
				                   		<th>11:00</th>
				                   		<th>11:30</th>
				                   		<th>12:00</th>
				                   		<th>12:30</th>
				                   		<th>01:00</th>
				                   		<th>01:30</th>
				                   		<th>02:00</th>
				                   		<th>02:30</th>
				                   		<th>03:00</th>
				                   		<th>03:30</th>
				                   		<th>04:00</th>
				                   		<th>04:30</th>
				                   		<th>05:00</th>
				                   		<th>05:30</th>
				                   		<th>06:00</th>
				                   		<th>06:30</th>
				                   		<th>07:00</th>
				                   		<th>07:30</th>
				                   		<th>8:00</th>
				                   		
				                   		
				                   </tr>
				              </thead>
				              <tbody>
									{info}
									<tr>
										<td><span class='clickable' data-cell='{id}' >{days_in_week}</span></td>
										<td>{room}</td>
										<td>{t0}</td>
										<td>{t0.5}</td>
										<td>{t1}</td>
										<td>{t1.5}</td>
										<td>{t2}</td>
										<td>{t2.5}</td>
										<td>{t3}</td>
										<td>{t3.5}</td>
										<td>{t4}</td>
										<td>{t4.5}</td>
										<td>{t5}</td>
										<td>{t5.5}</td>
										<td>{t6}</td>
										<td>{t6.5}</td>
										<td>{t7}</td>
										<td>{t7.5}</td>
										<td>{t8}</td>
										<td>{t8.5}</td>
										<td>{t9}</td>
										<td>{t9.5}</td>
										<td>{t10}</td>
										<td>{t10.5}</td>
										<td>{t11}</td>
										<td>{t11.5}</td>
										<td>{t12}</td>

										
									</tr>
									{/info}
								</tbody>
						    </table>
				</div>
				<h3>Add Class Schedule</h3>
					<form method="post">
							<table class="table table-bordered table-striped table-highlight">
							<tr>
							  		<td>Day</td>
							  		<td>
							  		<select class="form-control" name="day_of_week">
							  		    <option value="" selected="">select days</option>
							  			{dayslist}
							  			<option value="{id}">{days_in_week}</option>
							  			{/dayslist}
							  		</select>
							  		<div class="error1"><?php echo form_error('day_of_week'); ?>
							  		</td>
	  	                        </tr>
								<!--<tr>
							  		<td>Select Course</td>
							  		<td>
							  		<select class="form-control" name="course_name">
							  		    <option value="" selected="">select course</option>
							  			{courselist}
							  			<option value="{class_id}">{class_name}</option>
							  			{/courselist}
							  		</select>
							  		<div class="error1"><?php //echo form_error('course_name'); ?></div>
							  		</td>
	  	                        </tr>-->
								<tr>
									<td>Start Time</td>
									<td><input class="form-control input-md" type="text" name="stime" id="time" value="<?php echo set_value('stime'); ?>"/>
									<div class="error1"><?php echo form_error('stime'); ?></div></td>

								</tr>
								<tr>
									<td>End Time</td>
									<td><input class="form-control input-md" type="text" name="etime" id="time1" value="<?php echo set_value('etime'); ?>" />
									<div class="error1"><?php echo form_error('etime'); ?></div></td>
								</tr>
								
								<tr>
									<td>Room No</td>
									<td><input class="form-control input-md" type="text" name="room"  value="<?php echo set_value('room'); ?>" />
									<div class="error1"><?php echo form_error('room'); ?></div></td>
								</tr>
								<tr>
									<td></td>
									<td align="right"><input  class="btn btn-primary" type="submit" name="buttonSave" value="Save" /></td>
								</tr>
							</table>
							<input type="hidden" name="status"  value="regular"/>
	                </form>

				</div>
				<div class="col-lg-2">
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					     <p class="navbar-text navbar-right"><span class="welcome">Welcome, <?php echo $name; ?></span> <a href="<?php echo base_url();?>Login/logout"  class="btn btn-primary">
				          <span class="glyphicon glyphicon-log-out"></span> Log out
				        </a>
			        </div>
				</div>
				
			</div>
			
			
		</div>
		
	</div>
</div>

