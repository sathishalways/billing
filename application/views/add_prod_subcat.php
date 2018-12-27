	
   <!--<script type='text/javascript'>//<![CDATA[ 

$(function(){
    
	var tb2 = $("#myTable");
    var i=1;
    $("#addRowBtn1").click(function(){
		i++;
        $('<div class="col-md-12"><div class="col-md-3 col-sm-3 col-xs-12"><select id="pro_cat'+i+'" name="pro_cat[]"><option value="">---Select---</option><?php foreach($droplist as $dkey){ ?><option value="<?php echo $dkey->id; ?>"><?php echo $dkey->product_category; ?></option><?php } ?></select><div id="ghname'+i+'"></div></div><div class="col-md-3 col-sm-3 col-xs-12"><input type="text" name="sub_catname[]" class="model" id="sub_category-'+i+'" maxlength="50"><div id="kname'+i+'" style="color:red"></div></div><div class="col-md-1"><span><a class="delRowBtn btn btn-primary"><i class="fa fa-trash"></i></a></span></div></div>').appendTo(tb2); 

		/*$('.subcat').change(function(){
			var a=$(this).attr('id').split('-').pop();
			alert(a);
			var category=$(this).val()
			
			var category=$('#pro_cat1'+a).val();
			
			alert(category);
			
			var sub_category = $(this).val();
			
			var datastring='category='+category+'&sub_category='+sub_category;
			
			//alert(datastring);	
			
			  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>subcategory/subcategory_validation',
  data: datastring, 
            
  success: function(data) {
	  
	// alert(data);
  if(data == 0){
        
            $('#kname'+a).html(''); 
			
        }
         else{
			$('#kname'+a).text('Sub-Category Name Already Exist').show().delay(1000).fadeOut(); 
			$('#sub_category-'+a).val('');
             
            
        } 
  }
  });*/
			
		//});		
	
	
	
	 $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });
	
	
	$(".registersubmit").click(function(event){
                if($('#pro_cat'+i).val()==""){
                    $('#ghname'+i).text("Select Category Name").css({'color':'#ff0000','font-size':'12px'});
                }
        	
                if($('#sub_category-'+i).val()==""){
                    $('#kname'+i).text("Enter Sub-Category Name").css({'color':'#ff0000','font-size':'12px'});
            	}
            	
            });
			$('#sub_category-'+i).bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
		});
			
			
		
		$('#sub_category-'+i).keyup(function(){
			if($('#sub_category-1').val()==""){
				$('#kname'+i).show();
			}
			else{
				$('#kname'+i).fadeOut('slow');
			}
		});
		$('#pro_cat'+i).change(function(){
			if($('#pro_cat'+i).val()==""){
				$('#ghname'+i).show();
			}
			else{
				$('#ghname'+i).fadeOut('slow');
			}
		});

    });
		
});	
		</script>-->
		<script>
$(document).ready(function(){
$('#addRowBtn1').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
	//var modelid =$('#modelid').val();
	//alert(modelid);
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Subcategory/add_subcatrow",
data: datastring,
cache: false,
success: function(result)
{ //alert(result);
		$('#myTable').append(result);
} 
});

});
  
});
</script>
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
	 margin: 0 0 15px 0;
	     height: 30px;
    width:230px;
}
</style>	
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css">
          
<style>
 .link{
	border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;
	margin-left: 12px;
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
 .delRowBtn {
 	padding:0px 4px 4px 4px;
 	height: 30px;
	font-size: 19px !important;
 }

body{background-color:#fff;}
.star{
	color:#ff0000;
	font-size:15px;
}
.btn{text-transform:none !important;}
 </style>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h2>Add Sub-Category</h2>

            <hr>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>subcategory/add_sub_category" method="post">
                               


<table id="myTable" class="tableadd">
<!--<tr><td><label>Category Name</label></td><td><label>Sub-Category Name</label></td></tr>
<tr>
<td> 
	
	<select id="pro_cat1" name="pro_cat[]" class="cname">
           <option value="">---Select---</option>
		   <?php foreach($droplist as $dkey){ ?>
			<option value="<?php echo $dkey->id; ?>"><?php echo $dkey->product_category; ?></option>
		   <?php } ?>
          </select><div id="ghname1"></div>
		  </td>
		  
<td><input type="text" name="sub_catname[]" class="model" id="sub_category-1" onChange="validateForm();"><div class="fname" id="kname1" style="color:red"></div></td>
</tr>-->

<div class="col-md-12">
	<div class="col-md-4 col-sm-6 col-xs-12">
		<label>Category Name <span class="star">*</span></label>
		<select id="pro_cat1" name="pro_cat[]" class="cname">
		   <option value="">---Select---</option>
		   <?php foreach($droplist as $dkey){ ?>
			<option value="<?php echo $dkey->id; ?>"><?php echo $dkey->product_category; ?></option>
		   <?php } ?>
		</select>
		<div id="ghname1"></div>
	</div>

	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>Sub-Category Name <span class="star">*</span></label>
		<input type="text" name="sub_catname[]" class="model" id="sub_category-1" onChange="validateForm();" maxlength="50">
		<div id="kname1"></div>
		<input type="hidden" id="countid" value="1">
	</div>
	<a class="link" id="addRowBtn1" href='#'><i class="fa fa-plus-square" aria-hidden="true" style="color:#5f3282;margin-top:30px;"></i></a>
</div>
</table>

<button class="btn cyan waves-effect waves-light registersubmit" type="submit" name="action" id="product" style="margin-left:30px;">Submit</button>


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
  


       

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>-->
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
  
  <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
  
<script>
	$(document).ready(function() {
		//alert("validation jquery");
		$(".registersubmit").click(function(event) {
            if($('#pro_cat1').val()==""){
                $(this).parent().find('#ghname1').text("Select Category Name").css({'color':'#ff0000','font-size':'10px','position':'relative','bottom':'10px'});
                event.preventDefault();
            }
            if($('#sub_category-1').val()==""){
                $(this).parent().find('#kname1').text("Enter Sub-Category Name").css({'color':'#ff0000','font-size':'10px','position':'relative','bottom':'10px'});
                event.preventDefault();
        	}
        });
		
		$('#sub_category-1').bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
		});
		
		$('#sub_category-1').keyup(function(){
			if($('#sub_category-1').val()==""){
				$('#kname1').show();
			}
			else{
				$('#kname1').fadeOut('slow');
			}
		});
		$('#pro_cat1').change(function(){
			if($('#pro_cat1').val()==""){
				$('#ghname1').show();
			}
			else{
				$('#ghname1').fadeOut('slow');
			}
		});
	});
</script>
	
		<script>

function validateForm()
{
	//alert("dfg");
	//alert($(this').val());
var category=document.getElementById( "pro_cat1" ).value;

var sub_category=document.getElementById( "sub_category-1" ).value;

var datastring='category='+category+'&sub_category='+sub_category;

//alert(datastring);


  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>subcategory/subcategory_validation',
  data: datastring, 
            
  success: function(data) {
	  
	 // alert(data);
  if(data == 0){
        
        $('#kname1').html('');    
          
        }
        else{
			$('#kname1').html('Sub-Category Name Already Exist').show().css({'color':'#ff0000','font-size':'10px','position':'relative','bottom':'10px'}); 
			$('#sub_category-1').val('');
			return false;
         
        }
  }
  });

 
}; 
</script>

<!--<script>
	$(function(){
		$(".registersubmit").click(function(event){
			

			$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#pro_cat"+i).val()==""){
				$("#ghname"+i).text("Select Category Name").show().css({'color':'#ff0000','position':'relative','bottom-top':'30px'});
				event.preventDefault();
			}
			
			//alert($("#ghname"+i).val());
			
			if($("#sub_category-"+i).val()==""){
				$("#kname"+i).text("Enter Sub-Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px'});
				event.preventDefault();
			}
		});
		
		$("#pro_cat"+i).change(function(){
			if($(this).val()==""){
				$("#ghname"+i).show();
			}
			else{
				$("#ghname"+i).fadeOut('slow');
			}
		})
		
		$("#sub_category-"+i).keyup(function(){
			if($(this).val()==""){
				$("#kname"+i).show();
			}
			else{
				$("#kname"+i).fadeOut('slow');
			}
		})


			//alert("xcfg");
			if($(".model").val()==""){
				$(".fname").text("Enter Sub-Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px'});
				event.preventDefault();
				
				
			}
			//alert($(".model").val());
			
			 if($("#pro_cat1").val()==""){
				$("#ghname1").text("Select Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px'});
				event.preventDefault();
				
				
			} 
			//alert($("#pro_cat1").val());
		});
		
		$(".model").keyup(function(){
			if($(this).val()==""){
				$(".fname").show();
			}
			else{
				$(".fname").fadeOut('slow');
			}
			
			
		});
		
		$("#pro_cat1").change(function(){
			if($(this).val()==""){
				$("#ghname1").show();
			}
			else{
				$("#ghname1").fadeOut('slow');
			}
			
			
		}); 
	});
</script>-->


</body>

</html>