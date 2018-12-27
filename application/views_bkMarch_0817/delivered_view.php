<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('  <tr><td>  <select>  <option>---Select---</option>  <option>Spare 1</option>  <option>Spare 2</option>  <option>Spare 3</option>  <option>Spare 4</option>  </select>  </td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td> <td style="border:none;"><button class="delRowBtn" style="font-size:20px;"><i class="fa fa-trash-o"></i></button></td></tr>').appendTo(tbl);  
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});
});//]]>  

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
 }
 .tableadd tr td label{
	width: 180px !important;
font-weight: bold;
font-size: 13px;
	 
 }
 .box{

            padding: 20px;

        
            margin-top: 20px;

          box-shadow:none !important;

        }
		.spare_table tr td label
		{
			width: 100%;
		}
		.spare_charge
		{
			margin-left:20%;
		}
		
  </style>

  

<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">Delivered View</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>delivery/edit_quotereview" method="post" name="frmServiceStatus">
                               
<?php foreach($getQuoteByReqId as $key){
		if(isset($key->problem)){
					$problem_data = explode(",",$key->problem);
				}
	?>
<table class="tableadd">
<tr>
<td><label>Request ID</label>:</td><td><input type="text" name="reque_id" class="" value="<?php echo $key->request_id; ?>" readonly></td>
<td><label>Customer Name</label>:</td><td><input type="text" name="" class="" value="<?php echo $key->customer_name; ?>" readonly></td>
</tr>

<tr>
<td><label>Branch Name</label>:</td><td><input type="text" name="br_name" class="" value="<?php echo $key->branch_name; ?>" readonly></td>
<td><label>Address</label>:</td><td><?php echo $key->address.' '.$key->address1; ?></td>
</tr>

<tr>
<td><label>Product Name</label>:</td><td><input type="text" name="" class="" value="<?php echo $key->model; ?>" readonly><input type="hidden" name="req_id" id="req_id" class="" value="<?php echo $req_id; ?>"></td>
<td><label>Date Of Purchase</label>:</td><td><input type="text" name="" value="<?php echo $key->purchase_date; ?>" readonly></td>
</tr>
<tr>
<td><label>Warranty End Date</label>:</td><td><input type="text" name="" value="<?php echo $key->warranty_date; ?>" readonly></td>
<td><label>Date Of Request</label>:</td><td><input type="text" name="" value="<?php echo $key->request_date; ?>" readonly></td>
</tr>
<tr>
<td><label>Site</label>:</td><td><input type="text" name="" class="" value="<?php echo $key->site; ?>" readonly></td><td><label>Location</label>:</td><td><input type="text" name="" class="" value="<?php echo $key->service_loc; ?>" readonly></td>
</tr>
<tr>
<td><label>Problem</label>:</td><td><?php if(!empty($problemlist1)){
									foreach($problemlist1 as $problemlistkey1){ 
										if (in_array($problemlistkey1->id, $problem_data)){
											echo '<br/>'.$prob_category = $problemlistkey1->prob_category;
										}} 
									}else{
										echo $prob_category ="";
							} ?></td><td><label>Machine Status</label>:</td><td><input type="text" name="" class="" value="<?php echo $key->machine_status; ?>" readonly></td>
</tr>


</table>
<?php } ?>


<?php if($key->site != "Stamping"){ ?>
 <table id="table1" class="tableadd2" style="margin-bottom: 20px;">
  
  


 
  
  <tr class="back" > 
  <td>Spare Name</td>
  <td>Quantity</td>
  <td>Amount</td>   
  </tr>	
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
  
 if($WarranKey->machine_status=="Chargeable" && $WarranKey->site == 'Customer Site'){ $conchrg = $key->concharge;}else{$conchrg = $i;}
 
 if(isset($tot_spare_amt) || isset($tax_amt11)  || isset($labor_chrg)  || isset($conchrg) ){
	$tottt = $tot_spare_amt+$tax_amt11+$labor_chrg+$conchrg;
 }
  $count='0'; foreach($getQuoteReviewSpareDetByID as $ReviewDetKey2){ 
		
  ?>
  <tr> 
	 
 <td><input type="hidden" name="used_spare[]" id="used_spare<?php echo $count; ?>" value="<?php if(!empty($usedspare[$count])){echo $usedspare[$count];}?>"><input type="hidden" name="spare_tbl_id[]" id="spare_tbl_id<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->id;?>">
 
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
  </table>



<?php foreach($getQuoteReviewDetByID1 as $ReviewDetKey1){ ?>
<table class="tableadd">

<tr>
<td><label>Spare Tax Amount</label>:</td><td>

<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Preventive'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?><?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Chargeable'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>


<input type="text" name="spare_tax" id="spare_tax" class="" value="<?php $i = 0; if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){echo $i;}else{foreach($getTaxDefaultInfo as $taxKey){ echo $tax_amt = ($tot_spare_amt * $taxKey->tax_percentage) / 100;  }}?>" readonly><input type="hidden" name="tax_type" id="tax_type" class="" value="<?php foreach($getTaxDefaultInfo as $taxKey){ echo $taxKey->tax_percentage; }?>" ></td><td><label>Spare Total Charges</label>:</td><td><input type="text" name="spare_tot" id="spare_tot" class="" value="<?php if(isset($tot_spare_amt)){echo $tot_spare_amt;} ?>" readonly></td>
</tr>

<tr>
<td><label>Labour Charges</label>:</td><td><input type="text" name="labourcharge" id="labourcharge" class="" value="<?php foreach($getServiceCatbyID as $ServiceKey){if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){echo $i;}else{echo $ServiceKey->service_charge;}} if(isset($getservicecharge)){echo $getservicecharge;} ?>" readonly></td><td><label>Conveyance Charges</label>:</td><td><input type="text" name="concharge" id="concharge" class="" value="<?php if($WarranKey->machine_status=="Chargeable" && $WarranKey->site == 'Customer Site'){echo $key->concharge;}else{echo $i;} ?>" readonly></td>
</tr>

<tr>
<td><label>Total Amount</label>:</td><td><input type="text" name="total_amt" id="total_amt" class="" value="<?php if((isset($ReviewDetKey1->pending_amt) && $ReviewDetKey1->pending_amt!="0") || (isset($ReviewDetKey1->disc_amt) && $ReviewDetKey1->disc_amt!="0") || (isset($ReviewDetKey1->plus_amt) && $ReviewDetKey1->plus_amt!="0")){echo $ReviewDetKey1->total_amt; }else{echo $tottt;}?>" readonly><input type="hidden" name="total_amt1" id="total_amt1" class="" value="<?php if((isset($ReviewDetKey1->pending_amt) && $ReviewDetKey1->pending_amt!="0") || (isset($ReviewDetKey1->disc_amt) && $ReviewDetKey1->disc_amt!="0") || (isset($ReviewDetKey1->plus_amt) && $ReviewDetKey1->plus_amt!="0")){echo $ReviewDetKey1->total_amt; }else{echo $tottt;}?>" ></td>

<td><label>Discount Amount</label>:</td><td><input type="text" name="disc_amt" value="" readonly><input type="hidden" name="disc_amt1" id="disc_amt1" class="" value="<?php echo $ReviewDetKey1->disc_amt; ?>" ></td>

</tr>

<tr>
<td><label>Add Amount</label>:</td><td><input type="text" name="plus_amt" value="" readonly><input type="hidden" name="plus_amt1" id="plus_amt1" class="" value="<?php echo $ReviewDetKey1->plus_amt; ?>" ></td>

<td><label><b>Payment mode: </b></label></td>
	<td>
		<select name="payment_mode">
			<option value="">---Select---</option>
			<option value="Cash" <?php if(isset($ReviewDetKey1->payment_mode) && $ReviewDetKey1->payment_mode=="Cash"){?> selected="selected" <?php } ?>>Cash</option>
			<option value="Cheque" <?php if(isset($ReviewDetKey1->payment_mode) && $ReviewDetKey1->payment_mode=="Cheque"){?> selected="selected" <?php } ?>>Cheque</option>
		</select>
	</td>
		
		
	</tr>

	<tr>
		<td><label><b>CMR Paid</b></label></td>
		<td><input type="text" name="service_cmr_paid" id="service_cmr_paid" value="" ><input type="hidden" name="service_cmr_paid1" id="service_cmr_paid1" class="" value="<?php if(isset($ReviewDetKey1->cmr_paid)){echo $st = $ReviewDetKey1->cmr_paid;}else{ echo $st = '0'; } ?>"></td>
		
		<td><label><b>Pending Amount</b></label></td>
		<td><input type="text" name="service_pending_amt" id="service_pending_amt" value="<?php if(isset($ReviewDetKey1->pending_amt)){echo $ReviewDetKey1->pending_amt;} ?>" readonly><input type="hidden" name="service_pending_amt1" id="service_pending_amt1" class="" value="<?php if(isset($ReviewDetKey1->pending_amt)){echo $ReviewDetKey1->pending_amt;} ?>"></td>
	</tr>

<tr class="ready ">
<td><label>Date Of Delivery</label>:</td><td><input type="text" name="" value="<?php echo $ReviewDetKey1->delivery_date; ?>" readonly></td>

<td><label>Comments</label>:</td><td><input type="text" name="" class="" value="<?php echo $ReviewDetKey1->comments; ?>" readonly></td>
</tr>

<tr class="ready">
<td><label>Emp Pts</label>:</td><td><input type="text" name="emp_pts" value="<?php if(isset($ReviewDetKey1->emp_pts) && $ReviewDetKey1->emp_pts!="0"){echo $ReviewDetKey1->emp_pts; }else{echo "0";}?>" readonly></td>
</tr>

</table>
<table class="tableadd">
<tr>
<td><label>Notes</label>:</td><td><textarea type="text" name="notes" id="notes" class="materialize-textarea" readonly><?php if($ReviewDetKey1->notes!=""){echo $ReviewDetKey1->notes;}else{foreach($getQuoteByReqId as $notekey){echo $notekey->notes;}} ?></textarea></td>
</tr>
</table>
<table class="tableadd">
<tr>
<td><label>Customer Feedback</label>:</td><td><textarea type="text" name="cust_feed" id="cust_feed" class="materialize-textarea"><?php if($ReviewDetKey1->cust_feed!=""){echo $ReviewDetKey1->cust_feed;} ?></textarea></td>
</tr>
</table>
<?php } ?>
<?php } ?>


<?php if($key->site == "Stamping"){ 
		if(!empty($stamping_details)){
			foreach($stamping_details as $stamp_det){
				if(isset($stamp_det->stamping_received)){
					$stamping_received = explode(",",$stamp_det->stamping_received);
				}
?>
<p><b>Stamping Details:</b> </p>
<table class="tableadd">
<tr>
	<td><label><b>Year</b></label></td>
	<td><input type="text" name="year" id="year" class="" value="<?php if(isset($stamp_det->year)){echo $stamp_det->year;} ?>" readonly></td>
	<td><label><b>Quarter</b></label></td>
	<td><input type="text" name="qtr" id="qtr" class="" value="<?php if(isset($stamp_det->quarter)){echo $stamp_det->quarter;} ?>" readonly></td>
	</tr>
	
	<tr>
	<td><label><b>Kg</b></label></td>
	<td><input type="text" name="kg" id="kg" class="" value="<?php if(isset($stamp_det->kg)){echo $stamp_det->kg;} ?>" readonly></td>
	<td><label><b>Received</b></label></td>
	<td>
		<select name="stamping_received[]" multiple style="height:60px; background-image:none;border: 1px solid #055E87; border-radius: 5px;">
			<option value="">---Select---</option>
			<option value="vcplate" <?php if (in_array('vcplate', $stamping_received)){?> selected="selected" <?php } ?> >VC Plate</option>
			<option value="vcpaper" <?php if (in_array('vcpaper', $stamping_received)){?> selected="selected" <?php } ?>>VC Paper</option>
			<option value="bothplatepaper" <?php if (in_array('bothplatepaper', $stamping_received)){?> selected="selected" <?php } ?>>Both VC Plate &amp; VC Paper</option>
		</select>
	</td>
	
	
	</tr>
	
	<tr>
	<td><label><b>Stamping Charge</b></label></td>
	<td><input type="text" name="stamping_charge" id="stamping_charge" class="" value="<?php if(isset($stamp_det->stamping_charge)){echo $stamp_det->stamping_charge;} ?>" readonly></td>
	<td><label><b>Agent Charge</b></label></td>
	<td><input type="text" name="agn_charge" id="agn_charge" class="" value="<?php if(isset($stamp_det->agn_charge)){echo $stamp_det->agn_charge;} ?>" readonly></td>
	
	</tr>
	
	<tr>
	<td><label><b>Penalty</b></label></td>
	<td><input type="text" name="penalty" id="penalty" class="" value="<?php if(isset($stamp_det->penalty)){echo $stamp_det->penalty;} ?>" readonly></td>
	<td><label><b>Conveyance Charge</b></label></td>
	<td><input type="text" name="conveyance_charge" id="conveyance_charge" class="" value="<?php if(isset($stamp_det->conveyance)){echo $stamp_det->conveyance;} ?>" readonly></td>
	
	</tr>
	
	<tr>
	<td><label><b>Total Charge</b></label></td>
	<td><input type="text" name="tot_charge" id="tot_charge" class="" value="<?php if(isset($stamp_det->tot_charge)){echo $stamp_det->tot_charge;} ?>" readonly></td>
	<td><label><b>CMR Paid</b></label></td>
	<td><input type="text" name="cmr_paid" id="cmr_paid" class="" value="<?php if(isset($stamp_det->	cmr_paid)){echo $stamp_det->cmr_paid;} ?>" readonly></td>
	
	</tr>
	<tr>
		<td><label><b>Pending Amount</b></label></td>
	<td><input type="text" name="pending_amt" id="pending_amt" class="" value="<?php if(isset($stamp_det->pending_amt)){echo $stamp_det->pending_amt;} ?>" readonly></td>
		<td><label>Date Of Delivery</label>:</td>
		<td><input type="text" name="delivery_date" value="<?php foreach($getQuoteReviewDetByID1 as $ReviewDetKey1){ if(isset($ReviewDetKey1->delivery_date)){echo $ReviewDetKey1->delivery_date; }else{echo $del_date;} }  ?>" readonly></td>
		
	</tr>
	<tr>
		<td><label>Assign To</label>:</td><td><input type="text" name="assign_to" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->emp_name; }?>" readonly><input type="hidden" name="assign_to_id" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->id; }?>" readonly></td>
	</tr>
	<?php if(!empty($log_stamping_details)){ foreach($log_stamping_details as $log_stampingKey){?>
<tr>
<td><label>Date of On-Hold</label>:</td><td><input type="text" name="on_hold" value="<?php if(isset($log_stampingKey->on_hold_date)){echo $log_stampingKey->on_hold_date; }else{echo $req_date;} ?>" readonly>   <input type="hidden" name="assign_to_stamp_id" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->id; }?>" readonly></td>

<td><label>Reason</label>:</td><td><textarea type="text" name="on_hold_reason" id="on_hold_reason" class="materialize-textarea" readonly><?php if(isset($log_stampingKey->on_hold_reason)){echo $log_stampingKey->on_hold_reason; } ?></textarea></td>
</tr>
	
<?php } }?>
</table>

<table class="tableadd">
<tr>
<td><label>Customer Feedback</label>:</td><td><textarea type="text" name="cust_feed" id="cust_feed" class="materialize-textarea"><?php if($ReviewDetKey1->cust_feed!=""){echo $ReviewDetKey1->cust_feed;} ?></textarea></td>
</tr>
</table>
<?php } } } ?>

<?php //if($key->site!='Stamping'){?>	
<!--<table class="spare_table" style="margin-top: 20px;width: 60%;">
<label style="color:red;">Check any button to print invoice </label>
<tr><td><label><input type="radio" id="print_invoice" class="print_invoice" name="print_invoice" value="with_spare"><span class="spare_charge">With Spare charges</span></label> </td>
<td><label><input type="radio" id="print_invoice" class="print_invoice" name="print_invoice"  value="without_spare"><span class="spare_charge">Without Spare charges</span></label></td>
</tr>
</table>-->
<?php //} ?>

<table class="tableadd" style="margin-top: 25px;">
<tr>
<td>
 <button class="btn cyan waves-effect waves-light " type="submit" name="Save" value="save">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>
	
<?php if($key->site!='Stamping'){?>		
	<!--<a  class="delivery box" href="<?php echo base_url(); ?>ready_delivery/print_request/<?php echo $req_id; ?>" style="background: rgb(5, 94, 135) none repeat scroll 0% 0% !important;
padding: 10.4px !important;
color: #FFF !important;
border-radius: 5px !important;
margin-left: 20px !important;"  id="print_box" target="_blank">Print Invoice</a>-->
<!--<button href="<?php echo base_url(); ?>ready_delivery/print_request/<?php echo $req_id; ?>" style="
padding: 10.4px !important;
color: #FFF !important;
border-radius: 5px !important;
margin-left: 20px !important;"  id="print_box" type="submit" name="Save" value="print">Print Invoice</button> -->
<?php } ?>



&nbsp;<a class="btn cyan waves-effect waves-light " onclick="history.go(-1);">Exit
                              </a>
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
  
  <script>
/* $(document).ready(function(){
   $('#print_box').click(function(){ 
   
   if(document.getElementById('print_invoice').checked){
	   var with_spare = '1';
   }
   if(document.getElementById('print_invoice1').checked){
	   var without_spare = '0';
   }
   alert(without_spare);
   //var dataString = 'id='+id;
    




   });
 }); */
</script>
  
  
  
  <script >
$(window).load(function(){
$(document).ready(function(){

 $("#print_box").attr("disabled","disabled");
 $("#print_box").css("background", "#999");

    
    
    $(".print_invoice").click(function(){
        $("#print_box").removeAttr("disabled").css("background","#055E87");
       
    })    
        
    $("#print_box").click(function(e){
        if($("#print_box").attr("disabled")=="disabled")
        {
            e.preventDefault();    
        }        
    });     
});
});

</script>
  
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

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   
	   <script>
	   
	   $('#plus_amt').keyup(function(e) { 
	
		 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
			alert("Numbers Only");
			return false;
		} else{
			var disc_amt = $( this ).val();
			//alert(disc_amt);
			if(disc_amt){
				var total_amt = $('#total_amt1').val();
				//alert(total_amt);
				var disc_amt = $( this ).val();
				//alert(disc_amt);
				var discount_amt = parseInt(total_amt) + parseInt(disc_amt);
				//alert(discount_amt);
				$('#total_amt').val(discount_amt);
				$('#service_pending_amt').val(discount_amt);
				$('#service_pending_amt1').val(discount_amt);
			}else{
				var total_amt = $('#total_amt1').val();
				//alert(total_amt);
				$('#total_amt').val(total_amt);
				$('#service_pending_amt').val(total_amt);
				$('#service_pending_amt1').val(total_amt);
			}
		}
		
	
});


	   
	$('#disc_amt').keyup(function(e) { 
	
		 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
			alert("Numbers Only");
			return false;
		} else{
			var disc_amt = $( this ).val();
			//alert(disc_amt);
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
				//alert(total_amt);
				$('#total_amt').val(total_amt);
				$('#service_pending_amt').val(total_amt);
				$('#service_pending_amt1').val(total_amt);
			}
		}
		
	
});

$('#service_cmr_paid').keyup(function(e) { 
//alert("hello boss");
	if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
			alert("Numbers Only");
			return false;
	}else{
		var service_pending_amt_val = $('#service_pending_amt1').val();
		//alert(service_pending_amt_val);
		var service_cmr_paid = $(this).val();
		//alert(service_cmr_paid);
		if(service_cmr_paid){
			var service_pending_amt = parseInt(service_pending_amt_val) - parseInt(service_cmr_paid);
			//alert(service_pending_amt);
			$('#service_pending_amt').val(service_pending_amt);
		}else{
			$('#service_pending_amt').val(service_pending_amt_val);
		}
		
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
</body>

</html>