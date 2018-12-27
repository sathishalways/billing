<style>
.delRowBtn{
 border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;
	
}
</style>

<div class="col-md-12" style="padding: 0px;">
	<div class="col-md-3">
		<input type="text" name="tax_name[]" class="model tax<?php echo $count; ?>" id="tax">
		<div class="taxerror<?php echo $count; ?>">
		</div>
	</div>
	<div class="col-md-3">
		<input type="text" name="percentage[]" class="model percentage<?php echo $count; ?>" maxlength="5">
		<div class="percenterror<?php echo $count; ?>"></div>
	</div>
	<div class="col-md-3"><a class="delRowBtn"><i class="fa fa-trash" style="
    color: #643886;"></i></a></div>
</div>
<script>
$(document).ready(function(){
	
$('.tax<?php echo $count; ?>').change(function(){
      var tax=$(this).val();
	//alert(tax);
	    var datastring='tax='+tax;
  //alert(tax);
    $.ajax({  
    type:"POST",
    url:"<?php echo base_url(); ?>tax/check_tax",
        data:datastring,
        cache:false,
        success:function(data){
			//alert(data);
        if(data == 0){
            $('.taxerror<?php echo $count; ?>').html('');    
        }
        else{
			$('.taxerror<?php echo $count; ?>').html('Tax Name Already Exist!').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'}); 
			$('.tax<?php echo $count; ?>').val('');
			return false;
         }
        }
    });
 });
  
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });
	
	
	$(".percentage<?php echo $count; ?>").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^0-9.]/g,""));
		});
		$(".tax<?php echo $count; ?>").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
		});
		
	$(".submittax").click(function(event){
			if($(".tax<?php echo $count; ?>").val()==""){
				$(".taxerror<?php echo $count; ?>").text("Please Enter Tax Name").show().css({
					'font-size':'10px',
					'color':'#ff0000',
					'position': 'relative',
					'bottom': '15px'
				});
				event.preventDefault();
			}
			if($(".percentage<?php echo $count; ?>").val()==""){
				$(".percenterror<?php echo $count; ?>").text("Please Enter the Percentage").show().css({
					'font-size':'10px',
					'color':'#ff0000',
					'position': 'relative',
					'bottom': '15px'
				});;
				event.preventDefault();
			}
		});
		$(".percentage<?php echo $count; ?>").keyup(function(){
			$(".percenterror<?php echo $count; ?>").fadeOut('slow');
		});
		$(".tax<?php echo $count; ?>").keyup(function(){
			$(".taxerror<?php echo $count; ?>").fadeOut('slow');
		});
		});
</script>