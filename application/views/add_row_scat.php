<div class="col-md-12">
<div class="col-md-3">
<input type="text" name="service_catname[]" id="UserName<?php echo $count; ?>" class="firstname" maxlength="80">
<div class="fname" id="lname<?php echo $count; ?>" style="color:red"></div></div><div><a class="delRowBtn btn btn-primary fa fa-trash"></a></div></div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
$(document).ready(function(){ 

		
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#UserName<?php echo $count; ?>" ).val()==""){
				$("#lname<?php echo $count; ?>" ).text("Enter Service Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
				event.preventDefault();
			}
		});
		
		$("#UserName<?php echo $count; ?>" ).keyup(function(){
			if($(this).val()==""){
				$("#lname<?php echo $count; ?>" ).show();
			}
			else{
				$("#lname<?php echo $count; ?>" ).fadeOut('slow');
			}
		});	
		
		
    
   
   $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });
	
		
	 });
</script>
<script>
$(document).ready(function(){
$('#UserName<?php echo $count; ?>').change(function(){
      var name1=$(this).val();
	 
	    
  //alert(name);
    $.ajax({
    type:"POST",
    url:"<?php echo base_url(); ?>Servicecategory/service_validation",
        data:{
  p_id:name1,
  },
        cache:false,
        success:function(data){
			//alert(data);
        if(data == 0){
            $('#lname<?php echo $count; ?>').html('');    
        }
        else{
			$('#lname<?php echo $count; ?>').html('Service Category Name Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'}); 
			$('#UserName<?php echo $count; ?>').val('');
			return false;
			//exit;
         }
        }
    });
 });
 });

</script>