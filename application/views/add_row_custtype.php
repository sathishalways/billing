<tr>
	<td style="width: 25.5%";>
		<input type="text" name="cust_type[]"  class="firstname1"  id="UserName<?php echo $count; ?>" maxlength="30">
		<div class="fname" style="color:red;margin-left: 15px;" id="lname1<?php echo $count; ?>"></div>
	</td>
	<td>
		<a class="delRowBtn btn btn-primary" style="margin-top:-17px;width: 25px;height: 28px;"><i class="fa fa-trash"></i></a>
	</td>
</tr>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
$(document).ready(function(){  ///alert("hiii");

		
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#UserName<?php echo $count; ?>" ).val()==""){
				$("#lname1<?php echo $count; ?>" ).text("Enter Customer Type").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
				event.preventDefault();
			}
		});
		
		$("#UserName<?php echo $count; ?>" ).keyup(function(){
			if($(this).val()==""){
				$("#lname1<?php echo $count; ?>" ).show();
			}
			else{
				$("#lname1<?php echo $count; ?>" ).fadeOut('slow');
			}
		});	
		
		
    
   
   $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });
	
		
	 });
</script>
<script>
$(document).ready(function(){
	$(document).on("keyup","#UserName<?php echo $count; ?>", function(){
var timer1;	
 clearTimeout(timer1);
        timer1 = setTimeout(brand1, 3000);
		}); 
 //alert("hii");
 function brand1(){
var id=$('#UserName<?php echo $count; ?>').val();

var datastring = 'id='+id;

$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/custtype_validation",
data: datastring,
cache: false,
success: function(data) 
{ 	//alert(data);
	 if(data == 0){
            $('#lname1<?php echo $count; ?>').html('');
			
        }
        else{
			
			$('#lname1<?php echo $count; ?>').html('Customer Already Exist!').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
			
			$('#UserName<?php echo $count; ?>').val('');
			
			return false;
         }
	
} 
});

}
});
</script>

