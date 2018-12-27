<!DOCTYPE html>
<html lang="en">



<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
   
    <link href="<?php echo base_url(); ?>assets/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link href="<?php echo base_url(); ?>assets/js/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>assets/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
   <link href="<?php echo base_url(); ?>assets/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
	  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/addrow.js'></script>
	   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css">
      <!--<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>   -->
	  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/addtable.js'></script>
	  
	  
	  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	  <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  <!--<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>-->
	    <link href="<?php echo base_url(); ?>assets/css/print.css" type="text/css" rel="stylesheet" media="print" />

		
		
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
	  </style>
	  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	

<script>
	$(function(){
		$(".navbar-toggle").click(function(){
			$("ul.nav li").addClass("accordion");
			var acc = $(".accordion > div");
			var i;

			for (i = 0; i < acc.length; i++) {
				acc[i].onclick = function(){
					this.classList.toggle("active");
					var panel = this.nextElementSibling;
					if (panel.style.display === "block") {
						panel.style.display = "none";
					} else {
						panel.style.display = "block";
					}
				}
			}
		});
	});
</script>
	  
</head>

<body>

  <!--<div id="loader-wrapper">
    <!--  <div id="loader"></div>   -->     
    <!--  <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>-->





  <header id="header" class="page-topbar">
   
	<div class="navbar-header">
        <?php foreach($user_dat As $Ses_key1){if($Ses_key1->user_type!='7'){ ?><a href="<?php echo base_url(); ?>pages/dash" class="brand-logo darken-1">
            <!--<img src="<?php echo base_url(); ?>assets/images/logoservice1.png" alt="materialize logo"><img src="<?php echo base_url(); ?>assets/images/maxsell-logo1.png" alt="materialize logo">-->
            <img src="<?php echo base_url(); ?>assets/images/newlogo.png" alt="materialize logo" style="width:230px;height:50px;color:#fff" class="saturate">
            </a> <?php } }?> <?php foreach($user_dat As $Ses_key1){if($Ses_key1->user_type=='7'){ ?><a href="<?php echo base_url(); ?>pages/dash" class="brand-logo darken-1">
            <!--<img src="<?php echo base_url(); ?>assets/images/logoservice1.png" alt="materialize logo"><img src="<?php echo base_url(); ?>assets/images/maxsell-logo1.png" alt="materialize logo">-->
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
        <li><a href="<?php echo base_url(); ?>pages/quote_in_progress_list">Quote In-progress</a></li>
    </ul>
</div>

<div class="nav-column">
    <h3>Service</h3>
    <ul>
        <li><a href="<?php echo base_url(); ?>pages/quote_approved">Awaiting Approvals</a></li>
        <li><a href="<?php echo base_url(); ?>pages/workin_prog_list">Work In-progress</a></li>
		<li><a href="<?php echo base_url(); ?>pages/comp_engg_list">Completed By Engineer</a></li>
    </ul>
    
</div>

<div class="nav-column">
    <h3>Service</h3>
    <ul>
        <li><a href="<?php echo base_url(); ?>pages/quality_check_list">QC</a></li>
        <li><a href="<?php echo base_url(); ?>pages/ready_delivery_list">Ready Delivery</a></li>
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
        <!--<div class="navbar-fixed">
		
            <nav class="">
                <div class="">                    
                    
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><?php foreach($user_dat As $Ses_key1){if($Ses_key1->user_type!='7'){ ?><a href="<?php echo base_url(); ?>pages/dash" class="brand-logo darken-1">
					  <!--<img src="<?php echo base_url(); ?>assets/images/logoservice1.png" alt="materialize logo"><img src="<?php echo base_url(); ?>assets/images/maxsell-logo1.png" alt="materialize logo">-->
					 <!--<img src="<?php echo base_url(); ?>assets/images/newlogo.png" alt="materialize logo" style="width:230px;height:50px">
					  </a> <?php } }?> <?php foreach($user_dat As $Ses_key1){if($Ses_key1->user_type=='7'){ ?><a href="<?php echo base_url(); ?>pages/dash" class="brand-logo darken-1">
					  <!--<img src="<?php echo base_url(); ?>assets/images/logoservice1.png" alt="materialize logo"><img src="<?php echo base_url(); ?>assets/images/maxsell-logo1.png" alt="materialize logo">-->
					 <!--<img src="<?php echo base_url(); ?>assets/images/newlogo.png" alt="materialize logo" style="width:230px;height:50px">
					  </a> <?php } }?> </h1></li>
                    </ul>
                 
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
						<i class="fa fa-arrows-alt"></i>
</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>login/logout" class="waves-effect waves-block waves-light"><?php //foreach($user_dat As $Ses_key){echo "Welcome: ".$Ses_key->name; } ?> Logout</a>
                        </li>                        
                                              
                       
                    </ul>
                </div>
            </nav>
        </div>-->
    
  </header>
 

 
 <div id="main">
	<div class="picker-wrapper">
            <button class="btn coloricon"></button>
            <div class="color-picker">
            </div>
        </div>
    <div class="wrapper">
                    
        
<style>
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
	height:50px;
	width:50px;
	background-repeat: no-repeat;
    background-size: cover;
	left:1298px;
}
.color-picker {
    background: rgba(255, 255, 255, 0.75);
    /* padding: 10px; */
    border: 1px solid rgba(203, 203, 203, 0.6);
    border-radius: 2px;
    position: absolute;
	width: 150px;
	right: 60px;
    bottom: 435px;
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
        
<script type="text/javascript">
	$(function(){
		$('.Accordion a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
	//	$('.hhhh a').click(function(){
		//	$(this).parent().addClass('active').siblings().removeClass('active')	
		//})
	})
	</script>

   <!--<aside id="left-sidebar-nav">   
   <br/>
 <ul  id="slide-out" class="side-nav fixed leftside-navigation Accordion">
  <?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type!='7'){
			?>
  <li ><a href="<?php echo base_url(); ?>pages/dash" class="waves-effect waves-cyan"><i class="material-icons" style="margin-right: 1rem;">dashboard</i> Dashboard</a></li>
  <?php }}?>
  
  <?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='2' || $Ses_key1->user_type=='3' || $Ses_key1->user_type=='6'){
			?>
<li><span><i class="fa fa-user"></i> Customers <i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>
<ul>
 <li><a href="<?php echo base_url(); ?>pages/cust_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Customer List</a></li>
                             
 <li><a href="<?php echo base_url(); ?>pages/add_cust"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Add Customer</a> </li>

</ul>
</li>
<?php }}?>	

<?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type=='1'){
			?>
<li ><span><i class="material-icons">shopping_basket</i> Product<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                        
                            <ul>							 
                                <li><a href="<?php echo base_url(); ?>pages/prod_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Product List</a>
                                </li>                              
								 <li><a href="<?php echo base_url(); ?>pages/add_prod"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Add Product</a>
                                </li>                               
                            </ul>                       
                    </li>   
<?php }}?>					

<?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type=='1'){
			?>
 <li ><span><i class="material-icons">supervisor_account</i>Employee<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                     
                            <ul>							 
                                <li><a href="<?php echo base_url(); ?>pages/emp_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Employee List</a>
                                </li>                              
								 <li><a href="<?php echo base_url(); ?>pages/add_emp"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Employee</a>   </li> 								
                      </ul>              
               
            </li>
<?php }}?>

		<?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type=='1'){
			?>	
			
			 <li><a href="<?php echo base_url(); ?>pages/comp_list" class="waves-effect waves-cyan"><i class="material-icons" style="margin-right: 1rem;">store</i> Company Details</a>
            </li>
		<?php }}?>
			
			<?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='3' || $Ses_key1->user_type=='5'){
			?>
			<li ><span><i class="material-icons">shopping_basket</i> Sales Details <i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                     
                            <ul>
			<li><a href="<?php echo base_url(); ?>pages/order_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>
Sales List</a>       </li>    
			<li><a href="<?php echo base_url(); ?>pages/amc_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>
				AMC List</a>       </li>
			<li><a href="<?php echo base_url(); ?>pages/expiry_closed"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Chargeables</a>
                                </li>  
								 <li><a href="<?php echo base_url(); ?>pages/add_order"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Sales</a>
                                </li>                               
                            </ul>                      
            </li>  
			<?php }}?>
			
			<?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='2' || $Ses_key1->user_type=='6'){
			?>
			
			      <li ><span><i class="material-icons">assignment</i>Service<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                     
                            <ul>							 
                                <li><a href="<?php echo base_url(); ?>pages/add_service_req"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Request</a>
                                </li>                              
								<li><a  href="<?php echo base_url(); ?>pages/service_req_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>All Request</a>
                                </li>
								<li><a  href="<?php echo base_url(); ?>pages/quote_in_progress_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Quote In-progress</a>
                                </li>							
								<!--<li><a href="<?php echo base_url(); ?>pages/quote_review"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Quote Review</a>
                                </li>-->								
								<!--<li><a href="<?php echo base_url(); ?>pages/quote_approved"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Awaiting Approvals</a>
                                </li>								
									 <li><a href="<?php echo base_url(); ?>pages/workin_prog_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Work InProgress</a>
                                </li>
								<li><a href="<?php echo base_url(); ?>pages/comp_engg_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Completed by Engg</a>
                                </li>			
									<li><a href="<?php echo base_url(); ?>pages/quality_check_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>QC</a>
                                </li>
									<li><a href="<?php echo base_url(); ?>pages/ready_delivery_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Ready - Delivery</a>
                                </li>								
								 <li><a href="<?php echo base_url(); ?>pages/delivered_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Delivered / Invoices</a>
                                </li>
								<?php foreach($user_dat As $Ses_key1){ 
									if($Ses_key1->user_type=='2'){
								?>
								<li><a href="<?php echo base_url(); ?>pages/add_order"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Sales</a>
                                </li> 
								<?php }}?>
                            </ul>                       
                    </li> 
					<?php }}?>
					
					<?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='4'){
			?>
					            <li ><span><i class="material-icons">new_releases</i>Spares<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                      
                            <ul>							 
                                <li><a href="<?php echo base_url(); ?>pages/add_spare"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Spare Master</a>
                                </li>                              
								 <li><a href="<?php echo base_url(); ?>pages/spare_stock"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Spare Stock</a>
                                </li>
								 <li><a href="<?php echo base_url(); ?>pages/add_new_stock"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Spare</a>
                                </li>
								<li><a href="<?php echo base_url(); ?>pages/add_spare_engineers"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Spare to Engrs</a>
                                </li>  
								<li><a href="<?php echo base_url(); ?>pages/sparereceipt"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Spare Receipt List</a>
                                </li>
								<li><a href="<?php echo base_url(); ?>pages/spare_purchase_order"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Create purchase order</a>
                                </li>
								<li><a href="<?php echo base_url(); ?>pages/purchase_orders"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Purchase orders</a>
                                </li>
								<li><a href="<?php echo base_url(); ?>pages/min_spare_alerts"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Min spare alerts</a>
                                </li>
                            </ul>                       
                    </li>  
					<?php }}?>
             
			 <?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='2'){
			?>
                  <li ><span><i class="material-icons">new_releases</i>
Expiring Product<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                       
                            <ul>							 
                                <li><a href="<?php echo base_url(); ?>pages/expiry_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Expiring Contracts</a>
                                </li>                              
								                              
                            </ul>                       
                    </li> 
			 <?php }}?>					
                 
				 <?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type=='1'){
			?>
                <!--<li><span><i class="fa fa-cogs"></i>
Product Service Status<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                 
                            <ul>							 
                                <li><a href="<?php echo base_url(); ?>pages/prod_service_stat_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Status List</a>
                                </li>                              
								 <li><a href="<?php echo base_url(); ?>pages/add_prod_service_stat"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Status</a>
                                </li>                               
                            </ul>                       
                    </li>-->  
					
					
			   <!--<li><span><i class="fa fa-folder-open"></i>
Product Category<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                      
                            <ul>							 
                                <li><a href="<?php echo base_url(); ?>pages/prod_cat_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Category List</a>
                                </li>                              
								 <li><a href="<?php echo base_url(); ?>pages/add_prod_cat"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Category</a>
                                </li>                               
                            </ul>                      
                    </li>  





                  <li><span><i class="fa fa-indent"></i>
Sub-Category<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>
                      
                            <ul>
							 
                                <li><a href="<?php echo base_url(); ?>pages/prod_subcat_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>SubCategory List</a>
                                </li>
                               <li><a href="<?php echo base_url(); ?>pages/add_prod_subcat"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New SubCategory</a>
                                </li>
                               
                            </ul>
                      
                    </li>            
                  
                                 <li ><span><i class="fa fa-chrome"></i>
Product Brand<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                        
                            <ul>							 
                                <li><a href="<?php echo base_url(); ?>pages/brandList"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Brand List</a>
                                </li>                              
								 <li><a href="<?php echo base_url(); ?>pages/add_brand"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Brand</a>
                                </li>                               
                            </ul>                      
                    </li>            
                  
               
			
			
			
			
                  <li ><span><i class="fa fa-cog"></i>
Service Category<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                     
                            <ul>							 
                                <li><a href="<?php echo base_url(); ?>pages/service_cat_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Service category List</a>
                                </li>                              
								 <li><a href="<?php echo base_url(); ?>pages/add_service_cat"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Service category</a>
                                </li>       
								<li><a href="<?php echo base_url(); ?>pages/add_service_charge"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Service Charge</a>
                                </li>
								<li><a href="<?php echo base_url(); ?>pages/service_charge_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Service charge List</a>
                                </li>
                            </ul>                      
                    </li>            
                  
              
			
			
			
                  <li ><span><i class="fa fa-map"></i>Service Zone<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>
                       
                            <ul>
							 
                                <li><a href="<?php echo base_url(); ?>pages/service_loc_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Zone List</a>
                                </li>
                              
								 <li><a href="<?php echo base_url(); ?>pages/add_service_loc"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Zone</a>
                                </li>
                               
                            </ul>
                       
                    </li>            
                  
                
			
			
			
                  <li ><span><i class="fa fa-cog"></i>
Problem Category<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>
                    
                            <ul>
							 
                                <li><a href="<?php echo base_url(); ?>pages/prob_cat_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Problem List</a>
                                </li>
                              
								 <li><a href="<?php echo base_url(); ?>pages/add_prob_cat"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Problem</a>
                                </li>
                               
                            </ul>
                        
                    </li>            
               
			
		
                  <li ><span><i class="fa fa-cog"></i>
Tax<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>                      
                            <ul>							 
                                <li><a href="<?php echo base_url(); ?>pages/tax_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Tax List</a>
                                </li>                              
								 <li><a href="<?php echo base_url(); ?>pages/add_tax"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Tax</a>
                                </li>                               
                            </ul>                      
                    </li>            
                  
              
			
			
                  <li ><span><i class="fa fa-cog"></i>
Customer Type<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>
                      
                            <ul>
							 
                                <li><a href="<?php echo base_url(); ?>pages/cust_type_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Customer Type List</a>
                                </li>
                              
								 <li><a href="<?php echo base_url(); ?>pages/cust_type"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>New Customer Type</a>
                                </li>
                               
                            </ul>
                       
                    </li>            
                  
               
			
			  <li ><a href="<?php echo base_url(); ?>pages/accessories_list" class="waves-effect waves-cyan"><i class="material-icons" style="margin-right: 1rem;">store</i> Accessories</a>
            </li>
			
			<li><span><i class="material-icons">people</i>
Users<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>
                     

                            <ul>
							 
                                <li><a href="<?php echo base_url(); ?>pages/user_cate_list"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>User List</a>
                                </li>
                              
								 <li><a href="<?php echo base_url(); ?>pages/add_user_cate"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Add User</a>
                                </li>
                               
                            </ul>                       
                    </li> 
				<?php }}?>
				
				<?php foreach($user_dat As $Ses_key1){ 
				if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='2' || $Ses_key1->user_type=='5' || $Ses_key1->user_type=='6' || $Ses_key1->user_type=='4'){
			?>
				<li><span><i class="fa fa-cog"></i>
				  
				  Reports<i class="fa fa-angle-down"style="float: right; width: 5px;font-size: 19px;"></i></span>
				  
				  <ul>
				  
				  <?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1'){
				?>
					<li><a href="<?php echo base_url();?>pages/revenuereport" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Service Report</a></li>
					<?php }}?>
				  
				  <?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='2'){
				?>
					<li><a href="<?php echo base_url();?>pages/report_list" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Revenue Report</a></li>
				<?php }}?>
				
				<?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1'){
				?>
					<li><a href="<?php echo base_url();?>pages/engineer_servicereport_list" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Engineers Report</a></li>
					<?php }}?>
					
				<?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1'){
				?>
					<li><a href="<?php echo base_url();?>pages/customerreport_list" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Customer Report</a></li>
				<?php }}?>
				
				
				<?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1'){
				?>
					<li><a href="<?php echo base_url();?>pages/service_mach_report" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Service Machines Report</a></li>
				<?php }}?>


				<?php foreach($user_dat As $Ses_key1){ 
						if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='2'){
				?>
                     <li><a href="<?php echo base_url(); ?>pages/expiry_list1"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Warranty Expired Reports</a>
                     </li>                         
			 <?php }}?>	
				
				
				
				<?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1'){
				?>
					<li><a href="<?php echo base_url();?>pages/agingreport" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Aging Report</a></li>
					<?php }}?>
					
					
				
				<?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='4'){
				?>
					<li><a href="<?php echo base_url();?>pages/sparereport_list" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Spare Report</a></li>
				<?php }}?>
				
				
				<?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='4'){
				?>
					<li><a href="<?php echo base_url();?>pages/engineerreport_list" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Spare to Engineer Report</a></li>
					<?php }}?>
					
				
				<?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='4'){
				?>
					<li><a href="<?php echo base_url();?>pages/sparepurchase_list" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>SparePurchase Report</a></li>
				<?php }}?>
				
				<?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='4'){
				?>
					<li><a href="<?php echo base_url();?>pages/sparecharge_list" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>SpareCharge Report</a></li>
				<?php }}?>
				
					
					
				<?php foreach($user_dat As $Ses_key1){ 
					if($Ses_key1->user_type=='1' || $Ses_key1->user_type=='6'){
				?>
					<li><a href="<?php echo base_url();?>pages/stampingreport_list" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>StampingReport1</a></li>
					<li><a href="<?php echo base_url();?>pages/monthlyreport_list" class="waves-effect waves-cyan"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Stamping Monthly</a></li>
					
				<?php }}?>
				
					</ul>
					</li> 
			
			
				 <?php }}?>
					
					
</ul>
   
   
   
       
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="fa fa-bars"></i></a>
      </aside>-->
	   <!--color plugin-->
	<!-- Font Awesome -->
        <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/default.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>
        <!-- Material Design for Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/material-wfont.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/ripples.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/default.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/piklor.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/handlers.js"></script>	
		
		
		