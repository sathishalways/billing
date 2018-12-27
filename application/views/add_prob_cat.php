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
   $( "#product" ).click(function( event ) {
  if ( $( "#prob_cat_name1" ).val() === "" ) {
	$( "#prob_cat_name_error1" ).text( "Enter the Problem Category Name" ).show().css({
		'color':'#ff0000',
		'font-size':'10px'
	});
    event.preventDefault();
  }
   if ( $( "#model1" ).val() === "" ) {
	$( "#model_error1" ).text( "Please choose the model" ).show().css({
		'color':'#ff0000',
		'font-size':'10px'
	});
    event.preventDefault();
  }
  if ( $( "#prob_code1" ).val() === "" ) {
	$( "#prob_code_error1" ).text( "Enter the Problem Category Code" ).show().css({
		'color':'#ff0000',
		'font-size':'10px'
	});
    event.preventDefault();
  }



});
});
   </script>
<script>
    $(function(){
		$("#prob_cat_name1").keyup(function(){
			if($(this).val()==""){
			    $("#prob_cat_name_error1").show();
			}
			else{
				$("#prob_cat_name_error1").hide();
			}
		});
		
		$("#model1").change(function(){
			if($(this).val()==""){
			    $("#model_error1").show();
			}
			else{
				$("#model_error1").hide();
			}
		});
		
		$("#prob_code1").keyup(function(){
			if($(this).val()==""){
			    $("#prob_code_error1").show();
			}
			else{
				$("#prob_code_error1").hide();
			}
		});	
		$("#prob_code1,#prob_cat_name1").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^A-Za-z0-9 ]/g,'') );
		});
		

	});
</script>
<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>  	  
<script>
$(document).ready(function(){
$(document).on("click","#addMoreRows", function(){ //alert("ddssss");
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
            
        $('#myTable > tbody').append(result);
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



<!--<script>
$(document).ready(function(){
$('#prob_code1').change(function(){
	
var prob_code=$(this).val();	
//alert(prob_code); 
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
			$('#prob_code1').val('');
        }

		else if(data==0)
		{
			$('#name_error').hide(); 
			
		}
		
        
        }
    });
 });
});
</script> -->
<script>
$(document).ready(function(){
	$(document).on("keyup","#prob_cat_name1", function(){
var timer;	
 clearTimeout(timer);
        timer = setTimeout(mobile, 3000);
		}); 
//alert(brand);
function mobile(){
//$('#prob_cat_name1').change(function(){
	
var prob_code=$('#prob_cat_name1').val();
var model=$('#model1').val();	
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
            $('#prob_cat_name_error1').html('Problem Category Name Already Exist!').show().css({'color':'#ff0000','font-size':'10px'}); 
			$('#prob_cat_name1').val('');
        }

		else 
		{
			$('#prob_cat_name_error1').hide(); 
			
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
font-weight: bold;
border-radius: 5px;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 body{background-color:#fff;}
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
    
    select {
      border: 1px solid #ccc !important;
    }
	input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
		border:1px solid #ccc;
		margin: 0 0 0px 0;
		height: 2.9rem;
	}
	.link{
		cursor:pointer;
		color:#fff;
		font-weight:bold;
	}
	.link:hover{
		cursor:pointer;
		color:#fff;
		font-weight:bold;
	}
 </style>

<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Add Problem Category</h2>

           <hr>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                   <form action="<?php echo base_url(); ?>problemcategory/add_prob_category" method="post">
                               


<table id="myTable">
	<thead>
		<tr>
			<th>Problem Code<span class="star" style="color:red">*</span></th>
			<th style="width:30%">Model<span class="star"style="color:red">*</span></th>
			<th>Problem Category Name<span class="star"style="color:red">*</span></th>
			
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<input type="text" name="prob_code[]" id="prob_code1" class="prob_cate" maxlength="50">
				<div id="prob_code_error1" style="color:red"></div>
				<div id="name_error1" style="color:red"></div>
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
				<input type="text" name="prob_cat_name[]" id="prob_cat_name1" class="prob_cate" maxlength="50">
				<div id="hname1" style="color:red;"></div>
				<div id="prob_cat_name_error1" style="color:red"></div>
			</td>
			
			<td>
				<textarea name="p_description[]" type="text" id="p_description1"  value="" /></textarea>
			</td>
			<input type="hidden" id="countid" value="1">
			<td>
				<a class="link" id="addMoreRows"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
			</td>
		</tr>
	</tbody>
 
</table>

<button class="btn cyan waves-effect waves-light registersubmit" type="submit" name="action" id="product" style="color:#fff;">Submit</button>

                        
                     
                  
                      </form>
					  </div>
 </div>

                  
                
                </div>
             
             <div class="col-md-1">
			  </div>
              </div>
			  </div>
            </div>

			
			
			
			
       
          
  </section>


  </div>
  

  </div>
  


      

   
<script>

$(document).on("change","#model", function(){
	
var category=$("#cate").val();

var model = $(this).find("option:selected").attr("value");

 $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>problemcategory/add_prob_category',
  data: {
   category:category,
   model:model,
  },
  success: function (data) {
	  
		  if(data == 0){
        
        $('#dpt_error1').fadeOut('slow');    
        
            
        }
        else{
			$('#dpt_error1').text('Brand Name Already Exist').show().delay(1000).fadeOut(); 
			$('#model').val('');
			return false;
             
            
        } 
	
  } 
  });


}); 
</script>



	   
</body>

</html>