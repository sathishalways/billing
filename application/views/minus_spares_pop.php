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
		  <div id="name_error_<?php echo $count; ?>" style="color:red"></div>
</td>
<td><input type="text" name="qty[]" id="qty_<?php echo $count; ?>" maxlength="10"><div id="qty_error_<?php echo $count; ?>" style="color:red"></div><input type="hidden" name="spare_qty1[]" id="spare_qty1_<?php echo $count; ?>"><input type="hidden" name="used_spare1[]" id="used_spare1_<?php echo $count; ?>"><input type="hidden" name="purchase_price1[]" id="purchase_price1_<?php echo $count; ?>"><input type="hidden" name="purchase_qty1[]" id="purchase_qty1_<?php echo $count; ?>"></td>
<td><input type="text" name="purchase_date[]" id="datetimepicker8" class="datetimepicker8"></td>
<!--<td><input type="text" name="purchase_price[]"></td>
<td><input type="text" name="invoice_no[]"></td>-->
<td><input type="text" name="reason[]" maxlength="100"></td>
<td style="border:none;"><button class="delRowBtn" >Delete</button></td>
</tr>
<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script> 

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
   $('#qty_<?php echo $count; ?>').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		 $( "form" ).submit(function( event ) {
   
  if ( $( "#spare_name_<?php echo $count; ?>" ).val() === "" ) {
	$( "#name_error_<?php echo $count; ?>" ).text( " Please Select the Spare Name" ).show().css({'color':'#ff0000','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  } 
  
  if ( $( "#qty_<?php echo $count; ?>" ).val() === "" ) {
	$( "#qty_error_<?php echo $count; ?>" ).text( "Please Enter the Quantity" ).show().css({'color':'#ff0000','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  } 
  
	 });
$("#spare_name_<?php echo $count; ?>").change(function(){
			if($(this).val()==""){
			    $("#name_error_<?php echo $count; ?>").show();
			}
			else{
				$("#name_error_<?php echo $count; ?>").hide();
			}
		});
		$("#qty_<?php echo $count; ?>").keyup(function(){
			if($(this).val()==""){
			    $("#qty_error_<?php echo $count; ?>").show();
			}
			else{
				$("#qty_error_<?php echo $count; ?>").hide();
			}
		});	 
 });
</script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css" />

<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.datetimepicker.full.js"></script>

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


