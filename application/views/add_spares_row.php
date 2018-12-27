
<tr> 
 <td><input type="hidden" id="eng_idd" value="<?php echo $engidd;?>">
		<input type="hidden" name="used_spare[]" id="used_spare<?php echo $count; ?>" value="" class="spare_qty">
 		<select name="spare_name[]" id="sparename_<?php echo $count; ?>" class="spare_name">  
			<option value="">---Select---</option> 
			<?php foreach($spareListByModelId as $sparekey){ ?>
			<option value="<?php echo $sparekey->id; ?>"><?php echo $sparekey->spare_name; echo "     -     "; ?><?php echo $sparekey->part_no; ?></option>
		   <?php } ?>
		</select> 
		
		<div class="appendtr<?php echo $count; ?>">
		<label class="form-control">Description of Failure</label>
		<textarea name="desc_failure[]" id="desc_failure" value="" class="noresize"></textarea>
		</div>
		<div id="errorBox1<?php echo $count; ?>" style="color:red"></div>
 </td>  
 <td>
	<input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="" class="spare_qty"><input type="hidden" value="" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class="">
	<input  type="hidden" value="0" name="qty_plus" id="qty_plus<?php echo $count; ?>">
	<div  class="appendtr<?php echo $count; ?>">
	<label class="form-control">Why & When did it occur?</label>
	<textarea name="why_failure[]" id="why_failure" value="" class="noresize"></textarea>
	</div>
	<div id="errorbox2<?php echo $count; ?>" style="color:red"></div>
 </td> 
<td> <input type="text" value="" name="amt12" id="amt12<?php echo $count; ?>" class="" readonly></td>
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
 <td style="border:none;"><a class="delRowBtn1" style="font-size:20px;color: #000; cursor:pointer;" id="delRowBtn1_<?php echo $count; ?>"><span class="fa fa-trash-o" style="margin-right: 0px;"></span></a></td>
</tr>
<!--<tr class="appendtr">
	<td style="border:none"><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="" class="spare_qty"><input type="hidden" value="" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class=""></td>
	<td style="border:none"><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="" class="spare_qty"><input type="hidden" value="" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class=""></td>
	<td style="border:none"><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="" class="spare_qty"><input type="hidden" value="" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class=""></td>
</tr>-->
<link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet">
   <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>
 <script>
		$(function(){
			$(".spare_name").chosen();
		});
   </script>
<script>
	$(function(){
		$(".appendtr<?php echo $count; ?>").hide();
		$(".spare_name").chosen();
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
$('.spare_qty').keyup(function() { //alert($(this).val());
    var idd=$(this).closest(this).attr('id');
	var arr = idd.split('_');
	var ctid = arr['1'];
	var warran = $('#spare_tax1').val();
	var amc_type = $('#amc_typ').val();
    //alert($('#eengid').val());
	var engid;
	if($('#eng_idd').val()!=0){
	 engid=$('#eng_idd').val();
	}else{
	 engid=$('#eengid').val();
	}
	
	var spareid=$('#sparename_'+ctid).val();
	//alert(spareid);
	var datastring='spareid='+spareid+'&engid='+engid;
	
	var qty = $(this).val();
	//alert(datastring);
   // var actual_qty = $('#spare_qty1'+ctid).val();
	if(parseInt($(this).val()) && $(this).val()){
		 
	


		   var qtyplus=$('#qty_plus'+ctid).val();
     //alert(qty);

		if(parseInt(qty) > parseInt(qtyplus)){ //alert("hiii");
	  alert("Qty is only: "+ qtyplus + " nos. So please enter below that.");
	  $('#spareqty_'+ctid).val('');
	  $('#amt'+ctid).val('');
	  
	}else{ //alert("true");
		var cal_amt = parseInt(qty) * parseInt($('#amt12'+ctid).val());
		if(parseInt(cal_amt)){
			$('#amt'+ctid).val(cal_amt);
		}
		 
	
		
	}
	
/* }
else{
		alert("Qty is only: 0 nos. So please enter below that.");
	  $('#spareqty_'+ctid).val('');
}
 */

   
	
   }else{ //alert("else");
	   $('#amt'+ctid).val('');
   } 
    
    var vals = 0;
   var ii=0;
   $('input[name="amt[]"]').each(function() { //alert("dsd");
					//alert($(this).val());
			if($('#approval_statusid_'+ii).val()=='approved'){
                vals += Number($(this).val());
				//alert(val);
				$('#spare_tot').val(vals);
				
				
			}	
           ii++; });
			
	var tax_amt = (vals * $('#tax_type').val()) / 100;
	//alert(tax_amt);
	if(warran=='Preventive' || warran=='Warranty' || warran=='Rental' || amc_type=='Comprehensive'){
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
		
		if(parseInt(labourcharge)){
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(labourcharge) + parseInt(concharge);
		}else if(parseInt(concharge)){
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(concharge);
		}else if(parseInt(tax)){
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) ;
		}else{
			var Total_amount = parseInt(total_spare_charge) ;
		}
		
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
	$.each(data, function(index, data){//alert(data.sales_price);
		   $('#spare_qty1'+ctid).val(data.spare_qty),
		   $('#amt1'+ctid).val(data.sales_price),
		   $('#amt12'+ctid).val(data.sales_price),
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
$(document).ready(function(){ //alert("hii");
	$("#resgister").click(function(event){
		//var count=<?php echo $count; ?>;
		//alert(count);
if ( $( "#sparename_<?php echo $count; ?>" ).val() === "" ) {
	$( "#errorBox1<?php echo $count; ?>" ).text( " Select Spare Name" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#spareqty_<?php echo $count; ?>" ).val() === "" ) {
	$( "#errorbox2<?php echo $count; ?>" ).text( " Enter the Spare Quantity" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  
});
});

</script>
   
 <script>
    $(document).ready(function(){
		
		
		$('#spareqty_<?php echo $count; ?>').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		
	 });
</script>
<script>
     $(document).ready(function(){
		$("#sparename_<?php echo $count; ?>").change(function(){
			if($(this).val()==""){
			    $("#errorBox1<?php echo $count; ?>").show();
			}
			else{
				$("#errorBox1<?php echo $count; ?>").hide();
			}
		});
		$("#spareqty_<?php echo $count; ?>").keyup(function(){
			if($(this).val()==""){
			    $("#errorbox2<?php echo $count; ?>").show();
			}
			else{
				$("#errorbox2<?php echo $count; ?>").hide();
			}
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
	a > span.fa {
    color: #fff !important;
    background: #6c477d;
    padding: 5px;
}
.chosen-container .chosen-drop {
    position: absolute;
    width: auto !important;
}
</style>
