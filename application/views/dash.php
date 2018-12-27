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
				border-bottom: 1px solid #111;/*#d0d0d0*/
				background-color: #f2f2f2;/*#dbd0e1*/
				border: 3px solid #777;/*#dbd0e1*/
				color: #111;/*#3e0963*/
			}
			table th {background-color: #f2f2f2 !important;}
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
								<!--<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-aqua"><i class="fa fa-desktop"></i></span>
										<div class="info-box-content">
										  <span class="info-box-text"><a href="<?php echo base_url(); ?>pages/offsite_list" >Customer Site</a></span>
										  <span class="info-box-number" > 9</span>
										</div>
									</div>
								</div>-->
						   
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-aqua"><i class="fa fa-list-alt"></i></span>
										<div class="info-box-content">
											<span class="info-box-text"><a href="<?php echo base_url();?>pages/ready_delivery_list">Stocks</a></span>
											<span class="info-box-number">10 / 20</span>
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
										  <span class="info-box-text"><a href="<?php echo base_url();?>pages/req_alert_list">Request Alert</a></span>
										  <span class="info-box-number">12/20</span>
										</div>
									</div>
								</div>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-green">
											<i class="fa fa-truck"></i>
										</span>
										<div class="info-box-content">
											<span class="info-box-text"><a href="<?php echo base_url();?>pages/ready_delivery_list">Customers</a></span>
											<span class="info-box-number">15/20</span>
										</div>
									</div>
								</div>
								
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
		<!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
	</body>
</html>