<!--<style>
input[type=text]
{
background-color:#fff;
}
</style>-->


<?php $cntid=$_POST['countid'];

?>
<div class="col-md-12 append-row_<?php echo $cntid; ?>" style="border:1px solid #ccc;background-color:whitesmoke;margin-bottom:8px;">
<h4><strong>Add Service Location</strong><a class="close_<?php echo $cntid; ?>">x</a></h4>

<br/>
  <div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Branch Name</label>
<input type="text" name="branch_name[]" id="branch_<?php echo $cntid; ?>" class="branch_name" maxlength="100">
<div id="brancherror_<?php echo $cntid; ?>"></div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Landline No</label>
<input type="text" name="phone[]" id="phone_<?php echo $cntid; ?>" class="phone" maxlength="15">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address</label>
<input type="text" name="re_address[]" id="re_address_<?php echo $cntid; ?>" class="re_address" maxlength="150">
<input type="hidden" name="service_loc_coverage[]" id="service_loc_coverage" class="contact_name">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address 1</label>
<input type="text" name="re_address1[]" id="re_address1_<?php echo $cntid; ?>" class="re_address1" maxlength="150">
</div>
</div>



<div class="col-md-12">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>State</label>
		
		<select name="re_state[]" id="re_state_<?php echo $cntid; ?>">
				<option value="">---Select---</option>
				<?php foreach($state_list as $statekey){ ?>
				<option value="<?php echo $statekey->state; ?>"><?php echo $statekey->state; ?></option>
					<?php } ?>	
			</select>
	</div>

	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>City </label>
		<input type="text" name="re_city[]" id="re_city_<?php echo $cntid; ?>" class="city" maxlength="80">
		<div id="suggesstion-box2" ></div>
	</div>
	
	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>Pincode</label>
		<input type="text" name="re_pincode[]" id="pin_<?php echo $cntid; ?>" class="re_pincode" value="" maxlength="6">
	</div>

	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>Area</label>
		<input type="text" name="area_name" class="" id="place_name_<?php echo $cntid; ?>"><input type="hidden" name="area_idd[]" class="" id="areacode_id" maxlength="150">
	</div>

	

</div>

<div class="col-md-12">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>Service Zone</label>
		<select name="service_zone_loc[]" id="zone_loc_<?php echo $cntid; ?>">
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

<h4><strong>Add Contact</strong></h4><br>
<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Contact Name</label>
<input type="text" name="contact_name[]" id="contact-name_<?php echo $cntid; ?>" class="contact_name" maxlength="80">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Designation</label>
<input type="text" name="designation[]" id="design_<?php echo $cntid; ?>" class="designation" maxlength="150">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Mobile</label>
<input type="text" name="mobiles[]" id="mobiles_<?php echo $cntid; ?>" class="mobile" maxlength="15">
<div id="mobileserror_<?php echo $cntid; ?>"></div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Email ID</label>
<input type="text" name="emails[]" id="email_<?php echo $cntid; ?>" class="add-emailid">
<div class="add-emailerror_<?php echo $cntid; ?>"></div>
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

<style>
	.close_<?php echo $cntid; ?> {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2;
	cursor:pointer;
}

.close_<?php echo $cntid; ?>:hover {
	color:#000;
}
</style>
  
<script>
$(document).ready(function(){//alert("hikii");
	
$('#pin_<?php echo $cntid; ?>').change(function() { 
//alert("ghdg");
var id=$(this).val();
//alert(id);
$("#zone_loc_<?php echo $cntid; ?> > option").remove(); 

var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/get_zonearea",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#zone_loc_<?php echo $cntid; ?>').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		//alert(data);
		if(data.service_loc.length > 0){
		   $('#zone_loc_<?php echo $cntid; ?>').append("<option value='"+data.id+'-'+data.serv_loc_code+'-'+data.zone_coverage+"'>"+data.service_loc+"</option>");
		}
		   $('#place_name_<?php echo $cntid; ?>').val(data.area_name);
		   $('#areacode_id').val(data.area_id);
		   
    });
} 
});

});



});
</script>

 <script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>
  
  <script>
$(document).ready(function(){
	
	$("#re_city_<?php echo $cntid; ?>").keyup(function(){
		$.ajax({
		type: "POST",
		url: "<?php  echo base_url(); ?>customer/get_city",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#re_city_<?php echo $cntid; ?>").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data)
			
			{ 
			$("#suggesstion-box2").show();
			$("#suggesstion-box2").html(data);
			$("#re_city_<?php echo $cntid; ?>").css("background","#FFF");
} 
		
		});
	});
});

function selectCountry(val) { 
$("#re_city_<?php echo $cntid; ?>").val(val);
$("#suggesstion-box2").hide();
}

$(".close_<?php echo $cntid; ?>").click(function(){
	$(".append-row_<?php echo $cntid; ?>").remove();
});

</script>
 

<script>
	$(function(){ 
		//alert("append field");
		var regeditmail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.(com|org|net|co.in|in|mil|edu|gov|gov.in))$/;
		
		$(".custname,.contname,.desig,.area,.add-area,.branch_name").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^A-Za-z. ]/g,'') );
		});
		
		$(".custaddress,.custaddress1,.deliveryaddress").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^A-Za-z0-9.,-\/# ]/g,'') );
		});
		
		$(".mobile,.phone,.add-mobile,.pin").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^0-9-]/g,'') );
		});
		
		$(".add-emailid").on("change", function(){
			if(!regeditmail.test($(this).val())){
				$(".add-emailerror_<?php echo $cntid; ?>").text("Invalid Email ID!").show().css({
					"font-size":"11px",
					"color":"#ff0000"
				});
			}
		});
	
		$( "#submit" ).click(function( event ) {
   
  if ( $( "#branch_<?php echo $cntid; ?>" ).val() === "" ) {
	$( "#brancherror_<?php echo $cntid; ?>" ).text( " Enter the Branch Name" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#mobiles_<?php echo $cntid; ?>" ).val() === "" ) {
	$( "#mobileserror_<?php echo $cntid; ?>" ).text( " Enter the Mobile Number" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  });
  $("#mobiles_<?php echo $cntid; ?>" ).keyup(function(){
	  $("#mobileserror_<?php echo $cntid; ?>" ).hide();
  });
  $("#branch_<?php echo $cntid; ?>" ).keyup(function(){
	  $("#brancherror_<?php echo $cntid; ?>" ).hide();
  });
		/*$(".emailid").keyup(function(){
			$(".emailerror").fadeOut('slow');
		});*/
		
	});
</script>

