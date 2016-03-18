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
										<td>{days_in_week}</td>
										<td>{room}</td>
										<td>{t1}</td>
										<td>{t2}</td>
										<td>{t3}</td>
										<td>{t4}</td>
										<td>{t5}</td>
										<td>{t6}</td>
										<td>{t7}</td>
										<td>{t8}</td>
										<td>{t9}</td>
										<td>{t10}</td>
										<td>{t11}</td>
										<td>{t12}</td>
										<td>{t13}</td>
										<td>{t14}</td>
										<td>{t15}</td>
										<td>{t16}</td>
										<td>{t17}</td>
										<td>{t18}</td>
										<td>{t19}</td>
										<td>{t20}</td>
										<td>{t21}</td>
										<td>{t22}</td>
										<td>{t23}</td>
										<td>{t24}</td>
										<td>{t25}</td>

										
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

