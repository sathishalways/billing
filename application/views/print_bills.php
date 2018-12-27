<style>
		#printArea { padding: 20px;}
		#printArea .PrintCnt{ border: 1px solid #999; padding: 0 7px 0 7px; box-shadow: 0 0 0 10px hsl(0, 0%, 80%),0 0 0 15px hsl(0, 0%, 90%);}
		#printArea .head-part {background-color: #ccc; padding: 10px; text-align: center; border: 1px solid #999; box-shadow: inset 0 0 10px #888;}
		#printArea .head-part p { font-size: 18px; color: #666;}
		#printArea .body-part { padding: 10px;}

		#printArea .btn-print { border-radius: 0;border: 2px solid #ffffff; outline: 1px solid #ccc;}
		#printArea .body-part table tr, #printArea .body-part table th, #printArea .body-part table td {}

		}
		@media print {
		   .btn-print { display: none;}
		}
		
		 	@page { margin: 0; }
  			body { margin: 1.6cm;}
			
	.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
				padding: 2px 7px !important;
				line-height: 1.12857143;
				vertical-align: top;
				border-top: 1px solid #ddd !important;
				font-size: 14px;
			
			}
			
			
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
	<div class="row" id="printArea">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border: 1px solid #999;"><!-- box-shadow: 0 0 0 10px hsl(0, 0%, 80%), 0 0 0 15px hsl(0, 0%, 90%); -->
			<div class="row">
				<!-- <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<h1>PC</h1>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
					<p style="font-size: 18px; color: #666;">Building No, Street Name, Place Name</p>
					<p style="font-size: 18px; color: #666;">District, state-pincode</p>
				</div> -->

				<table class="table" style="border-bottom: 1px solid #ccc; background-color: #336499;">
					<tbody>
						<tr>
							<td style="width: 20%; border-top: 0 !important;">
								<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="materialize logo" style="height:70px;color:#fff;float:left;position:relative;margin-top: 25px;" class="saturate">
							</td>
							<td style="width: 80%; padding-top: 20px; border-top: 0 !important;">
								<p style="font-size: 18px; color: #ffffff; font-weight: bold; text-align: center;font-size: 24px;">Parshva Creations</p>
								<p style="font-size: 18px; color: #ffffff; text-align: center;">7, Balaji Complex, Elephant Gate Street, (Near Jain Temple Mint Street), Sowcarpet</p>
								<p style="font-size: 18px; color: #ffffff; text-align: center;">Tamil Nadu, Chennai - 600079</p>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
			<div class="row body-part" style="padding: 10px;">

				<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h4 style="border: 0; padding: 10px;border-bottom: 1px solid #ccc; width: 23%; text-align: center;">Personal Details</h4>
					<div class="table-responsive">
						<table class="table" style="border: 1px solid #ccc;text-align: center">
							<thead>
								<tr style=" color: #444;background-color: #f2f2f2;">
									<th style=" text-align: center;border: 1px solid #ccc;">Bill No</th>
									<th style=" text-align: center;border: 1px solid #ccc;">Customer Name</th>
									<th style=" text-align: center;border: 1px solid #ccc;">Mobile</th>
									<th style=" text-align: center;border: 1px solid #ccc;">Address</th>
									<th style=" text-align: center;border: 1px solid #ccc;">City</th>
									<th style=" text-align: center;border: 1px solid #ccc;">State</th>
									<th style=" text-align: center;border: 1px solid #ccc;">Pincode</th>
									<th style=" text-align: center;border: 1px solid #ccc;">Purchase Date</th>
								</tr>
							</thead>
							<tbody>
								<tr><td style="border: 1px solid #ccc;">Content</td><td style="border: 1px solid #ccc;">Content</td><td style="border: 1px solid #ccc;">Content</td><td style="border: 1px solid #ccc;">Content</td><td style="border: 1px solid #ccc;">Content</td><td style="border: 1px solid #ccc;">Content</td><td style="border: 1px solid #ccc;">Content</td><td style="border: 1px solid #ccc;">Content</td></tr>
							</tbody>
						</table>
					</div>
				</div> -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h4 style="border: 0; padding: 10px; width: 23%;margin-left:-9px;">Billing Details</h4>
					<div class="table-responsive">
						<table class="table" style="border: 1px solid #ccc;margin-top: -10px;">
						<?php foreach($getorderbyid as $ord_key){?>
							<tbody>
								<table style="width: 49%; border: 1px solid #ccc;line-height:5px;" align="left">
									<tbody>
										<tr><td style="padding: 10px;">Bill No</td><td>:</td><td><?php echo $ord_key->order_id; ?></td></tr>
										<tr><td style="padding: 10px;">Customer Name</td><td>:</td><td><?php echo $getCustDetails->customer_name; ?></td></tr>
										<tr><td style="padding: 10px;">Mobile</td><td>:</td><td><?php echo $ord_key->mobile; ?></td></tr>
										<tr><td style="padding: 10px;">Address</td><td>:</td><td><?php echo $ord_key->address; ?></td></tr>
									</tbody>
								</table>
								<table style="width: 49%; border: 1px solid #ccc;line-height:5px;" align="right">
									<tbody>
										<tr><td style="padding: 10px;">City</td><td>:</td><td><?php echo $ord_key->city; ?></td></tr>
										<tr><td style="padding: 10px;">State</td><td>:</td><td><?php echo $ord_key->state; ?></td></tr>
										<tr><td style="padding: 10px;">Pincode</td><td>:</td><td><?php echo $ord_key->pincode; ?></td></tr>
										<tr><td style="padding: 10px;">Purchase Date</td><td>:</td><td><?php echo $ord_key->purchase_date; ?></td></tr>
									</tbody>
								</table>
							</tbody>
						<?php } ?>
						</table>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h4 style="border: 0; padding: 10px; width: 23%;margin-left:-9px;">Product Details</h4>
					<div class="table-responsive">
						<table class="table" style="border: 1px solid #ccc;">
							<thead>
								<tr style=" color: #444; background-color: #f2f2f2;">
									<th style=" text-align: center;border: 1px solid #ccc;">Product Name</th>
									<th style=" text-align: center;border: 1px solid #ccc;">Unit Price</th>
									<th style=" text-align: center;border: 1px solid #ccc;">Qty</th>
									<th style=" text-align: center;border: 1px solid #ccc;">Total Amount</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($getorderDetailsbyid as $keyy){?>
								<tr style=" text-align: center;"><td style="border: 1px solid #ccc;"><?php echo $keyy->p_name; ?></td><td style="border: 1px solid #ccc;"><?php echo $keyy->price; ?></td><td style="border: 1px solid #ccc;"><?php echo $keyy->qty; ?></td><td style="border: 1px solid #ccc;"><?php echo $keyy->sub_total; ?></td></tr><tr></tr>
							<?php } ?>
							<?php foreach($getorderbyid as $ord_key){?>
							<tr style=" text-align: center;"><td colspan="2" style="border: 1px solid #fff;border-right:1px solid #ccc;"></td>
							<td style="border: 1px solid #ccc;">Sub total</td><td><?php echo $ord_key->sub_total; ?></td></tr>
								<tr style=" text-align: center;"><td colspan="2"style="border: 1px solid #fff;border-right:1px solid #ccc;"></td><td style="border: 1px solid #ccc;">Discount</td><td><?php echo $ord_key->disc; ?></td></tr>	
								<tr style=" text-align: center;"><td colspan="2" style="border: 1px solid #fff;border-right:1px solid #ccc;"></td><td style="border: 1px solid #ccc;">Grand total</td><td><?php echo $ord_key->grand_total; ?></td></tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 20px;text-align: center;">
					<button id="" class="btn btn-lg fa fa-print" onclick="printDiv('printArea')"> Print</button>
				</div>
			</div>
</div>	


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet">
   <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>

<script>
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>


<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.datetimepicker.full.js'></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css">

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
	   
	   <!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	