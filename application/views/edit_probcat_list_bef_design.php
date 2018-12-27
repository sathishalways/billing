<script>
   $(function(){
   $( "form" ).submit(function( event ) {
  if ( $( "#prob_cat_name" ).val() === "" ) {
	$( "#prob_cat_name_error" ).text( "Field cannot be empty" ).show();
    event.preventDefault();
  }
   if ( $( "#model" ).val() === "" ) {
	$( "#model_error" ).text( "Field cannot be empty" ).show();
    event.preventDefault();
  }
  if ( $( "#prob_code" ).val() === "" ) {
	$( "#prob_code_error" ).text( "Field cannot be empty" ).show();
    event.preventDefault();
  }



});
});
   </script>
<script>
    $(function(){
		$("#prob_cat_name").change(function(){
			if($(this).val()==""){
			    $("#prob_cat_name_error").show();
			}
			else{
				$("#prob_cat_name_error").hide();
			}
		});
		
		$("#model").change(function(){
			if($(this).val()==""){
			    $("#model_error").show();
			}
			else{
				$("#model_error").hide();
			}
		});
		
		$("#prob_code").change(function(){
			if($(this).val()==""){
			    $("#prob_code_error").show();
			}
			else{
				$("#prob_code_error").hide();
			}
		});		
	

	});
</script>
<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>  	  
<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddssss");
    var inc=1;
	var vl=$('#countid').val();
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>problemcategory/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		// alert(result);
            
        $('#myTable').append(result);
} 
});

});
  
});
</script>
<script>
  $(function() {
    $(document.body).delegate(".delRowBtn", "click", function(){
      $(this).closest("div").parent().remove();        
    }); 
  })  
</script>

<script>
$(document).ready(function(){
$('#prob_code').change(function(){
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
            $('#name_error').html('Problem Code already Exist!').show(); 
			$('#prob_code').val('');
        }

		else if(data==0)
		{
			$('#name_error').hide(); 
			
		}
		
        
        }
    });
 });
});
</script>
<style>
 .link{
	 padding: 10px;
	 margin-right:10px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold !important;
border-radius: 5px;
cursor:pointer;
 }
  .link:hover{
	
color: white;
text-decoration:none;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
  input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
        background-color: transparent;
        border: 1px solid #ccc;
        /* border-bottom: 1px solid #055E87; */
        border-radius: 2px;
        outline: none;
        height: 2.0rem;
        width: 100%;
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
	.star{
		font-size:15px;
		color:#ff0000;
	}
 </style>

<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Edit Problem Category</h2>

          <hr>
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">             
             
                 
                 <form action="<?php echo base_url(); ?>problemcategory/update_prob_category" method="post">                               


<table id="myTable" class="tableadd">
	<thead>
		<tr>
			<th>Problem Code</th>
			<th>Problem Category Name</th>
			<th style="width:30%">Model</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
<?php
//print_r($list);
 foreach($list As $key){?>
	
	
		<tr>
			<td>
				<input type="text" name="prob_code[]" id="prob_code1" class="prob_cate">
				<div id="prob_code_error1" style="color:red"></div>
				<div id="name_error1" style="color:red"></div>
			</td>
			<td>
				<input type="text" name="prob_cat_name[]" id="prob_cat_name1" class="prob_cate">
				<div id="hname1" style="color:red;"></div>
				<div id="prob_cat_name_error1" style="color:red"></div>
			</td>
			<td>
				<select name="model[]" id="model1">
					<option value="">---Select---</option>
					<?php foreach($modellist as $modelkey){ ?>
					<option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
					<?php } ?>
				</select>
				<div id="dpt_error1" style="color:red;"></div>
				<div id="model_error1" style="color:red;"></div>
			</td>
			<td>
				<textarea name="p_description[]" type="text" id="p_description1"  value="" /></textarea>
			</td>
			<input type="hidden" id="countid" value="1">
			<td>
				
			</td>
		</tr>
	
  <!--<div class="col-md-12" style="padding:0px">
  <div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Problem Code <span class="star">*</span></label>
        <input type="text" name="prob_code[]" readonly id="prob_code" class="prob_code" maxlength="30" value="<?php echo $key->prob_code; ?>">
		<div id="name_error" style="color:red"></div>
		<div id="prob_code_error" style="color:red"></div>
	</div>
    <div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Problem Category Name <span class="star">*</span></label>
        <input type="text" name="prob_cat_name[]" class="corporate" value="<?php echo $key->prob_category; ?>" maxlength="30">
		<div id="prob_cat_name_error" style="color:red"></div>
		<input type="hidden" name="prob_catid" class="corporate" value="<?php echo $key->id; ?>">
	</div>
	<div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Model <span class="star">*</span></label>
        <select name="model[]" id="model">
           <option value="">---Select---</option>
           <?php foreach($modellist as $modelkey){
				 if($modelkey->id==$key->modelid){
			?>
			<option selected="selected" value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
		   <?php } else{?>
		 		<option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
		   <?php } } ?>
		 		
          </select>
		  	<div id="model_error" style="color:red;"></div>
    </div>
	 <div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Problem Description</label>
       <textarea name="p_description[]" id="p_description" maxlength="500" ><?php echo $key->prob_description; ?></textarea>
	</div>
  </div>-->
<input type="hidden" id="countid" value="1">


<?php
 }
 ?>
</tbody>
 
 <a class="link" id="addMoreRows">Add Category</a> 
 <button class="btn cyan waves-effect waves-light registersubmit" type="submit" name="action" id="product">Submit <i class="fa fa-arrow-right"></i> </button>

</table>
<!--
<a class="link" href='' onclick='$("<tr>
<td><input type=\"text\" name=\"prob_code[]\" /></td>
<td><input type=\"text\" name=\"prob_cat_name[]\" /></td><td><select name=\"model[]\" data-placeholder=\"Select Model...\" class=\"chosen-select\" tabindex=\"2\"><option value=\"\">---Select---</option><?php //foreach($modellist as $modelkey){ ?><option value=\"<?php //echo $modelkey->id; ?>\"><?php //echo $modelkey->model; ?></option><?php //} ?></select></td>
<td><textarea name=\"p_description[]\" /></textarea></td></tr>").appendTo($("#myTable")); return false;'>Add Category</a><button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>


<table class="tableadd">



<tr>
<td ></td>
<td style="padding-top: 25px;">
 
</td>
</tr>

</table>
-->

                  
                      </form>
                  
                
                </div>

              </div>
			  </div>
            </div>

			
			
			
			
       
          </div>

   
 

      </div>
  </section>


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>