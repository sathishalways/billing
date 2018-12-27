<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome/css/ionicons.min.css">
		<link href="<?php echo base_url(); ?>assets/js/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
		<link href="<?php echo base_url(); ?>assets/css/print.css" type="text/css" rel="stylesheet" media="print" />
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/addrow.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/addtable.js'></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

		<style>
	
			.btn-box-tool:active
			{
				background-color: rgb(5, 94, 135);  
		  
			}
			.side-nav.fixed a {
				display: block;
				padding: 0px 2px 0px 1px !important;
				color: #055E87;
			}
			.side-nav li ul li a {
				margin: 0px 1rem 0px 0rem !important;
			}
			/*.saturate {
				-webkit-filter: saturate(50);
				filter: saturate(50);
			}*/

			@media only screen and (min-width:240px) and (max-width:768px){
				.nav{
					display:none;
				}
				.navbar-toggle{
					display:none;
				}
				.right{
				float: none !important;
				position: relative !important;
				bottom: 0px !important;
				width: 134px !important;
				top:-46px !important;
				left: 0px;
				background: #303f9f;
				}
				.img-welcome {
					width: 25px;
					height: 25px;
					float: right;
					position: relative;
					left: 0px !important;
					top: 2px;
					/* border: 1px solid #ccc; */
				}
				ol, ul {
					margin-top: 0;
					margin-bottom: -24px !important;
				}
			}

			/* Mega Menu New */

			.nav,
			.nav a,
			.nav ul,
			.nav li,
			.nav div,
			.nav form,
			.nav input {
				margin: 0;
				padding: 0;
				border: none;
				outline: none;
			}

			.nav a { text-decoration: none; }

			.nav li { list-style: none; }
			.nav {
				display: inline-block;
				position: relative;
				cursor: default;
				z-index: 500;
				left:80px;
				background: #303f9f;
			}

			.nav > li {
				display: block;
				float: left;
			}
			.nav > li > a {
				position: relative;
				display: block;
				z-index: 510;
				height: 54px;
				padding: 0 20px !important;
				line-height: 54px;

				font-family: Helvetica, Arial, sans-serif;
				font-weight: bold;
				font-size: 13px;
				color: #fcfcfc;
				text-shadow: 0 0 1px rgba(0,0,0,.35);

				background: #303f9f;
				border-left: 1px solid #303f9f;
				border-right: 1px solid #303f9f;

				-webkit-transition: all .3s ease;
				-moz-transition: all .3s ease;
				-o-transition: all .3s ease;
				-ms-transition: all .3s ease;
				transition: all .3s ease;
			}
			.nav > li:hover > a { /*background: #303f9f;*/ }

			.nav > li:first-child > a {
				border-radius: 3px 0 0 3px;
				border-left: none;
			}
			.nav > li.nav-search > form {
				position: relative;
				width: inherit;
				height: 54px;
				z-index: 510;
				border-left: 1px solid #4b4441;
			}
			.nav > li.nav-search input[type="text"] {
				display: block;
				float: left;
				width: 1px;
				height: 24px;
				padding: 15px 0;
				line-height: 24px;

				font-family: Helvetica, Arial, sans-serif;
				font-weight: bold;
				font-size: 13px;
				color: #999999;
				text-shadow: 0 0 1px rgba(0,0,0,.35);

				background: #372f2b;

				-webkit-transition: all .3s ease 1s;
				-moz-transition: all .3s ease 1s;
				-o-transition: all .3s ease 1s;
				-ms-transition: all .3s ease 1s;
				transition: all .3s ease 1s;
			}

			.nav > li.nav-search input[type="text"]:focus { color: #fcfcfc; }

			.nav > li.nav-search input[type="text"]:focus,
			.nav > li.nav-search:hover input[type="text"] {
				width: 110px;
				padding: 15px 20px;

				-webkit-transition: all .3s ease .1s;
				-moz-transition: all .3s ease .1s;
				-o-transition: all .3s ease .1s;
				-ms-transition: all .3s ease .1s;
				transition: all .3s ease .1s;
			}
			.nav > li.nav-search input[type="submit"] {
				display: block;
				float: left;
				width: 20px;
				height: 54px;
				padding: 0 25px;
				cursor: pointer;

				background: #372f2b url(../img/search-icon.png) no-repeat center center;

				border-radius: 0 3px 3px 0;

				-webkit-transition: all .3s ease;
				-moz-transition: all .3s ease;
				-o-transition: all .3s ease;
				-ms-transition: all .3s ease;
				transition: all .3s ease;
			}

			.nav > li.nav-search input[type="submit"]:hover { background-color: #4b4441; }
			.nav > li > div {
				position: absolute;
				display: block;
				width: 43em;
				top: 54px;
				left: 0;
				opacity: 0;
				visibility: hidden;
				overflow: hidden;
				background: #fff;
				border: 1px solid #2e3192;
				border-radius: 5px;
				-webkit-transition: all .3s ease .15s;
				-moz-transition: all .3s ease .15s;
				-o-transition: all .3s ease .15s;
				-ms-transition: all .3s ease .15s;
				transition: all .3s ease .15s;
			}
			.nav > li:hover > div {
				opacity: 1;
				visibility: visible;
				overflow: visible;
			}
			.nav > li > div:before {
			  content: "";
			  border-bottom: 15px solid #fff;
			  border-right: 17px solid transparent;
			  border-left: 17px solid transparent;
			  position: absolute;
			  top: -15px;
			  left: 50px;
			  z-index: 1001;
			}

			.nav > li > div:after {
			  content: "";
			  border-bottom: 17px solid #ccc;
			  border-right: 19px solid transparent;
			  border-left: 19px solid transparent;
			  position: absolute;
			  top: -17px;
			  left: 48px;
			  z-index: 800;
			}
			.nav .nav-column {
			   float: left;
				width: auto;
				padding: 0px 1.5%;
			}

			.nav .nav-column h3 {
				margin: 20px 0 10px 0;
				line-height: 18px;
				font-family: Helvetica, Arial, sans-serif;
				font-weight: bold;
				font-size: 13px;
				color: #2e3192;
				text-transform: uppercase;
			}

			.nav .nav-column h3.orange { color: #ff722b; }

			.nav .nav-column li a {
				display: block;
				line-height: 26px;
				font-family: Helvetica, Arial, sans-serif;
				font-weight: bold;
				font-size: 12px;
				color: #888888;
				text-decoration:none;
			}

			.nav .nav-column li a:hover { color: #666666; }
			.nav>li>a:hover, .nav>li>a:visited .nav>li>a:active, .nav>li>a:focus {
				color: #039be5;
				background: #d0d4d7;
			}
			.divider{
				background-color: #967d58 !important;
			}
			.right {
				float: right !important;
				position: relative !important;
				right: 40px !important;
				top: -50px;
				background: #303f9f;
			}
			.right li > div a{
				color:#fff;
				font-size:1em;
			}
			.waves-block {
				display: block;
				color: #fff;
			}
			.waves-light{
				font-size:13px;
				font-weight:bold;
			}
			.right li > a i.fa-sign-out{
				font-size:16px !important;
			}
			.fa-arrows-alt{
				margin-right:10px;
			}
			a.waves-light:hover, a.waves-light:active, a.waves-light:focus {
				color: #fff !important;
			}
			header{
				padding:0 !important;
				height:55px;
			}

			.navbar-nav>li>a {
				padding-top: 10px;
				padding-bottom: 10px;
				line-height: 54px !important;
			}

			/* Responsive Menu Style */

			.navbar-toggle {
				position: relative;
				float: right;
				padding: 9px 10px;
				/* margin-top: 8px; */
				margin-right: 15px;
				margin-bottom: 8px;
				background-color: transparent;
				background-image: none;
				border: 1px solid transparent;
				border-radius: 4px;
				position: relative;
				bottom: 40px;
			}
			.navbar-toggle .icon-bar {
				display: block;
				width: 22px;
				height: 2px;
				border-radius: 1px;
				border:solid #fff;
			}
			.in .nav{
				left: 0px;
				position: relative;
				width: 415px;
			}
			.in .nav li{
				float: none;
				position: inherit;
				border-bottom: 1px solid #ccc;
			}
			.collapse.in {
				display: block;
				position: relative;
				z-index: 11;
				bottom: 50px;
				background: #fff;
				padding-left: 0px;
				height:auto;
			}

			.in .nav > li > div{
				z-index: 1111;
				width: 250px;
			}
			.in .nav .nav-column{
				float: none;
				width: 70%;
				padding: 0px 1.5%;
			}
			.in .nav .nav-column > ul{
				width: 244px;
			}
			.in .nav .nav-column > ul >li{
				border-bottom:none;
			}
			.in .nav .nav-column .divider{
				width:244px;
			}
			.in ul.right{
				float: none !important;
				position: relative !important;
				bottom: 0px !important;
				width: 413px;
				left: 0px;
				background: #303f9f;

			}
			.img-welcome{
				width:25px;
				height:25px;
				float:right;
				position:relative;
				left:5px;
				/*border:1px solid #ccc;*/
			}
			.in .right .img-welcome{
				width:25px;
				height:25px;
				position:relative;
				left: -260px;
				bottom: 0px;
				/*border:1px solid #ccc;*/
			}
			.fa
			{
				font-size:21px !important;
			}
			.fa-user
			{
				font-size: 2.4rem !important;
				padding-left: 3px;
			}
			#slide-out li a i
			{
				padding-left: 7px;
			}
			.fa-arrow-right
			{
				font-size:14px !important;
			}
			.coloricon{
				background-image:url("<?php echo base_url(); ?>assets/images/icon.png");
				height:30px;
				width:30px;
				background-repeat: no-repeat;
				background-size: cover;
				background-color: transparent;
				position:relative;
				left:1298px;
			}
			.coloricon:hover {
				background-color: transparent !important;
				box-shadow: none !important;
			}
			/*.coloricon:active {
				background-color: transparent !important;
				box-shadow: none !important;
			}*/
			.coloricon:focus {
				background-color: transparent !important;
				box-shadow: none !important;
			}
			.color-picker {
				background: rgba(255, 255, 255, 0.75);
				/* padding: 10px; */
				border: 1px solid rgba(203, 203, 203, 0.6);
				border-radius: 2px;
				position: absolute;
				width: 160px;
				right: 60px;
				bottom: 510px;
			}
			.picker-wrapper {
				padding: 0px !important;
			}
			.color-picker > div {
				width: 15px !important;
				display: inline-block;
				height: 15px !important;
				margin: 2px !important;
				border-radius: inherit !important;
				opacity: 0.7;
			}

			.color-picker > div:before {
			  content: "";
			  border-left: 17px solid #fff;
			  border-top: 17px solid transparent;
			  border-bottom: 17px solid transparent;
			  position: absolute;
			  top: -1px;
			  right: -13px;
			  z-index: 1001;
			}
			.wrapper {
				min-height: 100%;
				position: static;
				overflow: inherit;
			}
			.color-picker > div:after {
			  content: "";
			  border-left: 17px solid #ccc;
			  border-top: 17px solid transparent;
			  border-bottom: 17px solid transparent;
			  position: absolute;
			  top: -1px;
			  right: -15px;
			  z-index: 800;
			}
			.btn-box-tool {
				padding: 5px;
				font-size: 12px;
				background: transparent;
				color: #000 !important;
				font-weight:bold;
			}

			.toggle-fullscreen:hover
			{
				color:white !important;
				text-decoration:none;
			}
			.toggle-fullscreen:focus
			{
				color:white !important;
				text-decoration:none;
			}
			.Accordion li.active a
			{
				color:black;
			}

			@media only screen and (max-width: 992px){
				.hide-on-med-and-down {
					display: block !important;
				}
				/*header .brand-logo img {
					width: 172px !important;
					position: relative;
					right: 75px;
					bottom: 8px;
				}*/
				.waves-effect {
					position: relative;
					left: 0px;
				}

				.sidebar-collapse {
					position: absolute;
					left: -170px;
					top: -70px;
				}
			}
			@media only screen and (min-width: 301px){
				nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i {
					height: 64px !important;
					line-height: 64px !important;
				}
			}
		</style>
	</head>

	<body>
		<header id="header" class="page-topbar">
			<div class="navbar-header">
				<?php foreach($user_dat As $Ses_key1){if($Ses_key1->user_type!='7'){ ?><a href="<?php echo base_url(); ?>pages/dash" class="brand-logo darken-1">
					<img src="<?php echo base_url(); ?>assets/images/newlogo.png" alt="materialize logo" style="width:230px;height:50px;color:#fff" class="saturate">
					</a> <?php } }?> <?php foreach($user_dat As $Ses_key1){if($Ses_key1->user_type=='7'){ ?><a href="<?php echo base_url(); ?>pages/dash" class="brand-logo darken-1">
					<img src="<?php echo base_url(); ?>assets/images/newlogo.png" alt="materialize logo" style="width:230px;height:50px"></a>
				<?php } }?>
				
			</div>
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse js-navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="#">Sales<span class="caret"></span></a>
						<div>
							<div class="nav-column col-md-3">
								<h3>Sales Details</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/order_list">Sales List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/amc_list">AMC List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/expiry_closed">Chargeables</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_order">New Sales</a></li>
								</ul>
							</div>

							<div class="nav-column col-md-3">
								<h3>Expiring Products</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/expiry_list">Expiring Contracts</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#">Services<span class="caret"></span></a>
						<div>
							<div class="nav-column">
								<h3>Service</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/add_service_req">New Request</a></li>
									<li><a href="<?php echo base_url(); ?>pages/service_req_list">All Request</a></li>
									<li><a href="<?php echo base_url(); ?>pages/workin_prog_list">Work In-progress</a></li>
								</ul>
							</div>

							<div class="nav-column">
								<h3>Service</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/comp_engg_list">Completed By Engineer</a></li>
									<li><a href="<?php echo base_url(); ?>pages/quality_check_list">QC</a></li>
									<li><a href="<?php echo base_url(); ?>pages/ready_delivery_list">Ready Delivery</a></li>
								</ul>
							</div>

							<div class="nav-column">
								<h3>Service</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/delivered_list">Delivered / Invoices</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#">Spares<span class="caret"></span></a>
						<div>
							<div class="nav-column">
								<h3>Spare</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/add_spare">Spare Master</a></li>
									<li><a href="<?php echo base_url(); ?>pages/spare_stock">Spare Stock</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_new_stock">New Spare</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_spare_engineers">Spare to Engineer</a></li>
								</ul>
							</div>

							<div class="nav-column">
								<h3>Spare</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/sparereceipt">Spare Receipt List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/spare_purchase_order">Create Purchase Order</a></li>
									<li><a href="<?php echo base_url(); ?>pages/purchase_orders">Purchase Order</a></li>
									<li><a href="<?php echo base_url(); ?>pages/min_spare_alerts">Min Spare Alerts</a></li>
								</ul>
							</div>
							
							<div class="nav-column">
								<h3>Spare</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/sparerequest">Spare Requests</a>
                                </li>
								</ul>
							</div>
							
						</div>
					</li>
					<li>
						<a href="#">Master<span class="caret"></span></a>
						<div>
							<div class="nav-column">
								<h3>Customers</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/cust_list">Customer List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_cust">Add Customer</a></li>
											
								</ul>
								<div class="divider"></div>
								<h3>Product Brand</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/brandList">Brand List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_brand">New Brand</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Transporter</h3>
								<ul>
									<li><a href="#">Transporter List</a></li>
									<li><a href="#">New Transporter</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Users</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/user_cate_list">User List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_user_cate">New User</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Location</h3>
								<ul>
									<li><a href="#">Location List</a></li>
									<li><a href="#">New Location</a></li>
								</ul>
							</div>
							<div class="nav-column">
								<h3>Products</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/prod_list">Product List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_prod">Add Product</a></li>       
								</ul>
								<div class="divider"></div>
								<h3>Problem Category</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/prob_cat_list">Problem List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_prob_cat">New Problem</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Customer Type</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/cust_type_list">Customer Type List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/cust_type">New Customer Type</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Employee</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/emp_list">Employee List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_emp">New Employee</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Accessories</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>service/pages/accessories_list">Accessories</a></li>
								</ul>
							</div>
							<div class="nav-column">
								<h3>Product Category</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/prod_cat_list">Category List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_prod_cat">New Category</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Service Zone</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/service_loc_list">Zone List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_service_loc">New Zone</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Couriers</h3>
								<ul>
									<li><a href="#">Couriers List</a></li>
									<li><a href="#">New Couriers</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Vendor</h3>
								<ul>
									<li><a href="#">Vendor List</a></li>
									<li><a href="#">New Vendor</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Company Details</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>service/pages/comp_list">Company Details</a></li>
								</ul>
							</div>
							<div class="nav-column">
								<h3>Sub Category</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/prod_subcat_list">Sub-Category List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_prod_subcat">New Sub-Category</a></li>            
								</ul>
								<div class="divider"></div>
								<h3>Tax</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/tax_list">Tax List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_tax">New Tax</a></li>
								</ul>
								<div class="divider"></div>
								<h3>Service Category</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/service_cat_list">Service Category List</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_service_cat">New Service Category</a></li>
									<li><a href="<?php echo base_url(); ?>pages/add_service_charge">New Service Charge</a></li>
									<li><a href="<?php echo base_url(); ?>pages/service_charge_list">Service Charge List</a></li>
								</ul>
								
								<div class="divider"></div>
								<h3>QC</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/qc_masters">Add QC Parameters</a></li>
									<li><a href="<?php echo base_url(); ?>pages/qc_masters_list">QC Parameters List</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#">Reports<span class="caret"></span></a>
						<div>
							<div class="nav-column">
								<h3>Reports</h3>
								<ul>
									<li><a href="<?php echo base_url();?>pages/revenuereport">Service Report</a></li>
									<li><a href="<?php echo base_url();?>pages/report_list">Revenue Report</a></li>
									<li><a href="<?php echo base_url();?>pages/engineer_servicereport_list">Enigneers Report</a></li>
									<li><a href="<?php echo base_url();?>pages/customerreport_list">Customer Report</a></li>
									<li><a href="<?php echo base_url();?>pages/service_mach_report">Service Machines Report</a></li>        
								</ul>
							</div>
							<div class="nav-column">
								<h3>Reports</h3>
								<ul>
									<li><a href="<?php echo base_url(); ?>pages/expiry_list1">Warranty Expired Report</a></li>
									<li><a href="<?php echo base_url();?>pages/agingreport">Aging Report</a></li>
									<li><a href="<?php echo base_url();?>pages/sparereport_list">Spare Report</a></li>
									<li><a href="<?php echo base_url();?>pages/engineerreport_list">Spare to Engineer Report</a></li>        
								</ul>
							</div>
							<div class="nav-column">
								<h3>Reports</h3>
								<ul>
									<li><a href="<?php echo base_url();?>pages/sparepurchase_list">Spare Purchase Report</a></li>
									<li><a href="<?php echo base_url();?>pages/sparecharge_list">Spare Charge Report</a></li>
									<li><a href="<?php echo base_url();?>pages/stampingreport_list">Stamping Report</a></li>
									<li><a href="<?php echo base_url();?>pages/monthlyreport_list">Stamping Monthly</a></li>      
									<li><a href="<?php echo base_url();?>pages/serial_list">SerialWise Report</a></li>      
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>


			<div class="navbar-header right">
				<ul class="hide-on-med-and-down">                        
					<li>
						<div>
							<a href="#">Welcome Admin</a>
							<img class="img-circle img-responsive img-welcome" src="<?php echo base_url(); ?>assets/images/user.png">
						</div>
						<a href="<?php echo base_url(); ?>login/logout" class="waves-effect waves-block waves-light"><i class="fa fa-sign-out"></i> Logout</a>
					</li>                        
				</ul>
			</div>	
    
		</header>
		<div id="main">
			<div class="picker-wrapper">
				<button class="btn coloricon"></button>
				<div class="color-picker"></div>
			</div>
			<div class="wrapper">
            
				<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default.min.css">
				<script src="<?php echo base_url(); ?>assets/js/highlight.min.js"></script>
				<link href="<?php echo base_url(); ?>assets/css/ripples.min.css" rel="stylesheet">
				<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
				<script src="<?php echo base_url(); ?>assets/js/highlight.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/piklor.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/handlers.js"></script>