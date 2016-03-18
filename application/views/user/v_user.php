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
		      <li role="presentation" class="active"><a href="<?php echo base_url();?>User/index">Class Schedule</a></li>
		       <li role="presentation"><a href="<?php echo base_url();?>User/addMakeup">Add Make Up Class</a></li>
		      <li role="presentation"><a href="<?php echo base_url();?>User/viewHistory">View Make Up History</a></li>
		      
		    </ul>
		</div>
		<div class="col-lg-10">
			<div class="row">
				<div class="col-lg-10">
					<div id='results'>
					 <h3>Regular Class Routine</h3>
					 <a href="<?php echo base_url();?>User/addMakeup"  class="btn btn-primary">
				          Request Make Up
				        </a>
				             <table class="table" id="myTable">
				             <thead>
				                   <tr>
				                   		<th>Course Name</th>
				                   		<th>Teacher Name</th>
				                   		<th>Start Time</th>
				                   		<th>End Time</th>
				                   		<th>Room No</th>
				                   		<th>Days In Week</th>
				                   		<th>Status</th>
				                   		
				                   		
				                   </tr>
				              </thead>
				              <tbody>
									{info}
									<tr>
										<td>{class_name}</td>
										<td>{teacher_name}</td>
										<td>{s_time}</td>
										<td>{e_time}</td>
										<td>{room_no}</td>
										<td>{days_in_week}</td>
										<td>{status}</td>
											
									</tr>
									{/info}
								</tbody>
						    </table>
		             </div>
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

