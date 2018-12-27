<style>
#addMoreRows{
    border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color:#49186d;
}
.delRowBtn{
 border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 0px 4px 4px 4px;
    border-radius: 5px;
    color: white;
	height:30px;
}
</style>
<script>
   $(function(){
   $( "form" ).submit(function( event ) {
  if ( $( "#prob_cat_name" ).val() === "" ) {
	$( "#prob_cat_name_error" ).text( "Enter the Problem Category Name" ).show().css({
		'color':'#ff0000',
		'font-size':'12px'
	});
    event.preventDefault();
  }
   if ( $( "#model" ).val() === "" ) {
	$( "#model_error" ).text( "Please choose the model" ).show().css({
		'color':'#ff0000',
		'font-size':'12px'
	});
    event.preventDefault();
  }
  if ( $( "#prob_code" ).val() === "" ) {
	$( "#prob_code_error" ).text( "Enter the Problem Category Code" ).show().css({
		'color':'#ff0000',
		'font-size':'12px'
	});
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
		$("#prob_code,#prob_cat_name").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^A-Za-z0-9 ]/g,'') );
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
      $(this).closest("tr").remove();        
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
<script>
$(document).ready(function(){
//$('#prob_cat_name').change(function(){ //alert("check");
$(document).on("keyup","#prob_cat_name", function(){
var timer;	
 clearTimeout(timer);
        timer = setTimeout(mobile, 3000);
		}); 
//alert(brand);
function mobile(){
	
var prob_code=$('#prob_cat_name').val();
var model=$('#model').val();	
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
            $('#prob_cat_name_error').html('Problem Category Name Already Exist!').show(); 
			$('#prob_cat_name').val('');
        }

		else 
		{
			$('#prob_cat_name_error').hide(); 
			
		}
		
        
        }
    });
 }
});
</script> 
<style>
.btn{text-transform:none !important;}
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
		border:1px solid #ccc;
		margin: 0 0 0px 0;
		height: 2.9rem;
	}
    select {
      border: 1px solid #ccc !important;
    }
	.star{
		font-size:15px;
		color:#ff0000;
	}
	table{
	 margin-bottom:15px;
 }
table, th, td {
    border: 1px solid #522276;
    border-collapse: collapse;
}
th, td {
    padding: 5px 15px;
}
table, td:last-child{
	border:0px;
}
thead {
    border-bottom: 0px solid #d0d0d0;
    background-color: #dbd0e1;
    border: 0px solid #055E87;
    color: #522276;
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


<table id="myTable">
	<thead>
		<tr>
			<th>Problem Code <span class="star">*</span></th>
			
			<th style="width:30%">Model <span class="star">*</span></th>
			<th>Problem Category Name <span class="star">*</span></th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
<?php
//print_r($list);
 foreach($list As $key){?>
		<tr>
			<td>
				<input type="text" name="prob_code[]" readonly id="prob_code" class="prob_code" maxlength="30" value="<?php echo $key->prob_code; ?>">
				<div id="name_error" style="color:red"></div>
				<div id="prob_code_error" style="color:red"></div>
				<input type="hidden" name="prob_catid" class="corporate" value="<?php echo $key->id; ?>">
			</td>
			
			<td>
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
			</td>
			<td>
				<input type="text" name="prob_cat_name[]" class="corporate" value="<?php echo $key->prob_category; ?>" maxlength="50" id="prob_cat_name">
				<div id="prob_cat_name_error" style="color:red"></div>
			</td>
			<td>
				<textarea name="p_description[]" id="p_description" maxlength="500" ><?php echo $key->prob_description; ?></textarea>
			</td>
			<input type="hidden" id="countid" value="1">
			<td>
				<a class="link" id="addMoreRows"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
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
 
 

</table>

 
 <button class="btn cyan waves-effect waves-light registersubmit" type="submit" name="action" id="product">Submit</button>
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