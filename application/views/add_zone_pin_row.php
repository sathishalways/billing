

<tr>
		<td style="padding:10px 0;"><input type="text" name="area_name[]" id="area_name-0<?php echo $count; ?>"><div id="errorBox1<?php echo $count; ?>"></div></td>
		  
		  <td style="padding:10px 0;"><input type="text" name="pincode[]" id="pincode-0_<?php echo $count; ?>" maxlength="6" class='pincode'><div id="errorBox11<?php echo $count; ?>"></div></td>
		  <td style="border:none;"><a class="delRowBtn" onclick="$(this).closest('tr').remove();"><span class="fa fa-trash" style="color:#5f3282;"></span></a></td>
</tr>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
   $(function(){ //alert("hiii");
   $( "form" ).submit(function( event ) {
  
  if ( $( "#area_name-0<?php echo $count; ?>" ).val() == "" ) {
	$( "#errorBox1<?php echo $count; ?>" ).text( "Enter the Area Name" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
  
  if ( $( "#pincode-0_<?php echo $count; ?>" ).val() == "" ) {
	$( "#errorBox11<?php echo $count; ?>" ).text( "Enter the Pincode" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
   });
   });
   </script>
  
 




 <script>
    $(document).ready(function(){
		
		$('#pincode-0_<?php echo $count; ?>').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9 ]/g,'') );
        });	
		
    });
</script>
   <script>
     $(document).ready(function(){
		
		$("#area_name-0<?php echo $count; ?>").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox1<?php echo $count; ?>").show();
			}
			else{
				$("#errorBox1<?php echo $count; ?>").hide();
			}
		});
		$("#pincode-0_<?php echo $count; ?>").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox11<?php echo $count; ?>").show();
			}
			else{
				$("#errorBox11<?php echo $count; ?>").hide();
			}
		});
		
		});
		</script>
		<script>
  $(function(){

$('input[name^="pincode"]').change(function() {

    var $current = $(this);

    $('input[name^="pincode"]').each(function() {
        if ($(this).val() == $current.val() && $(this).attr('id') != $current.attr('id'))
        {
			$("#pincode-0_<?php echo $count; ?>").val('');
            $("#errorBox11<?php echo $count; ?>").text( "Already Exists" ).show().css({'color':'#ff0000','font-size':'10px'});
        }

    });
  });
});
  </script>
		



