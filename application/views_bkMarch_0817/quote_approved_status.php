<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('  <tr>  <td>  <select>  <option>---Select---</option>  <option value="spare">Spare 1</option>  <option value="spare">Spare 2</option>  <option value="spare">Spare 3</option>  <option value="spare">Spare 4</option>  </select>  </td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td>   <td style="border:none;"><button class="delRowBtn" style="font-size:20px;"><i class="fa fa-trash-o"></i></button></td></tr>').appendTo(tbl);  
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});

$(function(){
    var tbl = $("#table11");
    
    $("#addRowBtn1").click(function(){
        $('  <tr>  <td>  <select>  <option>---Select---</option>  <option value="spare">Spare 1</option>  <option value="spare">Spare 2</option>  <option value="spare">Spare 3</option>  <option value="spare">Spare 4</option>  </select>  </td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td>   <td style="border:none;"><button class="delRowBtn1" style="font-size:20px;"><i class="fa fa-trash-o"></i></button></td></tr>').appendTo(tbl);  
		
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

<script>
$(document).ready(function(){
$('#totamt').click(function(){alert("ddd");
	alert($('#amt').val());
   

});
  
});
</script>


    <script type="text/javascript">

    $(document).ready(function(){

        $("select").change(function(){

            $(this).find("option:selected").each(function(){
					//alert($(this).val());
                if($(this).val()=="1"){

                    $(".box").not(".work").hide();

                    $(".work1").show();
					$(".work").show();

                }

                else if($(this).val()=="2"){

                    $(".box").not(".qc").hide();

                    $(".work2").show();
					$(".work").show();

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

            display: none;

            margin-top: 20px;

          box-shadow:none !important;

        }
		a.box{

          background:gray;

        }
  </style>

  <script>
$(document).ready(function(){
   $('.spare_name').change(function(){ //alert("hiiio");
	var idd=$(this).closest(this).attr('id');
	alert(idd);
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
/* $(document).ready(function(){
   $('#disc_amt').keyup(function(){ //alert("hiiio");
	
	var tot = parseInt($('#total_amt').val());
	var disc = parseInt($(this).val());
	var Total_amount = parseInt(tot) - parseInt(disc);
		//alert(Total_amount);
		$('#total_amt').val(Total_amount);

   });
 }); */
</script>
  
<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">Awaiting Approvals</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>quote_approved/edit_quotereview" method="post" name="frmServiceStatus" >
                  
<?php foreach($getQuoteByReqId as $key){
		if(isset($key->problem)){
					$problem_data = explode(",",$key->problem);
				}
	
	?>
<table class="tableadd">
<tr>
<td><label>Request ID</label>:</td><td><input type="text" name="reque_id" class="" value="<?php echo $key->request_id; ?>" readonly></td>
<td><label>Customer Name</label>:</td><td><input type="text" name="cust_name" class="" value="<?php echo $key->company_name; ?>" readonly><input type="hidden" name="cust_mobile" class="" value="<?php echo $key->cust_mobile; ?>" readonly><input type="hidden" name="brand_name" class="" value="<?php echo $key->brand_name; ?>" readonly></td>
</tr>

<tr>
<td><label>Branch Name</label>:</td><td><input type="text" name="br_name" class="" value="<?php echo $key->branch_name; ?>" readonly></td>
<td><label>Address</label>:</td><td><input type="text" name="address" class="" value="<?php echo $key->address.' '.$key->address1; ?>" readonly></td>
</tr>


<tr>
<td><label>Product Name</label>:</td><td><input type="text" name="p_name" class="" value="<?php echo $key->model; ?>" readonly><input type="hidden" name="modelid" id="modelid" class="" value="<?php echo $key->modelid; ?>"><input type="hidden" name="req_id" id="req_id" class="" value="<?php echo $req_id; ?>"></td>
<td><label>Date Of Purchase</label>:</td><td><input type="text" name="purchase_date" value="<?php echo $key->purchase_date; ?>" readonly></td>
</tr>
<tr>
<td><label>Warranty End Date</label>:</td><td><input type="text" name="warranty_date" value="<?php echo $key->warranty_date; ?>" readonly></td>
<td><label>Date Of Request</label>:</td><td><input type="text" name="request_date" value="<?php echo $key->request_date; ?>" readonly></td>
</tr>
<tr>
<td><label>Site</label>:</td><td><input type="text" name="site" class="" value="<?php echo $key->site; ?>" readonly></td><td><label>Service Location</label>:</td><td><input type="text" name="serviceloc" class="" value="<?php echo $key->service_loc; ?>" readonly></td>
</tr>
<tr>
<td><label>Problem</label>:</td><td><?php if(!empty($problemlist1)){
									foreach($problemlist1 as $problemlistkey1){ 
										if (in_array($problemlistkey1->id, $problem_data)){
											?>
										<input type="text" name="probi1[]" class="" value="<?php echo $problemlistkey1->prob_category; ?>" readonly><input type="hidden" name="probi[]" class="" value="<?php echo $problemlistkey1->id; ?>" readonly>
											
										<?php }} 
									}else{
										echo $prob_category ="";
							} ?></td><td><label>Machine Status</label>:</td><td><input type="text" name="" class="" value="<?php echo $key->machine_status; ?>" readonly></td>
</tr>
<tr>
<td><label>Blanket Approval</label>:</td><td><input type="text" name="blanket_app" class="" value="<?php echo $key->blank_app; ?>" readonly></td>
</tr>
<!--<tr>
<?php foreach($status_listForquoteInpro as $statuskey){
				  if($statuskey->id==$stat){
			?>
<td ><label><?php echo $statuskey->status; ?></label></td>
<?php } } ?>
</tr>-->

</table>
<?php } ?>


<table id="table11" class="tableadd2" style="margin-bottom: 20px;">
  
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


<table class="tableadd">
<?php foreach($getQuoteReviewDetByID1 as $ReviewDetKey1){ ?>

<tr>
<td><label>Spare Tax Amount</label>:</td><td>

<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Preventive'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?><?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Chargeable'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ ?><input type="hidden" name="amc_typ" id="amc_typ" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

<input type="text" name="spare_tax" id="spare_tax" class="" value="<?php $i = 0; if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){echo $i;}else{foreach($getTaxDefaultInfo as $taxKey){ echo $tax_amt = ($tot_spare_amt * $taxKey->tax_percentage) / 100;  }}?>" ><input type="hidden" name="tax_type" id="tax_type" class="" value="<?php foreach($getTaxDefaultInfo as $taxKey){ echo $taxKey->tax_percentage; }?>" ></td><td><label>Spare Total Charges</label>:</td><td><input type="text" name="spare_tot" id="spare_tot" class="" value="<?php if(isset($tot_spare_amt)){echo $tot_spare_amt;}?>" ></td>
</tr>

<tr>
<td><label>Labour Charges</label>:</td><td><input type="text" name="labourcharge" id="labourcharge" class="" value="<?php foreach($getServiceCatbyID as $ServiceKey){if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){echo $i;}else{echo $ServiceKey->service_charge;}} if(isset($getservicecharge)){echo $getservicecharge;} ?>" ></td><td><label>Conveyance Charges</label>:</td><td><input type="text" name="concharge" id="concharge" class="" value="<?php if($WarranKey->machine_status=="Chargeable" && $WarranKey->site == 'Customer Site'){echo $key->concharge;}else{echo $i;} ?>" ></td>
</tr>

<tr>
<td><label>Total Amount</label>:</td><td><input type="text" name="total_amt" id="total_amt" class="" value="<?php echo $tottt; ?>" ></td><td><label>Discounts</label>:</td><td><input type="text" name="disc_amt" id="disc_amt" class="" value="" ><input type="hidden" name="disc_amt1" id="disc_amt1" class="" value="<?php echo $ReviewDetKey1->disc_amt; ?>" ></td>
</tr>
<tr>
<td><label>Date Of Delivery</label>:</td><td><input type="text" name="delivery_date" id="datetimepicker7" value="<?php echo $ReviewDetKey1->delivery_date; ?>" ><input type="hidden" name="sms_mobile" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->emp_mobile; }?>" readonly></td>
</tr>

<tr>
<td><label >Status</label></td>
<?php foreach($get_status as $get_statusKey){ $stat = $get_statusKey->status;}?>
<td>
<select name="status">
<option value="7">---Select---</option>
<!--<option value="approve">Approve</option>-->
		   
		   <?php foreach($status_listForquoteInpro as $statuskey){
				  if($statuskey->id==$stat){
			?>
           <option selected="selected" value="<?php echo $statuskey->id; ?>"><?php echo $statuskey->status; ?></option>
			<?php } else {?>
			<option value="<?php echo $statuskey->id; ?>"><?php echo $statuskey->status; ?></option>
			<?php } } ?>
</select>
</td>

</tr>
</table>
<table class="tableadd">
<tr>
<td><label>Notes</label>:</td><td><textarea type="text" name="notes" id="notes" class="materialize-textarea"><?php if($ReviewDetKey1->notes!=""){echo $ReviewDetKey1->notes;}else{foreach($getQuoteByReqId as $notekey){echo $notekey->notes;}} ?></textarea></td>
</tr>
</table>
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