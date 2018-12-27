		<style>
			/*.btn {
				position: relative;
				padding: 0px 2px;
				border: 0;
				margin: 0px 1px;
				cursor: pointer;
				border-radius: 2px;
				text-transform: uppercase;
				text-decoration: none;
				color: rgba(255,255,255,.84);
				transition: box-shadow .28s cubic-bezier(.4,0,.2,1);
				outline: none!important;
			}*/
			.btn-sm {
				padding: 8px 10px !important;
				font-size: 12px;
				line-height: 1.5;
				border-radius: 3px;
				font-weight: bold !important;
			}
			.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
				padding: 1px 5px !important;
				line-height: 1.42857143;
				vertical-align: top;
				border-top: 1px solid #ddd !important;
				font-size: 11px;
				font-weight: bold;
			}
			.label {
				display: inline;
				padding: .2em .6em .3em;
				font-size: 81%;
				font-weight: 700;
				line-height: 1;
				color: #fff;
				text-align: center;
				white-space: nowrap;
				vertical-align: baseline;
				border-radius: .25em;
			}
			.fa {
				font-size: 20px !important;
			}
			.fa-globe{
				font-size: 30px !important;
				position:relative;
				top:7px;
			}
			.fa-desktop{
				font-size: 30px !important;
				position:relative;
				top:7px;
			}
			.fa-list-alt{
				font-size: 30px !important;
				position:relative;
				top:7px;
			}
			.fa-cog{
				font-size: 30px !important;
				position:relative;
				top:7px;
			}
			.fa-bell-o{
				font-size: 30px !important;
				position:relative;
				top:7px;
			}
			.fa-truck{
				font-size: 30px !important;
				position:relative;
				top:7px;
			}
			.info-box-icon {
				border-top-left-radius: 2px;
				border-top-right-radius: 0;
				border-bottom-right-radius: 0;
				border-bottom-left-radius: 2px;
				display: block;
				float: left;
				height: 45px;
				width: 36px;
				text-align: center;
				font-size: 45px;
				line-height: 20px;
				background: rgba(0,0,0,0.2);
				position: relative;
				top: 6px;
			}
			.info-box-text {
				display: block;
				font-size: 14px;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				font-weight: bold;
			}
			.tableft{
				padding-left: 10px !important;
			}
			.breadcrumbs-title {
				font-size: 2.2rem;
				line-height: 0rem;
				margin: 0 0 0;
				color:#6C217E;
				font-weight:bold;
			}
			.info-box-text a {
				text-transform: capitalize;
				color: #6C217E;
			}
			.info-box-text {
				text-transform: capitalize;
				color: #6C217E;
			}
			.info-box-number {
				display: block;
				font-weight: bold;
				font-size: 15px;
				color: #73538a;
			}
			.no-margin tbody tr td > a{
				color: #82609c;
			}
			.row {
				margin-left: auto;
				margin-right: auto;
				margin-bottom: 0px;
			}
			.content {
				min-height: 250px;
				padding: 0;
				margin-right: auto;
				margin-left: auto;
				padding-left: 15px;
				padding-right: 15px;
			}
			.section {
				padding: 0 !important;
			}
			.box {
				position: relative;
				border-radius: 3px;
				background: #ffffff;
				border-top: 3px solid #d2d6de;
				margin-bottom: 7px !important;
				width: 100%;
				box-shadow: 0 1px 1px rgba(0,0,0,0.1);
			}
			.nav-tabs-custom>.tab-content {
				background: #fff;
				padding: 0px !important;
				border-bottom-right-radius: 3px;
				border-bottom-left-radius: 3px;
			}
			.nav-tabs-custom {
				margin-bottom: 0px !important;
				background: #fff;
				box-shadow: 0 1px 1px rgba(0,0,0,0.1);
				border-radius: 3px;
			}
			thead {
				border-bottom: 1px solid #d0d0d0;
				background-color: #dbd0e1;
				border: 3px solid #dbd0e1;
				color: #3e0963;
			}
		</style>
		<section id="content">
			<div class="container-fluid">
				<div class="section">
					<h2 class="breadcrumbs-title">Dashboard</h2>
					<hr>
					<div class="content-wrapper" style="padding-top:0px;">
						<section class="content">
							<div class="row">
								
								<!--<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-aqua"><i class="fa fa-globe fa-fw"></i></span>
										<div class="info-box-content">
										  <span class="info-box-text"><a href="<?php echo base_url(); ?>pages/onsite_list">Service Center</a></span>
										  <span class="info-box-number">10</span>
										</div>
									</div>
								</div>-->
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-aqua"><i class="fa fa-desktop"></i></span>
										<div class="info-box-content">
										  <span class="info-box-text"><a href="<?php echo base_url(); ?>pages/offsite_list" >Customer Site</a></span>
										  <span class="info-box-number" > 9</span>
										</div>
									</div>
								</div>
						   
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-aqua"><i class="fa fa-list-alt"></i></span>
										<div class="info-box-content">
											<span class="info-box-text"><a href="<?php echo base_url(); ?>pages/amc_list">AMC List</a></span>
											<span class="info-box-number" > <?php foreach($amc_cnt As $amckey){ echo $amckey->site; }?></span>
										</div>
									</div>
								</div>
								
								
								<!--<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-aqua"><i class="fa fa-cog"></i></span>
										<div class="info-box-content">
										  <span class="info-box-text"><a href="<?php echo base_url(); ?>pages/stamping_list" >Stampings</a></span>
										  <span class="info-box-number" >10</span>
										</div>
									</div>
								</div>-->
								
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-red"><i class="fa fa-bell-o"></i></span>
										<div class="info-box-content">
										  <span class="info-box-text">Request Alert</span>
										  <span class="info-box-number"><?php foreach($req_alert_cnt As $reqkey){ echo $reqkey->status; }?></span>
										</div>
									</div>
								</div>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-green">
											<i class="fa fa-truck"></i>
										</span>
										<div class="info-box-content">
											<span class="info-box-text">Ready For Delivery</span>
											<span class="info-box-number"><?php foreach($readyfordelivery_cnt As $readykey){ echo $readykey->status; }?></span>
										</div>
									</div>
								</div>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-yellow"><i class="fa fa-exclamation-triangle"></i></span>
										<div class="info-box-content">
											<span class="info-box-text">Expiring Contracts</span>
											<?php 
											error_reporting(0);
											/* $servername = "localhost";
											$username = "sellejyp_serv";
											$password = "service@123";
											$dbname = "sellejyp_serviceEff"; */
											$servername = "localhost";
											$username = "root";
											$password = "";
											$dbname = "srs";
											$con = mysql_connect($servername,$username,$password);
											mysql_select_db($dbname,$con);
											$date1 = date('Y-m-d');
											//echo "SELECT unix_timestamp(warranty_date) from order_details where id='52'";
											$qry = mysql_query("SELECT count(ord.id) As expiring_cnt,cust.customer_name,pro.product_name,pro.model, ordt.purchase_date,ordt.warranty_date,ordt.prev_main,ser_loc.service_loc FROM `order_details` As ordt
											inner join orders As ord ON ord.id = ordt.order_id
											inner join customers As cust ON cust.id = ord.customer_id
											inner join products As pro ON pro.id = ordt.model_id
											inner join service_location As ser_loc ON ser_loc.id = ordt.service_loc_id
											WHERE (unix_timestamp(ordt.warranty_date) < unix_timestamp(CURDATE()) and ordt.warranty_date!='') or (unix_timestamp(ordt.prev_main) < unix_timestamp(CURDATE()) and ordt.prev_main!='')");
											while($res = mysql_fetch_array($qry))
											{ ?>
												<span class="info-box-number">
												<?php if($res['expiring_cnt']!=''){
													echo $res['expiring_cnt'];
												} ?>
												</span>
											<?php }?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
							<!-- Left col -->
								<section class="col-lg-9 connectedSortable">
								  <!-- Custom tabs (Charts with tabs)-->
									<div class="nav-tabs-custom">
										<!-- Tabs within a box -->
										<div class="tab-content no-padding">
										  <!-- Morris chart - Sales -->
											<div class="box box-info">
												<div class="box-header with-border">
													<h3 class="box-title">Open Request</h3>
													<div class="box-tools pull-right">
														<button class="btn btn-box-tool" data-widget="collapse" ><i class="fa fa-minus"></i></button>
														<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
													</div>
												</div><!-- /.box-header -->
												<div class="box-body">
													<div class="table-responsive">
														<table class="table no-margin">
															<thead>
																<tr>
																	<th>Request ID</th>
																	<th>Customer</th>
																	<th>Model</th>
																	<th>Service</th>
																	<th>Fault</th>
																	<th>Due Date</th>                         
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
																<?php foreach($request_list As $request_key){?>
																<tr>
																	<td><a href="<?php echo base_url(); ?>service/update_service_req/<?php echo $request_key->request_id; ?>"><?php echo $request_key->request_id; ?></a></td>
																	<td><?php echo $request_key->customer_name; ?></td>
																	<td><?php echo $request_key->model; ?></td>
																	<td><?php echo $request_key->service_type; ?></td>
																	<td><?php echo $request_key->prob_category; ?></td>
																	<td><?php echo $request_key->delivery_date; ?></td>
																	<td>
																		<?php if($request_key->statusid == '1') { ?>
																		<span class="label label-danger"><?php echo $request_key->status; ?></span>
																		<?php } ?>
																		
																		<?php if($request_key->statusid == '3') { ?>
																		<span class="label label-warning"><?php echo $request_key->status; ?></span>
																		<?php } ?>
																		
																		<?php if($request_key->statusid == '4') { ?>
																		<span class="label label-success"><?php echo $request_key->status; ?></span>
																		<?php } ?>
																		
																		<?php if($request_key->statusid == '2' || $request_key->statusid == '5' || $request_key->statusid == '6' || $request_key->statusid == '7' || $request_key->statusid == '8') { ?>
																		<span class="label label-success"><?php echo $request_key->status; ?></span>
																		<?php } ?>
																	</td>
																</tr>
																<?php } ?>
															</tbody>
														</table>
													</div><!-- /.table-responsive -->
												</div><!-- /.box-body -->
												<div class="box-footer clearfix">
													<a href="<?php echo base_url(); ?>pages/add_service_req" class="btn btn-sm btn-primary pull-left">New Request</a>
													<a href="<?php echo base_url(); ?>pages/service_req_list" class="btn btn-sm btn-primary pull-right">All Request</a>
												</div><!-- /.box-footer -->
											</div>
										</div>
									</div><!-- /.nav-tabs-custom -->
									<div class="tab-content no-padding col-md-8">
									  <!-- Morris chart - Sales -->
										<div class="box box-info">
											<div class="box-header with-border">
											  <h3 class="box-title">Engineer Status</h3>
											  <div class="box-tools pull-right">
												<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
												<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
											  </div>
											</div><!-- /.box-header -->
											<div class="box-body">
												<div class="table-responsive">
													<table class="table no-margin">
														<thead>
															<tr>
																<th>Engineer Name</th>                         
																<th>Total Open Request</th>
																<th style="width:15.2%">On Hold</th>
																<th>Awaiting Approval</th>
																<th>Awaitig Delivery</th>
															</tr>
														</thead>
														<tbody>
															<?php foreach($engineer_status As $engg_key){?>
															<tr>
																<td>
																	<a href="<?php echo base_url(); ?>pages/engg_individual_list/<?php echo $engg_key->assign_to; ?>"><?php echo $engg_key->emp_name; ?></a>
																</td>
															 
																<td>
																	<a href="<?php echo base_url(); ?>pages/engg_individual_workinpro_list/<?php echo $engg_key->assign_to; ?>"><?php foreach($engineer_work_inpro as $workinprokey){
																			if($workinprokey->assign_to==$engg_key->assign_to){ echo $workinprokey->total_reqs;}} ?>
																	</a>
																</td>
																			
																<td>
																	<a href="<?php echo base_url(); ?>pages/engg_individual_onhold_list/<?php echo $engg_key->assign_to; ?>"><?php foreach($engineer_on_hold as $holdkey){
																				if($holdkey->assign_to==$engg_key->assign_to){ echo $holdkey->total_reqs;} } ?>
																	</a>
																</td>
																	
																<td>
																	<a href="<?php echo base_url(); ?>pages/engg_individual_awaiting_list/<?php echo $engg_key->assign_to; ?>"><?php foreach($engineer_quote_awaiting_approval as $awaitingkey){
																			if($awaitingkey->assign_to==$engg_key->assign_to){ echo $awaitingkey->total_reqs;} } ?>
																	</a>
																</td>
																	
																<td>
																	<a href="<?php echo base_url(); ?>pages/engg_individual_ready_list/<?php echo $engg_key->assign_to; ?>"><?php foreach($engineer_ready_delivery as $readykey){
																			if($readykey->assign_to==$engg_key->assign_to){ echo $readykey->total_reqs;}} ?>
																	</a>
																</td>	
															</tr>
															<?php } ?>
														</tbody>
													</table>
												</div><!-- /.table-responsive -->
											</div><!-- /.box-body -->
											<div class="box-footer clearfix">
												<a href="<?php echo base_url(); ?>pages/add_order" class="btn btn-sm btn-primary pull-left">New Order</a>
												<a href="<?php echo base_url(); ?>pages/order_list" class="btn btn-sm btn-primary pull-right">All Order</a>
											</div><!-- /.box-footer -->
										</div>
									</div>
									
									<div class="tab-content no-padding tableft col-md-4">
										<div class="tab-content no-padding">
									  <!-- Morris chart - Sales -->
											<div class="box box-info">
												<div class="box-header with-border">
													<h3 class="box-title">Spare Stock</h3>
													<div class="box-tools pull-right">
														<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
														<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
													</div>
												</div><!-- /.box-header -->
												<div class="box-body">
													<div class="table-responsive">
														<table class="table no-margin">
															<thead>
																<tr>
																  <th>Spare Name</th>
																  <th>Total</th>                        
																</tr>
															</thead>
														  <tbody>
														  
															<tr>
																<td>Induction 2kg Filament</td>
																<td>1000</td>
															</tr>
															<tr>
																<td>Induction 2kg Filament</td>
																<td>1000</td>
															</tr>
															<tr>
																<td>Induction 2kg Filament</td>
																<td>1000</td>
															</tr>
															<tr>
																<td>Induction 2kg Filament</td>
																<td>1000</td>
															</tr>
															<tr>
																<td>Induction 2kg Filament</td>
																<td>1000</td>
															</tr>
															<tr>
																<td>Induction 2kg Filament</td>
																<td>1000</td>
															</tr>
															
														  </tbody>
														</table>
													</div>
												</div>
												<div class="box-footer clearfix" style="padding: 7px;">
												  <a href="<?php echo base_url(); ?>pages/add_spare" class="btn btn-sm btn-primary pull-right">View All</a>
												</div>
											</div>
										</div>
									</div>
								</section>
							  
								<section class="col-lg-3 connectedSortable">
									<div class="tab-content no-padding">
										  <!-- Morris chart - Sales -->
										<div class="box box-info">
											<div class="box-header with-border">
											  <h3 class="box-title">Area Wise Open Request</h3>
											  <div class="box-tools pull-right">
												<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
												<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
											  </div>
											</div><!-- /.box-header -->
											<div class="box-body">
												<div class="table-responsive">
													<table class="table no-margin">
														<thead>
															<tr>
																<th>Area</th>
																<th>No Of Request</th>				
															</tr>
														</thead>
														<tbody>
															<?php foreach($list As $key){?>
															<tr>
																<td>
																	<a href="<?php echo base_url(); ?>pages/Areawise_list/<?php echo $key->id; ?>"><?php echo $key->service_loc; ?></a>
																</td>
																<td><?php echo $key->req_id; ?></td>
															</tr>
															<?php } ?>
														</tbody>
													</table>
												</div>
											</div>
											<div class="box-footer clearfix">
												<a href="" class="btn btn-sm btn-primary pull-right">View All</a>
											</div>
										</div>
									</div>
									<div class="tab-content no-padding">
										<!-- Morris chart - Sales -->
										<div class="box box-info">
											<div class="box-header with-border">
													<h3 class="box-title">Minimum Spare Alerts</h3>
													<div class="box-tools pull-right">
														<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
														<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
													</div>
											</div><!-- /.box-header -->
											<div class="box-body">
												<div class="table-responsive">
													<table class="table no-margin">
														<thead>
															<tr>
																<th style="width: 63.2%;">Spare Name</th>
																<th>Stock In hand</th>                        
																<th>Min Qty</th>
															</tr>
														</thead>
														<tbody>
															<?php foreach($spare_min_alerts As $spareminkey){?> 
															<tr>
																<td><?php echo $spareminkey->spare_name; ?></td>
																<td><?php echo $spareminkey->spare_qty; ?></td>
																<td><?php echo $spareminkey->min_qty; ?></td>
															</tr>
															<?php } ?>
															<tr>
																<td>Induction 2 kg muz</td>
																<td>0</td>
																<td>0</td>
															</tr>
															<tr>
																<td>Turbo 3D Main Board</td>
																<td>0</td>
																<td>0</td>
															</tr>
															<!--<tr>
																<td>lock & key</td>
																<td>0</td>
																<td>0</td>
															</tr>-->
														</tbody>
													</table>
												</div>
											</div>
											<div class="box-footer clearfix">
												<a href="<?php echo base_url(); ?>pages/min_spare_alerts" class="btn btn-primary btn-sm pull-right">View All</a>
											</div>
										</div>
									</div>
								</section>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		</div>
		</div>
		  
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/dash/app.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/dash/dashboard.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	</body>
</html>