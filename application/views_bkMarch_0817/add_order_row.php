
<tr>
  <td><label style="color: black;
    font-size: 15px;
    font-weight: bold; margin-bottom:20px;">Add Product</label>
</td>    

</tr>
  <tr>
  <td><label>Serial No</label></td><td ><input type="text" name="serial_no[]" id="serial_no" class=""></td>    
  
<td><label>Category</label></td><td >
<select name="category[]" id="category_<?php echo $count; ?>" class="category">
            <option value="">---Select---</option>
          <?php foreach($prodcatlist as $pcatkey){ ?>
			<option value="<?php echo $pcatkey->id; ?>"><?php echo $pcatkey->product_category; ?></option>
		   <?php } ?>
		 		
          </select>
</td>    

</tr>


<tr>
<td><label>SubCategory</label></td> <td >
<select name="subcategory[]" id="subcategory_<?php echo $count; ?>" class="subcategory">
            <option value="">---Select---</option>
           
          </select>
</td>


<td><label>Brand Name</label></td> <td >
<select name="brandname[]" id="brandname_<?php echo $count; ?>" class="brandname">
            <option value="">---Select---</option>
           
          </select>
</td>


</tr>
<tr>

<td><label>Model</label></td> <td >
<select name="model[]" id="model_<?php echo $count; ?>">
            <option value="">---Select---</option>
          
          </select>
</td>


<td><label>Price</label></td><td><input type="text" name="price[]" id="price" class=""></td>

</tr>
<tr>
<td><label >Service Location</label></td><td>  <select name="service_loc[]" id="service_loc">
<option>---Select---</option>
  <?php foreach($serviceLocList as $lockey){ ?>
			<option value="<?php echo $lockey->id; ?>"><?php echo $lockey->service_loc; ?></option>
		   <?php } ?>
  </select></td>
<td><label>Purchase Date</label></td><td><input id="popupDatepicker" type="text" name="purchase[]"></td>

</tr>
<tr>
<td><label>Warranty Date</label></td><td><input id="popupDatepicker1" type="text" name="warranty[]"></td>
<td><label>Preventive Maintenance</label></td><td><input type="text" name="preventive_main[]" id="preventive_main" class=""></td>
</tr>

 <script type="text/javascript">
 jQuery.noConflict();
$(document).ready(function()
{ 
$(".category").change(function(){
	 //alert("ggg");

var idd=$(this).closest(this).attr('id');
var arr = idd.split('_');
var catid = arr['1'];
var id=$(this).val();
//alert("catttt: "+catid);
//alert("iddddd: "+id);
var dataString = 'id='+ id;
$('#subcategory_'+catid+ "> option").remove(); 
$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>order/getsub_category",
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
url: "<?php  echo base_url(); ?>order/get_brand",
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
	
	$('#model_'+ctid+"> option").remove(); 
var brandid=$(this).val();
categoryid = $('#category_'+ctid).val();
subcategoryid = $('#subcategory_'+ctid).val();
//alert("Subcat: "+subcategoryid+"Cat:" +categoryid+"brandid:" +brandid);
var dataString = 'subcatid='+ subcategoryid+'&categoryid='+ categoryid+'&brandid='+ brandid;


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_model",
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