	<style>
		h2{
			font-size:1.5em;
		}
		.btnstyle{
			padding: 3px 8px;
			margin-left: 925px;
			margin-top: -37px;
		}
		table.dataTable thead th, table.dataTable thead td {
			padding:4px 18px;
			border-bottom: 1px solid #111;
		}
		table.dataTable tbody th, table.dataTable tbody td {
			padding: 0px 0px !important;
		}
		table.dataTable.no-footer tr td {
			border-top: 1px solid #eee !important;
			border-right: 1px solid #eee !important;
			border-bottom: 1px solid #eee !important;
			border-left: 1px solid transparent !important;
		}
		td {
			text-align: left;
		font-size: 12px; 
		 padding: 0px;
		}
		th {
		padding: 0px;
			text-align: center;
			font-size: 12px;
			/*background-color: white;*/
		}
		thead {
			border-bottom: 1px solid #eeeeee;
			border: 1px solid #eeeeee;
			color: #303f9f;
			background:#6c477d;
			color:#fff;
		}
		.dataTables_wrapper .dataTables_filter {
			float: right;
			text-align: left;
		}
		input[type=search]{
			background-color: transparent;
			border: 1px solid #eee;
			border-radius: 7;
			width: 55%;
			font-size: 1.5rem;
			margin: 0 0 15px 0;
			padding: 1px;
			box-shadow: #ccc;
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box;
			transition: all .3s;
		}
		body{
			background-color: #fff;
		}
		table.dataTable.display tbody tr.odd>.sorting_1, table.dataTable.order-column.stripe tbody tr.odd>.sorting_1 {
			background-color: transparent !important;
		}
		b{
			font-size:1.1em;
		}
		label{
			font-weight:normal;
		}
		.odd .sorting_1 .color{
			border-left:2px solid #ff00D0 !important;
			padding:5px 0 0 15px;
			margin:2px;
		}
		.even .sorting_1 .color{
			border-left:2px solid #ff88A0 !important;
			padding:5px 0 0 15px;
			margin:2px;
		}
		p {
			margin: 0 0 3px;
		}
		.calendar-icon{
			font-size:13px !important;
		}
		p > .calendar-icon{
			text-align:center !important;
		}
		.first-span{
			margin-right:10px;
		}
		/* Hide header from DataTables */
		
		/*.row th{
			display:none;
		}*/
		h2 {
			/* font-size: 3.56rem; */
			/* line-height: 3.916rem; */
			margin: 0 !important;
		}
		.reqid,.machinestatus,.cusname{
				display:block !important;
			}
			.respan,.redate{
				display:none !important;
			}
		@media only screen and (min-width:320px) and (max-width:768px){
			.coloricon {
				background-image: url(http://192.168.1.55/service/assets/images/icon.png);
				height: 30px;
				width: 30px;
				background-repeat: no-repeat;
				background-size: cover;
				background-color: transparent;
				position: relative;
				left: 385px !important;
			}
			.reqid,.machinestatus,.cusname{
				display:none !important;
			}
			.respan,.redate{
				display:block !important;
			}
			.row th{
				display:none;
			}
			.odd .color{
				border-left:2px solid #ddd !important;
				padding:5px 0 0 15px;
				margin:2px;
			}
			.even .color{
				border-left:2px solid #eaeaea !important;
				padding:5px 0 0 15px;
				margin:2px;
			}
			h2{
				font-size:1.3em;
			}
			.saturate{
				width: 200px !important;
				height: 50px;
				color: #fff;
			}
			input[type=search] {
				background-color: transparent;
				border: 1px solid #eee;
				border-radius: 7;
				width: 350px !important;
				font-size: 1.5rem;
				margin: 0 0 15px 0;
				/* padding: 1px; */
				box-shadow: #ccc;
				-webkit-box-sizing: content-box;
				-moz-box-sizing: content-box;
				box-sizing: content-box;
				transition: all .3s;
				position: relative;
				color:#000;
			}
			.dataTables_wrapper .dataTables_filter {
				float: none;
				text-align: left;
			}
			#data-table-simple_filter label {
				font-size: 15px !important;
				color: transparent !important;
			}
			
			
			
		}
		.dataTables_filter label{
			color:#6C217E !important;
		}
		.reqid a{
			color:#6C217E !important;
		}
	</style>
	<section id="content">
        <div class="container">
			<div class="section">
				<h2>Work In Progress List</h2>
				<hr>
				<!--DataTables example-->
				<div id="table-datatables">
			   
					<div class="row">
						<div class="col-xs-12 table-responsive">
							<table id="data-table-simple" class="display">
								<thead>
									<tr>
										<th>Request Id</th>
										<th class="row2">Customer Name</th>
										<th>Machine Status</th>
										<!--<th>Service Type</th>-->
										<!--<th>Requested Date</th>							 
										<th>Assign To</th>
										<th>Site</th>
										<th>Location</th>-->
										<!--<th>Problem</th>
										<th>Status</th>-->
									</tr>
								</thead>
					 
								<tbody>
									<?php foreach($workin_prog_list as $key){
										$reid= sprintf("%05d", $key->id)
										?> 
									<tr>
										<td class="reqid">
											<a href="<?php echo base_url(); ?>work_inprogress/workin_prog_status/<?php echo $reid; ?>"><?php echo $key->request_id; ?></a>
										</td>
										
										<td>
											<div class="color">
											<p class="cusname"><?php echo $key->customer_name; ?></p>
											<p class="respan">
												<b><?php echo $key->customer_name; ?></b>
												<p class="respan">
													<span class="first-span">
														<a href="<?php echo base_url(); ?>work_inprogress/workin_prog_status/<?php echo $reid; ?>"><?php echo $key->request_id; ?></a>
													</span>
													<span class="first-span">
														<a href="<?php echo base_url(); ?>work_inprogress/workin_prog_status/<?php echo $reid; ?>">Model 123456789</a>
													</span>
												</p>
												<p class="respan">
													<?php foreach($service_req_list1 as $key1){
													if($key1->request_id==$key->id){
														echo $key1->machine_status; 
														
														 }  }?>
												</p>
											</p>
											</div>
										</td>
										<!--<td><?php foreach($service_req_list1 as $key1){
													if($key1->request_id==$key->id){ echo $key1->model;} } ?></td>-->
										<td>
											<p class="machinestatus"><?php foreach($service_req_list1 as $key1){
													if($key1->request_id==$key->id){
														echo $key1->machine_status; 
														
														 }  }?>
											</p>
											<p class="redate">
												<i class="fa fa-calendar calendar-icon"></i>
											</p>
											<p class="redate">
												07 Feb'17
											</p>
										</td>
										<!--<td><?php foreach($service_req_listforserviceCat as $servicecatkey){
													if($servicecatkey->request_id==$key->id){ echo $servicecatkey->service_category;} } ?></td>-->
										<!--<td><?php echo $key->request_date; ?></td>-->
										
										<!--<td><?php foreach($service_req_listforEmp as $key2){
													if($key2->request_id==$key->id){ echo $key2->emp_name; } } ?></td>
										<td><?php foreach($service_req_list1 as $key1){
													if($key1->request_id==$key->id){ echo $key1->site; } } ?></td>
										<td><?php foreach($service_req_list1 as $key1){
													if($key1->request_id==$key->id){ echo $key1->service_loc; } } ?></td>-->
										<!--<td><?php foreach($service_req_listforProb as $servprobkey2){
													if($servprobkey2->request_id==$key->id){ echo $servprobkey2->prob_category; } } ?></td>-->
										<!--<td>Work In Progress</td>-->
								
									</tr>
									<?php } ?>	   
								</tbody>
							</table>
						</div>
					</div>
				</div> 
				<br>
				<div class="divider"></div> 
			</div>
        </div>
    </section>

	</div>

	</div>

	
		<!--materialize js-->
		<script src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
		<!--prism-->
		<script src="<?php echo base_url(); ?>assets/js/prism.js"></script>
		<!--scrollbar-->
		<script src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<!-- data-tables -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
		<!-- chartist -->
			<!--<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    
		<script src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>  --> 
		<!--plugins.js - Some Specific JS codes for Plugin Settings-->
		<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$(function(){
				$('.dataTables_filter input').attr("placeholder", "Search");
				$('.dataTables_filter input').focus(function(){
					$(this).attr("placeholder", "");
				});
				$('.dataTables_filter input').focusout(function(){
					$(this).attr("placeholder", "Search");
				});
			});
		</script>
	</body>
</html>