<!--<tr>
<td>
	<select id="spare_name_<?php echo $count; ?>" class="spare_name" name="spare_name[]">
           <option value="">---Select---</option>
		   
          </select>
</td>
<td><input type="text" name="qty[]"><input type="hidden" name="spare_qty1[]" id="spare_qty1_<?php echo $count; ?>"><input type="hidden" name="used_spare1[]" id="used_spare1_<?php echo $count; ?>"><input type="hidden" name="purchase_price1[]" id="purchase_price1_<?php echo $count; ?>"><input type="hidden" name="purchase_qty1[]" id="purchase_qty1_<?php echo $count; ?>"></td>
<td><input type="text" name="purchase_date[]"></td>
<td><input type="text" name="purchase_price[]"></td>
<td><input type="text" name="invoice_no[]"></td>
<td><input type="text" name="reason[]"></td>
<td style="border:none;"><button class="delRowBtn" >Delete</button></td>
</tr>-->

<tr>
<td><select name="model[]" class="eng_spare_name" id="model-<?php echo $count; ?>">
           <option value="">---Select---</option>
           <?php foreach($modellist as $modelkey){ ?>
			<option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
		   <?php } ?>
		 		
          </select></td><td class="plus"><input type="text" name="service_charge[]" id="service_charge-<?php echo $count; ?>" class="plus1"><a class="delRowBtn btn btn-primary fa fa-trash" style="position: relative;right: 10px;"></td>
		 
		 <!-- <td class="save">	<a href="#" onclick="UpdateStatus1(<?php echo $count; ?>)"><i  class="fa fa-floppy-o fa-3x"></i></a></td>-->

</tr>
<script>
$(document).ready(function(){	

	
	$('.plus1').click(function(){ //alert("hiiio");
	 var idd=$(this).closest(this).attr('id');
	 var arr= idd.split('-');
	  var vl = arr['1'];
		if(document.getElementById('minus-'+vl).value!=""){
			alert("enter any plus or minus");
			//$("#plus").attr("disabled", "disabled"); 
		}/* else{
			$("#plus").removeAttr("disabled"); 
		} */
   });
   
   $('.minus1').click(function(){ //alert("hiiio");
   var idd=$(this).closest(this).attr('id');
	var arr= idd.split('-');
	  var vl = arr['1'];
		if(document.getElementById('plus-'+vl).value!=""){
			alert("enter any plus or minus");
			//$("#minus").attr("disabled", "disabled"); 
		}/* else{
			$("#minus").removeAttr("disabled"); 
			
		} */
   });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });

});
</script>

<script>
$(document).ready(function(){
   $('.eng_spare_name').change(function(){ //alert("hiiio");
   var id = $(this).val();
   
    var idd=$(this).closest(this).attr('id');
	//alert(idd);
	 var arr= idd.split('-');
	  var vl = arr['1'];
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
		   $('#spare_qty-'+vl).val(data.spare_qty),
		   $('#used_spare-'+vl).val(data.used_spare),
		   $('#eng_spare-'+vl).val(data.eng_spare)
		   
    });

} 
});
   });
 });
</script>
<style>
 
.delRowBtn{
	 background: transparent !important;
	 border: transparent !important;
	 color:#337ab7 !important;
 }
 .delRowBtn:hover{
	 background: transparent !important;
border: transparent !important;
color: #337ab7 !important;
 }
 .delRowBtn:focus{
	 background-color: transparent !important;
border-color: transparent !important;
color: #337ab7 !important;
 }
 .z-depth-1-half, .btn:hover, .btn-large:hover, .btn-floating:hover {
    box-shadow: none !important;
}
.plus1{
	position: relative;
right: 9px;
}
</style>


