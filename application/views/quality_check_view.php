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
  
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    width: 100%;
    border: 1px solid #ccc !important;
    height: 30px;
}
input:read-only {
    background: #eee;
    border: 1px solid #ccc;
    height: 30px;
}
  .tableadd tr td input {
    width: 140px !important;
	border:1px solid #ccc;
	
 }

 .tableadd tr td select {
    width: 170px !important;
	border:1px solid #ccc;
 }
 .tableadd tr td textarea {
    width: 100% !important;
    height: 90px;
    /* border: 1px solid #055E87; */
    border-radius: 5px;
	border:1px solid #ccc;
}
 .tableadd2 tr.back td {
    background: #6c477d !important;
	border: 1px solid #6c477d !important;
	color: #fff;
    padding: 8px;
}
 .tableadd2 tr td select {
    width: 165px;
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
		section h5{
	color:#6C217E;
}
.divider{
	background-color:#6C217E !important;
}
.cyan {
    background-color: #6c477d !important;
}
	#add{background: #eee;}	
  </style>


<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">Quality Check View</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    
			  
                <div class="col-md-12">
                 
             
                 
                      <form action="<?php echo base_url(); ?>quality_check/edit_quotereview" method="post" name="frmServiceStatus">
                               
<?php foreach($getQuoteByReqId as $key){
		if(isset($key->problem)){
					$problem_data = explode(",",$key->problem);
				}
	?>
	
	<div class="tableadd col-md-12 col-sm-12">
	<div class="col-md-12">
		<div class="col-md-3">
		<label>Request ID :</label>
		<input type="text" name="reque_id" class="" value="<?php echo $key->request_id; ?>" readonly>
		</div>
		<div class="col-md-3">
		<label>Customer Name :</label>
		<input type="text" name="cust_name" class="" value="<?php echo $key->customer_name; ?>" readonly><input type="hidden" name="cust_mobile" class="" value="<?php echo $key->cust_mobile; ?>" readonly>
		</div>
		<div class="col-md-3">
		<label>Branch Name :</label>
		<input type="text" name="br_name" class="" value="<?php echo $key->branch_name; ?>" readonly>
		</div>
		<div class="col-md-3">
		<label>Address :</label>
		<textarea id="add" readonly><?php echo $key->address.' '.$key->address1; ?></textarea>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-3">
		<label>Product Name :</label>
		<input type="text" name="p_name" class="" value="<?php echo $key->model; ?>" readonly><input type="hidden" name="modelid" id="modelid" class="" value="<?php echo $key->modelid; ?>"><input type="hidden" name="req_id" id="req_id" class="" value="<?php echo $req_id; ?>">
		</div>
		<div class="col-md-3">
		<label>Date Of Purchase :</label>
		<input type="text" name="purchase_date" class="datee" value="<?php echo $key->purchase_date; ?>" readonly>
		</div>
		<div class="col-md-3">
		<label>Warranty End Date :</label>
		<input type="text" name="warranty_date" class="date1" value="<?php echo $key->warranty_date; ?>" readonly>
		</div>
		<div class="col-md-3">
		<label>Date Of Request :</label>
		<input type="text" name="request_date" class="date1" value="<?php echo $key->request_date; ?>" readonly>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-3">
		<label>Location :</label>
		<input type="text" name="serviceloc" class="" value="<?php echo $key->service_loc; ?>" readonly>
		</div>
		<div class="col-md-3">
		<label style="margin-bottom: 13px;">Problem :</label>
		<span style="border:1px solid #ccc;padding:9px 93px 6px 12px;background: #eee;"><?php if(!empty($problemlist1)){
									foreach($problemlist1 as $problemlistkey1){ 
										if (in_array($problemlistkey1->id, $problem_data)){
											echo '<br/>'.$prob_category = $problemlistkey1->prob_category;
										}} 
									}else{
										echo $prob_category ="";
							} ?></span>
		</div>
		<div class="col-md-3">
		<label>Machine Status :</label>
		<input type="text" name="machine_status" class="" value="<?php echo $key->machine_status; ?>" readonly>
		</div>
		
	</div>
	</div>
	
<!--<table class="table tableadd">
<tr>
<td><label>Request ID :</label></td><td><input type="text" name="reque_id" class="" value="<?php echo $key->request_id; ?>" readonly></td>

<td><label>Customer Name :</label></td><td><input type="text" name="cust_name" class="" value="<?php echo $key->customer_name; ?>" readonly><input type="hidden" name="cust_mobile" class="" value="<?php echo $key->cust_mobile; ?>" readonly></td>

<td><label>Branch Name :</label></td><td><input type="text" name="br_name" class="" value="<?php echo $key->branch_name; ?>" readonly></td>
</tr>
<tr>

<td><label>Address :</label></td><td><textarea><?php echo $key->address.' '.$key->address1; ?></textarea></td>
<td><label>Product Name :</label></td><td><input type="text" name="p_name" class="" value="<?php echo $key->model; ?>" readonly><input type="hidden" name="modelid" id="modelid" class="" value="<?php echo $key->modelid; ?>"><input type="hidden" name="req_id" id="req_id" class="" value="<?php echo $req_id; ?>"></td>
<td><label>Date Of Purchase :</label></td><td><input type="text" name="purchase_date" class="date" value="<?php echo $key->purchase_date; ?>" readonly></td>
</tr>
<tr>
<td><label>Warranty End Date :</label></td><td><input type="text" name="warranty_date" class="date1" value="<?php echo $key->warranty_date; ?>" readonly></td>
<td><label>Date Of Request :</label></td><td><input type="text" name="request_date" class="date1" value="<?php echo $key->request_date; ?>" readonly></td>
<td><label>Location :</label></td><td><input type="text" name="serviceloc" class="" value="<?php echo $key->service_loc; ?>" readonly></td>
</tr>
<tr>

</tr>
<tr>

<td><label>Problem :</label></td><td><?php if(!empty($problemlist1)){
									foreach($problemlist1 as $problemlistkey1){ 
										if (in_array($problemlistkey1->id, $problem_data)){
											echo '<br/>'.$prob_category = $problemlistkey1->prob_category;
										}} 
									}else{
										echo $prob_category ="";
							} ?></td>
<td><label>Machine Status :</label></td><td><input type="text" name="machine_status" class="" value="<?php echo $key->machine_status; ?>" readonly></td>
<td><label>Blanket Approval :</label></td><td><input type="text" name="" class="" value="<?php if(
$key->blank_app !=0){echo $key->blank_app;}?>" readonly></td>
</tr>-->
<tr>

</tr>

<!--<tr>
<td><label >Status</label>:</td><td><input type="text" name="" class="" value="<?php foreach($status_listForquoteInpro as $statuskey){echo $statuskey->status;} ?>" readonly></td>

</tr>

</table>-->
<?php } ?>


 <table id="table11" class="tableadd2" style="margin-bottom: 20px;">
  
  <tr class="back" > 
  <td>Spare Name</td>
  <td>Quantity</td>
  <td>Unit Price</td>
  
  <td>Amount</td>
  <td>Status</td>
  <td>Warranty Claim Status</td>  
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
 
 
 $i = 0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Rental' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ $tax_amt11 = $i;}else{foreach($getTaxDefaultInfo as $taxKey){ $tax_amt11 = ($tot_spare_amt * $taxKey->tax_percentage) / 100;  }} }
 
 foreach($getServiceCatbyID as $ServiceKey){ if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Rental' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ $labor_chrg = $i;}else{ $labor_chrg = $ServiceKey->service_charge;}}
 
  if(isset($getservicecharge)){ $labor_chrg = $getservicecharge;}
  
 if($WarranKey->machine_status=="Chargeable"){ $conchrg = $key->concharge;}else{$conchrg = $i;}
 
 if(isset($tot_spare_amt) || isset($tax_amt11)  || isset($labor_chrg)  || isset($conchrg) ){
	$tottt = $tot_spare_amt+$tax_amt11+$labor_chrg+$conchrg;
 }
 
  $count='0'; foreach($getQuoteReviewSpareDetByID as $ReviewDetKey2){ 
		
  ?>
	<tr> 
	 
 <!--<td><input type="hidden" name="used_spare[]" id="used_spare<?php echo $count; ?>" value="<?php if(!empty($usedspare[$count])){echo $usedspare[$count];}?>"><input type="hidden" name="spare_tbl_id[]" id="spare_tbl_id<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->id;?>">

	<?php foreach($spareListByModelId1 as $sparekey1){
				  if($sparekey1->id==$ReviewDetKey2->spare_id){
					  echo $sparekey1->spare_name;
				  }
			}
			?> 
 </td>-->
 <td><input type="hidden" name="used_spare[]" id="used_spare<?php echo $count; ?>" value="<?php if(!empty($usedspare[$count])){echo $usedspare[$count];} ?>">
 <input type="hidden" name="spare_tbl_id[]" id="spare_tbl_id<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->id;?>">
 <select name="spare_name[]" id="sparename_<?php echo $count; ?>" class="spare_name" disabled="disabled"> 

			<option value="0">---Select---</option> 
			<?php foreach($spareListByModelId1 as $sparekey1){
				  if($sparekey1->id==$ReviewDetKey2->spare_id){
			?>
           <option selected="selected" value="<?php echo $sparekey1->id; ?>"><?php echo $sparekey1->spare_name.' - '.$sparekey1->part_no; ?></option>
			<?php } else {?>
			<option value="<?php echo $sparekey1->id; ?>"><?php echo $sparekey1->spare_name.' - '.$sparekey1->part_no; ?></option>
			<?php } } ?>
		</select>  
		<div class="spare-error<?php echo $count; ?>"></div>
	<?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>
	<div class="appendtr1<?php echo $count; ?>" id="appendtr11-<?php echo $count; ?>">
		<label class="form-control appendfont">Description of Failure</label>
		<textarea name="desc_failure[]" id="desc_failure" value="" class="noresize" readonly><?php echo $ReviewDetKey2->desc_failure;?></textarea>
	</div>
	<?php } ?>
	
	<?php if($ReviewDetKey2->warranty_claim_status!='to_claim'){?>
	<div class="appendtr" id="appendtr11-<?php echo $count; ?>">
		<label class="form-control appendfont">Description of Failure</label>
		<textarea name="desc_failure[]" id="desc_failure" value="" class="noresize" readonly></textarea>
	</div>
	<?php } ?>	
	<div name="error_sparename" id="error_sparename"></div></td>
<!--<td><?php echo $ReviewDetKey2->spare_qty; ?></td>-->


<td><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->spare_qty; ?>" class="spare_qty" readonly><input type="hidden" value="<?php if(!empty($stockspare[$count])){echo $stockspare[$count];}?>" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class="">
 	
	<?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>
	<div class="appendtr1<?php echo $count; ?>" id="appendtr12-<?php echo $count; ?>">
		<label class="form-control appendfont">Why &amp; When did it occur?</label>
		<textarea name="why_failure[]" id="why_failure" value="" class="noresize" readonly><?php echo $ReviewDetKey2->why_failure;?></textarea>
	</div>
	<?php } ?>
	
	<?php if($ReviewDetKey2->warranty_claim_status!='to_claim'){?>
	<div class="appendtr" id="appendtr12-<?php echo $count; ?>">
		<label class="form-control appendfont">Why &amp; When did it occur?</label>
		<textarea name="why_failure[]" id="why_failure" value="" class="noresize" readonly></textarea>
	</div>
	<?php } ?>	
	<div name="error_quantity" id="error_quantity"></div>
 
 </td> 
<!--<td><?php echo $ReviewDetKey2->amt; ?></td> -->

<td> <input type="text" value="<?php if(!empty($salesprice[$count])){echo $salesprice[$count];}?>" name="amt1" id="amt1<?php echo $count; ?>" class="" readonly></td>
 <td><input type="text" value="<?php if($ReviewDetKey2->amt !=0){ echo $ReviewDetKey2->amt; }?>" name="amt[]" id="amt<?php echo $count; ?>" class="amout" readonly><input type="hidden" value="<?php if(!empty($salesprice[$count])){echo $salesprice[$count];}?>" name="amt1" id="amt1<?php echo $count; ?>" class="">
 
 <?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>
	<div class="appendtr1<?php echo $count; ?>" id="appendtr13-<?php echo $count; ?>">
		<label class="form-control appendfont">Corrective Action</label>
		<textarea name="correct_action[]" id="correct_action" value="" class="noresize"readonly><?php echo $ReviewDetKey2->correct_action;?></textarea>
	</div>
	<?php } ?>
	
	<?php if($ReviewDetKey2->warranty_claim_status!='to_claim'){?>
	<div class="appendtr" id="appendtr13-<?php echo $count; ?>">
		<label class="form-control appendfont">Corrective Action</label>
		<textarea name="correct_action[]" id="correct_action" value="" class="noresize" readonly></textarea>
	</div>
	<?php } ?>	
 <div name="error_amount" id="error_amount"></div>
 </td>  
 <!--<td><?php 
  $qty=$ReviewDetKey2->spare_qty;
  $amt=$ReviewDetKey2->amt;
echo $total=$qty * $amt;
 ?></td>-->
 <td><?php echo $ReviewDetKey2->approval_status; ?></td>
 <!--<td><?php echo $ReviewDetKey2->warranty_claim_status; ?></td>-->
 
  <td>
	<select name="warranty_claim_status[]" class="warranty_claim_status" id="warranty_claim_status-<?php echo $count; ?>" disabled="disabled"> 
		<option value="">---select---</option>
		<option value="to_claim" <?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>selected='selected'<?php } ?>>To claim</option>
	</select>
 </td>
 
 <?php if($key->accepted_engg_id==$emp_id){ if($count !=0){?>
 <!--<td style="border:none;" ><a class="delRowBtn1" style="font-size:20px;color: #000" id="delRowBtn1_<?php echo $count; ?>"><span class="fa fa-trash-o" style="margin-right: 0px"></span></a></td>-->
 <?php }} ?>
 <input type="hidden" value="<?php echo $count; ?>" id="countidd">
	</tr>
  <?php $count++; }  ?>
	
  
  </table>

<?php foreach($getQuoteReviewDetByID1 as $ReviewDetKey1){ ?>

	<div class="col-md-12">
		<div class="col-md-6">
		<label>Notes :</label>
		<textarea type="text" name="notes" id="notes" style="overflow-y:auto;" class="materialize-textarea"><?php if($ReviewDetKey1->notes!=""){echo $ReviewDetKey1->notes;}else{foreach($getQuoteByReqId as $notekey){echo $notekey->notes;}} ?></textarea>
		
		
			<div class="col-md-6 ready box">
			<label>Date Of Delivery</label>:
			<input type="text" name="delivery_date" id="datetimepicker7" value="<?php echo $ReviewDetKey1->delivery_date; ?>" >
			<label>Comments</label>:
			<input type="text" name="comment_ready" class="" value="Delivered" >
			</div>
			
			<div class="col-md-6 delivery box"> 
			<label>Date Of Delivery</label>:
			<input type="text" name="delivery_date1" id="datetimepicker8" value="<?php echo $ReviewDetKey1->delivery_date; ?>" >
			<label>Comments</label>:
			<input type="text" name="comment_deliver" class="" value="Delivered" >
			<label>Assign To</label>:
			<input type="text" name="assign_to" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->emp_name; }?>" readonly><input type="hidden" name="assign_to_id" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->id; }?>" readonly>
			</div>
		
		</div>
		<div class=" col-md-6">
			<div class="col-md-offset-2 col-md-4">
			<label>Spare Tax Amount </label>
			</div>
			<div class=" col-md-6">
			<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Preventive'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?><?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>
			<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Rental'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

			<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Chargeable'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

			<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ ?><input type="hidden" name="amc_typ" id="amc_typ" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

			<input type="text" name="spare_tax" id="spare_tax" class="" value="<?php $i = 0; if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Rental' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){if($i!=0){echo $i;}}else{foreach($getTaxDefaultInfo as $taxKey){ $tax_amt = ($tot_spare_amt * $taxKey->tax_percentage) / 100; if($tax_amt !=0){ echo $tax_amt;}  }}?>" readonly><input type="hidden" name="tax_type" id="tax_type" class="" value="<?php foreach($getTaxDefaultInfo as $taxKey){ echo $taxKey->tax_percentage; }?>" >
			</div>
			<div class="col-md-offset-2 col-md-4">
			<label>Spare Total Charges </label>
			</div>
			<div class="col-md-6">
			<input type="text" name="spare_tot" id="spare_tot" class="" value="<?php if(isset($tot_spare_amt)){if($tot_spare_amt !=0) { echo $tot_spare_amt;}} ?>" readonly>
			</div>
			<div class="col-md-offset-2 col-md-4">
			<label>Labour Charges </label>
			</div>
			<div class="col-md-6">
			<input type="text" name="labourcharge" id="labourcharge" class="" value="<?php foreach($getServiceCatbyID as $ServiceKey){if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Rental' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){if($i!=0){echo $i;}}else{if($ServiceKey->service_charge != 0){echo $ServiceKey->service_charge;}}} if(isset($getservicecharge)){if($getservicecharge !=0)
	{ echo $getservicecharge;} }?>"  readonly>
		</div>
		<div class="col-md-offset-2 col-md-4">
		<label>Conveyance Charges </label>
		</div>
		<div class="col-md-6">
		<input type="text" name="concharge" id="concharge" class="" value="<?php if($WarranKey->machine_status=="Chargeable"){if($key->concharge !=0){echo $key->concharge;}}else{if($i!=0){echo $i;}} ?>" readonly>
		</div>
		<div class="col-md-offset-2 col-md-4">
		<label>Total Amount </label>
		</div>
		<div class="col-md-6">
		<input type="text" name="total_amt" id="total_amt" class="" value="<?php if($tottt !=0){echo $tottt;} ?>" readonly>
		</div>
		<div class="col-md-offset-2 col-md-4">
		<label >Status </label>
		</div>
		<?php foreach($get_status as $get_statusKey){ $stat = $get_statusKey->status;}?>
		<div class="col-md-6">
		<select name="status">
		<option value="2">---Select---</option>
					<?php foreach($status_listForqc as $qcstatuskey){
						  if($qcstatuskey->id==$stat){
					?>
				   <option selected="selected" value="<?php echo $qcstatuskey->id; ?>"><?php if($qcstatuskey->id=='1'){ echo "Work InProgress";}else{echo $qcstatuskey->status;}  ?></option>
					<?php } else {?>
					<option value="<?php echo $qcstatuskey->id; ?>"><?php if($qcstatuskey->id=='1'){ echo "Work InProgress";}else{echo $qcstatuskey->status;}  ?></option>
					<?php } } ?>
		</select>
		</div>
		</div>
	</div>
<table class="tableadd">


<!--<tr>
<td><label>Spare Tax Amount :</label></td><td>
<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Preventive'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?><?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>
<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Rental'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Chargeable'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ ?><input type="hidden" name="amc_typ" id="amc_typ" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

<input type="text" name="spare_tax" id="spare_tax" class="" value="<?php $i = 0; if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Rental' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){if($i!=0){echo $i;}}else{foreach($getTaxDefaultInfo as $taxKey){ $tax_amt = ($tot_spare_amt * $taxKey->tax_percentage) / 100; if($tax_amt !=0){ echo $tax_amt;}  }}?>" readonly><input type="hidden" name="tax_type" id="tax_type" class="" value="<?php foreach($getTaxDefaultInfo as $taxKey){ echo $taxKey->tax_percentage; }?>" ></td>

<td><label>Spare Total Charges :</label></td><td><input type="text" name="spare_tot" id="spare_tot" class="" value="<?php if(isset($tot_spare_amt)){if($tot_spare_amt !=0) { echo $tot_spare_amt;}} ?>" readonly></td>
<td><label>Labour Charges :</label></td><td><input type="text" name="labourcharge" id="labourcharge" class="" value="<?php foreach($getServiceCatbyID as $ServiceKey){if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Rental' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){if($i!=0){echo $i;}}else{if($ServiceKey->service_charge != 0){echo $ServiceKey->service_charge;}}} if(isset($getservicecharge)){if($getservicecharge !=0)
{ echo $getservicecharge;} }?>"  readonly></td>
</tr>-->

<!--<tr>
<td><label>Conveyance Charges :</label></td><td><input type="text" name="concharge" id="concharge" class="" value="<?php if($WarranKey->machine_status=="Chargeable"){if($key->concharge !=0){echo $key->concharge;}}else{if($i!=0){echo $i;}} ?>" readonly></td>
<td><label>Total Amount :</label></td><td><input type="text" name="total_amt" id="total_amt" class="" value="<?php if($tottt !=0){echo $tottt;} ?>" readonly></td>
<td><label >Status :</label></td>
<?php foreach($get_status as $get_statusKey){ $stat = $get_statusKey->status;}?>
<td>
<select name="status">
<option value="2">---Select---</option>
			<?php foreach($status_listForqc as $qcstatuskey){
				  if($qcstatuskey->id==$stat){
			?>
           <option selected="selected" value="<?php echo $qcstatuskey->id; ?>"><?php if($qcstatuskey->id=='1'){ echo "Work InProgress";}else{echo $qcstatuskey->status;}  ?></option>
			<?php } else {?>
			<option value="<?php echo $qcstatuskey->id; ?>"><?php if($qcstatuskey->id=='1'){ echo "Work InProgress";}else{echo $qcstatuskey->status;}  ?></option>
			<?php } } ?>
</select>
</td>
</tr>-->

<!--<tr>

</tr>

<tr>


</tr>-->
	
<!--<tr class="ready box">
<td><label>Date Of Delivery</label>:</td><td><input type="text" name="delivery_date" id="datetimepicker7" value="<?php echo $ReviewDetKey1->delivery_date; ?>" ></td>
</tr>
<tr class="ready box">
<td><label>Comments</label>:</td><td><input type="text" name="comment_ready" class="" value="Delivered" ></td>
</tr>
<tr class="delivery box">
<td><label>Date Of Delivery</label>:</td><td><input type="text" name="delivery_date1" id="datetimepicker8" value="<?php echo $ReviewDetKey1->delivery_date; ?>" ></td>
</tr>
<tr class="delivery box">
<td><label>Comments</label>:</td><td><input type="text" name="comment_deliver" class="" value="Delivered" ></td>
</tr>
<tr class="delivery box">
<td><label>Assign To</label>:</td><td><input type="text" name="assign_to" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->emp_name; }?>" readonly><input type="hidden" name="assign_to_id" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->id; }?>" readonly></td>
</tr>-->
</div>
</table>
<!--<table class="" >
<tr>
<td><label>Notes :</label></td>
<td><textarea type="text" name="notes" id="notes" style="height: 50px;
    width: 484px; margin-left: 118px;border: 1px solid #ccc; border-radius: 6px;" class="materialize-textarea"><?php if($ReviewDetKey1->notes!=""){echo $ReviewDetKey1->notes;}else{foreach($getQuoteByReqId as $notekey){echo $notekey->notes;}} ?></textarea></td>
</tr>
</table>-->
<?php } ?>
<input type="hidden" name="countid" id="countid" class="" value="<?php echo $count; ?>" >

<table class="tableadd" style="margin-top: 25px;">



<tr >
<td >
 <button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit <i class="fa fa-arrow-right"></i></button>&nbsp;
 <a class="btn cyan waves-effect waves-light " onclick="history.go(-1);">Exit </a>
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
</body>

</html>



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
