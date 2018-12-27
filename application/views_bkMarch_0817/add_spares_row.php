<tr> 
 <td>
		<input type="hidden" name="used_spare[]" id="used_spare<?php echo $count; ?>" value="" class="spare_qty">
 		<select name="spare_name[]" id="sparename_<?php echo $count; ?>" class="spare_name">  
			<option value="">---Select---</option> 
			<?php foreach($spareListByModelId as $sparekey){ ?>
			<option value="<?php echo $sparekey->id; ?>"><?php echo $sparekey->spare_name; ?></option>
		   <?php } ?>
		</select> 
		<div class="appendtr<?php echo $count; ?>">
		<label class="form-control">Description of Failure</label>
		<textarea name="desc_failure[]" id="desc_failure" value="" class="noresize"></textarea>
		</div>
 </td>  
 <td>
	<input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="" class="spare_qty"><input type="hidden" value="" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class="">
	<div  class="appendtr<?php echo $count; ?>">
	<label class="form-control">Why & When did it occur?</label>
	<textarea name="why_failure[]" id="why_failure" value="" class="noresize"></textarea>
	</div>
 </td>  
 <td>
	<input type="text" value="" name="amt[]" id="amt<?php echo $count; ?>" class="" readonly><input type="hidden" value="" name="amt1" id="amt1<?php echo $count; ?>" class="">
	<div  class="appendtr<?php echo $count; ?>">
	<label class="form-control">Corrective Action</label>
	<textarea name="correct_action[]" id="correct_action" value="" class="noresize"></textarea>
	</div>
 </td>  
 <td></td>
 <td>
	<select name="warranty_claim_status[]" class="warranty" id="warranty<?php echo $count; ?>"> 
		<option value="">---select---</option>
		<option value="to_claim">To claim</option>
	</select>
 </td>
 <td style="border:none;"><a class="delRowBtn1" style="font-size:20px;color: #000" id="delRowBtn1_<?php echo $count; ?>"><span class="fa fa-trash-o" style="margin-right: 0px;"></span></a></td>
</tr>
<!--<tr class="appendtr">
	<td style="border:none"><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="" class="spare_qty"><input type="hidden" value="" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class=""></td>
	<td style="border:none"><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="" class="spare_qty"><input type="hidden" value="" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class=""></td>
	<td style="border:none"><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="" class="spare_qty"><input type="hidden" value="" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class=""></td>
</tr>-->

<script>
	$(function(){
		$(".appendtr<?php echo $count; ?>").hide();
		$("#warranty<?php echo $count; ?>").change(function(){
			if($(this).find("option:selected").attr("value")=="to_claim"){
				$(".appendtr<?php echo $count; ?>").show();
			}
			else{
				$(".appendtr<?php echo $count; ?>").hide();
			}
		});
	});
</script>

<script>
$('.spare_qty').keyup(function() { //alert($('#tax_type').val());
    var idd=$(this).closest(this).attr('id');
	var arr = idd.split('_');
	var ctid = arr['1'];
	var warran = $('#spare_tax1').val();
	var amc_type = $('#amc_typ').val();
    //alert(amc_type);
	var qty = $(this).val();
	//alert("value"+$(this).val());
   // var actual_qty = $('#spare_qty1'+ctid).val();
	if(parseInt($(this).val())!="" && $(this).val()!=""){//alert("true");
		
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
		$('#total_amt1').val(Total_amount);
		
		$('#service_pending_amt').val(Total_amount);
			$('#service_pending_amt1').val(Total_amount);
	}
	
	
	
    //$('input[name="res"]').val(val);
   
});
</script>

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
<style>
	label{
		border:none !important;
		font-size: 0.85em !important;
	}
	textarea{
		border:1px solid #ccc !important;
		width:95% !important;
		border-radius:5px !important;
	}
	.noresize{
		resize:none;
	}
</style>