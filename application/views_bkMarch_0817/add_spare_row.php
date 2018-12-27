 <tr>
    
  <td>
		<select name="model[]" id="model-<?php echo $count; ?>" class="model">
            <option value="">---Select---</option>
			 <?php foreach($modellist as $modelkey){ ?>
			 <option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
			 <?php } ?>
          </select>
  
 </td> 
  <td><input type="text" name="category_name" id="category_name-<?php echo $count; ?>" readonly><input type="hidden" name="category[]" id="category-<?php echo $count; ?>" readonly></td>
  <td><input type="text" name="subcategory_name" id="subcategory_name-<?php echo $count; ?>" readonly><input type="hidden" name="subcategory[]" id="subcategory-<?php echo $count; ?>" readonly></td>
  <td><input type="text" name="brand_name" id="brand_name-<?php echo $count; ?>" readonly><input type="hidden" name="brandname[]" id="brandname-<?php echo $count; ?>" readonly>  </td>
 
  </tr>
<script>
$(document).ready(function(){
   $('.model').change(function(){//alert("ddddd");
	 var id = $(this).val();
	
	 var idd=$(this).closest(this).attr('id');
	 var arr= idd.split('-');
	 var vl = arr['1'];
     //alert(id);
   var dataString = 'modelno='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_productinfobyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#category_name-'+vl).val(data.product_category),
		   $('#category-'+vl).val(data.category),
		   
		   $('#subcategory_name-'+vl).val(data.subcat_name),
		   $('#subcategory-'+vl).val(data.subcategory),
		   
		   $('#brand_name-'+vl).val(data.brand_name),
		   $('#brandname-'+vl).val(data.brand)
    });
	
} 
});
   });
 });
</script>