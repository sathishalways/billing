<div class="col-md-12">
	<div class="col-md-4 col-sm-3 col-xs-12">
		<select id="pro_cat<?php echo $count; ?>" name="pro_cat[]">
			<option value="">---Select---</option>
				<?php foreach($droplist as $dkey){ ?>
				<option value="<?php echo $dkey->id; ?>"><?php echo $dkey->product_category; ?></option>
				<?php } ?>
		</select>
		<div id="ghname<?php echo $count; ?>"></div>
	</div>
	<div class="col-md-3 col-sm-3 col-xs-12">
		<input type="text" name="sub_catname[]" class="model" id="sub_category-<?php echo $count; ?>" maxlength="50">
		<div id="kname<?php echo $count; ?>" style="color:red"></div>
	</div>
	<div class="col-md-1"><span><a class="delRowBtn btn btn-primary"><i class="fa fa-trash"></i></a></span></div></div>
	<script>
	$(document).ready(function(){
	$('#sub_category-<?php echo $count; ?>').change(function(){
			//var a=$(this).attr('id').split('-').pop();
			//alert(a);
			
			var sub_category = $(this).val();
			var category=$('#pro_cat<?php echo $count; ?>').val();
			
			var datastring='category='+category+'&sub_category='+sub_category;
			
			//alert(datastring);	
			
			  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>subcategory/subcategory_validation',
  data: datastring, 
            
  success: function(data) {
	  
	// alert(data);
  if(data == 0){
        
            $('#kname<?php echo $count; ?>').html(''); 
			
        }
         else{
			$('#kname<?php echo $count; ?>').text('Sub-Category Name Already Exist').show().css({'color':'#ff0000','font-size':'10px','position':'relative','bottom':'10px'}); 
			$('#sub_category-<?php echo $count; ?>').val('');
             
            
        } 
  }
  });
			
		});		
	
	
	
	 $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });
	
	
	$(".registersubmit").click(function(event){
                if($('#pro_cat<?php echo $count; ?>').val()==""){
                    $('#ghname<?php echo $count; ?>').text("Select Category Name").css({'color':'#ff0000','font-size':'10px'});
                }
        	
                if($('#sub_category-<?php echo $count; ?>').val()==""){
                    $('#kname<?php echo $count; ?>').text("Enter Sub-Category Name").css({'color':'#ff0000','font-size':'10px'});
            	}
            	
            });
			$('#sub_category-<?php echo $count; ?>').bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
		});
			
			
		
		$('#sub_category-<?php echo $count; ?>').keyup(function(){
			if($(this).val()==""){
				$('#kname<?php echo $count; ?>').show();
			}
			else{
				$('#kname<?php echo $count; ?>').fadeOut('slow');
			}
		});
		$('#pro_cat<?php echo $count; ?>').change(function(){
			if($('#pro_cat<?php echo $count; ?>').val()==""){
				$('#ghname<?php echo $count; ?>').show();
			}
			else{
				$('#ghname<?php echo $count; ?>').fadeOut('slow');
			}
		});

    });
		
	</script>