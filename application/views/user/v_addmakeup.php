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
		      <li role="presentation" ><a href="<?php echo base_url();?>User/index">Class Schedule</a></li>
		       <li role="presentation" class="active"><a href="<?php echo base_url();?>User/addMakeup">Add Make Up Class</a></li>
		      <li role="presentation"><a href="<?php echo base_url();?>User/viewHistory">View Make Up History</a></li>
		      
		    </ul>
		</div>
		<div class="col-lg-10">
			<div class="row">
				<div class="col-lg-10">
				<h3>Request From</h3>
					<form method="post">
							<table class="table table-bordered table-striped table-highlight">
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
									<td>Date</td>
									<td><input class="form-control input-md" type="text" id="datepicker" name="date"   value="<?php echo set_value('date'); ?>" />
									<div class="error1"><?php echo form_error('date'); ?></div></td>
								</tr>
								<tr>
									<td></td>
									<td align="right"><input  class="btn btn-primary" type="submit" name="buttonAdd" value="Save" /></td>
								</tr>
							</table>
							<input type="hidden" name="status"  value="Pending"/>
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

