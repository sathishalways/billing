
<div class="col-md-12" style="padding: 0px">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<input type="text" name="cat_name[]"  id="UserName<?php echo $count; ?>" class="firstname">
		<div class="fname" id="lname<?php echo $count; ?>" style="color:red">
		</div>
		<div class="fname" id="lnamee<?php echo $count; ?>" style="color:red">
		</div>
	</div><div class="col-md-1 col-sm-6 col-xs-12" style="padding:0px"><a class="delRowBtn btn btn-primary fa fa-trash" style="height:30px;"></a></div>
</div>
	<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script>
	$(document).ready(function(){
	//$("#UserName<?php echo $count; ?>").keyup(function(){
	$(document).on("keyup","#UserName<?php echo $count; ?>", function(){
var timer;	
 clearTimeout(timer);
        timer = setTimeout(mobile, 3000);
		}); 
//alert(brand);
function mobile(){		
		
			var name1=$('#UserName<?php echo $count; ?>').val();
			//var name1=document.getElementById( "UserName<?php echo $count; ?>" ).value;
			
			//alert(name1);
			
			if(name1)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Productcategory/category_validation',
  data: {
   p_id:name1,
  },
  success: function (data) {
	 // alert(data);
  if(data == 0){
        $('#lnamee<?php echo $count; ?>').html('');    
        }
        else{
			//alert("else called");
			$('#lnamee<?php echo $count; ?>').text('Category Name Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '10px'}); 
			$('#UserName<?php echo $count; ?>').val('');
			return false;
             
        }	
  }
  });
 }
}
		
		
		
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#UserName<?php echo $count; ?>").val()==""){
				$("#lname<?php echo $count; ?>").text("Enter Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '10px'});
				event.preventDefault();
			}
		});
		
		$("#UserName<?php echo $count; ?>").keyup(function(){
			if($(this).val()==""){
				$("#lname<?php echo $count; ?>").show();
			}
			else{
				$("#lname<?php echo $count; ?>").fadeOut('slow');
			}
		});	
		
		
    });
   
   $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });
	</script>
    