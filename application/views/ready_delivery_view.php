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

                else if($(this).attr("value")=="blue"){

                    $(".box").not(".blue").hide();

                    $(".blue").show();

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
  input:-moz-read-only { /* For Firefox */
    background-color:#cccccc85;
}
  .tableadd tr td input {
    width: 180px !important;
    border: 1px solid #ccc;
}

input:read-only{
background-color:#cccccc85 !important;
}
  .tableadd tr td textarea {
    width: 200px;
    height: 90px;
	
    /* border: 1px solid #055E87; */
    border-radius: 5px;
}
  input:read-only {
    background: #fff;
    border: 1px solid #ccc !important;
    height: 30px;
}
  
  /* .tableadd tr td input#spare_tot {
    width: 95px !important;
	border:none;
 } */
 /* .tableadd tr td input#spare_tax {
    width: 95px !important;
	border:none;
 }
 .tableadd tr td input#labourcharge {
    width: 95px !important;
	border:none;
 }
 .tableadd tr td input#concharge {
    width: 95px !important;
	border:none;
 }
 .tableadd tr td input#disc_amt {
    width: 95px !important;
	border:none;
 }
 .tableadd tr td input#plus_amt {
    width: 95px !important;
	border:none;
 }
 .tableadd tr td input#total_amt {
    width: 95px !important;
	border:none;
 } */
 .tableadd tr td select {
    width: 210px !important;
	
 }
 .tableadd2 tr td select {
    width: 165px;
 }
 .tableadd tr td select {
    width: 192px !important;
    border-radius: 4px;
    height: 38px;
}
 .tableadd tr td label{
	width: 180px !important;
font-weight: bold;
font-size: 13px;
	 
 }
 .box{

            padding: 20px;

            display: none;

            margin-top: 20px;

          box-shadow:none !important;

        }
		.tableadd2 tr.back td {
    background: #6c477d none repeat scroll 0% 0%;
    border: 1px solid #B3B3B3;
    padding: 8px;
    color: white;
}
.btn{text-transform:none;}
.tableadd tr td label {
    font-size: 14px;
    font-weight: normal;
    color: #000 !important;
    line-height: 4;
    width: 150px;
}

  </style>
<script>
$(window).on('load', function() {
	var i=1;
	if($('#service_cmr_paid1').val()!=''){
  $('#plus_amt').css('background-color','#eee').prop('readonly', true);
	$('#disc_amt').css('background-color','#eee').prop('readonly', true);
	
	}
});
</script>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h2>Calls Completed View</h2>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>ready_delivery/edit_quotereview" method="post" name="frmServiceStatus">
                               
<?php foreach($getQuoteByReqId as $key){
	if(isset($key->problem)){
					$problem_data = explode(",",$key->problem);
				}
	?>
<table class="tableadd">
<tr>
<td><label><b>Request ID</b></label>:</td><td><input type="text" name="reque_id" class="" value="<?php echo $key->request_id; ?>" readonly></td>
<td><label><b>Customer Name</b></label>:</td><td><input type="text" name="cust_name" class="" value="<?php echo $key->customer_name; ?>" readonly><input type="hidden" name="cust_mobile" class="" value="<?php echo $key->mobile; ?>" readonly> <input type="hidden" name="eng_idd" class="" value="<?php echo $key->accepted_engg_id; ?>" readonly></td>
</tr>

<tr>
<td><label><b>Branch Name</b></label>:</td><td><input type="text" name="br_name" class="" value="<?php echo $key->branch_name; ?>" readonly></td>
<td><label><b>Address</b></label>:</td><td><input type="text" readonly value="<?php echo $key->address.' '.$key->address1; ?>" /></td>
</tr>

<tr>
<td><label><b>Product Name</b></label>:</td><td><input type="text" name="p_name" class="" value="<?php echo $key->model; ?>" readonly><input type="hidden" name="modelid" id="modelid" class="" value="<?php echo $key->modelid; ?>"><input type="hidden" name="req_id" id="req_id" class="" value="<?php echo $req_id; ?>"></td>
<td><label><b>Date Of Purchase</b></label>:</td><td><input type="text" name="purchase_date" class="date" value="<?php echo $key->purchase_date; ?>" readonly></td>
</tr>
<tr>
<td><label><b>Warranty End Date</b></label>:</td><td><input type="text" readonly value="<?php echo $key->warranty_date; ?>"/></td>
<td><label><b>Date Of Request</b></label>:</td><td><input type="text" readonly value="<?php echo $key->request_date; ?>"/></td>
</tr>
<tr>
<td><label><b>Location</b></label>:</td><td><input type="text" name="serviceloc" class="" value="<?php echo $key->service_loc; ?>" readonly></td>
<td><label><b>Problem</b></label>:</td><td><p style="border: 1px solid #ccc;
    padding: 13px 85px 6px 12px;
    border-radius: 5px;    height: 38px;
    width: 191px;"><?php if(!empty($problemlist1)){
									foreach($problemlist1 as $problemlistkey1){ 
										if (in_array($problemlistkey1->id, $problem_data)){
											echo ''.$prob_category = $problemlistkey1->prob_category;
										}} 
									}else{
										echo $prob_category ="";
							} ?></p></td>
</tr>
<tr>
<td><label><b>Machine Status</b></label>:</td><td><input type="text" name="machine_status" class="" value="<?php echo $key->machine_status; ?>" readonly></td>
<!--<td><label>Blanket Approval</label>:</td><td><input type="text" name="" class="" value="<?php if($key->blank_app !=0){echo $key->blank_app;} ?>" readonly></td> -->
</tr>

<!--<tr>
<td><label >Status</label>:</td><td><input type="text" name="" class="" value="<?php foreach($status_listForquoteInpro as $statuskey){echo $statuskey->status;} ?>" readonly></td>

</tr>-->

</table>
<?php } ?>


 <table id="table11" class="tableadd2" style="margin-bottom: 20px;">
  
  <tr class="back" > 
  <td>Spare Name</td>
  <td>Quantity</td>
  <td>Amount</td>   
  </tr>
   <tr>
 <?php 
 if(!empty($spareIds)){
  foreach($spareIds as $key3){ foreach($key3 as $key4){ 
		 $usedspare[] = $key4->used_spare;
		 $stockspare[] = $key4->spare_qty;
		 $salesprice[] = $key4->sales_price;
 } } }//exit;
 
 $tot_spare_amt = 0;
 if(!empty($spare_amtt)){
	 //print_r($spare_amtt);
	
  foreach($spare_amtt as $spareAmt_key){ 
		 $tot_spare_amt += $spareAmt_key;
 } }
 
 
 $i = 0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ $tax_amt11 = $i;}else{foreach($getTaxDefaultInfo as $taxKey){ $tax_amt11 = ($tot_spare_amt * $taxKey->tax_percentage) / 100;  }} }
 
 foreach($getServiceCatbyID as $ServiceKey){ if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ $labor_chrg = $i;}else{ $labor_chrg = $ServiceKey->service_charge;}}
 
  if(isset($getservicecharge)){ $labor_chrg = $getservicecharge;}
  
 if($WarranKey->machine_status=="Chargeable"){ $conchrg = $key->concharge;}else{$conchrg = $i;}
 
 if(isset($tot_spare_amt) || isset($tax_amt11)  || isset($labor_chrg)  || isset($conchrg) ){
	$tottt = $tot_spare_amt+$tax_amt11+$labor_chrg+$conchrg;
 }
 
  $count='0'; foreach($getQuoteReviewSpareDetByID as $ReviewDetKey2){ 
		
  ?>
	<tr> 
	 
 <td>
	<input type="hidden" name="spare_name[]" id="spare_name<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->spare_id; ?>">
	
	<input type="hidden" name="spare_qty[]" id="spare_qty<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->spare_qty; ?>">
 
 <input type="hidden" name="used_spare[]" id="used_spare<?php echo $count; ?>" value="<?php if(!empty($usedspare[$count])){echo $usedspare[$count];}?>"><input type="hidden" name="spare_tbl_id[]" id="spare_tbl_id<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->id;?>">
 <?php foreach($spareListByModelId1 as $sparekey1){
				  if($sparekey1->id==$ReviewDetKey2->spare_id){
					  echo $sparekey1->spare_name;
				  }
			}
			?> 
 </td>  
<td><?php echo $ReviewDetKey2->spare_qty; ?></td>  
 <td><?php echo $ReviewDetKey2->amt; ?></td>
	</tr>
  <?php $count++; }  ?>
  </tr>
  
  </table>


<!--<a id="addMoreRows"  style="background: rgb(179, 179, 179) none repeat scroll 0% 0% !important;
padding: 10px;
color: white; border-radius:5px;">Add Row</a>-->

<?php foreach($getQuoteReviewDetByID1 as $ReviewDetKey1){ ?>
<table class="tableadd">
<tr>

<td><label><b>Date Of Delivery</b></label>:</td><td><input type="text" name="delivery_date" id="datetimepicker7" value="<?php if(isset($ReviewDetKey1->delivery_date) && $ReviewDetKey1->delivery_date!=""){ echo $ReviewDetKey1->delivery_date; } ?>" style="border:1px solid #ccc"></td>


<td style="text-align:left"><label><b>Spare Tax Amount</b></label>:</td>



<td>

<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Preventive'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?><?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Chargeable'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>


<input type="text" name="spare_tax" id="spare_tax" class="" value="<?php $i = 0; if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ if($i != 0){echo $i;}}else{foreach($getTaxDefaultInfo as $taxKey){ $tax_amt = ($tot_spare_amt * $taxKey->tax_percentage) / 100; if($tax_amt !=0){ echo $tax_amt;}  }}?>" readonly><input type="hidden" name="tax_type" id="tax_type" class="" value="<?php foreach($getTaxDefaultInfo as $taxKey){ echo $taxKey->tax_percentage; }?>" ></td>

</tr>
<tr>
<td></td>
<td></td>
<td style="text-align:left"><label><b>Spare Total Charges</b></label>:</td><td><input type="text" name="spare_tot" id="spare_tot" class="" value="<?php if(isset($tot_spare_amt)){ if($tot_spare_amt !=0){echo $tot_spare_amt;}} ?>" readonly></td>
</tr>
<tr>
<td></td>
<td></td>
<!--<td style="text-align:left"><label><b>Spare Total Charges</b></label>:</td><td><input type="text" name="spare_tot" id="spare_tot" class="" value="<?php if(isset($tot_spare_amt)){ if($tot_spare_amt !=0){echo $tot_spare_amt;}} ?>" readonly></td>-->

<td style="text-align:left"><label><b>Labour Charges</b></label>:</td><td><input type="text" name="labourcharge" id="labourcharge" class="" value="<?php foreach($getServiceCatbyID as $ServiceKey){if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){if($i != 0){echo $i;}}else{ if($ServiceKey->service_charge !=0){echo $ServiceKey->service_charge;}}} if(isset($getservicecharge)){ if($getservicecharge !=0){echo $getservicecharge;}} ?>" readonly></td>
</tr>

<tr>

<td><label><b>Comments</b></label>:</td><td>
<textarea name="comment_ready" class="coment" value="<?php if(isset($ReviewDetKey1->comments) && $ReviewDetKey1->comments!=""){echo $ReviewDetKey1->comments;} ?>"  style=" border: 1px solid #ccc;"  readonly></textarea>
<!--<input type="text" name="comment_ready" class="coment" value="<?php if(isset($ReviewDetKey1->comments) && $ReviewDetKey1->comments!=""){echo $ReviewDetKey1->comments;} ?>"  style=" border: 1px solid #0c628a;"  readonly>--></td>

<td style="text-align:left"><label><b>Conveyance Charges</b></label>:</td><td><input type="text" name="concharge" id="concharge" class="" value="<?php if($WarranKey->machine_status=="Chargeable"){ if($key->concharge !=0){echo $key->concharge;}}else{ if($i !=0){echo $i;}} ?>" readonly></td>




</tr>

<tr>

<td></td><td></td>



		
		
	</tr>

	<tr>
		<td><label><b>Payment mode</b></label>:</td>
	<td>
		<select name="payment_mode" style=" border: 1px solid #ccc;" >
			<option value="">---Select---</option>
			<option value="Cash" <?php if(isset($ReviewDetKey1->payment_mode) && $ReviewDetKey1->payment_mode=="Cash"){?> selected="selected" <?php } ?>>Cash</option>
			<option value="Cheque" <?php if(isset($ReviewDetKey1->payment_mode) && $ReviewDetKey1->payment_mode=="Cheque"){?> selected="selected" <?php } ?>>Cheque</option>
		</select>
	</td>
		
		<td style="text-align:left"><label><b>Add Amount</b></label>:</td><td><input type="text" name="plus_amt" id="plus_amt" class="plus1 " value="" style=" border: 1px solid #ccc;" ><input type="hidden" name="plus_amt1" id="plus_amt1" class="" value="<?php echo $ReviewDetKey1->plus_amt; ?>" ></td>
		
		
		
	</tr>

<tr>
<td><label><b>Emp Pts</b></label>:</td><td><input type="text" name="emp_pts" value="<?php if(isset($ReviewDetKey1->emp_pts) && $ReviewDetKey1->emp_pts!="0"){if($ReviewDetKey1->emp_pts != 0){echo $ReviewDetKey1->emp_pts;} }else{    echo " ";}?>" style=" border: 1px solid #ccc;" id="emp_pts" maxlength="5" ></td>

<td style="text-align:left"><label><b>Discount Amount</b></label>:</td><td><input type="text" name="disc_amt" id="disc_amt" class="minus1" value="" style=" border: 1px solid #ccc;"><input type="hidden" name="disc_amt1" id="disc_amt1" class="" value="<?php  echo $ReviewDetKey1->disc_amt; ?>" ></td>
</tr>

<!--<tr class="ready box">

</tr>-->
<tr class="">
<td><label><b>Notes</b></label>:</td>
<td><textarea type="text" name="notes" id="notes" style=" border: 1px solid #ccc;" class="materialize-textarea"><?php if($ReviewDetKey1->notes!=""){echo $ReviewDetKey1->notes;}else{foreach($getQuoteByReqId as $notekey){echo $notekey->notes;}} ?></textarea></td>
<td style="text-align:left"><label><b>Total Amount</b></label>:</td><td><input type="text" name="total_amt" id="total_amt" class="" value="<?php if((isset($ReviewDetKey1->pending_amt) && $ReviewDetKey1->pending_amt!="0") || (isset($ReviewDetKey1->disc_amt) && $ReviewDetKey1->disc_amt!="0") || (isset($ReviewDetKey1->plus_amt) && $ReviewDetKey1->plus_amt!="0")){ if($ReviewDetKey1->total_amt != 0){echo $ReviewDetKey1->total_amt; }}else{ if($tottt != 0){echo $tottt;}}?>" readonly><input type="hidden" name="total_amt1" id="total_amt1" class="" value="<?php if((isset($ReviewDetKey1->pending_amt) && $ReviewDetKey1->pending_amt!="0") || (isset($ReviewDetKey1->disc_amt) && $ReviewDetKey1->disc_amt!="0") || (isset($ReviewDetKey1->plus_amt) && $ReviewDetKey1->plus_amt!="0")){ echo $ReviewDetKey1->total_amt; }else{echo $tottt;}?>" ></td>
</tr>


<tr>
	<td><label><b>CMR Paid</b></label>:</td>
		<td>
		<input type="text" name="service_cmr_paid" id="service_cmr_paid" class="" value="" style=" border: 1px solid #ccc;"><input type="hidden" name="service_cmr_paid1" id="service_cmr_paid1" class="" value="<?php if(isset($ReviewDetKey1->cmr_paid)){$st = $ReviewDetKey1->cmr_paid; if($st !=0){echo $st;}}else{ echo $st = ''; } ?>" >
		<div class="cmrpaiderror"></div>
		</td>
			<td><label><b>Pending Amount</b></label>:</td>
		<td><input type="text" name="service_pending_amt" id="service_pending_amt" class="" value="<?php if($ReviewDetKey1->pending_amt !=''){ echo $ReviewDetKey1->pending_amt;}else{if((isset($ReviewDetKey1->pending_amt) && $ReviewDetKey1->pending_amt!="0") || (isset($ReviewDetKey1->disc_amt) && $ReviewDetKey1->disc_amt!="0") || (isset($ReviewDetKey1->plus_amt) && $ReviewDetKey1->plus_amt!="0")){ if($ReviewDetKey1->total_amt != 0){echo $ReviewDetKey1->total_amt; }}else{ if($tottt != 0){echo $tottt;}}} ?>" readonly>
		<input type="hidden" name="service_pending_amt1" id="service_pending_amt1" class="" value="<?php if($ReviewDetKey1->pending_amt){ echo $ReviewDetKey1->pending_amt;}else{if((isset($ReviewDetKey1->pending_amt) && $ReviewDetKey1->pending_amt!="0") || (isset($ReviewDetKey1->disc_amt) && $ReviewDetKey1->disc_amt!="0") || (isset($ReviewDetKey1->plus_amt) && $ReviewDetKey1->plus_amt!="0")){ if($ReviewDetKey1->total_amt != 0){echo $ReviewDetKey1->total_amt; }}else{ if($tottt != 0){echo $tottt;}}}?>"></td>
</tr>

<!--<tr>
	<td></td><td></td>
	<td><label>Pending Amount</label>:</td>
		<td><input type="text" name="service_pending_amt" id="service_pending_amt" class="" value="<?php if($ReviewDetKey1->pending_amt !=''){ echo $ReviewDetKey1->pending_amt;}else{if((isset($ReviewDetKey1->pending_amt) && $ReviewDetKey1->pending_amt!="0") || (isset($ReviewDetKey1->disc_amt) && $ReviewDetKey1->disc_amt!="0") || (isset($ReviewDetKey1->plus_amt) && $ReviewDetKey1->plus_amt!="0")){ if($ReviewDetKey1->total_amt != 0){echo $ReviewDetKey1->total_amt; }}else{ if($tottt != 0){echo $tottt;}}} ?>" readonly>
		<input type="hidden" name="service_pending_amt1" id="service_pending_amt1" class="" value="<?php if($ReviewDetKey1->pending_amt){ echo $ReviewDetKey1->pending_amt;}else{if((isset($ReviewDetKey1->pending_amt) && $ReviewDetKey1->pending_amt!="0") || (isset($ReviewDetKey1->disc_amt) && $ReviewDetKey1->disc_amt!="0") || (isset($ReviewDetKey1->plus_amt) && $ReviewDetKey1->plus_amt!="0")){ if($ReviewDetKey1->total_amt != 0){echo $ReviewDetKey1->total_amt; }}else{ if($tottt != 0){echo $tottt;}}}?>"></td>

</tr>-->


<tr class="delivery box">
<td><label><b>Date Of Delivery</b></label>:</td><td><input type="text" name="delivery_date1" id="datetimepicker8" value="<?php echo $ReviewDetKey1->delivery_date; ?>"></td>
</tr>
<tr class="delivery box">
<td><label><b>Comments</b></label>:</td><td><input type="text" name="comment_deliver"   readonly  value="<?php if(isset($ReviewDetKey1->comments) && $ReviewDetKey1->comments!=""){echo $ReviewDetKey1->comments;} ?>"></td>
</tr>
<tr class="delivery box">
<td><label><b>Assign To</b></label>:</td><td><input type="text" name="assign_to" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->emp_name; }?>" readonly><input type="hidden" name="assign_to_id" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->id; }?>" readonly></td>
</tr>

<!--<tr>
<td><label>Payment mode</label>:</td>
	<td>
		<select name="payment_mode">
			<option value="">---Select---</option>
			<option value="Cash" <?php if(isset($ReviewDetKey1->payment_mode) && $ReviewDetKey1->payment_mode=="Cash"){?> selected="selected" <?php } ?>>Cash</option>
			<option value="Cheque" <?php if(isset($ReviewDetKey1->payment_mode) && $ReviewDetKey1->payment_mode=="Cheque"){?> selected="selected" <?php } ?>>Cheque</option>
		</select>
	</td>
</tr>-->
<!--<tr>
	<td><label>Emp Pts</label>:</td><td><input type="text" name="emp_pts" value="<?php if(isset($ReviewDetKey1->emp_pts) && $ReviewDetKey1->emp_pts!="0"){if($ReviewDetKey1->emp_pts != 0){echo $ReviewDetKey1->emp_pts;} }else{    echo " ";}?>" style=" border: 1px solid #0c628a;" id="emp_pts" maxlength="5"></td>
</tr>-->
<!--<tr class="ready">

</tr>-->
</table>
<table class="tableadd">
<!--<tr>
<td><label>Notes</label>:</td>
<td><textarea type="text" name="notes" id="notes" class="materialize-textarea"><?php if($ReviewDetKey1->notes!=""){echo $ReviewDetKey1->notes;}else{foreach($getQuoteByReqId as $notekey){echo $notekey->notes;}} ?></textarea></td>
</tr>-->
</table>
<?php } ?>
<input type="hidden" name="countid" id="countid" class="" value="<?php echo $count; ?>" >



<table class="tableadd" style="margin-top: 25px;">



<tr >
<td >
 <button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
                              </button>&nbsp;<a class="btn cyan waves-effect waves-light " onclick="history.go(-1);">Exit
                              </a>
							 <!--<a id="addRowBtn" class="delivery box" href="<?php echo base_url(); ?>ready_delivery/print_request/<?php echo $req_id; ?>" style="background: rgb(5, 94, 135) none repeat scroll 0% 0% !important;
padding: 10.4px !important;
color: #FFF !important;
border-radius: 5px !important;
margin-left: 20px !important;" target="_blank">Print Invoice</a> -->
							  
</td>
</tr>

</table>
           
                        </div>
                     
                  
                      </form>
                  
                
                </div>
             
             <div class="col-md-1">
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
    
  
  
  


<!--<script type='text/javascript'>//<![CDATA[ 
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

</script>  -->

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
	if(parseInt($(this).val()) != ""){
		
    if(parseInt($(this).val()) > parseInt($('#spare_qty1'+ctid).val())){ 
	  alert("Qty is only: "+ $('#spare_qty1'+ctid).val() + " nos. So please enter below that.");
	}else{
		var cal_amt = parseInt($(this).val()) * parseInt($('#amt1'+ctid).val());
		$('#amt'+ctid).val(cal_amt);
	}
	
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

$('#datetimepicker8').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

$('#datetimepicker9').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

$('#datetimepicker10').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

$('#datetimepicker11').datetimepicker({
	
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
	   
	   <script>
	   
	   $('#plus_amt').keyup(function(e) { 
	
		 
			var disc_amt = $( this ).val();
			if(disc_amt !='')
			{
				$('#disc_amt').attr('readonly',true);
			}else{
				$('#disc_amt').attr('readonly',false);
			}
			//alert(disc_amt);
			if(disc_amt){
				var total_amt = $('#total_amt1').val();
				//alert(total_amt);
				var disc_amt = $( this ).val();
				//alert(disc_amt);
				var discount_amt = parseInt(total_amt) + parseInt(disc_amt);
				//alert(discount_amt);
				if(parseInt(discount_amt))
				{
				$('#total_amt').val(discount_amt);
				$('#service_pending_amt').val(discount_amt);
				$('#service_pending_amt1').val(discount_amt);
				}
			}else{
				var total_amt = $('#total_amt1').val();
				//alert(total_amt);
				$('#total_amt').val(total_amt);
				$('#service_pending_amt').val(total_amt);
				$('#service_pending_amt1').val(total_amt);
			}
		
		
	
});


	   
	$('#disc_amt').keyup(function(e) { 
	
		 
			var disc_amt = $( this ).val();
			if(disc_amt !='')
			{
				$('#plus_amt').attr('readonly',true);
			}else{
				$('#plus_amt').attr('readonly',false);
			}
			//alert(disc_amt);
			if(disc_amt){
				var total_amt = $('#total_amt1').val();
				//alert(total_amt);
				var disc_amt = $( this ).val();
				//alert(disc_amt);
				var discount_amt = parseInt(total_amt) - parseInt(disc_amt);
				//alert(discount_amt);
				if(parseInt(discount_amt))
				{
				$('#total_amt').val(discount_amt);
				$('#service_pending_amt').val(discount_amt);
				$('#service_pending_amt1').val(discount_amt);
				}
			}else{
				var total_amt = $('#total_amt1').val();
				//alert(total_amt);
				$('#total_amt').val(total_amt);
				$('#service_pending_amt').val(total_amt);
				$('#service_pending_amt1').val(total_amt);
			}
		
		
	
});

/*$('#service_cmr_paid').keydown(function(e) { 

	if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
			//alert("Numbers Only");
			$(".cmrpaiderror").text("Please enter numbers only").show().css({
				'font-size':'11px',
				'color':'#ff0000'
			}).delay(1000).fadeOut('slow');
			return false;
	}else{
		var service_pending_amt_val = $('#service_pending_amt1').val();
		//alert(pending_amt_val);
		var service_cmr_paid = $( this ).val();
		if(service_cmr_paid){
			var service_pending_amt = parseInt(service_pending_amt_val) - parseInt(service_cmr_paid);
			$('#service_pending_amt').val(service_pending_amt);
		}else{
			$('#service_pending_amt').val(service_pending_amt_val);
		}
		
	}
		
});*/
$('#service_cmr_paid').keyup(function(e) { 

	
		var service_pending_amt_val = $('#service_pending_amt1').val();
		//alert(service_pending_amt_val);
		var service_cmr_paid = $( this ).val();
		if(service_cmr_paid){
			var service_pending_amt = parseInt(service_pending_amt_val) - parseInt(service_cmr_paid);
			//alert(parseInt(service_pending_amt));
			if(parseInt(service_pending_amt)){ //alert("jjjjkkk");
					$('#service_pending_amt').val(service_pending_amt);
			}else{ //alert("jjjjkkk8888");
				$('#service_pending_amt').val('');
			}	
			
			
		}else{
			//alert(service_pending_amt_val);
			$('#service_pending_amt').val(service_pending_amt_val);
		}
		
	
		
});




$('.plus1').click(function(){ //alert("hiiio");
		if(document.getElementById('disc_amt').value!=""){
			alert("enter discount or addition amt");
			//$("#plus").attr("disabled", "disabled"); 
		}/* else{
			$("#plus").removeAttr("disabled"); 
		} */
   });
   
   $('.minus1').click(function(){ //alert("hiiio");
		if(document.getElementById('plus_amt').value!=""){
			alert("enter discount or addition amt");
			//$("#minus").attr("disabled", "disabled"); 
		}/* else{
			$("#minus").removeAttr("disabled"); 
			
		} */
   });



  </script>
  <script>
    $(document).ready(function(){
		/*$('#cust_name').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });*/
		$('#service_cmr_paid').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		$('#service_pending_amt').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		$('#disc_amt').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		$('#plus_amt,#emp_pts').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		 });
</script>
</body>

</html>