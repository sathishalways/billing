<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    var i=1;
    $("#addRowBtn").click(function(){
        $('  <tr><td>  <select id="sparename_'+i+'">  <option value="">---Select---</option>  <option>Spare 1</option>  <option>Spare 2</option>  <option>Spare 3</option>  <option>Spare 4</option>  </select> <div class="spare-error'+i+'"></div> </td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td> <td style="border:none;"><button class="delRowBtn" style="font-size:20px;"><i class="fa fa-trash-o"></i></button></td></tr>').appendTo(tbl);  
		
		$("#resgister").click(function(event){
			//alert("test");
			if($("#sparename_"+i).find("option:selected").attr("value")==""){
				alert("inside if");
				$(".spare-error"+i).text("Please choose any one spare").show().css({
					'font-size':'12px',
					'color':'#ff0000'
				});
				event.preventDefault();
			}
		});
		
		i++;
    });
   
    $(document.body).delegate("#delRowBtn1", "click", function(){
        
		
		$(this).closest("tr").remove();       
    });    
    
});
});//]]>  

</script>

    
	<script>
	$(document).ready(function(){
	$('#addMoreRows').click(function(){
		var count_id = $('#count_id').val();
		var cnt = parseInt(count_id) + 1;
		var tbl = $("#table11 > tbody"); 		
		$('<tr><td><select name="p_name[]" id="p_name-'+cnt+'" class="form-control" style="width: 80% !important;"><option value="">--Select--</option><?php foreach($prod_list as $prod_key){?><option value="<?php echo $prod_key->id; ?>"><?php echo $prod_key->model; ?></option><?php } ?></select></td><td><input type="text" style="width: 80% !important;" name="price[]" id="price-'+cnt+'" maxlength="7" class="price"></td><td><input type="text" style="width: 80% !important;" name="qty[]" id="qty-'+cnt+'" class="qty" maxlength="7"></td><td><input type="text" style="width: 80% !important;" readonly name="sub_total[]" id="sub_total-'+cnt+'"></td><td style="width:50px;"><span id="delRowBtn1" class="fa fa-trash-o"></span></td></tr>').appendTo(tbl);
		$('#count_id').val(cnt);
	});
	});
	</script>
	
  <style>
td, th {
    padding: 15px 5px;
    display: table-cell;
    text-align: left;
    vertical-align: top;
    border-radius: 2px;
}
  label {
    display: inline-block;
    max-width: 100%;
   margin-bottom: 0px !important;
    font-weight: 700;
}
  .tableadd tr td input {
    width: 100% !important;
	border:none;
 }
 .tableadd tr td select {
    width: 100% !important;
	
 }
 .tableadd2 tr td select {
    width: 100%;
	margin-bottom: 15px;
 }
/* .tableadd2 tr.back td {
   background: #6c477d !important;
	border: 1px solid #6c477d !important;
	color: #fff;
    padding: 8px;
} */
.tableadd2 tr.back td {
   background: black !important;
	border: 1px solid #ccc !important;
	color: #fed700;
    padding: 8px;
	font-weight:bold;
}
 .tableadd tr td label{
	width: 100% !important;
font-weight: bold;
font-size: 13px;
	 
 }
 td a > span.fa {
 background:#6c477d;
    color: #fff !important;
	width: 32px;
}
	.breadcrumbs-title {
		font-size: 1.8rem;
		line-height: 5.804rem;
		margin: 0 0 0;
		color:#6C217E;
		font-weight:bold;
	}
 .box{

    padding: 20px;

    display: none;

    margin-top: 20px;

    box-shadow:none !important;

}

.box1{
    display: none;

}

.rating label {
    font-weight: normal;
    padding-right: 5px;
}
    .rating li {
    display: inline;
}

input[type=text], input[type=textarea], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
	width: 100% !important;
	 border:1px solid #ccc !important;
}
[type="radio"]:not(:checked), [type="radio"]:checked { 
	position:relative;
}
[type="radio"] + label:before, [type="radio"] + label:after {

}
[type="radio"] + label:before, [type="radio"] + label:after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	margin: 4px;
	width: 16px;
	height: 16px;
	display:none;
	z-index: 0;
	-webkit-transition: 0.28s ease;
	-moz-transition: 0.28s ease;
	-o-transition: 0.28s ease;
	-ms-transition: 0.28s ease;
	transition: 0.28s ease;
}
[type="radio"]:not(:checked) + label, [type="radio"]:checked + label {
	position: relative;
	padding-left: 5px;
	cursor: pointer;
	display: inline-block;
	height: 25px;
	line-height: 25px;
	font-size: 14px;
	-webkit-transition: 0.28s ease;
	-moz-transition: 0.28s ease;
	-o-transition: 0.28s ease;
	-ms-transition: 0.28s ease;
	transition: 0.28s ease;
	-webkit-user-select: none;
	-moz-user-select: none;
	-khtml-user-select: none;
	-ms-user-select: none;
}
.tableadd {
	padding: 0px;
 } 	

.chosen-container {
	position:relative;
	right:20px;
}
 /*.addressdiv, .toggleaddress {
		display: none;
	}*/


@media only screen and (min-width: 301px){
		.xdsoft_datetimepicker .xdsoft_datepicker.active+.xdsoft_timepicker {
			margin-top: 41px !important;
			margin-bottom: 3px;
		}

		.xdsoft_datetimepicker .xdsoft_datepicker {
			width: 154px !important;
			float: left;
			margin-left: 8px;
		}
	}


	@media only screen and (max-width: 350px) {
		.headerDivider {
			border-left:1px solid #c5c5c5 !important; 
			border-right:1px solid #c5c5c5 !important; 
			height:25px  !important;
			position: absolute !important;
			top:102px !important;
			left: 40px !important;
		}

		.toggleaddress {
			display: none;
		}
	}
		
	.fa {
		margin-right: 15px;
	}
	input[type=radio] {
		margin-left: 10px;
		margin-right: 2px;
	}
	.col-md-2, .col-md-1 {
		padding:0px;
	}
	.headerDivider {
		border-left:1px solid #c5c5c5; 
		border-right:1px solid #c5c5c5; 
		height:25px;
		position: absolute;
		top:73px;
		left: 280px;
	}
	textarea {
		width: 100%;
		height: auto !important;
		background-color: transparent;
	}
	.noresize {
		resize: none;
	}
	.linkaddress {
		cursor: pointer;
	}
	#errorBox {
		color:#F00;
	}
	.tableadd2 tr td input {
		margin: 10px;
		height: 30px;
	}

 @media only screen and (max-width: 380px) {
    td {
    	padding: 3px !important;
    }
    a {
    	padding: 3px !important;
    }
    select {
        width: 100px !important;
    }
    .tableadd2 tr td input {
	    border-radius: 5px;
	    height: 33px;
	    margin-top: 17px;
	    width: 50px;
	    margin-left: 3px;
	    margin-right: 3px;
	}
	.tableadd2 tr td select {
		padding: 0 30px 0 0;
	}
}
@media only screen and (max-width: 768px) and (min-width: 240px) {
	ol, ul {
		margin-top: 0;
		margin-bottom: 0 !important;
	}
}
/*.cyan {
    background-color: #6c477d !important;
	width: 90px;
}*/
.cyan {
    background-color: black !important;
	color:#fed700;
	width: 90px;
}
label.appendfont{
		border:none !important;
		font-size: 0.85em !important;
	}
span.pagerefresh{
	color: #444 !important;
}
input:read-only{
	background:#eee;
	border:1px solid #ccc;
	height:30px;
}
input[type=text]{
	
	/*border:1px solid #ccc;
	height:30px;*/
	padding-left: 10px;padding-right: 10px;
}
input:-moz-read-only {
    background-color: #eee !important;
}

textarea:read-only{
	border:1px solid #ccc;
	height:30px;
	background:#eee;
}
.header-buttons{
	width: 190px;
    position: relative;
    left: 235px;
}
select{
	width:84%;
}
input[type=text], input[type=textarea], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    width: 100%; 
}
.btn{text-transform:none !important;}
.chosen-container .chosen-drop {
    position: absolute;
    width: auto !important;
}

/* a > span.fa {
    color: #6c477d !important;
}
 */
 
 #errorBox_name{
		font-size:11px;
		position: relative;
	}
  </style>
  

<script>
$(document).ready(function(){
   $('.work_spare_name').change(function(){ //alert("hiiio");
	var idd=$(this).closest(this).attr('id');
	//alert(idd);
	var arr = idd.split('_');
	var ctid = arr['1'];
	//alert(ctid);
   var id = $(this).val();
   //alert("spareid: "+id);
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>quotereview/getsparedet",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#spare_qty1'+ctid).val(data.spare_qty),
		   $('#amt1'+ctid).val(data.sales_price),
		   $('#used_spare'+ctid).val(data.used_spare)
		   
    });

} 
});

var engid;
	if($('#eng_idd').val()!=0){
	 engid=$('#eng_idd').val();
	}else{
	 engid=$('#eengid').val();
	}
	
	var datastrings='spareid='+id+'&engid='+engid;
	
	
	
		 
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>work_inprogress/getpettyspare",
data: datastrings,
cache: false,
success: function(data)
{ //alert(data);

$.each(data, function(index, data){
		  //alert(data.qty_plus);

		   //var qtyplus=data.qty_plus;
     //alert(qty);
	 $('#qty_plus'+ctid).val(data.qty_plus);


	});


}
});


   });
 });
</script>
<script>
		$(document).ready(function(){
			$( ".pagerefresh" ).click(function() {
				location.reload(true);
			});
			$('#cust_name').change(function() {
				if($(this).val()==""){
					$("#errorBox_name").show();
				}else{
					$("#errorBox_name").hide();
					var id=$(this).val();
					//alert(id);
					var dataString = 'id='+ id;
					$.ajax
						({
					type: "POST",
					url: "<?php  echo base_url(); ?>Order/get_customerById",
					data: dataString,
					cache: false,
					success: function(data) 
					{ 	
						$.each(data, function(index, data){
							$('#mobile').val(data.mobile);
							$('#address').val(data.address);
							$('#city_name').val(data.city);
							$('#state_name').val(data.st_name);
							$('#pincode').val(data.pincode);
							$('#email_id').val(data.email_id);
						});
					} 
					});
				}
	
				

			});
		});
	</script>
	
<script>
function frmValidate(){ 
 var bill_no = document.add_bills.bill_no.value,
   cust_name = document.add_bills.cust_name.value,
   mobile = document.add_bills.mobile.value,
   address = document.add_bills.address.value,
   city_name = document.add_bills.city_name.value,
   state_name = document.add_bills.state_name.value,
   pincode = document.add_bills.pincode.value,
   puchase_date = document.add_bills.puchase_date.value;
   
 if( bill_no == "" )
   {
     document.add_bills.bill_no.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the bill #.";
     return false;
   }
   
  if( cust_name == "" )
   {
     document.add_bills.cust_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the customer name.";
     return false;
   }
   
   if( mobile == "" )
   {
     document.add_bills.mobile.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the mobile.";
     return false;
   }
   
   if( address == "" )
   {
     document.add_bills.address.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the address.";
     return false;
   }
   
   if( city_name == "" )
   {
     document.add_bills.city_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the city.";
     return false;
   }
   
   if( state_name == "" )
   {
     document.add_bills.state_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the state.";
     return false;
   }
   
   if( pincode == "" )
   {
     document.add_bills.pincode.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the pincode.";
     return false;
   }
   if( puchase_date == "" )
   {
     document.add_bills.puchase_date.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the puchase date.";
     return false;
   }
   
}


</script>
	


	
<section id="content">

    <div class="container">
        <div class="section">
			
			<div class="header-buttons pull-right"><a class="btn cyan waves-effect waves-light" onclick="history.go(-1);" style="width:19%;margin-right:10px;height:29px;padding:3px 7px;"><span class="fa fa-arrow-left" data-toggle="tooltip" title="Back"></span></a> <div class="headerDivider"></div><span class="fa fa-refresh pagerefresh" data-toggle="tooltip" title="Refresh"></span></div>
			
			
            <h2 >Add Bills</h2>
			
			<div class="divider"></div>
         
            <div id="basic-form" class="section">			
			
				<div class="card-panel">
			
              		<div class="row">
			  
                		<div>
                 
      						<form action="<?php echo base_url(); ?>order/add_bills" method="post" name="add_bills" id="add_bills">
                        		<div id="errorBox"></div>        

								<div class="tableadd col-md-12">
									<div class="col-md-12" id="radio_errorbox" style="color:red;font-size:11px;margin-left: 0px;"></div>
									<!--<div class="col-md-6">-->
									<div class="col-md-12">
										<div class="col-md-3">
											<div class="form-group">
												<label>Bill #:&nbsp;<span style="color:red;">*</span></label>
												<input type="text" name="bill_no" class="form-control" value="<?php echo $cnt; ?>" readonly>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Customer Name:&nbsp;<span style="color:red;">*</span></label>
												<select name="cust_name" id="cust_name" class="form-control cust_name">
													<option value="">--Select--</option>
													<?php foreach($customer_list as $cust_key){?>
													<option value="<?php echo $cust_key->id; ?>"><?php echo $cust_key->customer_name; ?></option>
													<?php } ?>
												</select>
												<div id="errorBox_name" style="color:red;"></div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Mobile:&nbsp;<span style="color:red;">*</span></label>
												<input type="text" name="mobile" id="mobile" class="form-control" value="" readonly>
											</div>
										</div>
										
										<div class="col-md-3">
											<div class="form-group">
												<label>Address: &nbsp;<span style="color:red;">*</span></label>
												<textarea name="address" id="address" class="form-control" rows="1" readonly></textarea>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="col-md-3">
											<div class="form-group">
												<label>City&nbsp;<span style="color:red;">*</span></label>
												<input type="text" name="city_name" class="form-control" id="city_name" value="" readonly>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>State:&nbsp;<span style="color:red;">*</span></label>
												<input type="text" name="state_name" class="form-control" id="state_name" value="" readonly>
											</div>
										</div>
										
										<div class="col-md-3">
											<div class="form-group">
												<label>Pincode:&nbsp;<span style="color:red;">*</span></label>
												<input type="text" name="pincode" class="form-control" id="pincode" value="" readonly>
											</div>
										</div>
										
										<div class="col-md-3">
											<div class="form-group">
												<label>Purchase Date:&nbsp;<span style="color:red;">*</span></label>
												<input type="text" name="puchase_date" id="datetimepicker7" class="date form-control" value="<?php date_default_timezone_set('Asia/Calcutta'); echo date('Y-m-d H:i')?>" style="padding: 0px !important;" >
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="col-md-3">
											<div class="form-group">
												<label>E-Mail:&nbsp;<span style="color:red;">*</span></label>
												<input type="text" name="email_id" id="email_id" value="" readonly>
											</div>
										</div>
									</div>		
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 30px;">
										<h5 class="breadcrumbs-title">Add Products</h5>
										<div class="table-responsive">
										 	<table id="table11" class="tableadd2 table" style="margin-bottom: 20px; margin-left: 0px;">
										  		<thead style="border: 0;">
											  		<tr class="back" > 
											  			<td>Product Name</td>
											  			<td>Unit Price</td>
											  			<td>Qty</td>
											  			<td>Sub Total</td>
											  			<td>Action</td>
											  		</tr>
											  	</thead>
										   		<tbody>
													<tr> 
														<td>
															<div class="form-group">
																<select name="p_name[]" id="p_name-0" class="form-control" style="width: 80% !important;">
																	<option value="">--Select--</option>
																	<?php foreach($prod_list as $prod_key){?>
																	<option value="<?php echo $prod_key->id; ?>"><?php echo $prod_key->model; ?></option>
																	<?php } ?>
																</select>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="text" name="price[]" id="price-0" class="form-control price" style="width: 80% !important;" maxlength="7">
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="text" name="qty[]" id="qty-0" class="qty" class="form-control" maxlength="7" style="width: 80% !important;">
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="text" name="sub_total[]" id="sub_total-0" class="form-control" readonly style="width: 80% !important;">
															</div>
														</td>
														<td style="width:50px;"></td>
														
													</tr>
												</tbody>
										  	</table>
										</div>
										
										<div align="right"><a id="addMoreRows"><span class="fa fa-plus"></span></a></div>
										<div class="form-group">
											<input type="hidden" name="count_id" id="count_id" value="0" class="form-control" style="padding: 0;">
										</div>
										<div class="col-md-12">
										<div class="col-md-9"></div>
										<div class="col-md-1" style= "margin-left:-4%;margin-top:0.5%;">
											<label>Sub Total: </label>
											</div>
											<div class="col-md-2">
											<input type="text" name="sub_total1" id="sub_total1" class="form-control" readonly style="padding: 0;">
										
										</div>
										</div>
										
										<div class="col-md-12">
										<div class="col-md-9"></div>
										<div class="col-md-1" style= "margin-left:-4%;margin-top:0.5%;">
										
											<label>Discount(in % only): </label>
											</div>
											<div class="col-md-2">
											<input type="text" name="disc_amt" id="disc_amt" maxlength = "7" class="form-control" style="padding: 0;">
										
										</div>
										</div>
										
										<div class="col-md-12">
										<div class="col-md-9"></div>
										<div class="col-md-1" style= "margin-left:-4%;margin-top:0.5%;">
										
										
											<label>Grand Total: </label>
											</div>
											<div class="col-md-2">
											<input type="text" name="grand_total" id="grand_total" class="form-control" style="padding: 0;" readonly></div>
										
										</div>
										</div>

										<div class="tableadd col-md-12">
											<table class="tableadd" style="margin-top: 25px;">
												<tr>
													<td>
														<!--<button class="btn cyan waves-effect waves-light " type="submit" id="submit">Submit
													   	</button>-->
														<a href="#" class="btn cyan waves-effect waves-light " type="submit" id="submit">Submit
													   	</a>
														<a href='<?php  echo base_url(); ?>pages/dash' class="btn cyan waves-effect waves-light ">Exit</a>
													</td>
												</tr>
											</table>
		                        		</div>
		                        	</div>
		                        </div>
                     
                      		</form>
                  
                
                		</div>
             
			  		</div>
              	</div>
			</div>
        </div>
    </div>

</section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet">
   <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
   


<script>
$(function(){

$(document.body).delegate(".qty", "keyup", function(evt){
	var idd=$(this).closest(this).attr('id');
	//alert(idd);
	var arr = idd.split('-');
	var ctid = arr['1'];
	
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (isNaN($('#qty-'+ctid).val())) {
      alert("Please enter only Numbers.");
      $('#qty-'+ctid).val('');
    }else{
		if($('#price-'+ctid).val()==''){
		alert("Please enter the price");
		$('#qty-'+ctid).val('');
		$('#sub_total-'+ctid).val('');
	}else{
		if(parseInt($(this).val()) && $(this).val()){
			
			if(parseInt($('#price-'+ctid).val())){
				var cal_amt = parseInt($(this).val()) * parseInt($('#price-'+ctid).val());
				if(parseInt(cal_amt)){
					$('#sub_total-'+ctid).val(cal_amt);
				}
			}
			
			if(parseFloat($('#price-'+ctid).val())){
				var cal_amt = parseInt($(this).val()) * parseFloat($('#price-'+ctid).val());
				if(parseFloat(cal_amt) || parseInt(cal_amt)){
					$('#sub_total-'+ctid).val(cal_amt);
				}
			}
			
			
		}else{ 
			   $('#sub_total-'+ctid).val('');
		}
	}
	 

	   var vals = 0;
	   var ii=0;
	   $('input[name="sub_total[]"]').each(function() { 
			vals += Number($(this).val());
			$('#sub_total1').val(vals);
			ii++;
		});
		$('#grand_total').val(vals);
	}
	
	
	
});

$(document.body).delegate(".price", "keyup", function(evt){
	var idd=$(this).closest(this).attr('id');
	var arr = idd.split('-');
	var ctid = arr['1'];
	
    if (isNaN($('#price-'+ctid).val())) {
      alert("Please enter only Numbers.");
      $('#price-'+ctid).val('');
    }
});

$( "#submit" ).click(function( event ) { 
   
  if ( $( "#cust_name" ).val() === "" ) {
	$( "#errorBox_name" ).text( " Enter the Customer Name" ).show();
    event.preventDefault();
  }else{
  	$( "#add_bills" ).submit();
  }
 }); 


				
});
</script>  

<script>
$('#disc_amt').keyup(function(evt) { 
	
	var disc_amt = $( this ).val();
	var total_amt = $('#sub_total1').val();
	
	  evt = (evt) ? evt : window.event;
	  var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (isNaN(disc_amt)) {
        alert("Please enter only Numbers.");
       $('#disc_amt').val('');
      }else{
		  if(disc_amt && total_amt){
			
			//alert(total_amt);
			var disc_amt = $( this ).val();
			//alert(disc_amt);
			var discount_amt = (parseInt(total_amt) * parseInt(disc_amt)) / 100;
			//alert(discount_amt);
			var result = parseInt(total_amt) - parseInt(discount_amt);
			
			$('#grand_total').val(result);
		}else{
			var total_amt = $('#sub_total1').val();
			
			$('#grand_total').val(total_amt);
		}
	  }
	
	
});

</script>


<script>
$(document).ready(function(){
$.datetimepicker.setLocale('en');

$('#datetimepicker_mask').datetimepicker({
	mask:'9999-19-39 29:59'
});


var logic = function( currentDateTime ){
	if (currentDateTime && currentDateTime.getDay() == 6){
		this.setOptions({
			minTime:'11:00'
		});
	}else
		this.setOptions({
			minTime:'8:00'
		});
};
$('#datetimepicker7').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

$('#datetimepicker71').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

});
</script>


<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.datetimepicker.full.js'></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css">

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   
	   <!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	
</body>



</html>