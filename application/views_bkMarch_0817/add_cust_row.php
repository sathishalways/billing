<style>
input[type=text]
{
background-color:#fff;
}
</style>
<div class="col-md-12" style="border:1px solid #ccc;background-color:whitesmoke;margin-bottom:8px;">
<h4><strong>Add Service Location</strong></h4><br/>
  <div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Branch Name</label>
<input type="text" name="branch_name[]" class="branch_name">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Landline No</label>
<input type="text" name="phone[]" id="phone" class="phone">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address</label>
<input type="text" name="re_address[]" id="re_address" class="re_address">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address 1</label>
<input type="text" name="re_address1[]" id="re_address1" class="re_address1">
</div>
</div>

<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>City </label>
<input type="text" name="re_city[]" id="re_city" class="city">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>State</label>
<input type="text" name="re_state[]" id="re_state" class="re_state">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Pincode</label>
<input type="text" name="re_pincode[]" id="pin" class="re_pincode" value="">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Service Zone</label>
 <select name="service_zone_loc[]" id="zone_loc">
   <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){
		if($zonekey->id == $zoneid){
	?>
<option selected="selected" value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
		   <?php } else{?>
		   <option value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
	<?php } }?>
</select>

</div>
</div>

<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Area</label>
<input type="text" name="area_name" class="" id="place_name"><input type="hidden" name="area_idd[]" class="" id="areacode_id">
</div>
</div>

<h4><strong>Add Contact</strong></h4><br>
<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Contact Name</label>
<input type="text" name="contact_name[]" class="contact_name">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Designation</label>
<input type="text" name="designation[]" class="designation">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Mobile</label>
<input type="text" name="mobiles[]" id="mobiles" class="mobile">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Email Id</label>
<input type="text" name="emails[]" class="email">
</div>

</div>

</div>
<!--<tr>
<td><label style="font-weight: bold;font-size: 14px;color: #000;line-height: 4;">Add Service Location</label></td>
</tr>
<tr>
<td><label>Branch Name</label></td><td><input type="text" name="branch_name[]" class="branch_name"></td>
<td><label>Landline No</label></td><td><input type="text" name="phone[]" id="phone" class="phone"></td>


</tr>

<tr>
<td><label>Address</label></td><td><input type="text" name="re_address[]" id="re_address" class="re_address"></td>
<td><label>Address 1</label></td><td><input type="text" name="re_address1[]" id="re_address1" class="re_address1"></td>

</tr>
<tr>
<td><label>City </label></td><td><input type="text" name="re_city[]" id="re_city" class="city"></td><td><label>State</label></td><td><input type="text" name="re_state[]" id="re_state" class="re_state"></td>
</tr>

<tr>
<td><label>Pincode</label></td><td><input type="text" name="re_pincode[]" id="pin" class="re_pincode" value=""></td>
<td><label>Service Zone</label></td>
<td>
 <select name="service_zone_loc[]" id="zone_loc">
   <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){
		if($zonekey->id == $zoneid){
	?>
<option selected="selected" value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
		   <?php } else{?>
		   <option value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
	<?php } }?>
</select>
<input type="hidden" name="service_loc_coverage[]" id="service_loc_coverage" class="contact_name" value="<?php if(isset($zone_coverage) && $zone_coverage!=""){echo $zone_coverage;} ?>">
</td>
<tr>
<td><label>Area</label></td><td><input type="text" name="area_name" class="" id="place_name"><input type="hidden" name="area_idd[]" class="" id="areacode_id"></td></tr>
</tr>
<tr><td><label style="font-weight: bold;">Add Contact</label></td><td></td></tr>
<tr>
<td><label>Contact Name</label></td><td><input type="text" name="contact_name[]" class="contact_name"></td><td><label>Designation</label></td><td><input type="text" name="designation[]" class="designation"></td>
</tr>

<tr>
<td><label>Mobile</label></td><td><input type="text" name="mobiles[]" id="mobiles" class="mobile"></td>
<td><label>Email Id</label></td><td><input type="text" name="emails[]" class="email"></td>
</tr>-->


  
<script>
$(document).ready(function(){
	
$('#pin').keyup(function() { 
//alert("ghdg");
var id=$(this).val();
//alert(id);
$("#zone_loc > option").remove(); 

var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/get_zonearea",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#zone_loc').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		//alert(data);
		if(data.service_loc.length > 0){
		   $('#zone_loc').append("<option value='"+data.id+'-'+data.serv_loc_code+'-'+data.zone_coverage+"'>"+data.service_loc+"</option>");
		}
		   $('#place_name').val(data.area_name);
		   $('#areacode_id').val(data.area_id);
		   
    });
} 
});

});



});
</script>

