<tr>
	<td width="25.35%">
		<input type="text" name="acc_name[]" id="acc<?php echo $count; ?>">
			<div id="dname<?php echo $count; ?>"></div>
	</td>
	<td>
		<a class="delRowBtn btn btn-primary fa fa-trash" style="height:36px; margin-left: 15px"></a>
	</td>  
</tr>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
$(document).ready(function(){ 

		
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#acc<?php echo $count; ?>" ).val()==""){
				$("#dname<?php echo $count; ?>" ).text("Enter Accessories Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
				event.preventDefault();
			}
		});
		
		$("#acc<?php echo $count; ?>" ).keyup(function(){
			if($(this).val()==""){
				$("#dname<?php echo $count; ?>" ).show();
			}
			else{
				$("#dname<?php echo $count; ?>" ).fadeOut('slow');
			}
		});	
		
		
    
   
   $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });
	
		
	 });
</script>
<script>
$(document).ready(function(){
$('#acc<?php echo $count; ?>').change(function(){
      var name=$(this).val();
	 
	    
  //alert(name);
    $.ajax({
    type:"POST",
    url:"<?php echo base_url(); ?>accessories/acc_validation",
        data:{
  p_id:name,
  },
        cache:false,
        success:function(data){
			//alert(data);
        if(data == 0){
            $('#dname<?php echo $count; ?>').html('');    
        }
        else{
			$('#dname<?php echo $count; ?>').html('Accessories Name Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'}); 
			$('#acc<?php echo $count; ?>').val('');
			return false;
			//exit;
         }
        }
    });
 });
 });

</script>
