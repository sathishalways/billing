<div class="col-md-12" style="padding: 0px">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<input type="text" name="lab_name[]"  id="UserName<?php echo $count; ?>" class="firstname">
		<div class="fname" id="lname<?php echo $count; ?>" style="color:red"></div>
	</div>
	<div class="col-md-1 col-sm-6 col-xs-12" style="padding:0px">
		<a class="delRowBtn btn btn-primary fa fa-trash" style="height:30px;"></a>
	</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
$(document).ready(function(){ 

		
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#UserName<?php echo $count; ?>" ).val()==""){
				$("#lname<?php echo $count; ?>" ).text("Enter Lab Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
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
      var name=$(this).val();
	 
	    
  //alert(name);
    $.ajax({
    type:"POST",
    url:"<?php echo base_url(); ?>Labcategory/category_validation",
        data:{
   id:name,
  },
        cache:false,
        success:function(data){
			//alert(data);
        if(data == 0){
            $('#lname<?php echo $count; ?>').html('');    
        }
        else{
			$('#lname<?php echo $count; ?>').html('Lab Name Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'}); 
			$('#UserName<?php echo $count; ?>').val('');
			return false;
			//exit;
         }
        }
    });
 });
 });

</script>    