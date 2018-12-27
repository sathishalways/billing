<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('  <tr><td>  <select>  <option>---Select---</option>  <option>Spare 1</option>  <option>Spare 2</option>  <option>Spare 3</option>  <option>Spare 4</option>  </select>  </td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td> <td style="border:none;"><button class="delRowBtn" style="font-size:20px;"><i class="fa fa-trash-o"></i></button></td></tr>').appendTo(tbl);  
		
    });
   
    $(document.body).delegate(".delRowBtn1", "click", function(){
        var vals = $('#spare_tot').val();
	   
		var idd=$(this).closest(this).attr('id');
		// alert(idd);
		var arr = idd.split('_');
		var ctid = arr['1'];
		//alert(ctid);
		//alert($('#amt'+ctid).val());
		var vals = $('#spare_tot').val();
		
		vals -= Number($('#amt'+ctid).val());
		//alert(vals);
		$('#spare_tot').val(vals);
		
		var tax_amt = (vals * $('#tax_type').val()) / 100;
		var warran = $('#spare_tax1').val();
		var amc_type = $('#amc_typ').val();
		
		if(warran=='Preventive' || warran=='Warranty' || amc_type=='Comprehensive'){
			$('#spare_tax').val(0);
			$('#spare_tot').val(0);
			$('#labourcharge').val(0);
			$('#concharge').val(0);
			$('#total_amt').val(0);
			$('#total_amt1').val(0);
		}else{
			$('#spare_tax').val(tax_amt);
			var tax = $('#spare_tax').val();
			var total_spare_charge = $('#spare_tot').val();
			var labourcharge = $('#labourcharge').val();
			var concharge = $('#concharge').val();
		
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(labourcharge) + parseInt(concharge);
			//alert(Total_amount);
			$('#total_amt').val(Total_amount);
		}
		
		$(this).closest("tr").remove();       
    });    
    
});
});//]]>  

</script>
    <script type="text/javascript">

    $(document).ready(function(){

        $("select").change(function(){

            $(this).find("option:selected").each(function(){

                if($(this).val()=="3"){

                    $(".box").not(".ready").hide();

                    $(".ready").show();

                }

                else if($(this).val()=="4"){

                    $(".box").not(".delivery").hide();

                    $(".delivery").show();

                }
				
				else if($(this).val()=="9"){

                    $(".box").not(".onhold").hide();

                    $(".onhold").show();

                }
				
                else if($(this).attr("value")=="blue"){

                    $(".box").not(".blue").hide();

                    $(".blue").show();

                }else if($(this).val()=="eng_notes"){
					$(".box").not(".eng_notes").hide();

                    $(".eng_notes").show();
				}
				
				else if($(this).val()=="cust_remark"){
					$(".box").not(".cust_remark").hide();

                    $(".cust_remark").show();
				}

                else{

                    $(".box").hide();

                }

            });

        }).change();

    });

    </script>
	
	<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
	var modelid =$('#modelid').val();
	//alert(modelid);
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1+'&modelid='+modelid;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>quotereview/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#table11').append(result);
} 
});

});
  
});
</script>
	
  <style>
  .tableadd tr td input {
    width: 210px !important;
	border:none;
 }
 .tableadd tr td select {
    width: 210px !important;
	
 }
 .tableadd2 tr td select {
    width: 165px;
	margin-bottom: 15px;
 }
 .tableadd2 tr.back td {
    background: #6c477d !important;
	border: 1px solid #6c477d !important;
	color: #fff;
    padding: 8px;
}
 .tableadd tr td label{
	width: 180px !important;
font-weight: bold;
font-size: 13px;
	 
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
	width: auto;
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


@media only screen and (max-width: 350px){
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
.noresize{
	resize: none;
}
.linkaddress {
	cursor: pointer;
}
#errorBox{
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
@media only screen and (max-width: 768px) and (min-width: 240px){
ol, ul {
    margin-top: 0;
    margin-bottom: 0 !important;
}
}
.cyan {
    background-color: #6c477d !important;
}
label.appendfont{
		border:none !important;
		font-size: 0.85em !important;
	}
span.pagerefresh{
	color: #6c477d !important;
}

  </style>

<script>
$(document).ready(function(){
   $('.spare_name').change(function(){ //alert("hiiio");
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
   });
 });
</script>
<script>
		$(document).ready(function(){
			$( ".pagerefresh" ).click(function() {
				location.reload(true);
			});
		});
	</script>
	

<script>
function frmValidate(){ 
 if(document.frmworkinpro.eng_ack.checked=false)
   {
    // document.frmworkinpro.eng_ack.focus() ;
	 document.getElementById("errorBox").innerHTML = "Please your give your ack";
     return false;
   }
   
}

</script>	
	
<section id="content">

     
        <div class="container-fluid">
          <div class="section">
			
			<div><a class="btn cyan waves-effect waves-light " onclick="history.go(-1);"><span class="fa fa-arrow-left" data-toggle="tooltip" title="Back"></span></a> <div class="headerDivider"></div><span class="fa fa-refresh pagerefresh" data-toggle="tooltip" title="Refresh"></span></div>

            <h5 class="breadcrumbs-title">Work In-Progress View</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			  
                <div>
                 
             
                 
                      <form action="<?php echo base_url(); ?>work_inprogress/edit_quotereview" method="post" name="frmworkinpro" onsubmit="return frmValidate()">
                        <div id="errorBox"></div>        
<?php foreach($getQuoteByReqId as $key){
		if(isset($key->problem)){
					$problem_data = explode(",",$key->problem);
				}
	?>
<div class="tableadd col-md-12">
	<?php if($key->status!='16'){ ?>
	<div class="col-md-12 col-sm-12" style="padding-left:30px;padding-bottom:10px">
		<div class="col-md-2 col-sm-12"><label style="margin-bottom:0px">Acknowledgement</label></div>
		<div class="col-md-1 col-sm-12"><input type="radio" name="eng_ack" value="accept">Accept</div>
		<div class="col-md-1 col-sm-12"><input type="radio" name="eng_ack" value="reject">Reject</div>
		<div class="col-md-1 col-sm-12"><input type="radio" name="eng_ack" value="later">Later</div>
	</div>
	<?php } ?>
	
	<div class="col-md-6">
		<div class="col-md-6 col-sm-3"><label>Request ID:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="reque_id" class="" value="<?php echo $key->request_id; ?>" readonly></div>
		<div class="col-md-6 col-sm-3"><label>Firm Name:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="cust_name" class="" value="<?php echo $key->company_name; ?>" readonly><input type="hidden" name="cust_mobile" class="" value="<?php echo $key->mobile; ?>" readonly></div>
		
		<div class="col-md-6 col-sm-3"><label>Branch Name:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="br_name" class="" value="<?php echo $key->branch_name; ?>" readonly></div>
		
		<div class="col-md-6 col-sm-3"><label>Contact Name:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="cont_name" class="" value="<?php echo $key->contact_name; ?>" readonly></div>
		
		<input type="hidden" value="<?php echo $key->email_id;?>" name="email">
		
		
		<div class="col-md-6 col-sm-3"><label>Mobile:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="cust_mobile1" class="" value="<?php echo $key->cust_mobile; ?>" readonly></div>
		
		<div class="col-md-12 addressdiv" style="padding:0px;">
			<div class="col-md-6 col-sm-3 addresslabel"><a class="linkaddress">Address</a></div>
			<div class="col-md-6 col-sm-3 toggleaddress"><textarea class="noresize materialize-textarea" cols="22" rows="2" readonly><?php echo $key->address.' '.$key->address1; ?></textarea></div>
		</div>

		<div class="col-md-6 col-sm-3"><label>Landline:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="land_line" class="" value="<?php echo $key->landline; ?>" readonly></div>

		<!--<div class="col-md-6 col-sm-3"><label>Address:</label></div>
		<div class="col-md-6 col-sm-3"><textarea class="noresize materialize-textarea" cols="22" rows="2"><?php echo $key->address.' '.$key->address1; ?></textarea></div>-->

		<div class="col-md-6 col-sm-3"><label>Model:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="p_name" class="" value="<?php echo $key->model; ?>" readonly><input type="hidden" name="modelid" id="modelid" class="" value="<?php echo $key->modelid; ?>">
			<input type="hidden" name="req_id" id="req_id" class="" value="<?php echo $req_id; ?>"></div>
		
		<?php if($key->serial_no=='serial_no') {?>
		<div class="col-md-6 col-sm-3"><label>Serial No.:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="serial_no" value="update sr no" readonly>  <input type="hidden" name="order_row_id" value="<?php echo $key->order_row_id; ?>" readonly> </div>

		<div class="col-md-6 col-sm-3"><label>Batch No.:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="batch_no" value="batch no" readonly></div>
		<?php } ?>
		
		<?php if($key->serial_no!='serial_no') {?>
		<div class="col-md-6 col-sm-3"><label>Serial No.:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="serial_no" value="<?php echo $key->serial_no; ?>">  <input type="hidden" name="order_row_id" value="<?php echo $key->order_row_id; ?>"> </div>

		<div class="col-md-6 col-sm-3"><label>Batch No.:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="batch_no" value="<?php echo $key->batch_no; ?>"></div>
		
		<div class="col-md-6 col-sm-3"><label>Addl Engineer Name: </label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="addl_engg" class="" value="<?php foreach($service_req_listforaddlEmp1 as $AddlEmpkey){echo $AddlEmpkey->emp_name;} ?>" readonly></div><input type="hidden" value="<?php foreach($service_req_listforaddlEmp1 as $roww){ if($roww->id==""){ echo ""; }else {echo $roww->id;} }?>" name="eng_name">
		<?php } ?>
		
		
	</div>

	<div class="col-md-6">
		<?php if($user_type!='7'){?>
		<div class="col-md-6 col-sm-3"><label>Date Of Purchase:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="purchase_date" class="date" value="<?php echo $key->purchase_date; ?>" readonly></div>
		<div class="col-md-6 col-sm-3"><label>Warranty End Date:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="warranty_date" value="<?php echo $key->warranty_date; ?>" readonly></div>
		<?php } ?>
		
		<div class="col-md-6 col-sm-3"><label>Date Of Request:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="request_date" value="<?php echo $key->request_date; ?>" readonly></div>
		

		<div class="col-md-6 col-sm-3"><label>Problem:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" value="<?php if(!empty($problemlist1)){
										foreach($problemlist1 as $problemlistkey1){ 
											if (in_array($problemlistkey1->id, $problem_data)){
												echo $prob_category = $problemlistkey1->prob_category;
											}} 
										}else{
											echo $prob_category ="";
								} ?>" readonly></div>
		<div class="col-md-6 col-sm-3"><label>Machine Status:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="machine_status" class="" value="<?php echo $key->machine_status; ?>" readonly></div>

		<div class="col-md-6 col-sm-3"><label>Blanket Approval:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="" class="" value="<?php echo $key->blank_app; ?>" readonly></div>

		<div class="col-md-6 col-sm-3"><label>Area:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="area_name" class="" value="<?php echo $key->area_name; ?>" readonly></div>
		
		<div class="col-md-6 col-sm-3"><label>Pincode:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="pincode" class="" value="<?php echo $key->pincode; ?>" readonly></div>
		
		<div class="col-md-6 col-sm-3"><label>Location:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="serviceloc" class="" value="<?php echo $key->service_loc; ?>" readonly></div>

		
	</div>
	

</div>
<?php } ?>

<?php if(!empty($get_qc_parameters_details)){
				foreach($get_qc_parameters_details as $qcp_key){
					$qc_master_ids[] = $qcp_key->qc_master_id;
				}
	  }else{
		  $qc_master_ids[] = '';
	  }
	
	  $qc_models = $this->workin_prog_model->get_qc_params($key->modelid); 
		if(!empty($qc_models)){?>
<h5 class="breadcrumbs-title">QC</h5>
<table class="tableadd2" style="margin-bottom: 20px;">
  
  <tr class="back" > 
	  <td>QC Parameters</td>
	  <td>Actual value</td>
	  <td>Result value</td>
  </tr>
  <?php foreach($qc_models as $qc_key){
	  ?>
  <tr> 
	<td><?php echo $qc_key->qc_param; ?></td>  
	<td><?php echo $qc_key->qc_value; ?></td>  
	<?php if(in_array($qc_key->id, $qc_master_ids) && !empty($qc_master_ids)){
			$qc_models = $this->workin_prog_model->get_qc_params_det($qc_key->id,$req_id); 
		?>
		<td><input type="text" name="res_qc_value[]" id="res_qc_value" value="<?php echo $qc_models[0]->result_qc_value; ?>">&nbsp; <input type="hidden" name="qc_param_id[]" id="qc_param_id" value="<?php echo $qc_models[0]->qc_master_id; ?>"></td>  
	<?php } else{?>
	<td><input type="text" name="res_qc_value[]" id="res_qc_value" value="">&nbsp; <input type="hidden" name="qc_param_id[]" id="qc_param_id" value="<?php echo $qc_key->id; ?>"></td>  
	
	 <?php } ?>
  </tr>
 <?php } ?>
  
  </table>
<?php } ?>
<h5 class="breadcrumbs-title">Spare Info</h5>
<div class="table-responsive">
 <table id="table11" class="tableadd2" style="margin-bottom: 20px;">
  
  <tr class="back" > 
  <td>Spare Name</td>
  <td>Quantity</td>
  <td>Amount</td>
  <td>Status</td>
  <td>Warranty claim status</td>
  <td style="width:50px;background: none;border: 0px"><a id="addMoreRows" style="padding: 10px;color: #000; border-radius:5px;"><span class="fa fa-plus" style="margin-right: 0px;"></span></a></td>
  </tr>
   <?php 
 if(!empty($spareIds)){
  foreach($spareIds as $key3){ foreach($key3 as $key4){ 
		 $usedspare[] = $key4->used_spare;
		 $stockspare[] = $key4->spare_qty;
		 $salesprice[] = $key4->sales_price;
 } } }//exit;
  $count='0'; foreach($getQuoteReviewSpareDetByID as $ReviewDetKey2){ 
		
  ?>
	<tr> 
	 
 <td><input type="hidden" name="used_spare[]" id="used_spare<?php echo $count; ?>" value="<?php if(!empty($usedspare[$count])){echo $usedspare[$count];} ?>"><input type="hidden" name="spare_tbl_id[]" id="spare_tbl_id<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->id;?>"><select name="spare_name[]" id="sparename_<?php echo $count; ?>" class="spare_name">  
			<option value="">---Select---</option> 
			<?php foreach($spareListByModelId1 as $sparekey1){
				  if($sparekey1->id==$ReviewDetKey2->spare_id){
			?>
           <option selected="selected" value="<?php echo $sparekey1->id; ?>"><?php echo $sparekey1->spare_name; ?></option>
			<?php } else {?>
			<option value="<?php echo $sparekey1->id; ?>"><?php echo $sparekey1->spare_name; ?></option>
			<?php } } ?>
		</select>  
		
	<?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>
	<div class="appendtr1<?php echo $count; ?>" id="appendtr11-<?php echo $count; ?>">
		<label class="form-control appendfont">Description of Failure</label>
		<textarea name="desc_failure[]" id="desc_failure" value="" class="noresize"><?php echo $ReviewDetKey2->desc_failure;?></textarea>
	</div>
	<?php } ?>
	
	<?php if($ReviewDetKey2->warranty_claim_status!='to_claim'){?>
	<div class="appendtr" id="appendtr11-<?php echo $count; ?>">
		<label class="form-control appendfont">Description of Failure</label>
		<textarea name="desc_failure[]" id="desc_failure" value="" class="noresize"></textarea>
	</div>
	<?php } ?>	
		
 </td>  
 <td><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->spare_qty; ?>" class="spare_qty"><input type="hidden" value="<?php if(!empty($stockspare[$count])){echo $stockspare[$count];}?>" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class="">
 	
	<?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>
	<div class="appendtr1<?php echo $count; ?>" id="appendtr12-<?php echo $count; ?>">
		<label class="form-control appendfont">Why &amp; When did it occur?</label>
		<textarea name="why_failure[]" id="why_failure" value="" class="noresize"><?php echo $ReviewDetKey2->why_failure;?></textarea>
	</div>
	<?php } ?>
	
	<?php if($ReviewDetKey2->warranty_claim_status!='to_claim'){?>
	<div class="appendtr" id="appendtr12-<?php echo $count; ?>">
		<label class="form-control appendfont">Why &amp; When did it occur?</label>
		<textarea name="why_failure[]" id="why_failure" value="" class="noresize"></textarea>
	</div>
	<?php } ?>	
	
 
 </td>  
 <td><input type="text" value="<?php echo $ReviewDetKey2->amt; ?>" name="amt[]" id="amt<?php echo $count; ?>" class="" readonly><input type="hidden" value="<?php if(!empty($salesprice[$count])){echo $salesprice[$count];}?>" name="amt1" id="amt1<?php echo $count; ?>" class="">
 
 <?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>
	<div class="appendtr1<?php echo $count; ?>" id="appendtr13-<?php echo $count; ?>">
		<label class="form-control appendfont">Corrective Action</label>
		<textarea name="correct_action[]" id="correct_action" value="" class="noresize"><?php echo $ReviewDetKey2->correct_action;?></textarea>
	</div>
	<?php } ?>
	
	<?php if($ReviewDetKey2->warranty_claim_status!='to_claim'){?>
	<div class="appendtr" id="appendtr13-<?php echo $count; ?>">
		<label class="form-control appendfont">Corrective Action</label>
		<textarea name="correct_action[]" id="correct_action" value="" class="noresize"></textarea>
	</div>
	<?php } ?>	
 
 </td>  
 
 <td><?php if($ReviewDetKey2->approval_status!=''){echo $ReviewDetKey2->approval_status;}else{echo "unapproved";} ?></td>  
 
 <td>
	<select name="warranty_claim_status[]" class="warranty_claim_status" id="warranty_claim_status-<?php echo $count; ?>"> 
		<option value="">---select---</option>
		<option value="to_claim" <?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>selected='selected'<?php } ?>>To claim</option>
	</select>
 </td>
 
 <td style="border:none;"><a class="delRowBtn1" style="font-size:20px;color: #000" id="delRowBtn1_<?php echo $count; ?>"><span class="fa fa-trash-o" style="margin-right: 0px"></span></a></td>
	</tr>
  <?php $count++; }  ?>
  
  </table>
</div>



<?php foreach($getQuoteReviewDetByID1 as $ReviewDetKey1){ ?>
<div class="tableadd col-md-12">
<?php if($user_type!='7'){?>
	<div class=col-md-6>
		<div class="col-md-6"><label>Spare Tax Amount:</label></div>
		<div class="col-md-6">
		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Preventive'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?><?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Chargeable'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ ?><input type="hidden" name="amc_typ" id="amc_typ" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>


		<input type="text" name="spare_tax" id="spare_tax" class="" value="<?php echo $ReviewDetKey1->spare_tax; ?>" readonly><input type="hidden" name="tax_type" id="tax_type" class="" value="<?php foreach($getTaxDefaultInfo as $taxKey){ echo $taxKey->tax_percentage; }?>" ></div>
		<div class="col-md-6"><label>Spare Total Charges:</label></div>
		<div class="col-md-6"><input type="text" name="spare_tot" id="spare_tot" class="" value="<?php echo $ReviewDetKey1->spare_tot; ?>" readonly></div>


		<div class="col-md-6"><label>Labour Charges:</label></div>
		<div class="col-md-6"><input type="text" name="labourcharge" id="labourcharge" class="" value="<?php foreach($getServiceCatbyID as $ServiceKey){if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){echo $i;}else{echo $ServiceKey->service_charge;}} if(isset($getservicecharge)){echo $getservicecharge;} ?>" readonly></div>
		
	</div>
<?php } ?>	
	<div class=col-md-6>
	<?php if($user_type!='7'){?>
		<div class="col-md-6"><label>Conveyance Charges:</label></div>
		<div class="col-md-6"><input type="text" name="concharge" id="concharge" class="" value="<?php if($WarranKey->machine_status=="Chargeable"){echo $key->concharge;}else{echo $i;} ?>" readonly></div>
		<div class="col-md-6"><label>Total Amount:</label></div>
		<div class="col-md-6"><input type="text" name="total_amt" id="total_amt" class="" value="<?php echo $ReviewDetKey1->total_amt; ?>" readonly><input type="hidden" name="total_amt1" id="total_amt1" class="" value="<?php echo $ReviewDetKey1->total_amt; ?>" ></div>
	<?php } ?>

		<div class="col-md-6"><label >Status</label></div>
		<?php foreach($get_status as $get_statusKey){ $stat = $get_statusKey->status;}?>
		<?php if($job_done=='completed'){?>
		<input type="hidden" name="job_done" value="<?php echo $job_done; ?>">
		<div class="col-md-6">
			<?php if($user_type=='7'){?>
			<select name="status">
			<option value="16">---Select---</option>
						<?php foreach($status_listForEmpLogin as $empstatuskey){
							  if($empstatuskey->id==$stat){
						?>
			           <option selected="selected" value="<?php echo $empstatuskey->id; ?>"><?php echo $empstatuskey->status; ?></option>
						<?php } else {?>
						<option value="<?php echo $empstatuskey->id; ?>"><?php echo $empstatuskey->status; ?></option>
						<?php } } ?>
			</select>
			<?php }else{?>
			<select name="status">
			<option value="16">---Select---</option>
						<?php foreach($status_listForworkInpro as $workinprostatuskey){
							  if($workinprostatuskey->id==$stat){
						?>
			           <option selected="selected" value="<?php echo $workinprostatuskey->id; ?>"><?php echo $workinprostatuskey->status; ?></option>
						<?php } else {?>
						<option value="<?php echo $workinprostatuskey->id; ?>"><?php echo $workinprostatuskey->status; ?></option>
						<?php } } ?>
			</select>	
				
			<?php  } ?>
		</div>
		<?php } else{ ?>
		<div class="col-md-6">
			<?php if($user_type=='7'){?>
			<select name="status">
			<option value="1">---Select---</option>
						<?php foreach($status_listForEmpLogin as $empstatuskey){
							  if($empstatuskey->id==$stat){
						?>
			           <option selected="selected" value="<?php echo $empstatuskey->id; ?>"><?php echo $empstatuskey->status; ?></option>
						<?php } else {?>
						<option value="<?php echo $empstatuskey->id; ?>"><?php echo $empstatuskey->status; ?></option>
						<?php } } ?>
			</select>
			<?php }else{?>
			<select name="status">
			<option value="1">---Select---</option>
						<?php foreach($status_listForworkInpro as $workinprostatuskey){
							  if($workinprostatuskey->id==$stat){
						?>
			           <option selected="selected" value="<?php echo $workinprostatuskey->id; ?>"><?php echo $workinprostatuskey->status; ?></option>
						<?php } else {?>
						<option value="<?php echo $workinprostatuskey->id; ?>"><?php echo $workinprostatuskey->status; ?></option>
						<?php } } ?>
			</select>	
				
			<?php  } ?>
		</div>
		<?php } ?>
	</div>
</div>

<div class="tableadd col-md-12">
	<div class="col-md-6" style="padding:0px;">
		
	<?php if(isset($ReviewDetKey1->onhold_date) && $ReviewDetKey1->onhold_date!=""){?>	
		<div>
			<div class="col-md-6"><label>Previous holds:</label></div>
			<div class="col-md-6"><?php $s=1; foreach($get_log_onholds as $log_hold_key){
											if(isset($log_hold_key->on_hold) && $log_hold_key->on_hold!=""){
												echo "<br/>".$s.'. '.$log_hold_key->onhold_reason.' - '.$log_hold_key->on_hold;
											} 
										$s++; }	
									 ?>
			</div> 
		</div>
	<?php } ?>	
		<div class="ready box">
			<div class="col-md-6"><label>Date Of Delivery:</label></div>
			<div class="col-md-6"><input type="text" name="delivery_date" id="datetimepicker7" value="<?php echo $ReviewDetKey1->delivery_date; ?>" ></div>
		</div>
		<div class="ready box">
			<div class="col-md-6"><label>Comments:</label></div>
			<div class="col-md-6"><input type="text" name="comment_ready" class="" value="Delivered" ></div>
		</div>
		<div class="delivery box">
			<div class="col-md-6"><label>Date Of Delivery:</label></div>
			<div class="col-md-6"><input type="text" name="delivery_date1" id="delivery_date1" value="<?php echo $ReviewDetKey1->delivery_date; ?>" ></div>
		</div>
		<div class="delivery box">
			<div class="col-md-6"><label>Comments:</label></div>
			<div class="col-md-6"><input type="text" name="comment_deliver" class="" value="Delivered" ></div>
		</div>
		<div class="delivery box">
			<div class="col-md-6"><label>Assign To:</label></div>
			<div class="col-md-6"><input type="text" name="assign_to" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->emp_name; }?>" readonly><input type="hidden" name="assign_to_id" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->id; }?>" readonly></div>
		</div>

		<div class="onhold box">
			<div class="col-md-6"><label>Date of On-Hold:</label></div>
			<div class="col-md-6"><input type="text" name="on_hold" class="date" value="<?php echo $req_date; ?>" ></div>
			
			<div class="col-md-6"><label>On Hold Reason:</label></div>
			<div class="col-md-6"><textarea type="text" name="onhold_reason" id="onhold_reason" cols="25" rows="3" class="materialize-textarea"></textarea></div>
			
		</div>
		
		
		
		<div style="margin-left:30px;margin-top:15px;">
			<label>Ratings:</label>
			<ul class="rating">
				<li><label><input class="rate" type="radio" name="rating" <?php if(isset($ReviewDetKey1->rating) && $ReviewDetKey1->rating=='1'){?>checked='checked'<?php }?> value="1">Satisfied</label></li>
				<li><label><input class="rate" type="radio" name="rating" <?php if(isset($ReviewDetKey1->rating) && $ReviewDetKey1->rating=='2'){?>checked='checked'<?php }?> value="2">Good</label></li>
				<li><label><input class="rate" type="radio" name="rating" <?php if(isset($ReviewDetKey1->rating) && $ReviewDetKey1->rating=='3'){?>checked='checked'<?php }?> value="3">Very Good</label></li>
				<li><label><input class="rate" type="radio" name="rating" <?php if(isset($ReviewDetKey1->rating) && $ReviewDetKey1->rating=='4'){?>checked='checked'<?php }?> value="4">Excellent</label></li>
			</ul>
		</div>
	</div>
</div>

<?php if($user_type!='7'){?>
<div class="tableadd col-md-12">
<div class="tableadd col-md-3">
	<label style="margin-left:20px;">Coordinator Instructions:</label>
</div>
<div class="tableadd col-md-3">
	<textarea type="text" name="notes" id="notes" cols="25" rows="3" class="materialize-textarea"><?php if($ReviewDetKey1->notes!=""){echo $ReviewDetKey1->notes;}else{foreach($getQuoteByReqId as $notekey){echo $notekey->notes;}} ?></textarea>
<?php } ?>
</div>


<?php if($ReviewDetKey1->cust_remark!=""){?>
<div class="col-md-3">
	<label>Customer Remarks:</label>
</div>
<div class="col-md-3"><?php if($ReviewDetKey1->cust_remark!=""){echo $ReviewDetKey1->cust_remark;} ?></div>
<?php } ?>

<div class="col-md-3">
	<label>Notes:</label>
</div>
<a id="<?php echo $key->request_id; ?>" href="javascript:;">Click here to view history</a>
	<div class="col-md-3">
	<select name="notes_all">
		<option value="">Select</option>
		<option value="eng_notes">Engineer notes</option>
		<option value="cust_remark">Customer remarks</option>
	</select>
	<div class="eng_notes box">
	<!--<div class="tableadd col-md-3"><label>Engg Notes:</label></div>-->
	<div class="tableadd col-md-3"><textarea type="text" name="eng_notes" id="eng_notes" cols="25" rows="3" class="materialize-textarea"></textarea></div>
	
	
</div>

<div class="cust_remark box">
	<!--<div class="tableadd col-md-3"><label>Customer Notes:</label></div>-->
	<div class="tableadd col-md-3"><textarea type="text" name="cust_remark" id="cust_remark" cols="25" rows="3" class="materialize-textarea"></textarea></div>
</div>
</div>	





</div>
<!--<div class="col-md-12">
<div class="eng_notes box">
	<div class="tableadd col-md-3"><label>Engg Notes:</label></div>
	<div class="tableadd col-md-3"><textarea type="text" name="eng_notes" id="eng_notes" cols="25" rows="3" class="materialize-textarea"></textarea></div>
</div>

<div class="cust_remark box">
	<div class="tableadd col-md-3"><label>Customer Notes:</label></div>
	<div class="tableadd col-md-3"><textarea type="text" name="cust_remark" id="cust_remark" cols="25" rows="3" class="materialize-textarea"></textarea></div>
</div>	
</div>-->

				<script>
							$(document).ready(function() { 
							//alert("nquwe");
								$("#<?php echo $key->request_id; ?>").click(function() {
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>work_inprogress/view_history/<?php echo $key->request_id; ?>',
					type : 'iframe',
					padding : 5
				});
			});
			});
			</script>	
	
	
</div>
<?php } ?>
<input type="hidden" name="countid" id="countid" class="" value="<?php echo $count; ?>" >

<table class="tableadd" style="margin-top: 25px;">



<tr >
<td >
 <button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>&nbsp;<a class="btn cyan waves-effect waves-light " onclick="history.go(-1);">Exit
                              </a>
</td>
</tr>

</table>
           
                        </div>
                     
                  
                      </form>
                  
                
                </div>
             
			  </div>
              </div>
			  </div>
            </div>

			
			
			
			
       
          </div>

   
 

      </div>
  </section>


  </div>
  

  </div>
  
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

    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  
	  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>   
	  
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
  
  
  


<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
$(document).on('click', function() {
$('.date').each(function() {
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
});
});

}//]]>  

</script>  

<script type="text/javascript">
$(document).ready(function(){
	$('.appendtr').hide();	
	$(".warranty_claim_status").change(function(){
		var idd=$(this).closest(this).attr('id');
		//alert(idd);
		var arr= idd.split('-');
		var vl = arr['1'];
		//alert("HII: "+vl);	
		var warran_val = $("#warranty_claim_status-"+vl).val();
		//alert("test: "+warran_val);
		
		if(warran_val=="to_claim"){ 
			$("#appendtr11-"+vl).show();
			$("#appendtr12-"+vl).show();
			$("#appendtr13-"+vl).show();
        }
		
		if(warran_val==""){ 
			$("#appendtr11-"+vl).hide();
			$("#appendtr12-"+vl).hide();
			$("#appendtr13-"+vl).hide();
        }
		
    });
	
});
</script>



<script>
$('.spare_qty').keyup(function() { //alert($('#tax_type').val());
	//alert("fdgvdfgfd");
    var idd=$(this).closest(this).attr('id');
	var arr = idd.split('_');
	var ctid = arr['1'];
	var warran = $('#spare_tax1').val();
	var amc_type = $('#amc_typ').val();
	//var qty = $(this).val();
   // var actual_qty = $('#spare_qty1'+ctid).val();
	if(parseInt($(this).val())!="" && $(this).val()!=""){
		
    if(parseInt($(this).val()) > parseInt($('#spare_qty1'+ctid).val())){ 
	  alert("Qty is only: "+ $('#spare_qty1'+ctid).val() + " nos. So please enter below that.");
	}else{
		var cal_amt = parseInt($(this).val()) * parseInt($('#amt1'+ctid).val());
		if(parseInt(cal_amt)){
			$('#amt'+ctid).val(cal_amt);
		}
		
	}
	
   }else{ //alert("else");
	   $('#amt'+ctid).val('');
   }  
   var vals = 0;
   $('input[name="amt[]"]').each(function() { //alert("dsd");
					//alert($(this).val());
                vals += Number($(this).val());
				//alert(val);
				$('#spare_tot').val(vals);
				
				
				
            });
			
	var tax_amt = (vals * $('#tax_type').val()) / 100;
	if(warran=='Preventive' || warran=='Warranty' || amc_type=='Comprehensive'){
		$('#spare_tax').val(0);
		$('#spare_tot').val(0);
		$('#labourcharge').val(0);
		$('#concharge').val(0);
		$('#total_amt').val(0);
		$('#total_amt1').val(0);
		
	}else{
		$('#spare_tax').val(tax_amt);
		var tax = $('#spare_tax').val();
		var total_spare_charge = $('#spare_tot').val();
		var labourcharge = $('#labourcharge').val();
		var concharge = $('#concharge').val();
	
		var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(labourcharge) + parseInt(concharge);
		//alert(Total_amount);
		$('#total_amt').val(Total_amount);
	}
    //$('input[name="res"]').val(val);
   
});
</script>  



<script>
$('#cmr_paid').keyup(function() { 

	var pending_amt_val = $('#pending_amt1').val();
	//alert(pending_amt_val);
	var cmr_paid = $( this ).val();
	var pending_amt = parseInt(pending_amt_val) - parseInt(cmr_paid);
	$('#pending_amt').val(pending_amt);
	
   
});

$('#service_cmr_paid').keyup(function() { 

	var service_pending_amt_val = $('#service_pending_amt1').val();
	//alert(pending_amt_val);
	var service_cmr_paid = $( this ).val();
	
	if(service_cmr_paid){
		var service_pending_amt = parseInt(service_pending_amt_val) - parseInt(service_cmr_paid);
	$('#service_pending_amt').val(service_pending_amt);
	}else{
		$('#service_pending_amt').val(service_pending_amt_val);
	}
	
	
	
   
});

$('#disc_amt').keyup(function() { 
	
	var disc_amt = $( this ).val();
	if(disc_amt){
		var total_amt = $('#total_amt1').val();
		//alert(total_amt);
		var disc_amt = $( this ).val();
		//alert(disc_amt);
		var discount_amt = parseInt(total_amt) - parseInt(disc_amt);
		//alert(discount_amt);
		$('#total_amt').val(discount_amt);
		$('#service_pending_amt').val(discount_amt);
		$('#service_pending_amt1').val(discount_amt);
	}else{
		var total_amt = $('#total_amt1').val();
		
		$('#total_amt').val(total_amt);
		$('#service_pending_amt').val(total_amt);
		$('#service_pending_amt1').val(total_amt);
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

$('#delivery_date1').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

$('#on_hold1').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});


});
</script>

<script>
	$(document).ready(function(){
		$('.addresslabel').click(function() {
			$('.toggleaddress').toggle();
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