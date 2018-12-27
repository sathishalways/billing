<?php 

$count=$_POST['countid'];

?>

<div class="col-md-12" style="padding:0px">
    <div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Problem Category Name</label>
        <input type="text" name="prob_cat_name[]" id="lname-<?php echo $count;?>"><div id="uname-<?php echo $count;?>" style="color:red"></div>
    </div>
    <div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Model</label>
        <select name="model[]" id="fname-<?php echo $count;?>">
          <option value="0">---Select---</option>
          <?php foreach($modellist as $modelkey){ ?>
          <option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
          <?php } ?>
        </select>
		<div id="sname-<?php echo $count;?>" style="color:red;"></div>
    </div>
	<div class="col-md-3">
		<a class="delRowBtn btn btn-primary fa fa-trash"></a>
	</div>
  </div>
  
  
  
  <script>
$(document).ready(function(){
	
	$(document).on("change","#fname-<?php echo $count;?>", function(){
		
		var a=$(this).attr('id').split('-').pop();
		
		var model = $(this).val();

		var category=$("#lname"+a).val();


 $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>problemcategory/category_validation',
  data: {
   category:category,
   model:model,
  },
  success: function (data) {
	// alert(data); 
	 
  if(data == 0){
        
        $('#sname-'+a).fadeOut('slow');    
        
            
        }
        else{
			$('#sname-'+a).text('Model Name Already Exist').show().delay(1000).fadeOut(); 
			$('#fname-'+a).val('');
			return false;
             
            
        }
  }
  });

		
	});
	
				$(".registersubmit").click(function(event){
              if($('#fname-<?php echo $count;?>').val()=="0"){
                    $('#sname-<?php echo $count;?>').text("Select Model Name").css({'color':'#ff0000','font-size':'15px'});
                }
        	
                if($('#lname-<?php echo $count;?>').val()==""){
                    $('#uname-<?php echo $count;?>').text("Enter Problem Category Name").css({'color':'#ff0000','font-size':'15px'});
            	}
            	
            });
			
				$("#lname-<?php echo $count;?>").keyup(function(){
			if($(this).val()==""){
				$("#uname-<?php echo $count;?>").show();
			}
			else{
				$("#uname-<?php echo $count;?>").fadeOut('slow');
			}
		});
		
			$("#fname-<?php echo $count;?>").click(function(){
			if($(this).val()=="0"){
				$("#sname-<?php echo $count;?>").show();
			}
			else{
				$("#sname-<?php echo $count;?>").fadeOut('slow');
			}
		});
		
		$(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    }); 

});
</script>
<style>
	.delRowBtn{
		position: relative;
		top: 20px;
	}
</style>