	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
	
	<style>
		.divider{
			border-bottom:1px solid #ccc;
			margin-bottom:10px;
		}
		.ft{
			float:left;
		}
		.selectelement{
			width:25%;
			margin-bottom:10px;
		}
		.inputelement{
			width:25%;
			margin-bottom:10px;
		}
		.inputelement_second{
			width:25%;
			float:right;
			position:relative;
			right:260px;
		}
		.fancybox-skin{
			height:100% !important;
		}
		h3{
			color: #6C217E;
		}
	</style>
	<h3>Warranty Mode Status</h3>
	<div class="divider"></div>
	<div class="col-md-12">
	
	<form name="myForm" action="<?php echo base_url();?>service/updateclaim" method="POST" onsubmit="return validateForm()">
	
		<div class="selectelement">
		
		<?php foreach($list as $roww){?>
			<select name="status_warran" id="status_warran" class="form-control waran">
				<option value="">Select Warranty Mode</option>
				<option value="credit"<?php if($roww->warranty_mode == 'credit') echo 'selected="selected"'; ?>>Credit</option>
				<option value="replacement"<?php if($roww->warranty_mode == 'replacement') echo 'selected="selected"'; ?>>Replacement</option>
		</select><?php } ?>
		<div id="errorBox111" style="color:red;"></div>
		</div>
		
		<input type="hidden" value="<?php echo $ide;?>" name="request_id">
		<?php foreach($list as $row){
		
			?>
		<div style="width:75%">
		<div class="inputelement ft">
		
		<input type="text" name="code_no" class="firsttext form-control" placeholder="Credit Note Number" value="<?php  if($row->code_no==''){ echo "";}else{echo $row->code_no;} ?>"> <div id="errorBox" style="color:red;"></div>
		</div>
		<div class="inputelement_second" id="rep">
			<input type="text" name="date" class="firsttext form-control datepicker" placeholder="Date" value="<?php if($row->code_date==''){ echo "";}else{echo $row->code_date;} ?>"><div id="errorBox1" style="color:red;"></div>
		</div>
		</div><?php } ?>
		<div class="inputelement">
			<input type="submit" class="btn btn-primary " value="Update" >
		</div>
		</form>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script>
	
		$(function(){
			$(".firsttext").show();
			
			if($(this).find("option:selected").attr("value")=="replacement"){
					//alert("ashd");
					$(".firsttext").hide();
				
				}
		
			
			$("#status_warran").change(function(){
				
				
				
				if($(this).find("option:selected").attr("value")=="credit"){
					//alert("ashd");
					$(".firsttext").show();
				
				}
				
				else{
					
					$(".firsttext").hide();
				}
			});
			
			$(".datepicker").datepicker({
				dateFormat:'dd-mm-yy',
				changeMonth:true,
				changeYear:true
			})
		});
	</script>
	
	 <script>
function validateForm() { 
   var status_warran = document.myForm.status_warran.value,
	   code_no = document.myForm.code_no.value, 
       code_date = document.myForm.date.value;
   
   
   if( status_warran == "" )
   { 
     document.myForm.status_warran.focus();
	 document.getElementById("errorBox111").innerHTML = "Select the warranty mode";
     return false;
   }
   
   if(status_warran == "credit")
   { 
		if(code_no==""){
			document.myForm.code_no.focus();
			document.getElementById("errorBox").innerHTML = "Enter the Code No.";
			return false;
		}
		
		if(code_date==""){ 
			document.myForm.date.focus();
			document.getElementById("errorBox1").innerHTML = "Enter the Code Date.";
			return false;
		}
     
   }
    
}
</script>

<script>
$(document).ready(function(){
	
	$(".btn").click(function(event){
		if($("waran").val()=="")
		{
			$(".waranerror").text("Please select Warranty Mode").show();
			event.preventDefault();
		}
	});
	
	$("waran").change(function(){
		if($(this).val()==""){
			$(".waranerror").show();
		}
		else{
			$(".waranerror").fadeOut('slow');
		}
	});
	
$("#cate").keyup(function(){
			if($(this).val()==""){
				$("#errorBox").show();
			}
			else{
				$("#errorBox").fadeOut('slow');
			}
		});
		
			$("#model").click(function(){
			if($(this).val()==""){
				$("#dpt_error1").show();
			}
			else{
				$("#dpt_error1").fadeOut('slow');
			}
		});
});
</script>
	
	