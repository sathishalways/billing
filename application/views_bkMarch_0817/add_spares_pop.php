<!--<tr> 
 <td><input type="hidden" name="used_spare[]" id="used_spare<?php echo $count; ?>" value="" class="spare_qty"><select name="spare_name[]" id="sparename_<?php echo $count; ?>" class="spare_name">  
			<option value="">---Select---</option> 
			<?php foreach($spareListByModelId as $sparekey){ ?>
			<option value="<?php echo $sparekey->id; ?>"><?php echo $sparekey->spare_name; ?></option>
		   <?php } ?>
		</select>  
 </td>  
 <td><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="" class="spare_qty"><input type="hidden" value="" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class=""></td>  
 <td><input type="text" value="" name="amt[]" id="amt<?php echo $count; ?>" class=""><input type="hidden" value="" name="amt1" id="amt1<?php echo $count; ?>" class=""></td>  
 <td style="border:none;"><button class="delRowBtn1" style="font-size:20px;" id="delRowBtn1_<?php echo $count; ?>"><i class="fa fa-trash-o"></i></button></td>
</tr>-->


<tr>
<td>
	<select id="spare_name_<?php echo $count; ?>" class="spare_name" name="spare_name[]">
           <option value="">---Select---</option>
		   <?php 
			  if(!empty($spare_catId)){
				foreach($spare_catId as $spare_catkey){ ?>
					<option value="<?php echo $spare_catkey->id; ?>"><?php echo $spare_catkey->spare_name; ?></option>
			  <?php } }?>
		   
          </select>
</td>
<td><input type="text" name="qty[]"><input type="hidden" name="spare_qty1[]" id="spare_qty1_<?php echo $count; ?>"><input type="hidden" name="used_spare1[]" id="used_spare1_<?php echo $count; ?>"><input type="hidden" name="purchase_price1[]" id="purchase_price1_<?php echo $count; ?>"><input type="hidden" name="purchase_qty1[]" id="purchase_qty1_<?php echo $count; ?>"></td>
<td><input type="text" name="purchase_date[]" id="datetimepicker8" class="datetimepicker8"></td>
<td><input type="text" name="purchase_price[]"></td>
<td><input type="text" name="invoice_no[]"></td>
<td><input type="text" name="reason[]"></td>
<td style="border:none;"><button class="delRowBtn" >Delete</button></td>
</tr>


<script>
$(document).ready(function(){
   $('.spare_name').change(function(){ //alert("hiiio");
   var id = $(this).val();
   
    //var idd=$(this).closest(this).attr('id');
	
   var vl=$('#countid').val();
	//alert(vl);
  //alert("spareid: "+idd);
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getsparedet",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#spare_qty1_'+vl).val(data.spare_qty),
		   $('#used_spare1_'+vl).val(data.used_spare),
		   $('#purchase_price1_'+vl).val(data.purchase_price),
		   $('#purchase_qty1_'+vl).val(data.purchase_qty)
		   
    });

} 
});
   });
 });
</script>

<script>

$.datetimepicker.setLocale('en');

$('#datetimepicker_mask').datetimepicker({
	mask:'9999/19/39 29:59'
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
$('.datetimepicker8').datetimepicker({
	onChangeDateTime:logic,
	onShow:logic	
});

 



</script>

