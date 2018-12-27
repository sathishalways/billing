<!DOCTYPE html>
<html lang="en">



<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  
 
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
   
    <link href="<?php echo base_url(); ?>assets/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
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
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>   
	  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/addtable.js'></script>
	  
	  
	  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	  <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
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
	  </style>
	  
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">

			$(document).ready( function() {
				
				// initialize accordion
				$('.Accordion ul').each( function() {
					var currentURI = window.location.href;
					var links = $('a', this);
					var collapse = true;
					for (var i = 0; i < links.size(); i++) {
						var elem = links.eq(i);
						var href = elem.attr('href');
						var hrefLength = href.length;
						var compareTo = currentURI.substr(-1*hrefLength);
						
						if (href == compareTo) {
							collapse = false;
							break;
						}
					};
					if (collapse) {
						$(this).hide();
					}
				});
				
				$(".Accordion").delegate('span', 'click', function() {
					var ul = $(this).next('ul');
					if (ul.is(':visible')) {
						ul.slideUp(500);
					} else {
						$('.Accordion ul').not(ul).slideUp(500);
						ul.slideDown(500);
					}
				});
			});
		</script>
		
		<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$('.Accordion').on('click', 'li a', function(){
    $('.Accordion li a').removeClass('active');
    $(this).addClass('active');
});


});//]]> 

</script>

	  
</head>

<body>

  <!--<div id="loader-wrapper">
    <!--  <div id="loader"></div>   -->     
    <!--  <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>-->





  <header id="header" class="page-topbar">
      
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">                    
                    
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><?php foreach($user_dat As $Ses_key1){if($Ses_key1->user_type!='7'){ ?><a href="<?php echo base_url(); ?>pages/dash" class="brand-logo darken-1">
					  <!--<img src="<?php echo base_url(); ?>assets/images/logoservice1.png" alt="materialize logo"><img src="<?php echo base_url(); ?>assets/images/maxsell-logo1.png" alt="materialize logo">-->
					 <img src="<?php echo base_url(); ?>assets/images/srs.png" alt="materialize logo" style="width:230px;height:50px">
					  </a> <?php } }?> <?php foreach($user_dat As $Ses_key1){if($Ses_key1->user_type=='7'){ ?><a href="<?php echo base_url(); ?>pages/dash" class="brand-logo darken-1">
					  <!--<img src="<?php echo base_url(); ?>assets/images/logoservice1.png" alt="materialize logo"><img src="<?php echo base_url(); ?>assets/images/maxsell-logo1.png" alt="materialize logo">-->
					 <img src="<?php echo base_url(); ?>assets/images/srs.png" alt="materialize logo" style="width:230px;height:50px">
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
        </div>
      
  </header>


 
  <div id="main">
   
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

		.toggle-fullscreen:hover
		{
			color:white !important;
		}
		.toggle-fullscreen:focus
		{
			color:white !important;
		}
		.Accordion li.active a
		{
			color:black;
		}

		@media only screen and (max-width: 992px){
			.hide-on-med-and-down {
			    display: block !important;
			}
			header .brand-logo img {
			    width: 172px !important;
			    position: relative;
			    right: 75px;
			    bottom: 8px;
			}
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

   <aside id="left-sidebar-nav">   
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
								<li><a href="<?php echo base_url(); ?>pages/quote_approved"><i class="fa fa-arrow-right" style="font-size: 14px;"></i>Awaiting Approvals</a>
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
					
					
			   <li><span><i class="fa fa-folder-open"></i>
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
      </aside>