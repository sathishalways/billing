<tr>
	<td>
	<table>
		<tr>
			<td><label>Serial No</label></td><td ><input type="text" name="serial_no[]" id="serial_no-<?php echo $count;?>" value="<?php echo "DUM".$cnt; ?>" class="serial_no"></td> 
			<td><label>Model&nbsp;<span style="color:red;">*</span></label></td><td><select name="model[]" id="model-<?php echo $count;?>" class="modelss"><option value="">---Select---</option><?php foreach($modellist as $modelkey){ ?><option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option> <?php } ?></select></td>
		</tr>
		<tr>
			<td><label>Category</label></td><td ><input type="text" name="category_name[]" id="category_name-<?php echo $count;?>" readonly><input type="hidden" name="category[]" id="category-<?php echo $count;?>"><input type="hidden" name="mod_id[]" id="mod_id-<?php echo $count;?>"><input type="hidden" name="model_name[]" id="model_name-<?php echo $count;?>"></td>
			<td><label>SubCategory</label></td> <td><input type="text" name="subcategory_name[]" id="subcategory_name-<?php echo $count;?>" readonly><input type="hidden" name="subcategory[]" id="subcategory-<?php echo $count;?>"></td>
		</tr>
		<tr>
			<td><label>Brand Name</label></td> <td ><input type="text" name="brand_name[]" id="brand_name-<?php echo $count;?>" readonly><input type="hidden" name="brandname[]" id="brandname-<?php echo $count;?>"></td>
			<td><label >Service Zone</label></td><td> <input type="text" name="service_loc_name[]" id="service_loc_name-<?php echo $count;?>" value="<?php echo $service_loc_name; ?>" class="service_loc_name" readonly><input type="hidden" name="service_loc[]" id="service_loc-<?php echo $count;?>" value="<?php echo $service_loc; ?>" class="service_loc"></td>
		</tr>
		<tr>
			<td><label>Sale Date</label></td><td><input class="date" type="text" name="purchase[]" id="purchase-<?php echo $count;?>" value=""></td> 
			<td><select name="service_cat-<?php echo $count;?>[]" id="service_cat-<?php echo $count;?>" multiple hidden>
		</select></td>
			<td>
				<select name="probi-<?php echo $count;?>[]" id="probi-<?php echo $count;?>" multiple hidden>
		</select>
			</td>
		</tr>
	</table>
	</td>
	<td><a id="delrow"><i class="fa fa-trash" aria-hidden="true"></i></a></td></tr>
	
	
<script>
$(document).ready(function(){
   $('.modelss').change(function(){//alert("ddddd");
   
   var idd=$(this).closest(this).attr('id');
   //alert(idd);
   var arr = idd.split('-');
   var rowid = arr['1'];
   //alert(rowid);
   var id = $(this).val();
   //alert(id);
   $('#service_cat-'+rowid+ "> option").remove();
   $('#probi-'+rowid+ "> option").remove();
   
   /* $("#service_cat-0 > option").remove();
   $("#probi-0 > option").remove(); */
   
   var dataString = 'modelno='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_productinfobyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#category_name-'+rowid).val(data.product_category),
		   $('#category-'+rowid).val(data.category),
		   
		   $('#subcategory_name-'+rowid).val(data.subcat_name),
		   $('#subcategory-'+rowid).val(data.subcategory),
		   
		   $('#brand_name-'+rowid).val(data.brand_name),
		   $('#brandname-'+rowid).val(data.brand),
		   
		   $('#mod_id-'+rowid).val(data.id),
		   $('#model_name-'+rowid).val(data.model)
    });
	
} 
});


	 $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_servicecatbyid1",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		  $('#service_cat-'+rowid).append("<option selected='selected' value='"+data.sercat_id+"-"+data.service_category+"'>"+data.service_category+"</option>");
    });
	
} 
});


$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_probcatbyid1",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$('#probi-'+rowid).append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){ //alert(data.prob_category);
		   $('#probi-'+rowid).append("<option selected='selected' value='"+data.prob_catid+"-"+data.prob_category+"'>"+data.prob_category+"</option>");
		   
    });
	
} 
});



   });
 });
</script>	
	