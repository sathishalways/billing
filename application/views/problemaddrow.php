<?php 
$count=$_POST['countid'];
?>
<tr>
</tr>
<tr>
	
	<td>
		<input type="text" name="prob_code[]" id="prob_code<?php echo $count;?>" onchange="" class="prob_cate"   maxlength="50">
		<div id="prob_code_error<?php echo $count;?>" style="color:red"></div>
		<div id="name_error<?php echo $count; ?>" style="color:red"></div>
	</td>
	<td>
		<select name="model[]" id="model<?php echo $count;?>">
          <option value="">---Select---</option>
          <?php foreach($modellist as $modelkey){ ?>
          <option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
          <?php } ?>
        </select>
		<div id="model_error<?php echo $count;?>" style="color:red;" ></div>
	</td>
	<td>
		<input type="text" name="prob_cat_name[]" id="prob_cat_name<?php echo $count;?>" maxlength="50">
		<div id="prob_cat_name_error<?php echo $count;?>" style="color:red"></div>
	</td>
	
	<td>
		<textarea name="p_description[]" id="p_description<?php echo $count;?>"  value=""/></textarea>
	</td>
	<td>
		<a class="delRowBtn btn btn-primary"><i class="fa fa-trash"></i></a>
	</td>
</tr>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
	.delRowBtn{
		position: relative;
		top: 0px;
	}
	
</style>

<script>
$(document).ready(function(){ //alert("hiii");
//$('#prob_cat_name<?php echo $count;?>').change(function(){
	$(document).on("keyup","#prob_cat_name<?php echo $count;?>", function(){
var timer;	
 clearTimeout(timer);
        timer = setTimeout(mobile, 3000);
		}); 
//alert(brand);
function mobile(){
	
var prob_code=$('#prob_cat_name<?php echo $count;?>').val();
var model=$('#model<?php echo $count;?>').val();	
//alert(prob_code); 
var datastring='code='+model+'&problem='+prob_code;
//alert(datastring);
    $.ajax({
    type:"POST",
    url:"<?php echo base_url(); ?>problemcategory/checkproblem",
        data:datastring,
        cache:false,
        success:function(data){
			//alert(data);
        if(data >0){
			//alert("hiii");
            $('#prob_cat_name_error<?php echo $count;?>').html('Problem Category Name Already Exist!').show().css({'color':'#ff0000','font-size':'10px'}); 
			$('#prob_cat_name<?php echo $count;?>').val('');
        }

		else 
		{
			$('#prob_cat_name_error<?php echo $count;?>').hide(); 
			
		}
		
        
        }
    });
 }
});
</script> 
  <script>
   $(function(){
   $("#product").click(function(event) {
	   //alert('dfgdfgdf');
	   var aaa = $("#prob_cat_name<?php echo $count; ?>").val();

  
  if ( $("#prob_cat_name<?php echo $count; ?>").val() === "" ) {
	$("#prob_cat_name_error<?php echo $count; ?>").text( "Enter the Problem Category Name" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
   if ($("#model<?php echo $count; ?>").val() === "" ) {
	$("#model_error<?php echo $count; ?>").text( "Please choose the model" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
  
     if ($("#prob_code<?php echo $count; ?>").val() === "" ) {
	$("#prob_code_error<?php echo $count; ?>").text( "Enter the Problem Category Code" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
  

	});
	});
</script>
<script>
    $(function(){
		
		$("#prob_cat_name<?php echo $count; ?>").change(function(){
			if($(this).val()==""){
			    $("#prob_cat_name_error<?php echo $count; ?>").show();
			}
			else{
				$("#prob_cat_name_error<?php echo $count; ?>").hide();
			}
		});

		$("#model<?php echo $count; ?>").change(function(){
			var aaa = $(this).val();
			if($(this).val()==""){
			    $("#model_error<?php echo $count; ?>").show();
			}
			else{
				$("#model_error<?php echo $count; ?>").hide();
			}
		});
		
		$("#prob_code<?php echo $count; ?>").keyup(function(){
			if($(this).val()==""){
			    $("#prob_code_error<?php echo $count; ?>").show();
			}
			else{
				$("#prob_code_error<?php echo $count; ?>").hide();
			}
		});
		$("#prob_code<?php echo $count; ?>,#prob_cat_name<?php echo $count; ?>").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^A-Za-z0-9 ]/g,'') );
		});
		
	});
</script>

<script>
$(document).ready(function(){
$('#prob_code<?php echo $count; ?>').change(function(){
var prob_code=$(this).val();	 
var datastring='code='+prob_code;
    $.ajax({
    type:"POST",
    url:"<?php echo base_url(); ?>problemcategory/checkCode",
        data:datastring,
        cache:false,
        success:function(data){
			//alert(data);
        if(data >0){
            $('#name_error<?php echo $count; ?>').html('Problem Code already Exist!').show().css({'color':'#ff0000','font-size':'10px'}); 
			$('#prob_code<?php echo $count; ?>').val('');
        }

		else if(data==0)
		{
			$('#name_error<?php echo $count; ?>').hide(); 
			
		}
		
        
        }
    });
 });
});
</script> 


<!--<div class="col-md-12">
 <div class="col-md-3">
	
		<input type="text" name="prob_code[]" id="prob_code<?php echo $count;?>" onchange="" class="prob_cate form-control" >
		<div id="prob_code_error<?php echo $count;?>" style="color:red"></div>
		<div id="name_error<?php echo $count; ?>" style="color:red"></div>
	
</div>	
 <div class="col-md-3">
	
		<input type="text" name="prob_cat_name[]" id="prob_cat_name<?php echo $count;?>" class="form-control">
		<div id="prob_cat_name_error<?php echo $count;?>" style="color:red"></div>
	
</div> 
 <div class="col-md-3">	
	
		 <select name="model[]" id="model<?php echo $count;?>" class="form-control">
          <option value="">---Select---</option>
          <?php foreach($modellist as $modelkey){ ?>
          <option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
          <?php } ?>
        </select>
		<div id="model_error<?php echo $count;?>" style="color:red;" ></div>

</div>
 <div class="col-md-3">	

		<textarea name="p_description[]" id="p_description<?php echo $count;?>"  value=""/></textarea>


</div>

		<a class="delRowBtn btn btn-primary" style="float: right;
    top: -46px;
    left: 30px;"><i class="fa fa-trash"></i></a>
	
</div>-->


<!--<div class="col-md-12" style="padding:0px">

 <div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Problem Code</label>
        <input type="text" name="prob_code[]" id="prob_code<?php echo $count;?>" class="prob_cate">
		<div id="prob_code_error<?php echo $count;?>" style="color:red"></div>
	</div>


    <div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Problem Category Name</label>
        <input type="text" name="prob_cat_name[]" id="prob_cat_name<?php echo $count;?>">
		<div id="prob_cat_name_error<?php echo $count;?>" style="color:red"></div>
		
    </div>
    <div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Model</label>
        <select name="model[]" id="model<?php echo $count;?>">
          <option value="">---Select---</option>
          <?php foreach($modellist as $modelkey){ ?>
          <option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
          <?php } ?>
        </select>
		<div id="model_error<?php echo $count;?>" style="color:red;"></div>
    </div>
	
	<div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Description</label>
		<textarea name="p_description[]" id="p_description<?php echo $count;?>"  value="" /></textarea>
		</div>
	
	
	<div class="col-md-3">
		<a class="delRowBtn btn btn-primary"><i class="fa fa-trash"></i></a>
	</div>
  </div>-->
  

  
  
  
