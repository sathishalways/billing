 <table  class="tableadd" >
  
  
<label style="color: black;
    font-size: 15px;
    font-weight: bold; margin-bottom:20px;">Add Product</label>

 
 
  <tr>
  <td><label>Serial No</label></td> <td>
  <select name="serial_no[]" id="serialno_<?php echo $count; ?>" class="serialno">
  <option value="">---Select---</option>
		<?php foreach($list_serialnos as $serialkey){ ?>
			<option value="<?php echo $serialkey->serial_no; ?>"><?php echo $serialkey->serial_no; ?></option>
		   <?php } ?>
  </select>
  </td>
<td><label>Category</label></td><td >
<input type="text" name="category[]" id="category<?php echo $count; ?>" class=""><input name="countids[]" type="hidden" value="<?php echo $count; ?>"/><input type="hidden" name="categoryid[]" id="categoryid<?php echo $count; ?>" class="">
</td>    
</tr>
<tr>
<td><label>SubCategory</label></td> <td >
<input type="text" name="subcategory[]" id="subcategory<?php echo $count; ?>" class=""><input type="hidden" name="subcategoryid[]" id="subcategoryid<?php echo $count; ?>" class="">
</td>

<td ><label>Brand Name</label></td><td style="width:200px;">
<input type="text" name="brandname[]" id="brandname<?php echo $count; ?>" class=""><input type="hidden" name="brandid[]" id="brandid<?php echo $count; ?>" class="">
</td>



</tr>
 
 <tr>
 <td><label>Model</label></td> <td >
<input type="text" name="model[]" id="model<?php echo $count; ?>" class=""><input type="hidden" name="modelid[]" id="modelid<?php echo $count; ?>" class="">
</td>
 
<td><label>Warranty Date</label></td><td><input id="warranty_date<?php echo $count; ?>" type="text" name="warranty_date[]"></td>
</tr>
 
 <tr>
 <td><label>Machine Status</label></td> <td>
<select name="machine_status[]">
<option value="">---Select---</option>
<option value="AMC">AMC</option>
<option value="Warranty">Warranty</option>
<option value="Out Of Warranty">Out Of Warranty</option>
</select>
</td>
<td><label>Site</label></td>    <td>
<select name="site[]">
<option value="">---Select---</option>
<option value="OnSite">OnSite</option>
<option value="OffSite">OffSite</option>
</select>
</td>

</tr>
 
 
 <tr>
 <td><label>Service Type</label></td>  <td>
<select name="service_type[]"> 
<option value="">---Select---</option>
<option value="AMC">AMC</option>
<option value="Warranty">Warranty</option>
<option value="Out Of Warranty">Out Of Warranty</option>
<option value="Stampings">Stampings</option>
</select>
</td>
<td><label>Service Category</label></td>    <td>
<select name="service_cat[]">
<option value="">---Select---</option>
<?php foreach($servicecat_list as $servicecatkey){ ?>
			<option value="<?php echo $servicecatkey->id; ?>"><?php echo $servicecatkey->service_category; ?></option>
		   <?php } ?>
</select>
</td>

</tr>
  <tr>
  <td><label>Zone</label></td>  <td>
<input type="text" name="zone[]" id="zone<?php echo $count; ?>" class=""><input type="hidden" name="locid[]" id="locid<?php echo $count; ?>" class="">
</td>
<td><label>Problem</label></td>    <td>
<select name="prob[]">
<option value="">---Select---</option>
		<?php foreach($problemlist as $probkey){ ?>
			<option value="<?php echo $probkey->id; ?>"><?php echo $probkey->prob_category; ?></option>
		   <?php } ?>
</select>
</td>

</tr>
   <tr>
   <td><label>Assign To</label></td>   <td>
<select name="assign_to[]">
<option value="">---Select---</option>
<?php foreach($employee_list as $empkey){ ?>
			<option value="<?php echo $empkey->id; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
		   <?php } ?>
</select>
</td>
</tr>
<tr>
<td><label style="font-weight:bold;">Received</label></td>   </tr> 

  </table>
  
  <table style="margin-bottom: 40px;"><tr><td>
<ul class="recei">
<li><label>Charger</label></li><li><label>Data Cable</label></li><li><label>Battery</label></li><li><label>Headset</label></li><li><label>Cover</label></li>
</ul></td>
</tr><tr><td>
<ul class="recei">
<li><input type="checkbox" class="" name="received<?php echo $count; ?>[]" value="Charger"></li><li><input type="checkbox" class="" name="received<?php echo $count; ?>[]" value="DataCable"></li><li><input type="checkbox" class="" name="received<?php echo $count; ?>[]" value="Battery"></li><li><input type="checkbox" class="" name="received<?php echo $count; ?>[]" value="Headset"></li><li><input type="checkbox" class="" name="received<?php echo $count; ?>[]" value="Cover"></li>
</ul></td>
</tr>

</table>


<script>
$(document).ready(function(){
   $('.serialno').change(function(){
	var idd=$(this).closest(this).attr('id');
	//alert(idd);
	var arr = idd.split('_');
	var ctid = arr['1'];
	//alert(catid);
   var id = $(this).val();
   //alert(id);
   var dataString = 'serialno='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_orderbyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#category'+ctid).val(data.product_category),
		   $('#categoryid'+ctid).val(data.catid),
		   
		   $('#subcategory'+ctid).val(data.subcat_name),
		   $('#subcategoryid'+ctid).val(data.subcatid),
		   
		   $('#brandname'+ctid).val(data.brand_name),
		   $('#brandid'+ctid).val(data.brandid),
		   
		   $('#model'+ctid).val(data.model),
		   $('#modelid'+ctid).val(data.modelid),
		   
		   $('#warranty_date'+ctid).val(data.warranty_date),
		   $('#zone'+ctid).val(data.service_loc),
		   $('#locid'+ctid).val(data.locid)
		   
    });

} 
});
   });
 });
</script>



 <script type="text/javascript">
 jQuery.noConflict();
$(document).ready(function()
{ 
$(".category").change(function(){
	 //alert("ggg");

var idd=$(this).closest(this).attr('id');
var arr = idd.split('_');
var catid = arr['1'];
//alert(catid);
$('#subcategory_'+catid+ "> option").remove(); 
var id=$(this).val();
//alert("catttt: "+catid);
//alert("iddddd: "+id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getsub_category",
data: dataString,
cache: false,
success: function(data)
{    $('#subcategory_'+catid).append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.subcat_name);
            $('#subcategory_'+catid).append("<option value='"+data.id+"'>"+data.subcat_name+"</option>");
            });
} 
});
    
});



$(".subcategory").change(function()
{
	var idd=$(this).closest(this).attr('id');
	var arr = idd.split('_');
	var ctid = arr['1'];
	//alert(ctid);
var id=$(this).val();

var subcatid=$(this).val();
categoryid = $('#category_'+ctid).val();
//alert("Subcat: "+subcatid+"Cat:" +categoryid);
//$('#subcategory_'+catid+ "> option").remove(); 
$('#brandname_'+ctid+"> option").remove(); 
var dataString = 'subcatid='+ subcatid+'&categoryid='+ categoryid;


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_brand",
data: dataString,
cache: false,
success: function(data)
{ 		$('#brandname_'+ctid).append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.brand_name);
            $('#brandname_'+ctid).append("<option value='"+data.id+"'>"+data.brand_name+"</option>");
            });
} 
});

});


$(".brandname").change(function()
{
	var idd=$(this).closest(this).attr('id');
	var arr = idd.split('_');
	var ctid = arr['1'];
	//alert(ctid);
	$('#model_'+ctid+"> option").remove(); 
var brandid=$(this).val();
categoryid = $('#category_'+ctid).val();
subcategoryid = $('#subcategory_'+ctid).val();
//alert("Subcat: "+subcategoryid+"Cat:" +categoryid+"brandid:" +brandid);
var dataString = 'subcatid='+ subcategoryid+'&categoryid='+ categoryid+'&brandid='+ brandid;


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_model",
data: dataString,
cache: false,
success: function(data)
{ 		$('#model_'+ctid).append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.model);
            $('#model_'+ctid).append("<option value='"+data.id+"'>"+data.model+"</option>");
            });
} 
});

});

});

</script>