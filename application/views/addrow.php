

<?php 
$count=$_POST['countid'];
?>

<div class="col-md-12">
	<div class="col-md-3">
		<input type="text" name="brand_name[]" id="brand-<?php echo $count;?>" class="brandsss" maxlength="50">
		<div id="fname<?php echo $count;?>"></div>
		
	</div>
	<div><a class="delRowBtn btn btn-primary fa fa-trash"></a></div>
</div>


<script>
	$(function(){
		$(".registersubmit").on("click", function(event){
			if($("#brand-<?php echo $count;?>").val()==""){
				$("#fname<?php echo $count;?>").text("Enter the Brand Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
				event.preventDefault();
			}
		});
		
		$("#brand-<?php echo $count;?>").keyup(function(){
			if($(this).val()==""){
				$("#fname<?php echo $count;?>").show();
			}
			else{
				$("#fname<?php echo $count;?>").fadeOut('slow');
			}
		});
		 $("#brand-<?php echo $count;?>").keyup(function(){
		$(this).val($(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
	});
 
  
	});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script>
$(document).ready(function(){ //alert("hiii");
	$(document).on("keyup","#brand-<?php echo $count;?>", function(){
		var timer;	
 clearTimeout(timer);
        timer = setTimeout(brand, 3000);
		}); 
//alert(brand);
function brand(){
		
		
		
		var brand = $('#brand-<?php echo $count;?>').val();
		
		 if(brand)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Brand/brand_validation',
  data: {
   brand:brand,
  },
  success: function (data) {
  if(data == 0){
        
        $('#fname<?php echo $count;?>').html('');    
        
            
        }
        else{
			$('#fname<?php echo $count;?>').html('Brand Name Already Exist').show().css({'color':'#ff0000','font-size':'10px','position':'relative','bottom':'10px'}); 
			$('#brand-<?php echo $count;?>').val('');
			return false;
             
            
        }
  }
  });
 }
		
	}
	
	
		
	
});


</script>
 <script>
  $(function(){

$('input[name^="brand_name"]').change(function() {

    var $current = $(this);

    $('input[name^="brand_name"]').each(function() {
        if ($(this).val() == $current.val() && $(this).attr('id') != $current.attr('id'))
        {
           $('#fname<?php echo $count;?>').html('Brand Name Already Exist').show().css({'color':'#ff0000','font-size':'10px','position':'relative','bottom':'10px'}); 
		   $('#brand-<?php echo $count;?>').val('');
		   return false;
        }

    });
  });
});
  </script>
