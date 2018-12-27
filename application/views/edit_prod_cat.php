 <style>
.btn{text-transform:none !important;}
.tableadd tr td input {
    width: 237px;
    /* height: 22px !important; */
    /* border: 1px solid #B3B3B3; */
    border-radius: 2px;
    /* padding-left: 10px; */
    margin-left: 14px;
}
.tableadd tr td input {
    height: 22px !important;
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
</style>









<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script>


	$(document).ready(function(){
	
	$(document).on("keyup","#UserName1", function(){
var timer;	
 clearTimeout(timer);
        timer = setTimeout(mobile, 3000);
		}); 
//alert(brand);
function mobile(){	

	
var name=$('#UserName1').val();
 
//alert(name);
 if(name !=''){
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Productcategory/category_validation',
  data: {
   p_id:name,
  },
  success: function (data) { //alert(data);
  if(data == 0){
        
        $('#lname1').html('');    
        
            
        }
        else{
			$('#lname1').html('Category Name Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '11px'}); 
			$('#UserName1').val('');
			return false;
             
            
        }
  }
  });
}
}
});
</script>
<script>
	$(function(){
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($(".corporate").val()==""){
				$("#lname1").text("Enter the Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'11px'});
				event.preventDefault();
			}
		});
		
		$(".corporate").keyup(function(){
			if($(this).val()==""){
				$("#lname1").show();
			}
			else{
				$("#lname1").fadeOut('slow');
			}
		})
		
	});
</script>

 
      
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
	 border-radius:5px;
   
   /* margin-bottom: 25px !important;*/
}
.tableadd tr td input {
    width: 215px;
}
.tableadd
{
	margin-bottom:35px;
}
.tableadd tr td label {
	font-weight:bold;
}
.star{
	color:#ff0000;
	font-size:15px;
}
a:hover, a:active, a:focus {
    outline: none;
    text-decoration: none;
    color: #522276;
}
a {
    color: #522276;
}
 </style>


<section id="content">

     
        <div class="container">
          <div class="section">

            <h2>Edit Product Category</h2>
			
           <hr>
         
            <div id="basic-form" class="section">
				<div class="card-panel">
			
				<div class="row">
			  
					<div class="col-md-1"></div>
			  
					<div class="col-md-10">
						<form action="<?php echo base_url(); ?>Productcategory/edit_prod_category"" method="post">
								   


							<table id="myTable" class="tableadd">
							
							<div class="col-md-3 col-sm-6 col-xs-12">
							<label>Category Name <span class="star">*</span></label>
			<input type="text" name="cat_name" class="corporate" value="<?php foreach($list As $key){ echo $key->product_category; } ?>" maxlength="80" id="UserName1">
			<input type="hidden" name="cat_name1" class="corporate1" value="<?php foreach($list As $key){ echo $key->product_category; } ?>" maxlength="30">
			<input type="hidden" name="catid" class="corporate" value="<?php foreach($list As $key){ echo $key->id; }?>">
			<div id="lname1" ></div>

							</div>

							</table>

							<button class="btn cyan waves-effect waves-light registersubmit" type="submit" style="margin-left:15px;">Submit</button>


							<table class="tableadd">
								<tr>
									<td ></td>
									<td style="padding-top: 25px;"></td>
								</tr>
							</table>
						</form>
					</div>
                </div>
             
				<div class="col-md-1"></div>
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
  
  
</body>

</html>