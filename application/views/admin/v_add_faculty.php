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
		<div class="col-lg-3">
			<ul class="nav nav-pills nav-stacked">
		      <li role="presentation" ><a href="<?php echo base_url();?>Admin/index">Class Schedule</a></li>
		      <li role="presentation" ><a href="<?php echo base_url();?>Admin/addRoom">Add Room</a></li>
		      <li role="presentation" ><a href="<?php echo base_url();?>Admin/add">Add Schedule</a></li>
		      <li role="presentation" class="active"><a href="<?php echo base_url();?>Admin/addFaculty">Add Faculty</a></li>
		      <li role="presentation" ><a href="<?php echo base_url();?>Admin/booking">View Booking</a></li>
		    </ul>
		</div>
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-9">
				<h3>Add Faculty for class</h3>
					<form method="post">
							<table class="table table-bordered table-striped table-highlight">
								
								<tr>
									<td>Teachers Name</td>
									<td><input class="form-control input-md" type="text" name="name"value="<?php echo set_value('name'); ?>"/>
									<div class="error1"><?php echo form_error('name'); ?></div></td>

								</tr>
								<tr>
									<td>Email</td>
									<td><input class="form-control input-md" type="text" name="email"value="<?php echo set_value('email'); ?>"/>
									<div class="error1"><?php echo form_error('email'); ?></div></td>

								</tr>
								
								<tr>
									<td>Password</td>
									<td><input class="form-control input-md" type="password" name="password"/>
									<div class="error1"><?php echo form_error('password'); ?></div></td>
								</tr>
								<tr>
							  		<td>Type</td>
							  		<td>
							  		<select class="form-control" name="type">
							  		    <option value="" selected="">Select Type</option>
							  			
							  			<option value="admin">Make Admin</option>
							  			<option value="teacher">Teacher</option>
							  			
							  		</select>
							  		<div class="error1"><?php echo form_error('type'); ?>
							  		</td>
	  	                        </tr>
	  	                        <tr>
									<td>Course Name</td>
									<td><input class="form-control input-md" type="text" name="class_name" value="<?php echo set_value('class_name'); ?>"/>
									<div class="error1"><?php echo form_error('class_name'); ?></div></td>
								</tr>
								<tr>
									<td></td>
									<td align="right"><input  class="btn btn-primary" type="submit" name="buttonAdd" value="Save" /></td>
								</tr>
							</table>
	                </form>

				</div>
				<div class="col-lg-3">
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

