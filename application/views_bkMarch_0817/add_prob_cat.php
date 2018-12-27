<?php //print_r($modellist); ?>

<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>  	  
	  <script type='text/javascript'>//<![CDATA[ 

/* $(function(){
	
	//alert("sda");
    
 	var tb2 = $("#myTable");
    var i=1;
    $("#addRowBtn1").click(function(){
		
		//alert("asdj");
		i++;
		$('<div class="col-md-12" style="padding:0px"><div class="col-md-3"><label style="width:180px;font-weight:bold;">Problem Category Name</label><input type="text" name="prob_cat_name[]" class="corporate"></div><div class="col-md-3"><label style="width:180px;font-weight:bold;">Model</label><select name="model1[]"><option value="">--Select--</option><?php foreach($modellist as $ml){ ?><option value="<?php echo $m1->id;?>"><?php echo "EK * 6100V + EK 03 (33)"; ?></option><?php } ?></select></div></div>').appendTo(tb2); */
		
		
		
   /*$('<div class="col-md-12" style="padding:0px"><div class="col-md-3"><label style="width:180px;font-weight:bold;">Model</label><select name="model[]" id="model"><option value="">---Select---</option><?php foreach($modellist as $modelkey){ ?><option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option><?php } ?></select></div><div class="col-md-3"><label style="width:180px;font-weight:bold;">Problem Category Name</label><input type="text" name="prob_cat_name[]" class="corporate"></div></div>').appendTo(tb2);*/
		 
	//}); 
	
//});
		
</script>

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

<style>
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

  <div class="col-md-12" style="padding:0px">
    <div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Problem Category Name</label>
        <input type="text" name="prob_cat_name[]" id="cate" class="prob_cate"><div id="hname" style="color:red;"></div>
	</div>
	<div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Model</label>
        <select name="model[]" id="model">
          <option value="">---Select---</option>
          <?php foreach($modellist as $modelkey){ ?>
          <option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
          <?php } ?>
        </select><div id="dpt_error1" style="color:red;"></div>
		
		<input type="hidden" id="countid" value="1">
    </div>
  </div>
    
 
  

</table>
<!--<a class="link" href='' onclick='$("<tr><td><input type=\"text\" name=\"prob_cat_name[]\" /></td><td><select name=\"model[]\" data-placeholder=\"Select Model...\" class=\"chosen-select\" tabindex=\"2\"><option value=\"\">---Select---</option><?php foreach($modellist as $modelkey){ ?><option value=\"<?php echo $modelkey->id; ?>\"><?php echo $modelkey->model; ?></option><?php } ?></select></td></tr>").appendTo($("#myTable")); return false;'>Add Category</a>
<button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit<i class="fa fa-arrow-right"></i></button>-->

<a class="link" id="addMoreRows">Add Category</a><button class="btn cyan waves-effect waves-light registersubmit" type="submit" name="action" id="product">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>

                        
                     
                  
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
  


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   
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

	<script>
	$(function(){
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#cate").val()==""){
				$("#hname").text("Enter Problem Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px'});
				event.preventDefault();
			}
			if($('#model').val()==""){
                $(this).parent().find('#dpt_error1').text("Select Model Name").css({'color':'#ff0000','position':'relative','bottom':'-5px'});
                event.preventDefault();
        	}
		});
		
		$("#cate").keyup(function(){
			if($(this).val()==""){
				$("#hname").show();
			}
			else{
				$("#hname").fadeOut('slow');
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

	   
</body>

</html>