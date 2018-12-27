<style>
.tableadd input {
    width: 238px;
    height: 33px;
    /* border: 1px solid #B3B3B3; */
    border-radius: 3px;
    /* padding-left: 10px; */
    margin-left: 13px;
}
.tableadd input {
    height: 21px !important;
    margin-top: 11px;
    margin-right: -242px;
}
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border: 1px solid #ccc;
    /* border-bottom: 1px solid #055E87; */
    border-radius: 2px;
    outline: none;
     height: 2.0rem;
    width:103%;
    font-size: 12px;
    margin: 0 0 15px 0;
    padding: 4px;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
select {
     border: 1px solid #ccc !important; 

}
</style>
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('<tr>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td>  </tr>').appendTo(tbl);  
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});
});//]]>  

</script>

 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css">
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>    
<style>
 .link{
	 padding: 10px;
	 margin-right: 20px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
margin-top:10px;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .chosen-container-single .chosen-single {
    
    height: 34px !important;
 }
 .chosen-container
 {
	 margin-top: -16px !important;
 }
 .tableadd tr td select {
   
    margin-bottom: 25px !important;
}
.star{
	color:#ff0000;
	font-size:12px;
}
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border: 1px solid #ccc;
    /* border-bottom: 1px solid #055E87; */
    border-radius: 2px;
    outline: none;
    height: 2rem;
    width: 103%;
    font-size: 12px;
    margin: 0 0 0px 0;
    padding: 4px;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
.btn{text-transform:none !important;}
 </style>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h2>Edit Sub-Category</h2>

          <hr>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>subcategory/edit_sub_category" method="post">
                               


<table id="myTable" class="tableadd">
<?php foreach($list as $key){ ?>

	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>Category Name <span class="star">*</span></label>
		<select id="pro_cat" name="pro_cat" class="prodcat" >
			<option value="">---Select---</option>
			<?php foreach($droplists as $dkey){
				if($dkey->id==$key->pro_catid){
			 ?>
			<option selected="selected" value="<?php echo $dkey->id; ?>"><?php echo $dkey->product_category; ?></option>
			<?php } else {?>
			<option value="<?php echo $dkey->id; ?>"><?php echo $dkey->product_category; ?></option>
			<?php } } ?>
        </select>
		<div class="form-group">
			<div class="prodcaterror"></div>
		</div>
	</div>

	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>Sub-Category Name <span class="star">*</span></label>
		<input type="text" name="sub_catname" class="model subcat" value="<?php echo $key->subcat_name; ?>" maxlength="50" id="sub_category-1"><input type="hidden" name="subcatid" class="model" value="<?php echo $key->prosubcat_id; ?>">
		<div class="form-group">
			<div class="subcaterror"></div>
		</div>
	</div>


<!--<tr><td><label>Category Name</label></td><td><label>Sub-Category Name</label></td></tr>
<tr>
<td> 
	
	<select id= "pro_cat" name="pro_cat">
           <option value="">---Select---</option>
		   <?php foreach($droplists as $dkey){
				 if($dkey->id==$key->pro_catid){
			 ?>
			<option selected="selected" value="<?php echo $dkey->id; ?>"><?php echo $dkey->product_category; ?></option>
		  <?php } else {?>
		  <option value="<?php echo $dkey->id; ?>"><?php echo $dkey->product_category; ?></option>
		  <?php } } ?>
          </select>
		  </td>
		  
<td><input type="text" name="sub_catname" class="model" value="<?php echo $key->subcat_name; ?>"><input type="hidden" name="subcatid" class="model" value="<?php echo $key->prosubcat_id; ?>"></td>
</tr>-->
<?php } ?>
</table>

<button class="btn cyan waves-effect waves-light editcategory" type="submit" name="action" style="margin-left:20px;">Submit</button>


<table class="tableadd">



<tr>
<td ></td>
<td style="padding-top: 25px;">
 
</td>
</tr>

</table>





					
                         
                        </div>
                     
                  
                      </form>
                  
                
                </div>
             
             <div class="col-md-1">
			  </div>
              </div>
			  </div>
            </div>

			
			
			
			
       
          </div>

   
 

      </div>
  </section>


  </div>
  

  </div>
  


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>
  
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  
  <script>
	$(function(){
		
		$(".editcategory").click(function(event){
		
			if($("#pro_cat").val()=="")
			{
				$(".prodcaterror").text("Select Category Name").show().css({
					'color':'#ff0000','font-size':'10px'
				});
				event.preventDefault();
				
			}
			if($(".subcat").val()=="")
			{
				$(".subcaterror").text("Enter Sub-Category Name").show().css({
					'color':'#ff0000','font-size':'10px'
				});
				event.preventDefault();
			}
		});
		
		$("#pro_cat").change(function(){
			if($(this).val()=="")
			{
				$(".prodcaterror").show();
			}
			else{
				$(".prodcaterror").hide();
			}
		});
		
		$(".subcat").keyup(function(){
			if($(this).val()=="")
			{
				$(".subcaterror").show();
			}
			else{
				$(".subcaterror").hide();
			}
		});
		
		$(".subcat").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9- ]/g,""));
		});
	});
  </script>
 <!-- <script>
     $(document).ready(function(){
		$(".subcat").keyup(function(){
			if($(this).val()==""){
			    $(".subcaterror").show();
			}
			else{
				$(".subcaterror").hide();
			}
		});
		$(".pno").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox1").show();
			}
			else{
				$("#errorBox1").hide();
			}
		});
		
	 });
	 </script>-->
	 
		<script>

$(document).ready(function(){ //alert("hiii");
	
	$('#sub_category-1').change(function(){
var category=$("#pro_cat").val();

var sub_category=$(this).val();

var datastring='category='+category+'&sub_category='+sub_category;

//alert(datastring);


  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>subcategory/subcategory_validation',
  data: datastring, 
            
  success: function(data) {
	  
	 //alert(data);
  if(data == 0){
        
        $('.subcaterror').html('');    
          
        }
        else{
			$('.subcaterror').html('Sub-Category Name Already Exist').show().css({'color':'#ff0000','font-size':'10px'}); 
			$('#sub_category-1').val('');
			return false;
         
        }
  }
  });

 
});
}); 
</script>
  
</body>

</html>